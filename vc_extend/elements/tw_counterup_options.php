<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Choose Align', 'waves'),
        'param_name' => 'counter_style',
        'value' => array(esc_html__("Center", 'waves') => "", esc_html__("Left", 'waves') => "style-2", esc_html__("Right", 'waves') => "style-3"),
        'std' => '',
    ),
    array(
        'type' => 'tw_number',
        'heading' => esc_html__( 'Number', 'waves' ),
        'min' => 0,
        "value" =>'421',
        'param_name' => 'counter_number',
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Unit or Px or Em', 'waves' ),
        "value" => esc_html__('', 'waves'),
        'param_name' => 'counter_data_title',
        'description' => esc_html__( 'Appended after the Number', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves' ),
        "value" => esc_html__('Happy customers', 'waves'),
        'param_name' => 'counter_title',
       "admin_label" => true,
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['other']['icon'],
    waves_filter_param($waves_element_options['other']['icon_style'],array('fi_color')),
    $waves_element_options['general']
);

vc_map(array(
    "name" => esc_html__( "Counter Up", 'waves' ),
    "description" => esc_html__( "Display your Milestones.", 'waves' ),
    "base" => "tw_counterup",
    "content_element" => true,
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_counterup extends WPBakeryShortCode{}