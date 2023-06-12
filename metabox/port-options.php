<?php
/* ================================================================================== */
/*      Add Metabox   */
/* ================================================================================== */
add_action('add_meta_boxes', 'lvly_port_add_box');
if (!function_exists('lvly_port_add_box')) {
    function lvly_port_add_box() {
        global $lvly_port_options, $lvly_port_single;
        
        $posts_array = get_posts( array('post_type' => 'lovelyblock', 'posts_per_page' => '-1','orderby'=> 'title', 'order' => 'ASC') );
        $blocks = array('' => 'Disable');
        foreach($posts_array as $post_array) {
            $blocks[$post_array->post_name] = array('id'=>$post_array->ID,'post_title'=>$post_array->post_title);
        }
        
        $lvly_port_single = array(
            array(
                'name' => esc_html__('Sub Title', 'waves'),
                'desc' => esc_html__("It will display the Bottom of the Title area", 'waves'),
                'id' => 'sub_title',
                'type' => 'text',
                'value' =>'',
            ),
            array(
                'type' => 'separator',
            ),
            array(
                'name' => esc_html__('Choose Single Layout', 'waves'),
                'id' => "single_layout",
                'type' => 'layout',
                'options' => array(
                    '' => array(
                        'title' => esc_html__('Layout 1', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/portfolio-single-1.jpg'
                    ),
                    'single2' => array(
                        'title' => esc_html__('Layout 2', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/portfolio-single-2.jpg'
                    ),
                    'single3' => array(
                        'title' => esc_html__('Layout 3', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/portfolio-single-3.jpg'
                    ),
                    'single4' => array(
                        'title' => esc_html__('Layout 4', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/portfolio-single-4.jpg'
                    ),
                    'single5' => array(
                        'title' => esc_html__('Layout 5', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/portfolio-single-5.jpg'
                    ),
                    'single6' => array(
                        'title' => esc_html__('Layout 6', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/portfolio-single-6.jpg'
                    )
                ),
                'value' =>'',
            ),
            array(
                'name'  => esc_html__( 'Use Sticky Sidebar ?', 'waves' ),
                'id'    => "sticky_sidebar",
                'type'  => "checkbox",
                'value' => true,
                'dependency' => array(
                    'element' => 'single_layout',
                    'value'   => array(
                        'single3',
                        'single5',
                        'single6',
                    ),
                ),
            ),
            array(
                'name'  => esc_html__('Custom Class for Media', 'waves'),
                'desc'  => esc_html__("Empty to Default", 'waves'),
                'id'    => 'custom_class_media',
                'type'  => 'text',
                'value' => '',
                'dependency' => array(
                    'element' => 'single_layout',
                    'value'   => array(
                        'single3',
                        'single5',
                        'single6',
                    ),
                ),
            ),
            array(
                'name'  => esc_html__('Custom Class for Content', 'waves'),
                'desc'  => esc_html__("Empty to Default", 'waves'),
                'id'    => 'custom_class_content',
                'type'  => 'text',
                'value' => '',
                'dependency' => array(
                    'element' => 'single_layout',
                    'value'   => array(
                        'single3',
                        'single5',
                        'single6',
                    ),
                ),
            ),
            array(
                'name'  => esc_html__('Custom Class for Content Sub', 'waves'),
                'desc'  => esc_html__("Empty to Default", 'waves'),
                'id'    => 'custom_class_content_sub',
                'type'  => 'text',
                'value' => '',
                'dependency' => array(
                    'element' => 'single_layout',
                    'value'   => array(
                        'single5'
                    ),
                ),
            ),
            array(
                'name' => esc_html__('Featured Image Type', 'waves'),
                'desc' => esc_html__('Featured Image can be different Layouts and sizes and you can set it here', 'waves'),
                'id' => 'media',
                'type' => 'select',
                'options' => array(
                    '' => esc_html__('Featured Image','waves'),
                    'gallery_slider' => esc_html__('Gallery slider','waves'),
                    'gallery_1' => esc_html__('Gallery 1 column','waves'),
                    'gallery_2' => esc_html__('Gallery 2 columns','waves'),
                    'gallery_3' => esc_html__('Gallery 3 columns','waves'),
                    'video' => esc_html__('Video','waves'),
                    'none' => esc_html__('None','waves'),
                ),
                'std' =>'',
            ),
            array(
                'name' => esc_html__('Gallery', 'waves'),
                'id' => "gallery",
                'type' => "gallery",
                'value' =>'',
                'dependency' => array(
                    'element' => 'media',
                    'value' => array('gallery_slider', 'gallery_1', 'gallery_2', 'gallery_3'),
                ),
            ),
            array(
                'name'  => esc_html__( 'Gallery Slider Light ?', 'waves' ),
                'id'    => "gallery_light",
                'type'  => "checkbox",
                'value' => true,
                'dependency' => array(
                    'element' => 'media',
                    'value'   => array(
                        'gallery_slider',
                    ),
                ),
            ),
            array(
                'name'  => esc_html__( 'Gallery Slider Nav ?', 'waves' ),
                'id'    => "gallery_nav",
                'type'  => "checkbox",
                'value' => true,
                'dependency' => array(
                    'element' => 'media',
                    'value'   => array(
                        'gallery_slider',
                    ),
                ),
            ),
            array(
                'name'  => esc_html__( 'Gallery Slider Dots ?', 'waves' ),
                'id'    => "gallery_dots",
                'type' => 'select',
                'options' => array(
                    '' => esc_html__('None','waves'),
                    'inside' => esc_html__('Inside','waves'),
                    'under' => esc_html__('Under','waves'),
                ),
                'value' => '',
                'dependency' => array(
                    'element' => 'media',
                    'value'   => array(
                        'gallery_slider',
                    ),
                ),
            ),
            array(
                'name' => esc_html__('Video Embed', 'waves'),
                'id' => "video_embed",
                'type' => "textarea",
                'value' =>'',
                'dependency' => array(
                    'element' => 'media',
                    'value' => array('video'),
                ),
            ),
            array(
                'type' => 'separator',
            ),
            array(
                'name' => esc_html__('Insert Client Name', 'waves'),
                'desc' => esc_html__("You can change the text from Theme Options", 'waves'),
                'id' => "client_name",
                'type' => 'text',
                'value' =>'',
            ),
            array(
                'name' => esc_html__('Insert Client URI', 'waves'),
                'desc' => esc_html__("You can change the text from Theme Options", 'waves'),
                'id' => "client_link",
                'type' => 'text',
                'value' =>'',
            ),
            array(
                'name' => esc_html__('Read More URI', 'waves'),
                'desc' => esc_html__("Insert the Custom URI. You can change the Read More text from Theme Options", 'waves'),
                'id' => "more_link",
                'type' => 'text',
                'value' =>'',
            ),
            array(
                'type' => 'separator',
            ),
            array(
                'name' => esc_html__('Portfolio Links to Custom URI', 'waves'),
                'desc' => esc_html__("Portfolio will Redirect to your inserted URI", 'waves'),
                'id' => "custom_link",
                'type' => 'text',
                'value' =>'',
            ),
            array(
                'type' => 'separator',
            ),
            array(
                'name' => esc_html__('Extend Portfolio Content', 'waves'),
                'desc' => esc_html__('You should create the Content in "Content Block" CPT and then assign it here', 'waves'),
                'id' => "extra_content",
                'type' => "selectpost",
                'options' => $blocks,
                'dependency' => array(
                    'element' => 'single_layout',
                    'value' => array('', 'single2', 'single4'),
                ),
            ),
        );
        $lvly_port_options = array(
            /* Metro */
            array(
                'name' => esc_html__('Choose the Metro Layout.', 'waves'),
                'desc' => esc_html__('This option will only work if you selected Metro Layout on Blog Element on Page', 'waves'),
                'id' => 'size',
                'type' => 'layout',
                'options' => array(
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
                'std' =>'small',
            ),
            /* Parallax */
            array(
                'type' => 'separator',
            ),
            array(
                'name' => esc_html__('Parallax', 'waves'),
                'id' => "parallax",
                'type' => 'text',
                'value' =>'bgy: -200',
                'desc' => sprintf( wp_kses( __( 'Check out the UiKit Parallax Documentation and then you can see it more. Example: bgy: -200; <a href="%s">Doc</a>', 'waves'), array(  'a' => array( 'href' => array() ) ) ), 'https://getuikit.com/docs/parallax'),
            ),
            array(
                'name' => esc_html__('Overlay', 'waves'),
                'id' => "overlay",
                'type' => "number",
                "min" => 0,
                "max" => 1,
                "step" => 0.1,
                'value' =>'bgy: -200',
                'desc' => esc_html__("Example:0.4 - It means 40% Opacity.  If you set the Background Color with Image then you can set the Opacity here and Your Images will cover your Background Color", 'waves'),
            ),
            array(
                'name' => esc_html__('Background Color', 'waves'),
                'id' => "bg_color",
                'type' => "color",
                'value' =>'#151515',
            ),
            
        );
        add_meta_box('tw-portfolio-single', esc_html__('Portfolio Single Settings', 'waves'), 'lvly_post_metabox', 'portfolio', 'normal', 'high', $lvly_port_single);
        add_meta_box('tw-portfolio-options', esc_html__('Metro & Parallax Portfolio Settings', 'waves'), 'lvly_post_metabox', 'portfolio', 'normal', 'high', $lvly_port_options);
    }
}