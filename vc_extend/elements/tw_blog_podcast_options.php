<?php 
global $waves_element_options;

$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Post category', 'waves'),
        'value' => 'category',
        'std' => '',
        'param_name' => 'cats',
        'description' => esc_html__( 'Select category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Count', 'waves'),
        'param_name' => 'posts_per_page',
        'value' => '3',
        "admin_label" => true,
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Link', 'waves'),
        'param_name' => 'link',
        'value' => esc_html__('url:#|title:Бүх%20бичлэгийг%20үзэх', 'waves'),
        'description' => esc_html__( 'Insert link URL', 'waves')
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Pagination Style', 'waves'),
        'param_name' => 'pagination',
        'value' => array(
            esc_html__('None', 'waves') => '',
            esc_html__('Default', 'waves') => 'default',
            esc_html__('Minimal', 'waves') => 'minimal',
            esc_html__('Infinite', 'waves') => 'infinite'
        ),
        'std' => '',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Column', 'waves'),
        'value' => array(
            esc_html__('Column 1', 'waves') => 'column',
            esc_html__('Column 2', 'waves') => 'column2',
        ),
        'param_name' => 'column',
        'std' => 'column',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Blog Podcast", 'waves'),
    "description" => esc_html__( "Main Blog Posts with Styles and Customizable options.", 'waves' ),
    "base" => "tw_blog_podcast",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_blog_podcast extends WPBakeryShortCode{}