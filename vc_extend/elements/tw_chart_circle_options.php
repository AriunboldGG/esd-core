<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Pie Title', 'waves'),
        'param_name' => 'pie_title',
        "value" => esc_html__('Photoshop', 'waves'),
        "admin_label" => true,
    ),
    array(
        "type" => "tw_number",
        "min" => 0,
        "max" => 100,
        "class" => "",
        "heading" => esc_html__("Pie Percent", 'waves'),
        "param_name" => "pie_percent",
        "value" => 85,
        "admin_label" => true,
    ),
    array(
        "type" => "tw_number",
        "min" => 0,
        "max" => 30,
        "class" => "",
        "heading" => esc_html__("Pie Track Width", 'waves'),
        "param_name" => "pie_track_width",
        "value" => 4,
    ),
    array(
        "type" => "colorpicker",
        'heading' => esc_html__('Pie Track Color', 'waves'),
        'param_name' => 'pie_track_color',
        'value' => '#e5e5e5',
    ),
    array(
        "type" => "colorpicker",
        'heading' => esc_html__('Pie Bar Color', 'waves'),
        'param_name' => 'pie_bar_color',
        'value' => '#151515',
    ),
    array(
        "type" => "colorpicker",
        'heading' => esc_html__('Pie Icon Color', 'waves'),
        'param_name' => 'pie_icon_color',
        'value' => '',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['other']['icon'],
    $waves_element_options['general'],
    $waves_element_options['custom_font']
);
vc_map(array(
    "name" => esc_html__( "Chart Circle", 'waves'),
    "description" => esc_html__( "Pie Chart with Customizable options.", 'waves' ),
    "base" => "tw_chart_circle",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_chart_circle extends WPBakeryShortCode{
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