<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        "value" =>esc_html__('Timeline', 'waves'),
        'param_name' => 'title',
        "admin_label" => true,
    ),
    array(
        'type' => 'textarea',
        'heading' => esc_html__( 'Content', 'waves'),
        'param_name' => 'content',
        'value' => esc_html__('Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.', 'waves')
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Sub Title', 'waves'),
        "value" =>esc_html__('', 'waves'),
        'param_name' => 'sub_title',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Meta', 'waves'),
        "value" =>esc_html__('', 'waves'),
        'param_name' => 'meta',
    ),
);
vc_map(array(
    "name" => esc_html__( "Timeline Item", 'waves'),
    "base" => "tw_timeline_item",
    "content_element" => true,
    "as_child" => array('only' => 'tw_timeline'),
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_timeline_item extends WPBakeryShortCode{}