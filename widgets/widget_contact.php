<?php
class waves_contactinfo_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
                'tw-contact-widget', esc_html__('Lvly: Contact info', 'waves'), array('classname' => 'tw-contact-widget', 'description' => esc_html__('Displays your contact us info', 'waves'))
        );
    }

    function widget($args, $instance) {
        extract($args);
        $contact_title = apply_filters('widget_contact_title', empty($instance['contact_title']) ? '' : $instance['contact_title'], $instance);
        $contact_address = apply_filters('widget_contact_address', empty($instance['contact_address']) ? '' : $instance['contact_address'], $instance);
        $contact_phone = apply_filters('widget_contact_phone', empty($instance['contact_phone']) ? '' : $instance['contact_phone'], $instance);
        $contact_email = apply_filters('widget_contact_email', empty($instance['contact_email']) ? '' : $instance['contact_email'], $instance);
        $contact_email_url = apply_filters('widget_contact_email_url', empty($instance['contact_email_url']) ? '' : $instance['contact_email_url'], $instance);
        $contact_web = apply_filters('widget_contact_web', empty($instance['contact_web']) ? '' : $instance['contact_web'], $instance);
        $contact_web_url = apply_filters('widget_contact_web_url', empty($instance['contact_web_url']) ? '' : $instance['contact_web_url'], $instance);
        $contact_facebook = apply_filters('widget_contact_facebook', empty($instance['contact_facebook']) ? '' : $instance['contact_facebook'], $instance);
        $contact_facebook_url = apply_filters('widget_contact_facebook_url', empty($instance['contact_facebook_url']) ? '' : $instance['contact_facebook_url'], $instance);
        $class = apply_filters('widget_class', empty($instance['class']) ? '' : $instance['class'], $instance);

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

        if (!empty($contact_title)) {
            echo wp_kses($before_title, $allowed_tags) . esc_html($contact_title) . wp_kses($after_title, $allowed_tags);
        }
        echo '<ul>';
            if (!empty($contact_address)) {
                echo '<li><i class="ion-ios-location"></i><div>'.esc_html($contact_address).'</div></li>';
            }
            if (!empty($contact_phone)) {
                echo '<li><i class="ion-android-call"></i><div>'.esc_html($contact_phone).'</div></li>';
            }
            if (!empty($contact_email)) {
                echo '<li><i class="ion-android-mail"></i><a target="_blank" href="'.  esc_url($contact_email_url).'">'.esc_html($contact_email).'</a></li>';
            }
            if (!empty($contact_web)) {
                echo '<li><i class="ion-ios-world-outline"></i><a target="_blank" href="'.  esc_url($contact_web_url).'">'.esc_html($contact_web).'</a></li>';
            }
            if (!empty($contact_facebook)) {
                echo '<li><i class="fa fa-facebook"></i><a target="_blank" href="'.  esc_url($contact_facebook_url).'">'.esc_html($contact_facebook).'</a></li>';
            }
        echo '</ul>';
        echo wp_kses($after_widget, $allowed_tags);
    }

    function form($instance) {
        $instance = wp_parse_args((array) $instance, array('contact_title' => ''));
        $contact_title = isset($instance['contact_title']) ? strip_tags($instance['contact_title']) : '';
        $contact_address = isset($instance['contact_address']) ? strip_tags($instance['contact_address']) : '';
        $contact_phone = isset($instance['contact_phone']) ? strip_tags($instance['contact_phone']) : '';
        $contact_email_url = isset($instance['contact_email_url']) ? strip_tags($instance['contact_email_url']) : '';
        $contact_email = isset($instance['contact_email']) ? strip_tags($instance['contact_email']) : '';
        $contact_web_url = isset($instance['contact_web_url']) ? strip_tags($instance['contact_web_url']) : '';
        $contact_web = isset($instance['contact_web']) ? strip_tags($instance['contact_web']) : '';
        $contact_facebook_url = isset($instance['contact_facebook_url']) ? strip_tags($instance['contact_facebook_url']) : '';
        $contact_facebook = isset($instance['contact_facebook']) ? strip_tags($instance['contact_facebook']) : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_title')); ?>"><?php esc_html_e('Title:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_title')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_title')); ?>" type="text" value="<?php echo esc_attr($contact_title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_address')); ?>"><?php esc_html_e('Address:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_address')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_address')); ?>" type="text" value="<?php echo esc_attr($contact_address); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_phone')); ?>"><?php esc_html_e('Phone number:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_phone')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_phone')); ?>" type="text" value="<?php echo esc_attr($contact_phone); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_email')); ?>"><?php esc_html_e('Email:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_email')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_email')); ?>" type="text" value="<?php echo esc_attr($contact_email); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_email_url')); ?>"><?php esc_html_e('Email link url:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_email_url')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_email_url')); ?>" type="text" value="<?php echo esc_attr($contact_email_url); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_web')); ?>"><?php esc_html_e('Web:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_web')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_web')); ?>" type="text" value="<?php echo esc_attr($contact_web); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_web_url')); ?>"><?php esc_html_e('Web link url:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_web_url')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_web_url')); ?>" type="text" value="<?php echo esc_attr($contact_web_url); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_facebook')); ?>"><?php esc_html_e('Facebook:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_facebook')); ?>" type="text" value="<?php echo esc_attr($contact_facebook); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('contact_facebook_url')); ?>"><?php esc_html_e('Facebook link url:', 'waves'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_facebook_url')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_facebook_url')); ?>" type="text" value="<?php echo esc_attr($contact_facebook_url); ?>" />
        </p>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        /* Strip tags (if needed) and update the widget settings. */
        $instance['contact_title'] = sanitize_text_field($new_instance['contact_title']);
        $instance['contact_address'] = strip_tags($new_instance['contact_address']);
        $instance['contact_phone'] = strip_tags($new_instance['contact_phone']);
        $instance['contact_email'] = strip_tags($new_instance['contact_email']);
        $instance['contact_email_url'] = strip_tags($new_instance['contact_email_url']);
        $instance['contact_web'] = strip_tags($new_instance['contact_web']);
        $instance['contact_web_url'] = strip_tags($new_instance['contact_web_url']);
        $instance['contact_facebook'] = strip_tags($new_instance['contact_facebook']);
        $instance['contact_facebook_url'] = strip_tags($new_instance['contact_facebook_url']);
        return $instance;
    }
}

// Init Widget
function lvly_contactinfo_widget_register() {
    register_widget("waves_contactinfo_widget");
}
add_action( 'widgets_init', 'lvly_contactinfo_widget_register' );