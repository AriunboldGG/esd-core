<?php
global $waves_element_options;
$params=array(
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
        "type" => "textfield",
        "heading" => esc_html__("Image Height", 'waves'),
        "param_name" => "height",
        'value' => esc_html__('auto', 'waves'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Insert as Background?', 'waves'),
        'description'=>esc_html__('In the DIV tag image applied on Style Background property.', 'waves'),
        'param_name' => 'as_background',
        'value' => array(
            esc_html__( 'DIV tag', 'waves') => 'true',
            esc_html__( 'IMG tag', 'waves') => 'false'
        ),
        'std' => 'false',
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Add Tilt Hover Effect', 'waves'),
        'param_name' => 'tilt_enable',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => '',
        'dependency' => array(
            'element' => 'as_background',
            'value' => array('false'),
        ),
    ),
    array(
        "type" => "textarea_raw_html",
        "heading" => esc_html__("Tilt Effect Value", 'waves'),
        "param_name" => "tilt_effect",
        'value' => waves_encode(rawurlencode('{ “extraImgs” : 4, “opacity”: 0.5, “bgfixed” : true, “movement”: { “perspective” : 500, “translateX” : -15, “translateY” : -15, “translateZ” : 20, “rotateX” : 15, “rotateY” : 15 } }')),
        'description'=>wp_kses(__('<a href="https://tympanus.net/Development/ImageTiltEffect/" target="_blank" title="Tilt Effect">More Information on here.</a> You can check the Values for you need.', 'waves'),array('a' => array('href' => array(),'title' => array()))),
        'dependency' => array(
            'element' => 'tilt_enable',
            'value' => array('true'),
        ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Image", 'waves'),
    "description" => esc_html__( "Single Image Insert", 'waves' ),
    "base" => "tw_image",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_image extends WPBakeryShortCode{}