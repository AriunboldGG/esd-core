<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'attach_images',
        'heading' => esc_html__( 'Images', 'waves' ),
        'description' => esc_html__( 'Select images from media library.', 'waves' ),
        'param_name' => 'images',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['other']['carousel'],
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Images Carousel", 'waves' ),
    "description" => esc_html__( "Check the Carousel Tab and Customize it.", 'waves' ),
    "base" => "tw_images_carousel",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_images_carousel extends WPBakeryShortCode{}