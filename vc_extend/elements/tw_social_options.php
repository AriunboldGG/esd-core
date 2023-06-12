<?php
global $waves_element_options;
$params=array(
    array(
        "type" => "dropdown",
        "heading" => esc_html__("Layout Style", 'waves'),
        "param_name" => "layout",
        'value' => array(
            esc_html__( 'Simple', 'waves') => 'social-simple',
            esc_html__( 'Circle', 'waves') => 'social-circle',
            esc_html__( 'Square', 'waves') => 'social-square',
        ),
        'std' => 'social-simple'
    ),
    array(
        "type" => "dropdown",
        "heading" => esc_html__("Background Color Style", 'waves'),
        "param_name" => "color",
        'value' => array(
            esc_html__( 'Gray', 'waves') => '',
            esc_html__( 'Dark', 'waves') => 'social-dark',
            esc_html__( 'Light', 'waves') => 'social-light',
            esc_html__( 'Color', 'waves') => 'social-color',
            esc_html__( 'Transparent', 'waves') => 'social-trans',
        ),
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'social-circle', 'social-square' ),
        ),
        'std' => ''
    ),
    array(
        "type" => "dropdown",
        "heading" => esc_html__("Hover Style", 'waves'),
        "param_name" => "hover",
        'value' => array(
            esc_html__( 'No Hover', 'waves') => '',
            esc_html__( 'Gray Hover', 'waves') => 'social-hover-gray',
            esc_html__( 'Light Hover', 'waves') => 'social-hover-light',
            esc_html__( 'Dark Hover', 'waves') => 'social-hover-dark',
            esc_html__( 'Color Hover', 'waves') => 'social-hover-color',
        ),
        'std' => ''
    ),
    array(
        "type" => "dropdown",
        "heading" => esc_html__("Size", 'waves'),
        "param_name" => "size",
        'value' => array(
            esc_html__( 'Normal', 'waves') => 'tw-normal',
            esc_html__( 'Medium', 'waves') => 'tw-medium',
            esc_html__( 'Large', 'waves') => 'tw-large',
        ),
        'std' => ''
    ),
    array(
        'type' => 'exploded_textarea',
        'heading' => esc_html__('Socials', 'waves'),
        'param_name' => 'socials',
        'description' => esc_html__('Enter social links. Example:facebook.com/themewaves. NOTE: Divide value sets with linebreak "Enter"', 'waves'),
        'value' => "facebook.com/themewaves,dribbble.com/themewaves,twitter.com/themewaves",
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Social", 'waves'),
    "description" => esc_html__( "You Social Profile Lists.", 'waves' ),
    "base" => "tw_social",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_social extends WPBakeryShortCode{}