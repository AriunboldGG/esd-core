<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__('User Name', 'waves'),
        'param_name' => 'username',
        'value' => 'themewavesteam',
    ),
    array(
        'type' => 'tw_number',
        'min' => 0,
        'max' => 100,
        'heading' => esc_html__('Number Of Photos', 'waves'),
        'param_name' => 'number',
        'value' => 8,
    ),
    array(
        'type' => 'tw_number',
        'heading' => esc_html__('Carousel Auto Play', 'waves'),
        'param_name' => 'auto_play',
        'min' => 0,
        'step' => 100,
        'value' => 0,
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    'name' => esc_html__( 'Instagram', 'waves' ),
    'base' => 'tw_instagram',
    'icon' => '',
    'category' => 'ThemeWaves',
    'params' => $params,
));
class WPBakeryShortCode_tw_instagram extends WPBakeryShortCode{}