<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Main Title HTML Tag', 'waves'),
        'param_name' => 'heading_tag',
        'value' => $waves_element_options['other']['heading_tag'],
        'std' => 'h4',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Main Title', 'waves'),
        'param_name' => 'title',
        'value' => esc_html__( 'Your Heading', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => ''
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Align', 'waves'),
        'param_name' => 'align',
        'value' => array(
            esc_html__( 'Center', 'waves') => 'uk-text-center',
            esc_html__( 'Left', 'waves') => 'uk-text-left',
            esc_html__( 'Right', 'waves') => 'uk-text-right'
        ),
        'std' => 'uk-text-center',
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Description', 'waves'),
        'param_name' => 'content',
        'std' => 'Your Description',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Heading Choose Align', 'waves'),
        'param_name' => 'title_align',
        'value' => array(
            esc_html__( 'Center', 'waves') => 'uk-text-center',
            esc_html__( 'Left', 'waves') => 'uk-text-left',
            esc_html__( 'Right', 'waves') => 'uk-text-right'
        ),
        'std' => 'uk-text-left',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Heading Max Width', 'waves'),
        'param_name' => 'max_width',
        'value' => array(
            esc_html__( '400px', 'waves') => 'title_400',
            esc_html__( '600px', 'waves') => 'title_600',
            esc_html__( '700px', 'waves') => 'title_700',
            esc_html__( '800px', 'waves') => 'title_large',
            esc_html__( 'Full', 'waves') => 'title_full'
        ),
        'std' => 'title_600',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
);
vc_map(array(
    "name" => esc_html__( "Survey", 'waves'),
    "description" => esc_html__( "Google Fonts also Included in this Element.", 'waves' ),
    "base" => "tw_survey",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_survey extends WPBakeryShortCode{
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