<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Product category', 'waves'),
        'value' => 'product_cat',
        'std' => '',
        'admin_label' => true,
        'param_name' => 'cats',
        'description' => esc_html__( 'Select product category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Product count', 'waves'),
        'param_name' => 'count',
        'value' => '7',
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
        'value' =>4,
    ),
    'nav' => array(
        'std'=>'',
    ),
    'margin' => array(
        'value'=>30,
    ),
));
vc_map(array(
    "name" => esc_html__( "Product carousel", 'waves'),
    "base" => "tw_product_carousel",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_product_carousel extends WPBakeryShortCode{}