<?php 
global $waves_element_options;

$posts_array = get_posts( array('post_type' => 'lovelyblock', 'posts_per_page' => '-1','orderby'=> 'title', 'order' => 'ASC') );
$blocks = array('Select' => '');
foreach($posts_array as $post_array){
    $blocks[$post_array->post_name] = array('id'=>$post_array->ID,'post_title'=>$post_array->post_title);
}

$params=array(
    array(
        'type' => 'tw_selectpost',
        'heading' => esc_html__( 'Select Block', 'waves'),
        'param_name' => 'slug',
        'value' => $blocks,
        'std' => '',
        "admin_label" => true,
    ),
);
vc_map(array(
    "name" => esc_html__( "Content Block", 'waves'),
    "description" => esc_html__( "Time Saving Pre-Defined Templates from Content Block CPT.", 'waves' ),
    "base" => "tw_block",
    "class" => "",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_block extends WPBakeryShortCode{}