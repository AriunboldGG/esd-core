<?php 
$params=array(
    array(
        'type' => 'attach_image',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'image',
        'value' => ''
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        "value" =>esc_html__('Creativity', 'waves'),
        'param_name' => 'title',
        "admin_label" => true,
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__( 'Content', 'waves'),
        'param_name' => 'content',
        'value' => esc_html__('Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.', 'waves')
    ),
);
vc_map(array(
    "name" => esc_html__( "Slider Iconbox Item", 'waves'),
    "base" => "gt_slider_iconbox_item",
    "content_element" => true,
    "as_child" => array('only' => 'gt_slider_iconbox'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_gt_slider_iconbox_item extends WPBakeryShortCode{}