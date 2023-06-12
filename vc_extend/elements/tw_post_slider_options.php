<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Portfolio category', 'waves'),
        'value' => 'category',
        'std' => '',
        'param_name' => 'cats',
        'description' => esc_html__( 'Select category.', 'waves'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Count', 'waves'),
        'param_name' => 'count',
        'std' => '3',
        'value' => array(
            '2' => '2',
            '3' => '3',
            '4' => '4',
        )
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Height', 'waves'),
        'param_name' => 'height',
        'value' => '630px',
        'description' => esc_html__( 'Insert value with px and % or vh etc. Example: 80vh - It means viewport 80% height it will get.', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Read More', 'waves'),
        'param_name' => 'more_text',
        'value' => '',
        "admin_label" => true,
        'description' => esc_html__( 'If you leave it blank then Read More button will not be Visible!', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Content Max Width', 'waves'),
        'param_name' => 'max_width',
        'value' => '260px',
        'description' => esc_html__( 'Title and Read More content section width and you can control the width.', 'waves'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Content - Align', 'waves'),
        'param_name' => 'content_align',
        'std' => 'right-align',
        'value' => array(
            'Left Aligned in Container' => 'normal',
            'Right Aligned in Container' => 'right-normal',
            'Centered' => 'centered',
            'Left Aligned' => 'left-align',
            'Right Aligned' => 'right-align',
        )
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Auto play ?', 'waves'),
        'param_name' => 'auto_play',
        'description' => esc_html__( 'If checked, it is allowed to auto play.', 'waves'),
        'value' => array( esc_html__( 'Yes', 'waves') => 'yes' )
    ),
);
vc_map(array(
    "name" => esc_html__( "Post Slider", 'waves'),
    "description" => esc_html__( "Sliding Hover will Display your Posts.", 'waves' ),
    "base" => "tw_post_slider",
    "class" => "",
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_post_slider extends WPBakeryShortCode{}