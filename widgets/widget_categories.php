<?php
class waves_categories_widget extends WP_Widget {
    
    function __construct() {
        $widget_ops = array('classname' => 'tw-categories-widget', 'description' => 'display categories.');
        parent::__construct('tw-categories-widget', 'Lvly: Categories', $widget_ops);
    }
    
    function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        
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

        echo isset( $before_widget ) ? wp_kses( $before_widget, $allowed_tags ) : '';
        if ( ! empty( $title ) ) {
            echo wp_kses( $before_title, $allowed_tags ) . esc_html( $title ) . wp_kses( $after_title, $allowed_tags );
        }

        $categories_ids = get_terms(
            'category',
            array(
                'fields' => 'ids',
                'hide_empty' => '0'
            )
        );

        $exclude = array_diff( $categories_ids, $instance['post_category'] );
        echo '<ul>';
            wp_list_categories( array( 'hide_empty' => false, 'exclude' => $exclude, 'hierarchical' => $instance['hierarchical'], 'show_count' => $instance['count'], 'title_li' => '' ) );
        echo '</ul>';
        if ( isset( $after_widget ) ) {
            echo wp_kses( $after_widget, $allowed_tags );
        }
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        /* Strip tags (if needed) and update the widget settings. */
        $instance['title']          = sanitize_text_field( $new_instance['title'] );
        $instance['count']          = strip_tags( $new_instance['count'] );
        $instance['hierarchical']   = strip_tags( $new_instance['hierarchical'] );
        $instance['post_category']  = wp_unslash( $_REQUEST['post_category'] );
        return $instance;
    }

    function form($instance) {
        //Output admin widget options form
        extract(shortcode_atts(array(
            'title' => 'Categories',
            'count' => ''
        ), $instance));
        $count = isset($instance['count']) ? (bool) $instance['count'] :false;
        $hierarchical = isset( $instance['hierarchical'] ) ? (bool) $instance['hierarchical'] : false;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'waves');?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>"  />
        </p>
        <p><?php esc_html_e('If you were not selected for cats, it will show all categories.', 'waves');?></p>
        <ul id="<?php echo esc_attr($this->get_field_id('post_cats')); ?>" style="height:150px; overflow:auto; border:1px solid #dfdfdf;"><?php
            $post_type='post';
            $tax = get_object_taxonomies($post_type);

            $selctedcat = false;
            if (isset($instance['post_category']) && $instance['post_category'] != '') {
                $selctedcat = $instance['post_category'];
            }
            wp_terms_checklist( 0, array( 'taxonomy' => $tax[0], 'checked_ontop' => false, 'selected_cats' => $selctedcat ) ); ?>
        </ul>
        <p>
            <input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id('count') ); ?>" name="<?php echo esc_attr( $this->get_field_name('count') ); ?>"<?php checked( $count ); ?> />
            <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php esc_html_e( 'Show post counts', 'waves' ); ?></label>
        </p>
        <p>
            <input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id('hierarchical') ); ?>" name="<?php echo esc_attr( $this->get_field_name('hierarchical') ); ?>"<?php checked( $hierarchical ); ?> />
            <label for="<?php echo $this->get_field_id('hierarchical'); ?>"><?php esc_html_e( 'Show hierarchy', 'waves' ); ?></label>
        </p>
        <?php
    }
}
// Init Widget
function lvly_categories_widget_register() {
    register_widget("waves_categories_widget");
}
add_action( 'widgets_init', 'lvly_categories_widget_register' );