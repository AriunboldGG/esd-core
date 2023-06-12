<?php 
global $waves_element_options;
$params=array_merge(
    $waves_element_options['general'],
    $waves_element_options['outer']
);
vc_remove_param( "vc_column", "css_animation" );
vc_remove_param( "vc_column", "el_id" );
vc_remove_param( "vc_column", "el_class" );
vc_remove_param( "vc_column", "css" );
vc_remove_param( "vc_column", "offset" );
vc_remove_param( "vc_column", "video_bg" );
vc_remove_param( "vc_column", "video_bg_url" );
vc_remove_param( "vc_column", "video_bg_parallax" );
vc_remove_param( "vc_column", "parallax_speed_video" );
vc_remove_param( "vc_column", "parallax" );
vc_remove_param( "vc_column", "parallax_image" );
vc_remove_param( "vc_column", "parallax_speed_bg" );
vc_add_params( 'vc_column', $params );