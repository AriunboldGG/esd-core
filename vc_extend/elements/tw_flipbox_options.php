<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Min Height(px)', 'waves'),
        'param_name' => 'min_height',
        'value' => '',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Hover Direction', 'waves'),
        'param_name' => 'hover_direction',
        'value' => array(
            esc_html__('Right to Left',   'waves') => '',
            esc_html__('Left to Right', 'waves') => 'left-right',
            esc_html__('Top to Bottom', 'waves') => 'top-bottom',
            esc_html__('Bottom to Top', 'waves') => 'bottom-top',
        ),
        'std' => '',
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Add Link to Box?', 'waves'),
        'param_name' => 'link',
        'value' => esc_html__('url:#', 'waves'),
        'std' => '',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['custom_font']
);
vc_map(array(
    "name" => esc_html__( "FlipBox", 'waves'),
    "description" => esc_html__( "Interactive Information with Flip.", 'waves' ),
    "base" => "tw_flipbox",
    "content_element" => true,
    "as_parent" => array('only' => 'tw_flipbox_item'),
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_flipbox_item][tw_flipbox_item]',
    "js_view" => 'LvlyFlipBoxView',
));
class WPBakeryShortCode_tw_flipbox extends WPBakeryShortCodesContainer{
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