<?php 
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        'param_name' => 'title',
        'value' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Link', 'waves'),
        'param_name' => 'link',
        'value' => '',
        'description' => esc_html__( 'Insert link URL', 'waves')
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Client Image', 'waves'),
        'param_name' => 'img',
        'value' => '',
        "admin_label" => true,
    ),
);
vc_map(array(
    "name" => esc_html__( "Client Item", 'waves'),
    "base" => "tw_client_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_client'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_client_item extends WPBakeryShortCode{}