<?php 
global $waves_element_options;
$params=array_merge(
    $waves_element_options['general'],
    $waves_element_options['outer']
);
vc_remove_param( "vc_section", "full_width" );
vc_remove_param( "vc_section", "full_height" );
vc_remove_param( "vc_section", "content_placement" );
vc_remove_param( "vc_section", "video_bg" );
vc_remove_param( "vc_section", "video_bg_url" );
vc_remove_param( "vc_section", "video_bg_parallax" );
vc_remove_param( "vc_section", "parallax" );
vc_remove_param( "vc_section", "parallax_image" );
vc_remove_param( "vc_section", "parallax_speed_video" );
vc_remove_param( "vc_section", "parallax_speed_bg" );
vc_remove_param( "vc_section", "el_id" );
vc_remove_param( "vc_section", "disable_element" );
vc_remove_param( "vc_section", "el_class" );
vc_remove_param( "vc_section", "css" );
vc_remove_param( "vc_section", "css_animation" );
vc_add_params( 'vc_section', $params );