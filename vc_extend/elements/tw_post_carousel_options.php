<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Layout ?', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__("Default", 'waves')=>"",
            esc_html__("Style 2", 'waves')=>"style-2",
        ),
        'std' => '',
        "admin_label" => true
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Background ?', 'waves'),
        'param_name' => 'background',
        'value' => array(
            esc_html__("White", 'waves')=>"",
            esc_html__("Grey", 'waves')=>"grey-bg",
            esc_html__("None", 'waves')=>"no-background",
        ),
        'std' => '',
        "admin_label" => true
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Show Image ?', 'waves'),
        'param_name' => 'show_image',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'true',
    ),
    array(
        'type' => 'tw_number',
        'min' => 0,
        'heading' => esc_html__( 'Excerpt Word Count', 'waves'),
        'param_name' => 'excerpt_count',
        'value' => '20',
        'description' => esc_html__( 'Only integer value.', 'waves'),
        'dependency' => array(
            'element' => 'layout',
            'value' => 'style-2',
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Read More', 'waves'),
        'param_name' => 'more_text',
        'value' => esc_html__( 'Read More', 'waves'),
        "admin_label" => true,
        'description' => esc_html__( 'If you leave it blank then Read More button will not be Visible!', 'waves'),
        'dependency' => array(
            'element' => 'layout',
            'value' => 'style-2',
        ),
    ),
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Post category', 'waves'),
        'value' => 'category',
        'std' => '',
        'admin_label' => true,
        'param_name' => 'cats',
        'description' => esc_html__( 'Select post category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Count', 'waves'),
        'param_name' => 'count',
        'value' => '6',
        "admin_label" => true,
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['other']['carousel'],
    $waves_element_options['general']
);
$params=waves_rep_param($params,array(
    'items' => array(
        'min'=>2,
        'max' =>5,
        'value' =>3,
    ),
    'margin' => array(
        'value'=>60,
    ),
));
vc_map(array(
    "name" => esc_html__( "Post carousel", 'waves'),
    "description" => esc_html__( "Display your Latest News with 2 Style.", 'waves' ),
    "base" => "tw_post_carousel",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_post_carousel extends WPBakeryShortCode{}