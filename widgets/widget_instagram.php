<?php
class waves_instagram_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
                'null-instagram-feed', esc_html__('Lvly: Instagram', 'waves'), array('classname' => 'null-instagram-feed', 'description' => esc_html__('Displays your latest Instagram photos', 'waves'))
        );
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
        $username = empty($instance['username']) ? '' : $instance['username'];
        $limit = empty($instance['number']) ? 6 : $instance['number'];
        $size = empty($instance['size']) ? 'large' : $instance['size'];
        $target = empty($instance['target']) ? '_blank' : $instance['target'];
        $layout = empty($instance['layout']) ? 'simple' : $instance['layout'];
        $auto_play = empty($instance['auto_play']) ? 'false' : intval($instance['auto_play']);

        /* Doing the Validate */
        $allowed_tags = array(
            'aside' => array(
                    'id' => array(),
                    'class' => array()
            ),
            'div' => array(
                    'id' => array(),
                    'class' => array()
            ),
            'h3' => array(
                'class' => array()
            ),
            'span' => array(
                'class' => array()
            )
        );

        echo (isset($before_widget)) ? (wp_kses($before_widget, $allowed_tags)) : '';
        if (!empty($title)) {
            echo wp_kses($before_title, $allowed_tags) . esc_html($title) . wp_kses($after_title, $allowed_tags);
        }
        if ($username!=='') {
            $media_array = $this->scrape_instagram($username, $limit);
            if (is_wp_error($media_array)) {
                echo balanceTags($media_array->get_error_message());
            }else{
                $ulclass = 'instagram-pics instagram-size-' . $size;
                if ($layout==='carousel') {
                    $ulclass.=' owl-carousel';
                    wp_enqueue_script('owl-carousel');
                } ?>
                <ul class="<?php echo esc_attr($ulclass); ?>" data-auto-play="<?php echo esc_attr($auto_play); ?>"><?php
                    foreach($media_array as $item) {
                        echo '<li><a href="' . esc_url($item['link']) . '" target="' . esc_attr($target) . '" title=""><img src="' . esc_url($item[$size]) . '"  alt="' . esc_attr($item['description']) . '" title="' . esc_attr($item['description']) . '"/></a></li>';
                    } ?>
                </ul><?php
            }
        }
        echo (isset($after_widget)) ? (wp_kses($after_widget, $allowed_tags)) : '';
    }

    function form($instance) {
        $instance = wp_parse_args((array) $instance, array('title' => esc_html__('Instagram', 'waves'), 'username' => '', 'size' => 'large', 'number' => 9, 'target' => '_blank', 'layout' => 'simple'));
        $title = esc_attr($instance['title']);
        $username = esc_attr($instance['username']);
        $number = absint($instance['number']);
        $size = esc_attr($instance['size']);
        $target = esc_attr($instance['target']);
        $layout = esc_attr($instance['layout']); ?>
        <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'waves'); ?>: <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <p><label for="<?php echo esc_attr($this->get_field_id('username')); ?>"><?php esc_html_e('Username', 'waves'); ?>: <input class="widefat" id="<?php echo esc_attr($this->get_field_id('username')); ?>" name="<?php echo esc_attr($this->get_field_name('username')); ?>" type="text" value="<?php echo esc_attr($username); ?>" /></label></p>
        <p><label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of photos', 'waves'); ?>: <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" /></label></p>
        <p><label for="<?php echo esc_attr($this->get_field_id('size')); ?>"><?php esc_html_e('Photo size', 'waves'); ?>:</label>
            <select id="<?php echo esc_attr($this->get_field_id('size')); ?>" name="<?php echo esc_attr($this->get_field_name('size')); ?>" class="widefat">
                <option value="thumbnail" <?php selected('thumbnail', $size) ?>><?php esc_html_e('Thumbnail', 'waves'); ?></option>
                <option value="small" <?php selected('small', $size) ?>><?php esc_html_e('Small', 'waves'); ?></option>
                <option value="large" <?php selected('large', $size) ?>><?php esc_html_e('Large', 'waves'); ?></option>
                <option value="original" <?php selected('original', $size) ?>><?php esc_html_e('Original', 'waves'); ?></option>
            </select>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('target')); ?>"><?php esc_html_e('Open links in', 'waves'); ?>:</label>
            <select id="<?php echo esc_attr($this->get_field_id('target')); ?>" name="<?php echo esc_attr($this->get_field_name('target')); ?>" class="widefat">
                <option value="_blank" <?php selected('_blank', $target) ?>><?php esc_html_e('New window (_blank)', 'waves'); ?></option>
                <option value="_self" <?php selected('_self', $target) ?>><?php esc_html_e('Current window (_self)', 'waves'); ?></option>
            </select>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('layout')); ?>"><?php esc_html_e('Layout', 'waves'); ?>:</label>
            <select id="<?php echo esc_attr($this->get_field_id('layout')); ?>" name="<?php echo esc_attr($this->get_field_name('layout')); ?>" class="widefat">
                <option value="simple" <?php selected('simple', $layout) ?>><?php esc_html_e('Simple', 'waves'); ?></option>
                <option value="carousel" <?php selected('carousel', $layout) ?>><?php esc_html_e('Carousel', 'waves'); ?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('auto_play')); ?>"><?php esc_html_e('Carousel Auto Play:','waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('auto_play')); ?>" name="<?php echo esc_attr($this->get_field_name('auto_play')); ?>" value="<?php echo esc_attr(isset($instance['auto_play']) ? $instance['auto_play'] : 0); ?>" type="number" min="0" step="100" />
        </p>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['username'] = trim(strip_tags($new_instance['username']));
        $instance['number'] = !absint($new_instance['number']) ? 9 : $new_instance['number'];
        $instance['auto_play'] = empty($new_instance['auto_play']) ? 0 : $new_instance['auto_play'];
        $instance['size'] = ( ( $new_instance['size'] == 'thumbnail' || $new_instance['size'] == 'large' || $new_instance['size'] == 'small' || $new_instance['size'] == 'original' ) ? $new_instance['size'] : 'large' );
        $instance['target'] = ( ( $new_instance['target'] == '_self' || $new_instance['target'] == '_blank' ) ? $new_instance['target'] : '_blank' );
        $instance['layout'] = ( ( $new_instance['layout'] == 'simple'|| $new_instance['layout'] == 'carousel' ) ? $new_instance['layout'] : 'simple' );

        return $instance;
    }

    // based on https://gist.github.com/cosmocatalano/4544576
    function scrape_instagram($username, $slice = 9) {

        $username = strtolower($username);
        $username = str_replace('@', '', $username);

        if (false === ( $instagram = get_transient('instagram-media-5-' . sanitize_title_with_dashes($username)) )) {
            $remote = wp_remote_get('http://instagram.com/' . trim($username));
            if (is_wp_error($remote)) {
                return new WP_Error('site_down', esc_html__('Unable to communicate with Instagram.', 'waves'));
            }
            if (200 != wp_remote_retrieve_response_code($remote)) {
                return new WP_Error('invalid_response', esc_html__('Instagram did not return a 200.', 'waves'));
            }
            $shards = explode('window._sharedData = ', $remote['body']);
            $insta_json = explode(';</script>', $shards[1]);
            $insta_array = json_decode($insta_json[0], TRUE);
            if (!$insta_array) {
                return new WP_Error('bad_json', esc_html__('Instagram has returned invalid data.', 'waves'));
            }
            if (isset($insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'])) {
                $images = $insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'];
            } else {
                return new WP_Error('bad_json_2', esc_html__('Instagram has returned invalid data.', 'waves'));
            }
            if (!is_array($images)) {
                return new WP_Error('bad_array', esc_html__('Instagram has returned invalid data.', 'waves'));
            }
            $instagram = array();
            foreach ($images as $image) {
                $image=$image['node'];
                $image['small']=$image['thumbnail']=$image['large']=$image['thumbnail_src'] = preg_replace("/^https:/i", "", $image['thumbnail_src']);
                $image['display_src'] = preg_replace("/^https:/i", "", $image['display_url']);
                if (isset($image['thumbnail_resources'])) {
                    foreach($image['thumbnail_resources'] as $th_res) {
                        /* sizes 150,240,320,480,640 */
                        switch (intval($th_res['config_width'])) {
                            case 150: $image['thumbnail']=$th_res['src'];break;
                            case 320: $image['small']    =$th_res['src'];break;
                        }
                    }
                }

                if ($image['is_video']) {
                    $type = 'video';
                } else {
                    $type = 'image';
                }

                $caption = esc_html__('Instagram Image', 'waves');
                if (!empty($image['caption'])) {
                    $caption = $image['caption'];
                }

                $instagram[] = array(
                    'description' => $caption,
                    'link' => '//instagram.com/p/' . $image['shortcode'],
                    'time' => $image['taken_at_timestamp'],
                    'comments' => $image['edge_media_to_comment']['count'],
                    'likes' => $image['edge_media_preview_like']['count'],
                    'thumbnail' => $image['thumbnail'],
                    'small' => $image['small'],
                    'large' => $image['large'],
                    'original' => $image['display_src'],
                    'type' => $type
                );
            }

            // do not set an empty transient - should help catch private or empty accounts
            if (!empty($instagram)) {
                $instagram = serialize($instagram);
                set_transient('instagram-media-5-' . sanitize_title_with_dashes($username), $instagram, apply_filters('waves_instagram_cache_time', HOUR_IN_SECONDS * 2));
            }
        }

        if ( ! empty( $instagram ) ) {
            $instagram = unserialize( $instagram );
            return array_slice( $instagram, 0, $slice );
        } else {
            return new WP_Error( 'no_images', esc_html__( 'Instagram did not return any images.', 'waves' ) );
        }
    }
    function images_only( $media_item ) {
        if ( $media_item['type'] == 'image' ) {
            return true;
        }
        return false;
    }
}

// Init Widget
function lvly_instagram_widget_register() {
    register_widget("waves_instagram_widget");
}
add_action( 'widgets_init', 'lvly_instagram_widget_register' );