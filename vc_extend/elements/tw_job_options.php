<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Job category', 'waves'),
        'value' => 'lovelyjob_cat',
        'std' => '',
        'param_name' => 'cats',
        'description' => esc_html__( 'Select category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Count', 'waves'),
        'param_name' => 'count',
        'std' => '6',
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Customize Job Title', 'waves'),
        "value" =>esc_html__('Job Title', 'waves'),
        'param_name' => 'job_title',
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Job Code', 'waves'),
        'param_name' => 'code',
        'value' => array( esc_html__( 'True', 'waves') => 'true' ),
        'std' => 'true',
        'description' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Customize Code Title', 'waves'),
        "value" =>esc_html__('Job Code', 'waves'),
        'param_name' => 'code_title',
        'dependency' => array(
            'element' => 'code',
            'value' => 'true',
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Job Location', 'waves'),
        'param_name' => 'location',
        'value' => array( esc_html__( 'True', 'waves') => 'true' ),
        'std' => 'true',
        'description' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Customize Location Title', 'waves'),
        "value" =>esc_html__('Job Location', 'waves'),
        'param_name' => 'location_title',
        'dependency' => array(
            'element' => 'location',
            'value' => 'true',
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Job Department', 'waves'),
        'param_name' => 'department',
        'value' => array( esc_html__( 'True', 'waves') => 'true' ),
        'std' => 'true',
        'description' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Customize Department Title', 'waves'),
        "value" =>esc_html__('Job Department', 'waves'),
        'param_name' => 'department_title',
        'dependency' => array(
            'element' => 'department',
            'value' => 'true',
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Job Close', 'waves'),
        'param_name' => 'close',
        'value' => array( esc_html__( 'True', 'waves') => 'true' ),
        'std' => 'true',
        'description' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Customize Close Title', 'waves'),
        "value" =>esc_html__('Job Close', 'waves'),
        'param_name' => 'close_title',
        'dependency' => array(
            'element' => 'close',
            'value' => 'true',
        ),
    ),
    
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Job", 'waves'),
    "description" => esc_html__( "Job Element will display Job CPT.", 'waves' ),
    "base" => "tw_job",
    "class" => "",
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_job extends WPBakeryShortCode{}