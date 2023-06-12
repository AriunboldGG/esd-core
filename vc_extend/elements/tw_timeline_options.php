<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Layout', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Center','waves') => 'center',
            esc_html__('Left',  'waves') => 'left',
            esc_html__('Right', 'waves') => 'right',
            esc_html__('Style 2', 'waves') => 'style-2',
        ),
        'std' => 'center',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['custom_font']
);
vc_map(array(
    "name" => esc_html__( "Timeline", 'waves'),
    "description" => esc_html__( "Display your Experiences with Timeline Layout.", 'waves' ),
    "base" => "tw_timeline",
    "as_parent" => array('only' => 'tw_timeline_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_timeline_item]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsa ipsum velit etiro auctor ornare odio.[/tw_timeline_item][tw_timeline_item]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsa ipsum velit etiro auctor ornare odio.[/tw_timeline_item][tw_timeline_item]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsa ipsum velit etiro auctor ornare odio.[/tw_timeline_item]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_timeline extends WPBakeryShortCodesContainer{
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
    }}