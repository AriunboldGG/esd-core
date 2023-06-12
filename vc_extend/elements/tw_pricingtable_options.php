<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__('Pricing Lists', 'waves'),
        'param_name' => 'content',
        'value' => wp_kses(__('<ul><li>20GB Storage</li><li>20GB Storage</li><li>Premium Support</li><li>20 Unique Logins</li></ul>', 'waves'),array('ul' => array(),'li' => array())),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Title', 'waves'),
        'param_name' => 'title',
        'value' =>esc_html__('Business', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Insert Price', 'waves'),
        'param_name' => 'price',
        'value' =>esc_html__('39', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Insert Symbol', 'waves'),
        'param_name' => 'symbol',
        'value' =>esc_html__('$', 'waves'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Button Hover Style', 'waves'),
        'param_name' => 'button_hover',
        'std' => 'dark-hover',
        'value' => array(
            'Normal' => 'normal',
            'Dark' => 'dark-hover',
            'Light' => 'light-hover',
            'Invert Color' => 'invert-colors',
        )
    ),
    array(
        'type' => 'vc_link',
        'heading' => esc_html__('Insert Button', 'waves'),
        'param_name' => 'link',
        'value' => esc_html__('url:http%3A%2F%2Fthemeforest.net%2Fuser%2Fthemewaves%3Fref%3Dthemewaves|title:Buy%20Now', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Pricing Table", 'waves'),
    "description" => esc_html__( "Display your Pricing Information.", 'waves' ),
    "base" => "tw_pricingtable",
    "icon" => "", // Simply pass url to your icon here
    "params" => $params,
));
class WPBakeryShortCode_tw_pricingtable extends WPBakeryShortCode{}