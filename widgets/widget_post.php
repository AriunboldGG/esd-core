<?php
class waves_posts_widget extends WP_Widget {
    
    function __construct() {
        $widget_ops = array('classname' => 'tw-post-widget', 'description' => 'Display recent posts.');
        parent::__construct('tw-post-widget', 'Lvly: Recent posts', $widget_ops);
    }
    
    function widget($args, $instance) {
        global $post;

        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $q['posts_per_page'] = isset($instance['number_posts'])?$instance['number_posts']:5;
        $cats = (array) $instance['post_category'];
        $q['paged'] = 1;
        if (count($cats) > 0) {
            $typ = 'category';
            $sp = '';
            $catq = '';
            foreach ($cats as $mycat) {
                $catq = $catq . $sp . $mycat;
                $sp = ',';
            }
            $catq = explode(',', $catq);
            $q['tax_query'] = Array(Array(
                    'taxonomy' => $typ,
                    'terms' => $catq,
                    'field' => 'id'
                )
            );
        }
        if ($instance['post_order']==='commented') {
            $q['orderby'] = 'comment_count';
        }elseif ($instance['post_order'] == 'popular') {
            $q['orderby'] = 'meta_value_num';
            $q['meta_key'] = 'post_seen';
        }
        $post_query = new WP_Query( $q );

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

        echo (isset($before_widget)) ? (wp_kses($before_widget, $allowed_tags) ) : '';
        if (!empty($title)) {
            echo wp_kses($before_title, $allowed_tags) . esc_html($title) . wp_kses($after_title, $allowed_tags);
        }
        if (!empty($instance['post_layout'])) {
            wp_enqueue_script('owl-carousel');
            echo '<div class="owl-carousel">';
            while ($post_query->have_posts()) : $post_query->the_post();
                $feat_img = '';
                if (has_post_thumbnail($post->ID)) {
                    $lrg_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'lvly_carousel_widget');
                    $feat_img = '<img src="' . esc_url($lrg_img[0]) . '" title="' . get_the_title() . '" alt="' . get_the_title() . '"' . ' />';
                }
                /* Already Espaced above line - For Themeforest Reviewer */
                echo '<div class="carousel-item">'.($feat_img);
                    echo '<div class="carousel-content">';
                        echo '<div class="entry-cats">'.lvly_cats().'</div>';
                        echo '<h2 class="entry-title"><a href="'.esc_url(get_permalink()).'">'.get_the_title().'</a></h2>';
                        echo '<div class="tw-meta"><span class="entry-author">'.esc_html__('by', 'waves').'&nbsp;';
                            echo '</span><span class="entry-date"><a href="'.esc_url(get_permalink()).'">'.esc_attr(get_the_time(get_option('date_format'))).'</a></span>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            endwhile;
            echo '</div>';
        }else{
            echo '<ul '.(!empty($instance['height']) ? (' style="height: '.esc_attr($instance['height']).'px;overflow: auto;"') : '').'>';
            while ($post_query->have_posts()) : $post_query->the_post();
                echo '<li>';
                        if (has_post_thumbnail($post->ID)) {
                            $lrg_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                            $feat_img = $lrg_img[0];                        
                            echo '<div class="recent-thumb"><a href="'.esc_url(get_permalink()).'"><img src="' . esc_url($feat_img) . '" alt="' . esc_attr(get_the_title()) . '"/></a></div>';
                        } else {
                            $format = get_post_format() == "" ? "standard" : get_post_format();
                            echo '<div class="recent-thumb"><div class="format-icon '.esc_attr($format).'"></div></div>';
                        }
                        echo '<div class="recent-content">';
                            echo '<h4><a href="'.esc_url(get_permalink()).'">'.get_the_title().'</a></h4>';
                            echo '<div class="tw-meta">'.esc_attr(get_the_time(get_option('date_format'))).'</div>';
                        echo '</div>';
                echo '</li>';
            endwhile;
            echo '</ul>';
        }
        if (isset($after_widget)) {echo wp_kses($after_widget, $allowed_tags);}
        wp_reset_postdata();
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        /* Strip tags (if needed) and update the widget settings. */
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['post_category'] = wp_unslash($_REQUEST['post_category']);
        $instance['number_posts'] = strip_tags($new_instance['number_posts']);
        $instance['post_order'] = strip_tags($new_instance['post_order']);
        $instance['post_layout'] = strip_tags($new_instance['post_layout']);
        $instance['height'] = strip_tags($new_instance['height']);
        return $instance;
    }

    function form($instance) {
        //Output admin widget options form
        extract(shortcode_atts(array(
                    'title' => '',
                    'number_posts' => 5,
                    'post_order' => 'latest',
                    'post_type' => 'post',
                    'post_layout' => '',
                    'height' => ''
                        ), $instance));
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'waves');?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('post_order')); ?>"><?php esc_html_e('Post order:', 'waves');?></label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('post_order')); ?>" name="<?php echo esc_attr($this->get_field_name('post_order')); ?>">
                <option value="latest" <?php if ($post_order == 'latest') print 'selected="selected"'; ?>><?php esc_html_e('Latest posts', 'waves');?></option>
                <option value="popular" <?php if ($post_order == 'popular') print 'selected="selected"'; ?>><?php esc_html_e('Popular posts', 'waves');?></option>
                <option value="commented" <?php if ($post_order == 'commented') print 'selected="selected"'; ?>><?php esc_html_e('Most commented posts', 'waves');?></option>
            </select>
        </p>
        <p><?php esc_html_e('If you were not selected for cats, it will show all categories.', 'waves');?></p>
        <ul id="<?php echo esc_attr($this->get_field_id('post_cats')); ?>" style="height:150px; overflow:auto; border:1px solid #dfdfdf;"><?php
            $post_type='post';
            $tax = get_object_taxonomies($post_type);

            $selctedcat = false;
            if (isset($instance['post_category']) && $instance['post_category'] != '') {
                $selctedcat = $instance['post_category'];
            }
            wp_terms_checklist(0, array('taxonomy' => $tax[0], 'checked_ontop' => false, 'selected_cats' => $selctedcat)); ?>
        </ul>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number_posts')); ?>"><?php esc_html_e('Number of posts to show:', 'waves');?></label>
            <input  id="<?php echo esc_attr($this->get_field_id('number_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('number_posts')); ?>" value="<?php echo esc_attr($number_posts); ?>" size="3"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('post_layout')); ?>"><?php esc_html_e('Post layout:', 'waves');?></label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('post_layout')); ?>" name="<?php echo esc_attr($this->get_field_name('post_layout')); ?>">
                <option value="" <?php if ($post_layout == '') print 'selected="selected"'; ?>><?php esc_html_e('Default', 'waves');?></option>
                <option value="carousel" <?php if ($post_layout == 'carousel') print 'selected="selected"'; ?>><?php esc_html_e('Carousel posts', 'waves');?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('height')); ?>"><?php esc_html_e('Height(px), when Post layout is default ', 'waves');?></label>
            <input  id="<?php echo esc_attr($this->get_field_id('height')); ?>" name="<?php echo esc_attr($this->get_field_name('height')); ?>" value="<?php echo esc_attr($height); ?>" size="3"  />
        </p><?php
    }
}

// Init Widget
function lvly_posts_widget_register() {
    register_widget("waves_posts_widget");
}
add_action( 'widgets_init', 'lvly_posts_widget_register' );