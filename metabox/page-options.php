<?php
/* ================================================================================== */
/*      Add Metabox   */
/* ================================================================================== */
add_action('add_meta_boxes', 'lvly_page_add_box');
if (!function_exists('lvly_page_add_box')) {
    function lvly_page_add_box() {
        $posts_array = get_posts( array('post_type' => 'lovelyblock', 'posts_per_page' => '-1','orderby'=> 'title', 'order' => 'ASC') );
        $blocks=array();
        foreach($posts_array as $post_array) {
            $blocks[$post_array->post_name] = array('id'=>$post_array->ID,'post_title'=>$post_array->post_title);
        }
        $blocks_option = array_merge(array('' => esc_html__('Default','waves'), 'none' => esc_html__('Disable','waves')),$blocks);
        $blocks_top    = array_merge(array('' => esc_html__('Default','waves'), 'true' => esc_html__('Show','waves'), 'false' => esc_html__('Disable','waves')),$blocks);
        $blocks_select = array_merge(array('' => esc_html__('Choose from Content Block','waves')),$blocks);
        $lvly_page_options = array(
            array(
                'name' => esc_html__('Top bar Content', 'waves'),
                'desc' => esc_html__('Default will follow Theme Options or choose it from Content Block Custom Post Type (CPT)', 'waves'),
                'id' => 'top_bar_content',
                'type' => 'selectpost',
                'options' => $blocks_top
            ),
            array(
                'id' => 'seperator_for_tw',
                'type' => 'seperator',
            ),
            array(
                'name' => esc_html__('Header Layout', 'waves'),
                'id' => 'header_layout',
                'type' => 'layout',
                'options' => array(
                    '' => array(
                        'title' => esc_html__('Default', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/default.jpg'
                    ),
                    'classic' => array(
                        'title' => esc_html__('Classic', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/classic.jpg'
                    ),
                    'opacity' => array(
                        'title' => esc_html__('Opacity Menu', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/opacity.jpg'
                    ),
                    'full' => array(
                        'title' => esc_html__('Full menu', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/full.jpg'
                    ),
                    'sidebar' => array(
                        'title' => esc_html__('Left Sidebar', 'waves'),
                        'img' => LVLY_DIR . 'framework/assets/img/sidemenu.jpg'
                    ),
                )
            ),
            array(
                'id'       => 'header_container',
                'type'     => 'select',
                'name'     => esc_html__( 'Header Container Type', 'waves' ),
                'desc'     => esc_html__( 'Default will follow the Theme Option panel', 'waves'),
                'options'  => array(
                    '' => 'Default',
                    'uk-container uk-container-small' => '900px Container',
                    'uk-container' => '1170px Container',
                    'uk-container uk-container-large' => '1600px Container',
                    'uk-container uk-container-expand' => '100% Fullwidth Container',
                ),
            ),
            array(
                'name'    => esc_html__( 'Header Color Type', 'waves' ),
                'desc' => esc_html__( 'Please choose the Heading Color Scheme', 'waves'),
                'id' => 'header_color',
                'type' => 'select',
                'options' => array(
                    '' => 'Default',
                    'tw-header-light' => 'Light',
                    'tw-header-dark uk-light' => 'Dark',
                    'tw-header-transparent uk-light' => 'Transparent'
                )
            ),
            array(
                'name'    => esc_html__( 'Header Scroll Up Style', 'waves' ),
                'desc' => esc_html__( 'Please choose the Scroll Up for following functions', 'waves'),
                'id' => 'scroll_menu',
                'type' => 'select',
                'options' => array(
                    '' => 'Default',
                    'none' => 'Disable',
                    'scroll-up' => 'Scroll Up',
                    'fixed' => 'Fixed to Top',
                )
            ),
            array(
                'id' => 'seperator_for_tw',
                'type' => 'seperator',
            ),
            array(
                'name' => esc_html__('Page Title or Slider Content', 'waves'),
                'desc' => esc_html__('Default will follow Theme Options or choose it from Content Block CPT', 'waves'),
                'id' => 'heading_content',
                'type' => 'selectpost',
                'options' => $blocks_option
            ),
            array(
                'id' => 'seperator_for_tw',
                'type' => 'seperator',
            ),
            array(
                'name' => esc_html__('Footer Content', 'waves'),
                'desc' => esc_html__('Default will follow Theme Options or choose it from Content Block CPT', 'waves'),
                'id' => 'footer_content',
                'type' => 'selectpost',
                'options' => $blocks_option
            ),
        );
        
        $menus = array('' => esc_html__('Default', 'waves'));
        $terms = get_terms( 'nav_menu', array( 'hide_empty' => false ));
        foreach ( $terms as $term ) {
            $menus[$term->slug] = $term->name;
        }
        
        $lvly_onepage_options = array(
            array(
                'name' => esc_html__('Choose the OnePage-able Menu', 'waves'),
                'desc' => esc_html__('You should create the OnePage-able Menu first and then assign that Custom Created menu here', 'waves'),
                'id' => 'page_menu',
                'type' => 'select',
                'options' => $menus
            ),
        );
        $lvly_magazinepage_options = array(
            array(
                'name' => esc_html__('Set Left Side Content', 'waves'),
                'desc' => esc_html__('You need to Insert the Content or Slider then choose it from Content Block section. Right Section will display the Core Editor content', 'waves'),
                'id' => 'magazine_content',
                'type' => 'selectpost',
                'options' => $blocks_select
            ),
        );
        $lvly_fullpage_options = array(
            array(
                'name' => esc_html__('Set FullScreen Slide Animation', 'waves'),
                'id' => 'full_page_anim',
                'type' => 'select',
                'options' => array(
                    'rotate_room' => esc_html__('Rotate Room', 'waves'),
                    'rotate_room_carousel' => esc_html__('Rotate Room Carousel', 'waves'),
                    'rotate_cube' => esc_html__('Rotate Cube', 'waves'),
                    'rotate_side' => esc_html__('Rotate Side', 'waves'),
                    'rotate_fall' => esc_html__('Rotate Fall', 'waves'),
                    'rotate_newspaper' => esc_html__('Rotate Newspaper', 'waves'),
                    'rotate_fush_move' => esc_html__('Rotate Fush Move', 'waves'),
                    'rotate_fush_pull' => esc_html__('Rotate Fush Full', 'waves'),
                    'rotate_unfold' => esc_html__('Rotate UnFold', 'waves'),
                    'rotate_slide' => esc_html__('Rotate Slide', 'waves'),
                    'rotate_slides' => esc_html__('Rotate Slides', 'waves'),
                    'move' => esc_html__('Move', 'waves'),
                    'move_fade' => esc_html__('Move Fade 1', 'waves'),
                    'move_fade_2' => esc_html__('Move Fade 2', 'waves'),
                    'move_easing' => esc_html__('Move Easing', 'waves'),
                    'move_scale' => esc_html__('Move Scale', 'waves'),
                    'scale' => esc_html__('Scale', 'waves'),
                    'scale_move' => esc_html__('Scale Move', 'waves'),
                    'scale_center' => esc_html__('Scale Center', 'waves'),
                    'flip' => esc_html__('Flip', 'waves'),
                ),
                'value' => 'rotate_room'
            ),
            array(
                
                'id' => 'full_page_blocks',
                'type' => 'rows',
                'options' => array(
                    'args' => array(
                        array(
                            'name' => esc_html__('Set FullScreen Content', 'waves'),
                            'desc' => esc_html__('You need to Insert the Content from Content Block section. Any Section will displayed on FullScreen and Add Slide and Assign it', 'waves'),
                            'id' => 'block',
                            'type' => 'selectpost',
                            'options' => $blocks_select
                        ),
                    ),
                    'columns'=> array(
                        'section' =>esc_html__('Slide', 'waves'),
                    )
                ),
            ),
            array(
                'name' => esc_html__('Footer Content', 'waves'),
                'desc' => esc_html__('Default will follow Theme Options or choose it from Content Block CPT', 'waves'),
                'id' => 'full_page_footer_content',
                'type' => 'selectpost',
                'options' => $blocks_option
            ),
        );
        $lvly_splitpage_options = array(
            array(
                'name' => esc_html__('Set SplitScreen Content', 'waves'),
                'desc' => esc_html__('Please assign the Left and Right side both.', 'waves'),
                'id' => 'split_page_blocks',
                'type' => 'rows',
                'options' => array(
                    'args' => array(
                        array(
                            'name' => esc_html__('Set Left Side Content', 'waves'),
                            'desc' => esc_html__('You need to Insert the Content or Slider then choose it from Content Block section. Right Section will display the Core Editor content', 'waves'),
                            'id' => 'block',
                            'type' => 'selectpost',
                            'options' => $blocks_select
                        ),
                    ),
                    'columns'=> array(
                        'left' =>esc_html__('Left', 'waves'),
                        'right'=>esc_html__('Right', 'waves'),
                    )
                ),
            ),
        );
        
        add_meta_box('tw-page-options',      esc_html__('Page Settings', 'waves')      , 'lvly_post_metabox', 'page', 'normal', 'high', $lvly_page_options);
        add_meta_box('tw-onepage-options',   esc_html__('One Page Settings', 'waves')  , 'lvly_post_metabox', 'page', 'normal', 'high', $lvly_onepage_options);
        add_meta_box('tw-magazinepage-options',  esc_html__('Magazine Blog Settings', 'waves')  , 'lvly_post_metabox', 'page', 'normal', 'high', $lvly_magazinepage_options);
        add_meta_box('tw-fullpage-options',  esc_html__('FullScreen Settings', 'waves') , 'lvly_post_metabox', 'page', 'normal', 'high', $lvly_fullpage_options);
        add_meta_box('tw-splitpage-options', esc_html__('SplitScreen Settings', 'waves'), 'lvly_post_metabox', 'page', 'normal', 'high', $lvly_splitpage_options);
    }
}