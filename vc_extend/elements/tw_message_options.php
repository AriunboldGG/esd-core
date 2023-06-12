<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Type?', 'waves'),
        'value' => array(
            esc_html__('Normal', 'waves') => 'uk-notification-message',
            esc_html__('Information', 'waves') => 'uk-notification-message-primary',
            esc_html__('Success', 'waves') => 'uk-notification-message-success',
            esc_html__('Warning', 'waves') => 'uk-notification-message-warning',
            esc_html__('Danger', 'waves') => 'uk-notification-message-danger',
            esc_html__('Custom Color', 'waves') => 'uk-notification-message-bgcolor'),
        'param_name' => 'type',
        'std' => 'uk-notification-message',
    ),
    array(
        'type' => 'colorpicker',
        'param_name' => 'bgcolor',
        'heading' => esc_html__( 'Background color', 'waves'),
        'value' => esc_html__( '#000', 'waves'),
        'dependency' => array(
            'element' => 'type',
            'value' => 'uk-notification-message-bgcolor',
        ),
    ),
    array(
        'type' => 'textarea_html',
        'param_name' => 'content',
        'heading' => esc_html__( 'Box Information', 'waves'),
        'value' => esc_html__( 'Your Message Box Information here.', 'waves'),
        "admin_label" => true,
    ),
);

$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Message Box", 'waves'),
    "description" => esc_html__( "Display your Boxed Information.", 'waves' ),
    "base" => "tw_message",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_message extends WPBakeryShortCode{}