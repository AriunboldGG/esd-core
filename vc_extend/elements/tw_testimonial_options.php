<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Layout ?', 'waves'),
        'value' => array(
            esc_html__('Carousel 1', 'waves') => 'carousel',
            esc_html__('Carousel 2', 'waves') => 'carousel2',
            esc_html__('Carousel 3', 'waves') => 'carousel3',
            esc_html__('Simple quote', 'waves') => 'simple',
        ),
        'param_name' => 'layout',
        'std' => 'carousel',
        'description' => esc_html__( 'Select Type.', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['other']['carousel'],
    $waves_element_options['general']
);
$params=waves_rep_param($params,array(
    'margin' => array(
        'value'=>30,
    ),
));
vc_map(array(
    "name" => esc_html__( "Testimonial", 'waves'),
    "description" => esc_html__( "Set the Layout and Carousel options.", 'waves' ),
    "base" => "tw_testimonial",
    "as_parent" => array('only' => 'tw_testimonial_item'),
    "content_element" => true,
    'show_settings_on_create' => false,
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
    'default_content' => '[tw_testimonial_item]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_testimonial_item][tw_testimonial_item]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_testimonial_item][tw_testimonial_item]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_testimonial_item]',
    "js_view" => 'VcColumnView'
));
class WPBakeryShortCode_tw_testimonial extends WPBakeryShortCodesContainer{}