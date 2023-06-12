<?php 
global $waves_element_options, $wp_registered_sidebars;
$sidebars = array(
    esc_html__('No sidebar', 'waves') => '',
);

unset($wp_registered_sidebars['footer-sidebar-1'], $wp_registered_sidebars['footer-sidebar-2'], $wp_registered_sidebars['footer-sidebar-3'], $wp_registered_sidebars['footer-sidebar-4']);
foreach ( $wp_registered_sidebars as $sidebar ) {
    $sidebars[$sidebar['name']] = $sidebar['id'];
}
$params=array(
    array(
        'type' => 'tw_category',
        'size' => 10,
        'heading' => esc_html__( 'Post category', 'waves'),
        'value' => 'category',
        'std' => '',
        'param_name' => 'cats',
        'description' => esc_html__( 'Select category.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Count', 'waves'),
        'param_name' => 'posts_per_page',
        'value' => '9',
        "admin_label" => true,
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
    array(
        'type' => 'tw_number',
        'min' => -1,
        'heading' => esc_html__( 'Excerpt Word Count', 'waves'),
        'param_name' => 'excerpt_count',
        'value' => '20',
        'description' => esc_html__( 'Only integer value.', 'waves'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Blog Layout', 'waves'),
        'param_name' => 'layout',
        'value' => array(
            esc_html__('Simple', 'waves')=>'',
            esc_html__('Minimal', 'waves')=>'minimal',
            esc_html__('Grid', 'waves')=>'grid',
            esc_html__('Masonry', 'waves')=>'masonry',
            esc_html__('Metro', 'waves')=>'metro',
        ),
        'std' => '',
        "admin_label" => true,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Layout of Metro Blog', 'waves' ),
        'param_name' => 'metro_layout',
        'value' => array(
            esc_html__('Layout 1', 'waves')=>'',
            esc_html__('Layout 2', 'waves')=>'2',
        ),
        'std' => '',
        "admin_label" => true,
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'metro' ),
        ),
    ),
    array(
        'type' => 'tw_number',
        'min' => 0,
        'heading' => esc_html__( 'Metro Height', 'waves'),
        'param_name' => 'metro_height',
        'value' => 0,
        'description' => esc_html__( 'Only integer value.', 'waves'),
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'metro' ),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Disable Thumb Crop', 'waves' ),
        'description' => esc_html__( 'Your uploaded Image will display Original Images. Note: You should Prepare your Images before upload. Otherwise', 'waves' ),
        'param_name' => 'disable_crop',
        'value' => array( esc_html__( 'Yes', 'waves' ) => 'true' ),
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'masonry', 'grid', 'metro' ),
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Read More', 'waves'),
        'param_name' => 'more_text',
        'value' => esc_html__( 'Read More', 'waves'),
        'description' => esc_html__( 'If you leave it blank then Read More button will not be Visible!', 'waves'),
        'dependency' => array(
            'element' => 'layout',
            'value' => array( '', 'grid', 'masonry' ),
        ),
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
        'type' => 'checkbox',
        'heading' => esc_html__('Display Category Under Image?', 'waves'),
        'param_name' => 'category',
        'std' => true,
        'dependency' => array(
            'element' => 'content_type',
            'value' => array('under'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Display Content Link Under Image?', 'waves'),
        'param_name' => 'under',
        'value' => array(
            esc_html__('None', 'waves')=>'',
            esc_html__('Read More Button', 'waves')=>'btn',
            esc_html__('Date Permalink Text', 'waves')=>'date',
        ),
        'std' => 'btn',
        'dependency' => array(
            'element' => 'content_type',
            'value' => array('under'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Inside Image Layout - Content Style', 'waves'),
        'param_name' => 'inside',
        'value' => array(
            esc_html__('Layout 1', 'waves')=>'',
            esc_html__('Layout 2', 'waves')=>'2',
        ),
        'std' => '',
        'dependency' => array(
            'element' => 'content_type',
            'value' => array('inside'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Grid elements per Row', 'waves'),
        'param_name' => 'column',
        'value' => array(
            '2 Columns'=>'col2',
            '3 Columns'=>'col3',
            '4 Columns'=>'col4',
        ),
        'std' => 'col2',
        'dependency' => array(
            'element' => 'layout',
            'value' => array( 'grid', 'masonry', 'metro' ),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'UK Grid Gutter option', 'waves'),
        'param_name' => 'gutter',
        'value' => array(
            esc_html__('0 - Collapse', 'waves')    => 'uk-grid-collapse',
            esc_html__('10px - XSmall', 'waves')   => 'uk-grid-xsmall',
            esc_html__('15px - Small', 'waves')    => 'uk-grid-small',
            esc_html__('30px - Medium', 'waves')   => 'uk-grid-medium',
            esc_html__('40px - Default', 'waves')  => 'uk-grid',
            esc_html__('70px - Large', 'waves')    => 'uk-grid-large',
        ),
        'std' => 'uk-grid',
        'dependency' => array(
            'element' => 'layout',
            'value_not_equal_to' => array( '', 'minimal' ),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Sidebar ?', 'waves'),
        'param_name' => 'sidebar',
        'value' => $sidebars,
        'std' => 'default-sidebar',
        'dependency' => array(
            'element' => 'layout',
            'value_not_equal_to' => array('minimal'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Pagination Style', 'waves'),
        'param_name' => 'pagination',
        'value' => array(
            esc_html__('None', 'waves') => '',
            esc_html__('Default', 'waves') => 'default',
            esc_html__('Minimal', 'waves') => 'minimal',
            esc_html__('Infinite', 'waves') => 'infinite'
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
    )
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Blog Post Home", 'waves'),
    "description" => esc_html__( "Main Blog Posts with Styles and Customizable options.", 'waves' ),
    "base" => "tw_blog_post",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_blog_post extends WPBakeryShortCode{}