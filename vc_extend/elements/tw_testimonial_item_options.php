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
        'heading' => esc_html__( 'Name', 'waves'),
        'param_name' => 'name',
        'value' => 'Alex Patterson',
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
        'type' => 'textarea',
        'heading' => esc_html__( 'Content', 'waves'),
        'param_name' => 'content',
        'value' => esc_html__('Lorem Ipsum proin gravida nibh velit auctor elit integer lacin malesuada justo amet deince montium coeperint grasres.', 'waves'),
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Profile Image', 'waves'),
        'param_name' => 'img',
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Position', 'waves'),
        'param_name' => 'position',
        'value' => esc_html__('Envato', 'waves'),
    ),
);
vc_map(array(
    "name" => esc_html__( "Testimonial Item", 'waves'),
    "base" => "tw_testimonial_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_testimonial'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_testimonial_item extends WPBakeryShortCode{}