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
        'heading' => esc_html__( 'Choose Layout', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Top Left Icon',   'waves') => '',
            esc_html__('Top Center Icon', 'waves') => 'top_center',
            esc_html__('Top Right Icon',  'waves') => 'top_right',
            esc_html__('Left Icon',  'waves')      => 'left',
            esc_html__('Right Icon',  'waves')     => 'right',
            esc_html__('Small Layout 3',  'waves')     => 'small_layout',
        ),
        'std' => '',
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
    "name" => esc_html__( "IconBox", 'waves'),
    "description" => esc_html__( "Display your Partners Images with Tooltip.", 'waves' ),
    "base" => "tw_iconbox",
    "content_element" => true,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_iconbox extends WPBakeryShortCode{
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