<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        "value" =>esc_html__('Creativity', 'waves'),
        'param_name' => 'title',
        "admin_label" => true,
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Content', 'waves'),
        'param_name' => 'content',
        'value' => esc_html__('Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.', 'waves')
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Icon Size and Title Size', 'waves'),
        'param_name' => 'size',
        'value' => array(
            esc_html__('Normal',   'waves') => '',
            esc_html__('Small icon', 'waves') => 'icon-small',
            esc_html__('Small title', 'waves') => 'small-title',
            esc_html__('Small icon and title', 'waves') => 'small-typography',
            esc_html__('Custom Typography', 'waves') => 'custom-typography',
        ),
        'std' => '',
    ),
    array(
        'type' => 'tw_number',
        'min' => -10,
        'heading' => esc_html__( 'Height?', 'waves'),
        'param_name' => 'min_height',
        'std' => '250',
        'description' => esc_html__( 'Only integer value. Example: 400', 'waves'),
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Add Link to Box?', 'waves'),
        'param_name' => 'link',
        'value' => esc_html__('url:#', 'waves'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Background Hover Color', 'waves'),
        'param_name' => 'color',
        'value' => '',
        "admin_label" => true
    ),
);
$params=array_merge(
    $waves_element_options['other']['icon'],
    $waves_element_options['other']['icon_style'],
    $params,
    $waves_element_options['general'],
    $waves_element_options['custom_font']
);
$params=waves_rep_param_def($params,array(
    'animation_custom'=>'target:>*; cls:uk-animation-slide-bottom-medium; delay: 400;',
));
vc_map(array(
    "name" => esc_html__( "FancyBox", 'waves'),
    "description" => esc_html__( "Hover able Iconbox with Minimum Height value", 'waves' ),
    "base" => "tw_fancybox",
    "content_element" => true,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_fancybox extends WPBakeryShortCode{
    /**
    * Used to get field name in vc_map function for google_fonts, font_container and etc..
    *
    * @param $key
    *
    * @since 4.4
    * @return bool
    */
    protected function getField( $key ) {
        return isset( $this->fields[ $key ] ) ? $this->fields[ $key ] : false;
    }

    /**
    * Get param value by providing key
    *
    * @param $key
    *
    * @since 4.4
    * @return array|bool
    */
    protected function getParamData( $key ) {
            return WPBMap::getParam( $this->shortcode, $this->getField( $key ) );
    }
}