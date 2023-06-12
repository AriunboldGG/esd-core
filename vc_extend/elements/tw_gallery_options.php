<?php
global $waves_element_options;
$params=array(
    array(
        'type' => 'attach_images',
        'heading' => esc_html__( 'Choose Image', 'waves'),
        'param_name' => 'images',
        'value' => ''
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Gallery Layout', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Masonry', 'waves')=>'masonry',
            esc_html__('Justified', 'waves')=>'justified',
        ),
        'std' => 'masonry',
        "admin_label" => true,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Choose Column', 'waves'),
        'param_name' => 'column',
        'value' => array(
            esc_html__( '1 Column', 'waves')  => 'col1',
            esc_html__( '2 Columns', 'waves') => 'col2',
            esc_html__( '3 Columns', 'waves') => 'col3',
            esc_html__( '4 Columns', 'waves') => 'col4',
        ),
        'std' => 'col1',
        'dependency' => array(
            'element' => 'layout',
            'value_not_equal_to' => array( 'justified' ),
        ),
    ),
    array(
        'type' => 'tw_number',
        'heading' => esc_html__( 'Row Height', 'waves'),
        'min'=>0,
        'value' =>400,
        'param_name' => 'row_height',
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'justified' ),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Row Height Max ?', 'waves'),
        'param_name' => 'row_height_max',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'justified' ),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Grid Gutter Option', 'waves'),
        'param_name' => 'gutter',
        'value' => array(
            esc_html__('40px - Default', 'waves') => '',
            esc_html__('10px - XSmall', 'waves') => 'uk-grid-xsmall',
            esc_html__('15px - Small', 'waves')  => 'uk-grid-small',
            esc_html__('30px - Medium', 'waves') => 'uk-grid-medium',
            esc_html__('70px - Large', 'waves')  => 'uk-grid-large',
            esc_html__('Collapse: 0', 'waves')  => 'uk-grid-collapse',
        ),
        'std' => '',
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Lightbox ?', 'waves'),
        'param_name' => 'lightbox',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'false',
        'dependency' => array(
            'element' => 'layout',
            'value_not_equal_to' => array( 'justified' ),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Filter ?', 'waves'),
        'param_name' => 'filter',
        'value' => array(
            esc_html__('None', 'waves')=>'',
            esc_html__('Simple', 'waves')=>'simple',
            esc_html__('Multi', 'waves')=>'multi',
        ),
        'std' => '',
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Filter Title', 'waves'),
        'param_name' => 'filter_title',
        'value' => '',
        'description' => esc_html__( 'Empty to hide', 'waves'),
        'dependency' => array(
            'element' => 'filter',
            'value_not_equal_to' => array(''),
        ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Gallery", 'waves'),
    "description" => esc_html__( "Gallery images", 'waves' ),
    "base" => "tw_gallery",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_gallery extends WPBakeryShortCode{}