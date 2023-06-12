<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'attach_images',
        'heading' => esc_html__( 'Slider Images', 'waves' ),
        'description' => esc_html__( 'Select images from Media Library.', 'waves' ),
        'param_name' => 'images',
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Content', 'waves'),
        'param_name' => 'content',
    )
);
$params=array_merge(
    $params,
    waves_filter_param($waves_element_options['other']['carousel'],array('items','center'),false),
    $waves_element_options['general']
);
$params=waves_rep_param($params,array(
    'margin' => array(
        'value'=>20,
    ),
));
vc_map(array(
    "name" => esc_html__( "App Slider", 'waves' ),
    "description" => esc_html__( "Check the Carousel Tab and Customize it.", 'waves' ),
    "base" => "tw_app_slider",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_app_slider extends WPBakeryShortCode{}