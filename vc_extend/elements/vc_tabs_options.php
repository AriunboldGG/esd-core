<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Tabs Style', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Top Left', 'waves') => '',
            esc_html__('Top Center', 'waves') => 'uk-flex-center',
            esc_html__('Top Justify', 'waves') => 'uk-child-width-expand',
            esc_html__('Top Right', 'waves') => 'uk-flex-right',
            esc_html__('Left side', 'waves') => 'uk-tab-left',
            esc_html__('Right side', 'waves') => 'uk-tab-right'),
        'std' => '',
    ),
    array(
        'type' => 'tab_id',
        'heading' => esc_html__( 'Tab ID', 'waves'),
        'param_name' => "tab_id"
    )
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);

vc_map(array(
    'name' => esc_html__( 'Tab', 'waves'),
    'base' => 'vc_tabs',
    'show_settings_on_create' => false,
    'is_container' => true,
    'icon' => 'waves-element-icon',
    "category" => 'ThemeWaves',
    'description' => esc_html__( 'Tabbed content', 'waves'),
    "params" => $params,
    'custom_markup' => '<div class="wpb_tabs_holder wpb_holder vc_container_for_children"><ul class="tabs_controls"></ul>%content%</div>',
    'default_content' => '[vc_tab title="' . esc_html__( 'Tab 1', 'waves') . '"][/vc_tab][vc_tab title="' . esc_html__( 'Tab 2', 'waves') . '"][/vc_tab]',
    'js_view' => 'VcTabsView',
));