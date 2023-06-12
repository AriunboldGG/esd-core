<?php
if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ){return;}
if ( get_user_option('rich_editing') == 'true') {
     add_filter('mce_external_plugins', 'waves_tinymce_external');
     add_filter('mce_buttons', 'waves_tinymce_button');
}
function waves_tinymce_external($plugin_array) {
   $plugin_array['tw_button_shortcode'] = plugin_dir_url( __FILE__ ).'assets/js/shortcode-button.js';
   $plugin_array['tw_highlight_shortcode'] = plugin_dir_url( __FILE__ ).'assets/js/shortcode-highlight.js';
   $plugin_array['tw_dropcap_shortcode'] = plugin_dir_url( __FILE__ ).'assets/js/shortcode-dropcap.js';
   return $plugin_array;
}
function waves_tinymce_button($buttons) {
   array_push($buttons, "tw_button_shortcode");
   array_push($buttons, "tw_highlight_shortcode");
   array_push($buttons, "tw_dropcap_shortcode");
   return $buttons;
}   
function waves_refresh_mce($ver){$ver += 3;return $ver;}
add_filter( 'tiny_mce_version', 'waves_refresh_mce');
