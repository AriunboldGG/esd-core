<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose List Icon Style', 'waves'),
        'param_name' => 'list_style',
        'value' => array(
            esc_html__( 'No Bullet', 'waves') => '',
            esc_html__( 'With Icon', 'waves') => 'uk-list-icon',
            esc_html__( 'With Bullet', 'waves') => 'uk-list-bullet',
            esc_html__( 'With Numberic', 'waves') => 'uk-list-decimal uk-list-bullet',
            esc_html__( 'With Divider', 'waves') => 'uk-list-divider',
            esc_html__( 'With Stripped', 'waves') => 'uk-list-striped'
        ),
        'std' => '',
    ),
    array(
        'type' => 'exploded_textarea',
        'heading' => esc_html__( 'Your Lists', 'waves'),
        'param_name' => 'items',
        'description' => esc_html__( 'Enter the List Title and Color (Example: Example List|#999999|ion-android-done-all)', 'waves'),
        'value' => esc_html__("List Item 1,List Item 2,List Item 3", 'waves'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Set Color for Icon', 'waves'),
        'description' => esc_html__( 'If you want to add all Icons same and Colors same then use this and icon options', 'waves'),
        'param_name' => 'color',
        'value' => '#999',
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['other']['icon'],
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "List", 'waves'),
    "description" => esc_html__( "Extended List Element with Icon and Animation.", 'waves' ),
    "base" => "tw_list",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_list extends WPBakeryShortCode{}