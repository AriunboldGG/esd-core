<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Font Size', 'waves'),
        'param_name' => 'font_size',
        'value' => array(
            esc_html__('Normal',   'waves') => '',
            esc_html__('Small', 'waves') => 'uk-text-small',
            esc_html__('Large', 'waves') => 'uk-text-large',
        ),
        'std' => '',
    ),
    array(
        'type' => 'textarea_html',
        'heading' => esc_html__('Content', 'waves' ),
        'param_name' => 'content',
        "admin_label" => true,
        'value' => esc_html__( 'Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.', 'waves' ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Text Block", 'waves' ),
    "base" => "tw_text",
    "description" => esc_html__( "A block of text with WYSIWYG editor.", 'waves' ),
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_text extends WPBakeryShortCode{}