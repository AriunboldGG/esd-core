<?php 
global $waves_element_options;
$params=array_merge(
    $waves_element_options['other']['button'],
    $waves_element_options['other']['icon']
);
vc_map(array(
    "name" => esc_html__( "Button", 'waves'),
    "description" => esc_html__( "Note: Shortcode is available on WYSIWYG editor.", 'waves' ),
    "base" => "tw_button",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_button extends WPBakeryShortCode{}