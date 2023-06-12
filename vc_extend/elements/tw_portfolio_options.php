<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Portfolio category', 'waves'),
        'value' => 'portfolio_cat',
        'std' => '',
        'param_name' => 'cats',
        'description' => esc_html__( 'Select category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Count', 'waves'),
        'param_name' => 'count',
        'std' => '9',
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Layout', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Masonry', 'waves')=>'masonry',
            esc_html__('Metro', 'waves')=>'metro',
            esc_html__('Grid', 'waves')=>'grid',
            esc_html__('Parallax', 'waves')=>'parallax',
            esc_html__('Promo', 'waves')=>'promo',
        ),
        'std' => 'masonry',
        "admin_label" => true,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Content-Type', 'waves'),
        'param_name' => 'content_type',
        'value' => array(
            esc_html__('Under the image', 'waves')=>'under',
            esc_html__('Inside the image', 'waves')=>'inside',
        ),
        'std' => 'under',
        'admin_label' => true,
        'dependency' => array(
            'element' => 'layout',
            'value' => array('grid', 'masonry'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Inside Image Layout - Hover Style', 'waves'),
        'param_name' => 'hover',
        'value' => $waves_element_options['other']['inside_hovers'],
        'std' => '',
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'inside' ),
        ),
        "admin_label" => true,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Metro, Hover Style ?', 'waves'),
        'param_name' => 'hover_metro',
        'value' => $waves_element_options['other']['inside_hovers'],
        'std' => '',
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'metro' ),
        ),
        "admin_label" => true,
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Display Sub-Title Under Image?', 'waves'),
        'param_name' => 'subtitle_under',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'under'),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Promo, Sub Title ?', 'waves'),
        'param_name' => 'subtitle_promo',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'true',
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'promo'),
        ),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Excerpt Word Count', 'waves'),
        'param_name' => 'excerpt_count',
        'value' => '20',
        'description' => esc_html__( 'Only integer value.', 'waves'),
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'promo'),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Display Category Under Image?', 'waves'),
        'param_name' => 'category_under',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'under'),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Under Image Layout - Hover Style', 'waves'),
        'param_name' => 'hover_under',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'true',
        'dependency' => array(
            'element' => 'content_type',
            'value' => array( 'under'),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Disable Thumb Crop', 'waves'),
        'description' => esc_html__( 'Your uploaded Image will display Original Images. Note: You should Prepare your Images before upload. Otherwise', 'waves'),
        'param_name' => 'disable_crop',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'dependency' => array(
            'element' => 'layout',
            'value' => array('masonry','grid','promo'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'UK Grid Gutter option', 'waves'),
        'param_name' => 'gutter',
        'value' => array(
            esc_html__('0 - Collapse', 'waves')    => 'uk-grid-collapse',
            esc_html__('10px - XSmall', 'waves')    => 'uk-grid-xsmall',
            esc_html__('15px - Small', 'waves')    => 'uk-grid-small',
            esc_html__('30px - Medium', 'waves')   => 'uk-grid-medium',
            esc_html__('40px - Default', 'waves')    => 'uk-grid',
            esc_html__('70px - Large', 'waves')    => 'uk-grid-large',
        ),
        'std' => '',
        'dependency' => array(
            'element' => 'layout',
            'value_not_equal_to' => array( 'parallax', 'promo' ),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Grid elements per Row', 'waves'),
        'param_name' => 'column',
        'value' => array(
            '2 Columns'=>'col2',
            '3 Columns'=>'col3',
            '4 Columns'=>'col4'
        ),
        'std' => 'col3',
        'dependency' => array(
            'element' => 'layout',
            'value_not_equal_to' => array( 'parallax', 'promo' ),
        ),
        "admin_label" => true,
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
        'dependency' => array(
            'element' => 'layout',
            'value' => array('masonry','metro','grid'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Filter Style', 'waves'),
        'param_name' => 'filter_style',
        'value' => array(
            esc_html__('Simple', 'waves') => 'simple',
            esc_html__('Right Side', 'waves') => 'filter-right',
            esc_html__('Modern', 'waves') => 'filter-modern'
        ),
        'std' => 'simple',
        'dependency' => array(
            'element' => 'filter',
            'value_not_equal_to' => array(''),
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Filter Title', 'waves'),
        'param_name' => 'filter_title',
        'value' => '',
        'description' => esc_html__( 'Filter Title will Display on the Left Side', 'waves'),
        'dependency' => array(
            'element' => 'filter_style',
            'value' => array('filter-right'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Pagination Style', 'waves'),
        'param_name' => 'pagination',
        'value' => array(
            esc_html__( 'None', 'waves' )     => '',
            esc_html__( 'Default', 'waves' )  => 'default',
            esc_html__( 'Minimal', 'waves' )  => 'minimal',
            esc_html__( 'Infinite', 'waves' ) => 'infinite'
        ),
        'std' => '',
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Auto Load Infinite Scroll?', 'waves'),
        'param_name' => 'infinite_auto',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'dependency' => array(
            'element' => 'pagination',
            'value' => array('infinite'),
        ),
    ),
    array(
        'type' => 'tw_number',
        'heading' => esc_html__( 'Infinite Auto Offset', 'waves'),
        'param_name' => 'infinite_auto_offset',
        'value' => 0,
        'dependency' => array(
            'element' => 'infinite_auto',
            'value' => array('true'),
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Infinite Text', 'waves'),
        'param_name' => 'infinite_text',
        'value' => '',
        'description' => esc_html__( 'If you leave it Empty then Default Theme Option Translate Tab Value will be inserted', 'waves'),
        'dependency' => array(
            'element' => 'pagination',
            'value' => array('infinite'),
        ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['outer']
);
vc_map(array(
    "name" => esc_html__( "Portfolio", 'waves'),
    "description" => esc_html__( "Display your Works with Stunning Layouts.", 'waves' ),
    "base" => "tw_portfolio",
    "class" => "",
    "icon" => "",
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_portfolio extends WPBakeryShortCode{}