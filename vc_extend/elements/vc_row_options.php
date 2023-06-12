<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Content Width', 'waves'),
        'param_name' => 'content_width',
        'value' => array(
            esc_html__('100% - Fullwidth ', 'waves')        => 'uk-container-fullwidth',
            esc_html__('1650px - Large ', 'waves')          => 'uk-container-large',
            esc_html__('1170px - Boxed Stretch', 'waves')   => 'default',
            esc_html__('900px - Small ', 'waves')           => 'uk-container-small',
            esc_html__('600px - xSmall ', 'waves')          => 'uk-container-xsmall',
        ),
        'std' => 'default',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Container Padding from Top & Bottom', 'waves'),
        "description" => esc_html__("Wanna Customize this sizes then Use the Styling Tab -> Padding Top and Bottom option.", 'waves'),
        'param_name' => 'size',
        'value' => array(
            esc_html__('20px - Extra Small', 'waves')    => 'uk-section-xsmall',
            esc_html__('40px - Small', 'waves')          => 'uk-section-small',
            esc_html__('75px - Normal', 'waves')         => 'uk-section-normal',
            esc_html__('90px - Medium', 'waves')         => 'uk-section-medium',
            esc_html__('110px - Default', 'waves')       => 'default',
            esc_html__('150px - Large', 'waves')         => 'uk-section-large',
            esc_html__('210px - Extra Large', 'waves')   => 'uk-section-xlarge',
            esc_html__('0 - Remove Padding', 'waves')    => 'uk-padding-remove-vertical',
        ),
        'std' => 'default',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Grid Gutter Option', 'waves'),
        'param_name' => 'gutter',
        'value' => array(
            esc_html__('10px - XSmall ', 'waves')  => 'uk-grid-xsmall',
            esc_html__('15px - Small', 'waves')    => 'uk-grid-small',
            esc_html__('30px - Medium', 'waves')   => 'uk-grid-medium',
            esc_html__('40px - Default', 'waves')  => 'default',
            esc_html__('70px - Large', 'waves')    => 'uk-grid-large',
            esc_html__('0 - Collapse', 'waves')    => 'uk-grid-collapse',
        ),
        'std' => 'default',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Grid Match Height', 'waves'),
        'param_name' => 'match_height',
        'value' => array(
            esc_html__('False', 'waves')   => '',
            esc_html__('True', 'waves')    => 'true',
        ),
        'std' => '',
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Grid Content Vertical Align', 'waves'),
        'param_name' => 'valign',
        'value' => array(
            esc_html__('Top', 'waves')       => '',
            esc_html__('Center', 'waves')    => 'uk-flex-middle',
            esc_html__('Bottom', 'waves')    => 'uk-flex-bottom',
        ),
        'std' => '',
        'dependency' => array(
            'element' => 'match_height',
            'value' => 'true',
        ),
    ),
);
$params=array_merge(
    $waves_element_options['other']['height'],
    $params,
    $waves_element_options['general'],
    $waves_element_options['outer']
);
vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "gap" );
vc_remove_param( "vc_row", "full_height" );
vc_remove_param( "vc_row", "columns_placement" );
vc_remove_param( "vc_row", "equal_height" );
vc_remove_param( "vc_row", "content_placement" );
vc_remove_param( "vc_row", "video_bg" );
vc_remove_param( "vc_row", "video_bg_url" );
vc_remove_param( "vc_row", "video_bg_parallax" );
vc_remove_param( "vc_row", "parallax" );
vc_remove_param( "vc_row", "parallax_image" );
vc_remove_param( "vc_row", "parallax_speed_video" );
vc_remove_param( "vc_row", "parallax_speed_bg" );
vc_remove_param( "vc_row", "el_id" );
vc_remove_param( "vc_row", "disable_element" );
vc_remove_param( "vc_row", "el_class" );
vc_remove_param( "vc_row", "css" );
vc_remove_param( "vc_row", "css_animation" );
vc_add_params( 'vc_row', $params );
vc_map_update( 'vc_row', array('js_view' => 'LvlyRowView') );