<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Video Thumbnail Image', 'waves'),
        'param_name' => 'thumb',
        'description' => esc_html__('The preivew image.', 'waves'),
    ),
    array(
        'type' => 'textarea',
        'heading' => esc_html__('Embed', 'waves' ),
        'param_name' => 'content',
    ),
    array(
        "type" => "tw_number",
        "min" => 0,
        "class" => "",
        "heading" => esc_html__("Thumbnail Min-Height", 'apeco'),
        "param_name" => "min_height",
        "value" => "640",
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Open in modal?', 'waves'),
        'param_name' => 'modal',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'true',
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Play Button Color', 'waves'),
        'param_name' => 'play_btn_color',
        'value' => '',
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Play Button Background Color', 'waves'),
        'param_name' => 'play_btn_color_bg',
        'value' => '',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Video", 'waves' ),
    "description" => esc_html__( "Modal or Simple Video Icon.", 'waves' ),
    "base" => "tw_video",
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_video extends WPBakeryShortCode{}