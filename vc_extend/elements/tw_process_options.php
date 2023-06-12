<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Style?', 'waves'),
        'value' => array(
            esc_html__('Style 1', 'waves') => 'style-1',
            esc_html__('Style 2', 'waves') => 'style-2',
        ),
        'param_name' => 'layout',
        'std' => '',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Columns?', 'waves'),
        'value' => array(
            esc_html__('Column 2', 'waves') => 'uk-child-width-1-1 uk-child-width-1-2@s',
            esc_html__('Column 3', 'waves') => 'uk-child-width-1-1 uk-child-width-1-3@m',
            esc_html__('Column 4', 'waves') => 'uk-child-width-1-1@xs uk-child-width-1-2@s uk-child-width-1-4@m',
            esc_html__('Column 5', 'waves') => 'uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m',
            esc_html__('Column 6', 'waves') => 'uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m',
        ),
        'param_name' => 'column',
        'std' => 'uk-child-width-1-1@xs uk-child-width-1-2@s uk-child-width-1-4@m',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['custom_font']
);
vc_map(array(
    "name" => esc_html__( "Process", 'waves'),
    "description" => esc_html__( "Display your Work Process.", 'waves' ),
    "base" => "tw_process",
    "as_parent" => array('only' => 'tw_process_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_process_item no="01" title="Idea"]Duis odio sit amet nibh vulputate auctor.[/tw_process_item][tw_process_item no="02" title="Planing"]Duis odio sit amet nibh vulputate auctor.[/tw_process_item][tw_process_item no="03" title="Create"]Duis odio sit amet nibh vulputate auctor.[/tw_process_item][tw_process_item no="04" title="Success"]Duis odio sit amet nibh vulputate auctor.[/tw_process_item]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_process extends WPBakeryShortCodesContainer{
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