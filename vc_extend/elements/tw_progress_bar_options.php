<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Style?', 'waves'),
        'value' => array(
            esc_html__('Style 1', 'waves') => 'style-1',
            esc_html__('Style 2', 'waves') => 'style-2',
            esc_html__('Style 3', 'waves') => 'style-3'
            ),
        'param_name' => 'layout',
        'std' => "style-1",
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Units', 'waves'),
        'param_name' => 'units',
        'value' => "%",
        'description' => esc_html__( 'Enter measurement units (Example: %, px, points, etc. Note: graph value and units will be appended to graph title).', 'waves')
    ),
    array(
        'type' => 'exploded_textarea',
        'heading' => esc_html__( 'Progress Bar', 'waves'),
        'param_name' => 'values',
        'description' => esc_html__( 'Enter values for graph - value, title and color. Divide value sets with linebreak "Enter" (Example: 90|Development|#e75956).', 'waves'),
        'value' => esc_html__("90|Development,80|Design,70|Marketing", 'waves'),
        "admin_label" => true,
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['custom_font']
);
vc_map(array(
    "name" => esc_html__( "Progress Bar", 'waves'),
    "description" => esc_html__( "Display your Skills with Bar.", 'waves' ),
    "base" => "tw_progress_bar",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" =>'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_progress_bar extends WPBakeryShortCode{
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