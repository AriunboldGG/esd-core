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
       'heading' => esc_html__( 'UK Grid Gutter option', 'waves'),
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
        'type' => 'checkbox',
        'heading' => esc_html__('Inner Columns Equal Height?', 'waves'),
        'param_name' => 'equal_height',
        'value' => array(esc_html__('Yes', 'waves') => 'true'),
        'std' => 'false',
        "description" => esc_html__("If you have tall and short content then it will equally set the Content Height to tallest Column.", 'waves'),
    ),   
);
$params=array_merge(
    $waves_element_options['other']['height'],
    $params,
    $waves_element_options['general'],
    $waves_element_options['outer']
);
vc_remove_param( "vc_row_inner", "gap" );
vc_remove_param( "vc_row_inner", "equal_height" );
vc_remove_param( "vc_row_inner", "content_placement" );
vc_remove_param( "vc_row_inner", "el_id" );
vc_remove_param( "vc_row_inner", "disable_element" );
vc_remove_param( "vc_row_inner", "el_class" );
vc_remove_param( "vc_row_inner", "css" );
vc_add_params( 'vc_row_inner', $params );
vc_map_update( 'vc_row_inner', array('js_view' => 'LvlyRowInnerView') );