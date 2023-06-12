<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Insert Coming Soon Date', 'waves'),
        'description'=>wp_kses(__('We have used the UiKit framework. <a href="https://getuikit.com/docs/countdown" target="_blank" title="How to insert Date?">Check Documentation.</a>', 'waves'),array('a' => array('href' => array(),'title' => array()))),
        'param_name' => 'date',
        'value' =>esc_html__('date: 2019-12-06T08:52:58+00:00', 'waves'),
        "admin_label" => true,
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Customize the Days Text', 'waves'),
        'description' => esc_html__('If Value is blank then it will be disabled on Front-End.', 'waves'),
        'param_name' => 'days_text',
        'value' =>esc_html__('Days', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Customize the Hours Text', 'waves'),
        'description' => esc_html__('If Value is blank then it will be disabled on Front-End.', 'waves'),
        'param_name' => 'hours_text',
        'value' =>esc_html__('Hours', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Customize the Minutes Text', 'waves'),
        'description' => esc_html__('If Value is blank then it will be disabled on Front-End.', 'waves'),
        'param_name' => 'minutes_text',
        'value' =>esc_html__('Minutes', 'waves'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Customize the Seconds Text', 'waves'),
        'description' => esc_html__('If Value is blank then it will be disabled on Front-End.', 'waves'),
        'param_name' => 'seconds_text',
        'value' =>esc_html__('Seconds', 'waves'),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Coming Soon", 'waves'),
    "description" => esc_html__( "Display Counter based on Date Expire.", 'waves' ),
    "base" => "tw_comingsoon",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_comingsoon extends WPBakeryShortCode{}