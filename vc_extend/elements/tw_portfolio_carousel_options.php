<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Portfolio category', 'waves'),
        'value' => 'portfolio_cat',
        'std' => '',
        'admin_label' => true,
        'param_name' => 'cats',
        'description' => esc_html__( 'Select portfolio category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Portfolio count', 'waves'),
        'param_name' => 'count',
        'value' => '6',
        "admin_label" => true,
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Content-Type', 'waves'),
        'param_name' => 'content_type',
        'value' => array(
            esc_html__('Under the image', 'waves')=>'under',
            esc_html__('Inside the image', 'waves')=>'inside',
        ),
        'std' => 'under',
        'admin_label' => true,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Inside Image Layout - Hover Style', 'waves'),
        'param_name' => 'hover',
        'value' => $waves_element_options['other']['inside_hovers'],
        'std' => '',
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'inside' ),
        ),
        "admin_label" => true,
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Display Sub-Title Under Image?', 'waves'),
        'param_name' => 'subtitle_under',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'under'),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Display Category Under Image?', 'waves'),
        'param_name' => 'category_under',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'under'),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Under Image Layout - Hover Style', 'waves'),
        'param_name' => 'hover_under',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'true',
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'under'),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Disable Thumb Crop', 'waves'),
        'description' => esc_html__( 'Your uploaded Image will display Original Images. Note: You should Prepare your Images before upload. Otherwise', 'waves'),
        'param_name' => 'disable_crop',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
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
        'value'=>30,
    ),
));
vc_map(array(
    "name" => esc_html__( "Portfolio Carousel", 'waves'),
    "description" => esc_html__( "Styling option with Carousel customize.", 'waves' ),
    "base" => "tw_portfolio_carousel",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_portfolio_carousel extends WPBakeryShortCode{}