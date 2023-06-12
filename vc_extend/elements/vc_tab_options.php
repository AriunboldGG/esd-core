<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'waves'),
        'param_name' => 'title',
        'description' => esc_html__( 'Enter title of tab.', 'waves')
    ),
    array(
        'type' => 'tab_id',
        'heading' => esc_html__( 'Tab ID', 'waves'),
        'param_name' => "tab_id",
        'std' => '',
    )
);
$params=array_merge(
    $params,
    $waves_element_options['other']['icon'],
    $waves_element_options['general']
);
vc_map(array(
    'name' => esc_html__( 'Tab', 'waves'),
    "description" => esc_html__( "Tabbed Content with Customizable options.", 'waves' ),
    'base' => 'vc_tab',
    'allowed_container_element' => 'vc_row',
    'is_container' => true,
    'content_element' => false,
    "params" => $params,
    'js_view' => 'VcTabView',
));