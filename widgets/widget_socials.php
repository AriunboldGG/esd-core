<?php
/* ------Widget Social ------ */
class waves_Socialswidget extends WP_Widget {

    public function __construct() {
        $widget_ops = array('classname' => 'sociallinkswidget', 'description' => esc_html__('Displays your social profile.', 'waves'));
        parent::__construct('sociallinkswidget', 'Lvly: Socials', $widget_ops);
    }

    public function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        
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

        if (isset($before_widget)) {echo wp_kses($before_widget, $allowed_tags);}
        if (!empty($title)) {
            echo wp_kses($before_title, $allowed_tags) . esc_html($title) . wp_kses($after_title, $allowed_tags);
        }
            $class = '';
            if (!empty($instance['color'])) {
                $class .= ' '.$instance['color'];
            }
            if (!empty($instance['layout'])) {
                $class .= ' '.$instance['layout'];
            }
            if (!empty($instance['hover'])) {
                $class .= ' '.$instance['hover'];
            }
            echo '<div class="tw-socials'.esc_attr($class).'">';
                if (!empty($instance['social'])) {
                    $social_links = explode("\n",$instance['social']);
                    foreach($social_links as $social_link) {
                        if (!empty($social_link)) {
                            $socl = lvly_social_icon(esc_url($social_link));
                            echo '<a title="'.esc_attr($socl['name']).'" href="'.esc_url($social_link).'" class="'.esc_attr($socl['name']).'"><i class="'.esc_attr($socl['class']).'"></i></a>';
                        }
                    }
                }
            echo '</div>';
        if (isset($after_widget)) {echo wp_kses($after_widget, $allowed_tags);}
    }

    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance = $new_instance;
        /* Strip tags (if needed) and update the widget settings. */
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['color'] = strip_tags($new_instance['color']);
        $instance['layout'] = strip_tags($new_instance['layout']);
        $instance['hover'] = strip_tags($new_instance['hover']);
        return $instance;
    }

    public function form($instance) {
        extract(shortcode_atts(array(
            'title' => '',
            'color' => '',
            'layout' => 'social-simple',
            'hover' => ''
                ), $instance));
        ?>
    
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'waves'); ?>:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo isset($instance['title']) ? $instance['title'] : ''; ?>"  />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('color')); ?>"><?php esc_html_e('Select Color', 'waves'); ?>:</label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('color')); ?>" name="<?php echo esc_attr($this->get_field_name('color')); ?>">
                <option value=""<?php if (empty($instance['color'])) {echo ' selected="selected"';} ?>><?php esc_html_e('Gray', 'waves'); ?></option>
                <option value="social-dark"<?php if (!empty($instance['color'])&&$instance['color']==='social-dark') {echo ' selected="selected"';} ?>><?php esc_html_e('Dark', 'waves'); ?></option>
                <option value="social-light"<?php if (!empty($instance['color'])&&$instance['color']==='social-light') {echo ' selected="selected"';} ?>><?php esc_html_e('Light', 'waves'); ?></option>
                <option value="social-color"<?php if (!empty($instance['color'])&&$instance['color']==='social-color') {echo ' selected="selected"';} ?>><?php esc_html_e('Color', 'waves'); ?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('layout')); ?>"><?php esc_html_e('Select Layout', 'waves'); ?>:</label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('layout')); ?>" name="<?php echo esc_attr($this->get_field_name('layout')); ?>">
                <option value="social-simple"<?php if (!empty($instance['layout'])&&$instance['layout']==='social-simple') {echo ' selected="selected"';} ?>><?php esc_html_e('Simple', 'waves'); ?></option>
                <option value="social-circle"<?php if (!empty($instance['layout'])&&$instance['layout']==='social-circle') {echo ' selected="selected"';} ?>><?php esc_html_e('Circle', 'waves'); ?></option>
                <option value="social-square"<?php if (!empty($instance['layout'])&&$instance['layout']==='social-square') {echo ' selected="selected"';} ?>><?php esc_html_e('Square', 'waves'); ?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('hover')); ?>"><?php esc_html_e('Select Hover', 'waves'); ?>:</label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('hover')); ?>" name="<?php echo esc_attr($this->get_field_name('hover')); ?>">
                <option value="simple"<?php if (empty($instance['hover'])) {echo ' selected="selected"';} ?>><?php esc_html_e('No Hover', 'waves'); ?></option>
                <option value="social-hover-gray"<?php if (!empty($instance['hover'])&&$instance['hover']==='social-hover-gray') {echo ' selected="selected"';} ?>><?php esc_html_e('Gray Hover', 'waves'); ?></option>
                <option value="social-hover-light"<?php if (!empty($instance['hover'])&&$instance['hover']==='social-hover-light') {echo ' selected="selected"';} ?>><?php esc_html_e('Light Hover', 'waves'); ?></option>
                <option value="social-hover-dark"<?php if (!empty($instance['hover'])&&$instance['hover']==='social-hover-dark') {echo ' selected="selected"';} ?>><?php esc_html_e('Dark Hover', 'waves'); ?></option>
                <option value="social-hover-color"<?php if (!empty($instance['hover'])&&$instance['hover']==='social-hover-color') {echo ' selected="selected"';} ?>><?php esc_html_e('Color Hover', 'waves'); ?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('social')); ?>"><?php esc_html_e('Enter social links. Example: facebook.com/themewaves. NOTE: Divide value sets with linebreak "Enter"', 'waves'); ?>:</label>
            <textarea class="widefat" rows="20" id="<?php echo esc_attr($this->get_field_id('social')); ?>" name="<?php echo esc_attr($this->get_field_name('social')); ?>"><?php echo isset($instance['social']) ? $instance['social'] : ''; ?></textarea>
        </p><?php
    }
}

// Init Widget
function lvly_socials_widget_register() {
    register_widget("waves_Socialswidget");
}
add_action( 'widgets_init', 'lvly_socials_widget_register' );