<?php
/* ================================================================================== */
/*      Post Options   */
/* ================================================================================== */
function lvly_post_options_init() {
    global $lvly_gallery, $lvly_audio, $lvly_video, $lvly_post_options, $lvly_quote, $lvly_status, $lvly_link;
    $lvly_gallery = array(
        array("name" => esc_html__('Insert Gallery Images', 'waves'),
            "desc" => esc_html__('If you set the Featured Image then it will be only shown on Post Single', 'waves'),
            "id" => "gallery_image_ids",
            "type" => 'gallery'
        )
    );
    $lvly_audio = array(
        array("name" => esc_html__('MP3 File URI', 'waves'),
            "desc" => esc_html__('The URI to the .mp3 audio file', 'waves'),
            "id" => "audio_mp3",
            "type" => "text",
            'std' => ''
        ),
        array("name" => esc_html__('Embeded Code', 'waves'),
            "desc" => esc_html__('If you\'re not using self hosted video then you can include embeded code here', 'waves'),
            "id" => "audio_embed",
            "type" => "textarea",
            'std' => ''
        )
    );
    $lvly_video = array(
        array("name" => esc_html__('Embeded Code', 'waves'),
            "desc" => esc_html__('If you\'re not using self hosted video then you can include embeded code here', 'waves'),
            "id" => "video_embed",
            "type" => "textarea",
            'std' => ''
        ),
        array("name" => esc_html__('Minimum Height', 'waves'),
            "desc"   => esc_html__('Insert the Minimum Height by px', 'waves'),
            "id"     => "video_min_height",
            "type"   => "number",
            'min'    => 0,
            'std'    => '450'
        ),
    );
    $lvly_quote = array(
        array("name" => esc_html__('Insert Quote', 'waves'),
            "id" => "quote_text",
            "type" => "textarea",
            'std' => ''
        ),
        array("name" => esc_html__('Insert author', 'waves'),
            "id" => "quote_author",
            "type" => "text",
            'std' => ''
        ),
        array("name" => esc_html__('Set Custom Background image?', 'waves'),
            "id" => "quote_bgimage",
            "type" => "file",
            'std' => ''
        ),
    );
    $lvly_status = array(
        array("name" => esc_html__('The URI', 'waves'),
            "desc"   => esc_html__('Insert the status URI.', 'waves'),
            "id"     => "status_url",
            "type"   => "text",
            'std'    => ''
        ),
    );
    $lvly_link = array(
        array("name" => esc_html__('The URI', 'waves'),
            "desc"   => esc_html__('Insert the URI you wish to link to.', 'waves'),
            "id"     => "link_url",
            "type"   => "text",
            'std'    => ''
        ),
        array("name" => esc_html__('Set Custom Background image?', 'waves'),
            "id" => "link_bgimage",
            "type" => "file",
            'std' => ''
        ),
    );
    
    $posts_array = get_posts( array('post_type' => 'lovelyblock', 'posts_per_page' => '-1','orderby'=> 'title', 'order' => 'ASC') );
    $blocks = array('' => 'Default', 'none' => 'Disable');
    foreach($posts_array as $post_array) {
        $blocks[$post_array->post_name] = array('id'=>$post_array->ID,'post_title'=>$post_array->post_title);
    }
    

    $lvly_post_options = array(
        array(
            "name" => esc_html__('Single layout', 'waves'),
            "desc" => esc_html__('You can set the Single Layout in Specific Posts and choose the Layouts on this list', 'waves'),
            "id" => "single_layout",
            "type" => "layout",
            "options" => array(
                '' => array('title' => esc_html__('Default', 'waves'), 'img' => LVLY_DIR . 'framework/assets/img/default.jpg'),
                'right-sidebar' => array('title' => esc_html__('Right Sidebar', 'waves'), 'img' => LVLY_DIR . 'framework/assets/img/single-1.jpg'),
                'left-sidebar' => array('title' => esc_html__('Left Sidebar', 'waves'), 'img' => LVLY_DIR . 'framework/assets/img/single-2.jpg'),
                'fullwidth-content' => array('title' => esc_html__('Fullwidth Content', 'waves'), 'img' => LVLY_DIR . 'framework/assets/img/single-3.jpg'),
                'narrow-content' => array('title' => esc_html__('Narrow Content', 'waves'), 'img' => LVLY_DIR . 'framework/assets/img/single-4.jpg'),
            )
        ),
        array(
            "name" => esc_html__('Featured Image Style', 'waves'),
            "desc" => esc_html__('Featured Image can be different Layouts and sizes and you can set it here', 'waves'),
            "id" => "single_media",
            "type" => "select",
            "options" => array(
                '' => esc_html__('Default', 'waves') ,
                'small' => esc_html__('Featured area Small', 'waves'),
                'large' => esc_html__('Featured area Large', 'waves'),
                'none' => esc_html__('Featured area None', 'waves'),
            )
        ),
        array(
            "name" => esc_html__('Page Title or Slider Content', 'waves'),
            "desc" => esc_html__('Default will follow Theme Options or choose it from Content Block CPT.', 'waves'),
            "id" => "heading_content",
            "type" => "selectpost",
            "options" => $blocks
        ),
        array(
            "name" => esc_html__('Footer Content', 'waves'),
            "desc" => esc_html__('Default will follow Theme Options or choose it from Content Block CPT.', 'waves'),
            "id" => "footer_content",
            "type" => "selectpost",
            "options" => $blocks
        ),
        array(
            "type" => "separator",
        ),
        array(
            "name" => esc_html__('Set Custom Layout in Blog Layouts', 'waves'),
            "desc" => esc_html__('You can use the it on Blog Elements > Grid or Metro Layouts', 'waves'),
            "id" => "blog_layout",
            "type" => "layout",
            "options" => array(
                ''      => array(
                    'title' => esc_html__( 'Default', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/default.jpg'
                ),
                'inside'   => array(
                    'title' => esc_html__( 'Title & Meta is Inside the Image', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/inside.jpg'
                ),
                'under'   => array(
                    'title' => esc_html__( 'Title & Meta is Under the Image', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/under.jpg'
                ),
                'under-content'   => array(
                    'title' => esc_html__( 'Content is Under the Image', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/with-content.jpg'
                ),
            )
        ),
        array(
            "type" => "separator",
        ),
        array(
            "name" => esc_html__('Choose the Metro Layout.', 'waves'),
            "desc" => esc_html__('This option will only work if you selected Metro Layout on Blog Element on Page', 'waves'),
            "id" => "size",
            "type" => "layout",
            "options" => array(
                'small'      => array(
                    'title' => esc_html__( 'Small', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/metro-small.jpg'
                ),
                'vertical'   => array(
                    'title' => esc_html__( 'Vertical', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/metro-vertical.jpg'
                ),
                'horizontal' => array(
                    'title' => esc_html__( 'Horizontal', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/metro-horizontal.jpg'
                ),
                'large'      => array(
                    'title' => esc_html__( 'Large', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/metro-large.jpg'
                ),
                'full'       => array(
                    'title' => esc_html__( 'Full', 'waves' ),
                    'img' => LVLY_DIR . 'framework/assets/img/metro-full.jpg'
                ),
            ),
            "std" =>'small',
        ),
    );
}
/* ================================================================================== */
/*      Add Metabox   */
/* ================================================================================== */
add_action('add_meta_boxes', 'lvly_post_add_box');
if (!function_exists('lvly_post_add_box')) {
    function lvly_post_add_box() {
        global $lvly_gallery, $lvly_audio, $lvly_video, $lvly_post_options, $lvly_quote, $lvly_status, $lvly_link;
        lvly_post_options_init();
        add_meta_box('tw-format-gallery', esc_html__('Gallery Settings', 'waves'), 'lvly_post_metabox', 'post', 'normal', 'high', $lvly_gallery);
        add_meta_box('tw-format-quote',   esc_html__('Quote Settings', 'waves'),   'lvly_post_metabox', 'post', 'normal', 'high', $lvly_quote);
        add_meta_box('tw-format-audio',   esc_html__('Audio Settings', 'waves'),   'lvly_post_metabox', 'post', 'normal', 'high', $lvly_audio);
        add_meta_box('tw-format-video',   esc_html__('Video Settings', 'waves'),   'lvly_post_metabox', 'post', 'normal', 'high', $lvly_video);
        add_meta_box('tw-format-status',  esc_html__('Status Settings', 'waves'),  'lvly_post_metabox', 'post', 'normal', 'high', $lvly_status);
        add_meta_box('tw-format-link',    esc_html__('Link Settings', 'waves'),    'lvly_post_metabox', 'post', 'normal', 'high', $lvly_link);
        add_meta_box('tw-post-options',   esc_html__('Post Single Settings', 'waves'), 'lvly_post_metabox', 'post', 'normal', 'high', $lvly_post_options);
    }
}