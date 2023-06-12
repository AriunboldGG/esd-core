<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        'param_name' => 'title',
        'value' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Number', 'waves'),
        'param_name' => 'no',
        'value' => '',
    ),
    array(
        'type' => 'textarea',
        'heading' => esc_html__( 'Content', 'waves'),
        'param_name' => 'content',
        'value' => esc_html__('Duis odio sit amet nibh vulputate auctor.', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Process Item", 'waves'),
    "base" => "tw_process_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_process'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_process_item extends WPBakeryShortCode{}