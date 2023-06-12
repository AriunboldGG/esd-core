<?php
class waves_twitter_widget extends WP_Widget {
    var $transient = 'lvly-tweets-';
    var $url = 'https://twitter.com/';
    function __construct() {
        parent :: __construct( 'tw-twitter-feed', esc_html__( 'Lvly: Twitter', 'waves' ), array( 'classname' => 'tw-twitter-feed', 'description' => esc_html__( 'Displays your latest Twitter photos', 'waves' ) ) );
    }

    function scrape_twitter( $username, $limit ) {
        if ( false === ( $tweets = get_transient( $this->transient . $username ) ) ) {
            $remote = wp_remote_get( $this->url . $username );

            if ( is_wp_error( $remote ) ) {
                return new WP_Error( 'site_down', esc_html__( 'Unable to communicate with Twitter.', 'waves' ) );
            }
            if ( 200 != wp_remote_retrieve_response_code( $remote ) ) {
                return new WP_Error( 'invalid_response', esc_html__( 'Twitter did not return a 200.', 'waves' ) );
            }

            libxml_use_internal_errors( true );
            $dom = new DOMDocument();
            $dom->loadHTML( $remote['body'] );
            $xpath = new DOMXPath( $dom );
            libxml_clear_errors();

            $nodes = $xpath->query( '//*[@id="stream-items-id"]/li' );
            
            $tweets = array();
            foreach ( $nodes as $node ) {
                $tweetTextNode = $xpath->query( './/*[@class="js-tweet-text-container"]/p', $node )->item( 0 );
                $tweetLinkNode = $xpath->query( './/*[@class="time"]/a', $node )->item( 0 );
                $tweetTimeNode = $xpath->query( './/*[@class="time"]/a/span', $node )->item( 0 );

                $tweetHTML = trim( $tweetTextNode->ownerDocument->saveHTML( $tweetTextNode ) );
                $tweetLink = trim( $tweetLinkNode->getAttribute( 'href' ) );
                $tweetTime = $tweetTimeNode->getAttribute( 'data-time' );

                $tweets[] = array(
                    'content' => $tweetHTML,
                    'link'    => $tweetLink,
                    'time'    => $tweetTime,
                );

                if ( --$limit < 1 ) {
                    break;
                }
            }
            if ( ! empty( $tweets ) ) {
                set_transient( $this->transient . $username, $tweets, HOUR_IN_SECONDS * 2 );
            }
        }
        return empty( $tweets )? (new WP_Error( 'no_response', esc_html__( 'Twitter did not return any response.', 'waves' ) ) ) : $tweets;
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
        $username = empty($instance['username']) ? '' : $instance['username'];
        $limit = empty($instance['number']) ? 6 : $instance['number'];
        
        echo (isset($before_widget)) ? (wp_kses_post($before_widget)) : '';
        if (!empty($title)) {
            echo wp_kses_post($before_title) . esc_html($title) . wp_kses_post($after_title);
        }
        if ( $username !== '' ) {
            $tweets = $this->scrape_twitter($username, $limit);
            if ( is_wp_error( $tweets ) ) {
                echo wp_kses_post( $tweets->get_error_message() );
            } elseif ( is_array( $tweets ) ) {
                echo '<div class="tw-twitter-fetch">';
                    echo '<ul>';
                        foreach( $tweets as $tweet ) {
                            echo '<li>';
                                echo wp_kses_post( $tweet['content'] );
                                echo '<p class="tweet-posted">';
                                    echo '<a href="' . esc_url( $this->url . ltrim( $tweet['link'], '/' ) ) . '">';
                                        echo human_time_diff( $tweet['time'] ) . esc_html__( ' ago', 'waves' );
                                    echo '</a>';
                                echo '</p>';
                            echo '</li>';
                        }
                    echo '</ul>';
                echo '</div>';
            }
        }
        echo (isset($after_widget)) ? (wp_kses_post($after_widget)) : '';
    }

    function form($instance) {
        $instance = wp_parse_args((array) $instance, array('title' => esc_html__('Twitter', 'waves'), 'username' => '', 'number' => 3));
        $title = esc_attr($instance['title']);
        $username = esc_attr($instance['username']);
        $number = absint($instance['number']); ?>
        <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'waves'); ?>: <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <p><label for="<?php echo esc_attr($this->get_field_id('username')); ?>"><?php esc_html_e('Username', 'waves'); ?>: <input class="widefat" id="<?php echo esc_attr($this->get_field_id('username')); ?>" name="<?php echo esc_attr($this->get_field_name('username')); ?>" type="text" value="<?php echo esc_attr($username); ?>" /></label></p>
        <p><label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of tweets', 'waves'); ?>: <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" /></label></p><?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['username'] = trim( strtolower(strip_tags( $new_instance['username'] ) ) );
        $instance['number'] = ! absint( $new_instance['number'] ) ? 3 : $new_instance['number'];
        if ( ! empty( $instance['username'] ) ) {
            delete_transient( $this->transient . $instance['username'] );
        }
        return $instance;
    }
}

// Init Widget
function lvly_twitter_widget_register() {
    register_widget("waves_twitter_widget");
}
add_action( 'widgets_init', 'lvly_twitter_widget_register' );