<?php

global $waves_element_options;

$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Choose Layout', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Image + Content (hover1)', 'waves')=> 'style-1',
            esc_html__('Image + Content (hover2)', 'waves')=> 'style-2',
            esc_html__('Image (hover content1)', 'waves')=> 'tw-hover-style-1',
            esc_html__('Image (hover content2)', 'waves')=> 'tw-hover-style-2',
            ),
        'std' => 'style-1',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Name', 'waves'),
        'param_name' => 'name',
        'value' =>esc_html__('Oliver Streen', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Position', 'waves'),
        'param_name' => 'position',
        'value' =>esc_html__('Founder & CEO', 'waves'),
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Image', 'waves'),
        'param_name' => 'image',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Link URL', 'waves'),
        'param_name' => 'link',
        'value' => '',
    ),
    array(
        'type' => 'exploded_textarea',
        'heading' => esc_html__('Social Links', 'waves'),
        'param_name' => 'socials',
        'description' => esc_html__('Enter social links. Example:facebook.com/themewaves. NOTE: Divide value sets with linebreak "Enter"', 'waves'),
        'value' => "facebook.com,twitter.com,instagram.com",
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Team", 'waves'),
    "description" => esc_html__( "Different Style and Hover option.", 'waves' ),
    "base" => "tw_team",
    "content_element" => true,
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_team extends WPBakeryShortCode{}