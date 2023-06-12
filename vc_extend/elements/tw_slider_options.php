<?php 
global $waves_element_options;
$params=array(
    array(
        "type" => "dropdown",
        "heading" => esc_html__("Layout Style", 'waves'),
        'group' => esc_html($waves_element_options['groups']['slider']),
        "param_name" => "layout",
        'value' => array(
            esc_html__( 'Default', 'waves') => '',
            esc_html__( 'With Icon Box', 'waves') => 'with-icon-box',
        ),
        'std' => ''
    ),
);
$params=array_merge(
    $params,
    waves_filter_param($waves_element_options['outer'],array('uk_light')),
    $waves_element_options['other']['height'],
    $waves_element_options['other']['carousel'],
    waves_filter_param($waves_element_options['general'],array('css'),false)
);

$params=waves_rep_param($params,array(
    'uk_light' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'items' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'center' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'dots' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'dots-each' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'nav' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'loop' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'auto-width' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'autoplay' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'autoplay-hover-pause' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'autoplay-timeout' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'tw_dimension_type' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
    'tw_dimension_height' => array(
        'group' => esc_html($waves_element_options['groups']['slider']),
    ),
));
$params=waves_rep_param_def($params,array(
    'tw_dimension_type'=>'fullscreen-offset',
    'uk_light'=>'true',
    'custom_class'=>'tw-page-title-only-bg',
    'nav'=>'true',
    'animation_customize'=>'true',
    'animation_custom'=>'target:.tw-heading>*; cls:uk-animation-slide-bottom-medium; delay: 400;',
));
vc_map(array(
    'name' => esc_html__( 'Slider', 'waves'),
    "description" => esc_html__( "FullScreen or Custom Height Slider.", 'waves' ),
    'base' => 'tw_slider',
    'show_settings_on_create' => false,
    'is_container' => true,
    'icon' => '', // Simply pass url to your icon here
    'category' => 'ThemeWaves',
    'params' => $params,
    'custom_markup' => '<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children" data-tw-slider-item="' . esc_html__('Slide', 'waves') . '">%tw_slider_content%</div><div class="tab_controls" style="width: 100%; margin-top: 20px;"><a class="add_tab" title="' . esc_html__('Add slide', 'waves') . '" style="color: white;"><i class="vc-composer-icon vc-c-icon-add"></i> <span class="tab-label">' . esc_html__('Add slide', 'waves') . '</span></a></div>',
    'default_content' => '[vc_row_inner][vc_column_inner] [tw_heading max_width="title_full" heading_tag="h1" subtitle="' . esc_attr__('We Are Minimal', 'waves') . '" title="' . esc_attr__('Creative Innovation', 'waves') . '"][tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read More[/tw_button][/tw_heading][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner] [tw_heading max_width="title_full" heading_tag="h1" subtitle="' . esc_attr__('We Are Minimal', 'waves') . '" title="' . esc_attr__('Check Our Works', 'waves') . '"][tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read More[/tw_button][/tw_heading][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner] [tw_heading max_width="title_full" heading_tag="h1" subtitle="' . esc_attr__('We Are Minimal', 'waves') . '" title="' . esc_attr__('Want to Cooperate?', 'waves') . '"][tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read More[/tw_button][/tw_heading][/vc_column_inner][/vc_row_inner]',
    'js_view' => 'LvlySliderView',
));

class WPBakeryShortCode_tw_slider extends WPBakeryShortCode{
    public function contentAdmin( $atts, $content = null ) {
        $width = $custom_markup = '';
        $shortcode_attributes = array( 'width' => '1/1' );
        foreach ( $this->settings['params'] as $param ) {
                if ( $param['param_name'] != 'content' ) {
                        if ( isset( $param['value'] ) && is_string( $param['value'] ) ) {
                                $shortcode_attributes[$param['param_name']] = $param['value'];
                        } elseif ( isset( $param['value'] ) ) {
                                $shortcode_attributes[$param['param_name']] = $param['value'];
                        }
                } else if ( $param['param_name'] == 'content' && $content == NULL ) {
                        $content = $param['value'];
                }
        }
        extract( shortcode_atts(
                $shortcode_attributes
                , $atts ) );

        $elem = $this->getElementHolder( $width );

        $inner = '';
        foreach ( $this->settings['params'] as $param ) {
                $param_value = '';
                $param_value = isset( ${$param['param_name']} ) ? ${$param['param_name']} : '';
                if ( is_array( $param_value ) ) {
                        // Get first element from the array
                        reset( $param_value );
                        $first_key = key( $param_value );
                        $param_value = $param_value[$first_key];
                }
                $inner .= $this->singleParamHtmlHolder( $param, $param_value );
        }

        $tmp = '';

        if ( isset( $this->settings["custom_markup"] ) && $this->settings["custom_markup"] != '' ) {
            if ( $content != '' ) {
                    $custom_markup = str_ireplace( "%tw_slider_content%", $tmp . $content, $this->settings["custom_markup"] );
            } else if ( $content == '' && isset( $this->settings["default_content_in_template"] ) && $this->settings["default_content_in_template"] != '' ) {
                    $custom_markup = str_ireplace( "%tw_slider_content%", $this->settings["default_content_in_template"], $this->settings["custom_markup"] );
            } else {
                    $custom_markup = str_ireplace( "%tw_slider_content%", '', $this->settings["custom_markup"] );
            }
            $inner .= do_shortcode( $custom_markup );
        }
        $output = str_ireplace( '%wpb_element_content%', $inner, $elem );
        return $output;
    }
}