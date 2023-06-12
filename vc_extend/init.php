<?php
vc_remove_element("vc_tta_accordion");
vc_remove_element("vc_tta_tour");
vc_remove_element("vc_tta_tabs");
vc_remove_element("vc_tta_pageable");
vc_remove_element("vc_round_chart");
vc_remove_element("vc_line_chart");
vc_remove_element("vc_text_separator");
vc_remove_element("vc_column_text");
vc_remove_element("vc_facebook");
vc_remove_element("vc_tweetmeme");
vc_remove_element("vc_googleplus");
vc_remove_element("vc_pinterest");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_icon");
vc_remove_element("vc_seperator");
vc_remove_element("vc_message");
vc_remove_element("vc_gmaps");
vc_remove_element("vc_tour");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_button2");
vc_remove_element("vc_cta");
vc_remove_element("vc_btn");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_basic_grid");
vc_remove_element("vc_media_grid");
vc_remove_element("vc_masonry_grid");
vc_remove_element("vc_masonry_media_grid");
vc_remove_element("vc_separator");
vc_remove_element("vc_zigzag");
vc_remove_element("vc_hoverbox");
vc_remove_element("vc_toggle");
vc_remove_element("vc_single_image");
vc_remove_element("vc_gallery");
vc_remove_element("vc_custom_heading");
vc_remove_element("vc_video");
vc_remove_element("vc_empty_space");


/* Visual Composer Customize from Themewaves */

add_action('init', 'waves_integrateWithVC', 20);

function waves_integrateWithVC() {
    global $waves_element_options;
    
    require_once 'font-icons.php';
    // Add Waves Select Multiple Posts Param
    vc_add_shortcode_param('tw_selectpost_multi', 'waves_param_selectpost_multi_settings_field');
    function waves_param_selectpost_multi_settings_field( $settings, $value ) {
        $valueID='';
        $posts_array = get_posts( array('post_type' => ( empty( $settings['value'] ) ? 'post' : $settings['value'] ), 'posts_per_page' => '-1','orderby'=> 'date', 'order' => 'ASC') );
        $posts = array();
        foreach($posts_array as $post_array){
            $pid   = $post_array->ID;
            $thumbSrc = wp_get_attachment_image_src( get_post_thumbnail_id( $pid ) );
            $thumb = empty( $thumbSrc[0] ) ? '' : $thumbSrc[0];
            $posts[ $post_array->post_name ] = array(
                'id'         => $pid,
                'post_title' => $post_array->post_title,
                'thumb'      => $thumb,
            );
        }
        $count = empty( $settings['count'] ) ? 4 : $settings['count'];
        $output = '<div class="tw-select-post-multi-container">';
            $output .= '<ul class="tw-select-post-multi-list">';
                $output .= str_repeat( '<li class="post-empty"><span class="action-remove">X</span></li>', $count );
            $output .= '</ul>';
            $output .= '<div class="tw-select-post-multi-message">' . esc_html__( 'List is full.', 'waves' ) . '</div>';
            $output .= '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value tw-select-post-multi-field ' . esc_attr( $settings['param_name'] . ' ' . $settings['type'] ) . '" value="' . esc_attr( $value ) . '" type="hidden">';
            $output .= '<input list="tw-select-post-multi-selector" />';
            $output .= '<datalist id="tw-select-post-multi-selector">';
                if ( ! empty( $posts ) && is_array( $posts ) ) {
                    foreach ( $posts as $name => $postVal ) {
                        $label = $postVal;
                        $id = $thumb = '';
                        if ( is_array( $postVal ) ) {
                            $id    = $postVal['id'];
                            $label = $postVal['post_title'];
                            $thumb = $postVal['thumb'];
                        }
                        $output .= '<option value="' . esc_attr( $id ) . '" data-thumb="' . esc_url( $thumb ) .  '" >' . esc_html( $label ) . '</option>';
                    }
                }
            $output.='</datalist>';
        $output.='</div>';
        return $output;
    }
    // Add Waves Select Multiple Param
    vc_add_shortcode_param('tw_selectpost', 'waves_param_selectpost_settings_field');
    function waves_param_selectpost_settings_field($settings, $value) {
        $css_option = vc_get_dropdown_option($settings, $value);
        $valueID='';
        $output = '<div class="tw-selectpost-container" data-option="' . esc_attr($css_option) . '">';
            $output .= '<select name="' . esc_attr($settings['param_name']) . '" class="wpb_vc_param_value wpb-input wpb-select ' . esc_attr($settings['param_name']) . ' ' . esc_attr($settings['type']) . '">';
            if (!empty($settings['value']) && is_array($settings['value'])) {
                foreach ($settings['value']as $name => $postVal) {
                    $id='';
                    $label = $postVal;
                    if(is_array($postVal)){
                        $id = $postVal['id'];
                        $label = $postVal['post_title'];
                    }
                    $selected = '';
                    if ($name==$value) {
                        $valueID=$id;
                        $selected = ' selected="selected"';
                    }
                    $output.='<option value="' . esc_attr($name) . '" data-id="' . esc_attr($id) . '"' . $selected . '>' . esc_html($label) . '</option>';
                }
            }
            $output.='</select>';
            $hrefD=admin_url( 'post.php?post=%post%&action=edit' );
            $href= str_replace('%post%', $valueID, $hrefD);
            $output.='<a href="'.esc_url($href).'" target="_blank" class="button tw-select-post-edit" data-href="'.esc_url($hrefD).'">'.esc_html__('Edit','waves').'</a>';
        $output.='</div>';
        return $output;
    }
    // Add Waves Number Param
    vc_add_shortcode_param('tw_number', 'waves_param_number_settings_field');
    function waves_param_number_settings_field($settings, $value) {
        $max = isset($settings['max']) ? (' max="' . esc_attr($settings['max']) . '"') : '';
        $min = isset($settings['min']) ? (' min="' . esc_attr($settings['min']) . '"') : '';
        $step= isset($settings['step']) ? (' step="' . esc_attr($settings['step']) . '"') : '';
        return '<input name="' . $settings['param_name']
                . '" class="wpb_vc_param_value wpb-textinput '
                . $settings['param_name'] . ' ' . $settings['type']
                . '" type="number"' . $max . $min . $step . ' value="' . $value . '"/>';
    }

    // Add Waves Select Multiple Param
    vc_add_shortcode_param('tw_select_multiple', 'waves_param_select_multiple_settings_field');
    function waves_param_select_multiple_settings_field($settings, $value) {
        $value = explode(',', $value);
        $size = isset($settings['size']) ? (' size="' . intval($settings['size']) . '"') : '';
        $css_option = vc_get_dropdown_option($settings, $value);
        $output = '<select multiple name="' . $settings['param_name'] . '" class="wpb_vc_param_value wpb-input wpb-select ' . $settings['param_name'] . ' ' . $settings['type'] . ' ' . $css_option . '"  data-option="' . $css_option . '"' . $size . '>';
        if (!empty($settings['value']) && is_array($settings['value'])) {
            foreach ($settings['value']as $label => $name) {
                $selected = '';
                if (in_array($name, $value)) {
                    $selected = ' selected="selected"';
                }
                $output.='<option value="' . esc_attr($name) . '"' . $selected . '>' . $label . '</option>';
            }
        }
        $output.='</select>';
        return $output;
    }

    // Add Waves Category Param
    vc_add_shortcode_param('tw_category', 'waves_param_category_settings_field');
    function waves_param_category_settings_field($settings, $value) {
        global $waves_element_options;
        $value = explode(',', $value);
        $size = isset($settings['size']) ? (' size="' . intval($settings['size']) . '"') : '';
        $css_option = vc_get_dropdown_option($settings, $value);
        $cats = array();

        if(!empty($settings['value']) && ! empty( $waves_element_options['other']['cat'][ $settings['value'] ] ) && is_array( $waves_element_options['other']['cat'][ $settings['value'] ] ) ){
            $cats = $waves_element_options['other']['cat'][ $settings['value'] ];
        }

        $output = '<select multiple name="' . $settings['param_name'] . '" class="wpb_vc_param_value wpb-input wpb-select ' . $settings['param_name'] . ' ' . $settings['type'] . ' ' . $css_option . '"  data-option="' . $css_option . '"' . $size . '>';
        if (!empty($cats) && is_array($cats)) {
            foreach ( $cats as $name => $label) {
                $selected = '';
                if (in_array($name, $value)) {
                    $selected = ' selected="selected"';
                }
                $output.='<option value="' . esc_attr($name) . '"' . $selected . '>' . $label . '</option>';
            }
        }
        $output.='</select>';
        return $output;
    }


    add_filter('vc_param_animation_style_list','waves_vc_param_animation_style_list',100);
    function waves_vc_param_animation_style_list($styles){
        $styles[] = array(
            'label' => esc_html__( 'UiKit Animations', 'waves' ),
            'values' => array(
                // text to display => value
                esc_html__( 'Fade', 'waves' ) => array(
                    'value' => 'uk-animation-fade',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Scale Up', 'waves' ) => array(
                    'value' => 'uk-animation-scale-up',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Scale Down', 'waves' ) => array(
                    'value' => 'uk-animation-scale-down',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Top', 'waves' ) => array(
                    'value' => 'uk-animation-slide-top',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Bottom', 'waves' ) => array(
                    'value' => 'uk-animation-slide-bottom',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Left', 'waves' ) => array(
                    'value' => 'uk-animation-slide-left',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Right', 'waves' ) => array(
                    'value' => 'uk-animation-slide-right',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Top Small', 'waves' ) => array(
                    'value' => 'uk-animation-slide-top-small',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Bottom Small', 'waves' ) => array(
                    'value' => 'uk-animation-slide-bottom-small',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Left Small', 'waves' ) => array(
                    'value' => 'uk-animation-slide-left-small',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Right Small', 'waves' ) => array(
                    'value' => 'uk-animation-slide-right-small',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Top Medium', 'waves' ) => array(
                    'value' => 'uk-animation-slide-top-medium',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Bottom Medium', 'waves' ) => array(
                    'value' => 'uk-animation-slide-bottom-medium',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Left Medium', 'waves' ) => array(
                    'value' => 'uk-animation-slide-left-medium',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Slide Right Medium', 'waves' ) => array(
                    'value' => 'uk-animation-slide-right-medium',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Kenburns', 'waves' ) => array(
                    'value' => 'uk-animation-kenburns',
                    'type' => 'ui-kit',
                ),
                esc_html__( 'Shake', 'waves' ) => array(
                    'value' => 'uk-animation-shake',
                    'type' => 'ui-kit',
                ),
            ),
        );
        return $styles;
    }
    // Contact Form 7 List
    $waves_element_options['other']['contact_form_7'] = array(esc_html__('None', 'waves') => 0);
    $cf7s = wp_get_recent_posts(array('post_type' => 'wpcf7_contact_form', 'numberposts' => -1, 'orderby' => 'date', 'order' => 'ASC'));
    foreach ($cf7s as $cf7) {
        $waves_element_options['other']['contact_form_7'][$cf7['post_title']] = $cf7['ID'];
    }
    // MailPoet
    global $wpdb;
    $wysijaps = '';
    $table_name = $wpdb->prefix . 'wysija_form';
    if ($wpdb->get_results($wpdb->prepare("SHOW TABLES LIKE %s", $table_name))) {
        $wysijaps = $wpdb->get_results("SELECT * FROM $table_name");
    }
    $waves_element_options['other']['wysijap'] = array(esc_html__("None", 'waves') => "0");
    if (!empty($wysijaps) && is_array($wysijaps)) {
        foreach ($wysijaps as $wysijap) {
            $name = empty($wysijap->name) ? ('Unnamed(' . $wysijap->form_id . ')') : $wysijap->name;
            $waves_element_options['other']['wysijap'][$name] = $wysijap->form_id;
        }
    }
    // Categories
    $ignoredPostType = array('page', 'attachment', 'revision', 'nav_menu_item');
    $arrayPostType = array();
    $arrayPostTypeHide = array();
    $postTypeList = get_post_types(array(), 'objects');
    foreach ($postTypeList as $slug => $typeOptions) {
        if (!in_array($slug, $ignoredPostType)) {
            $arrayPostType[$slug] = $typeOptions->labels->menu_name;
            //---------hide----------
            $tmpArr = array();
            foreach ($postTypeList as $slugSub => $typeOptionsSub) {
                if (!in_array($slugSub, $ignoredPostType) && $slug !== $slugSub) {
                    $tmpArr[] = 'cat_' . $slugSub;
                }
            }
            $arrayPostTypeHide[$slug] = implode(",", $tmpArr);
        }
    }
    $categories = array();
    
    function lvly_cat_level($termSlug,$parent=0,$depth=0){
        $levCats=array();
        $taxCats = get_terms($termSlug, array('child_of' => $parent,'hide_empty' =>false));
        if($taxCats){
            foreach($taxCats as $taxCat){
                if($parent===$taxCat->parent){
                    $levCats[$taxCat->slug] = str_repeat("- ",$depth).$taxCat->name;
                    $levCats=array_merge($levCats,lvly_cat_level($termSlug,$taxCat->term_id,$depth+1));
                }
            }
        }
        return $levCats;
    }
    foreach ($arrayPostType as $slug => $name) {
        $categories[$slug] = array();
        $taxonomyNames = get_object_taxonomies($slug);
        foreach($taxonomyNames as $termSlug){
            $taxonomyCategories = get_terms($termSlug, array('hide_empty' =>'0'));
            if (empty($taxonomyCategories)){
                $categories[$termSlug]=array();
            }else{
                $categories[$termSlug] = lvly_cat_level($termSlug);
            }
        }
    }
    
    $waves_element_options['other']['cat'] = $categories;
    // Order
    $waves_element_options['other']['order'] = array(
        esc_html__("Date Desc", 'waves') => "date_desc",
        esc_html__("Date Asc", 'waves') => "date_asc",
        esc_html__("Title Desc", 'waves') => "title_desc",
        esc_html__("Title Asc", 'waves') => "title_asc",
        esc_html__("Random", 'waves') => "random",
    );
    
    $waves_element_options['other']['heading_tag'] = array(
        esc_html__( 'H1', 'waves') => 'h1',
        esc_html__( 'H2', 'waves') => 'h2',
        esc_html__( 'H3', 'waves') => 'h3',
        esc_html__( 'H4', 'waves') => 'h4',
        esc_html__( 'H5', 'waves') => 'h5',
        esc_html__( 'H6', 'waves') => 'h6'
    );

    // Button Global
    $waves_element_options['other']['button'] = array(
        array(
            'type' => 'vc_link',
            'heading' => esc_html__('Button Link & Text', 'waves'),
            'param_name' => 'link',
            'value' => esc_html__('url:#|title:Your%20Button', 'waves'),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Button Color', 'waves'),
            'param_name' => 'color',
            'value' => '',
            "admin_label" => true
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Button Size', 'waves'),
            'param_name' => 'size',
            'value' => array(esc_html__("Large", 'waves')=>"large",esc_html__("Normal", 'waves')=>"normal",esc_html__("Small", 'waves')=>"small"),
            'std' => 'small',
            "admin_label" => true
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Button Style', 'waves'),
            'param_name' => 'style',
            'value' => array(
                esc_html__("Border", 'waves') => "border",
                esc_html__("Flat", 'waves') => "flat",
                esc_html__("Border + Radius", 'waves') => "border uk-button-radius",
                esc_html__("Flat + Radius", 'waves') => "flat uk-button-radius",
            ),
            'std' => 'default',
            "admin_label" => true
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Hover Style', 'waves'),
            'param_name' => 'hover',
            'value' => array(
                esc_html__("Dark Hover", 'waves') => "dark-hover",
                esc_html__("White Hover", 'waves') => "light-hover",
                esc_html__("Invert Colors", 'waves') => "invert-colors",
                esc_html__("No Hover", 'waves') => "no-hover",
            ),
            'std' => '',
            "admin_label" => true
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Button Margin', 'waves'),
            'param_name' => 'margin',
            'value' => '0,10,0,10',
            'description' => esc_html__( 'Top , Right , Bottom , Left (0,10,0,0 etc)', 'waves'),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Animate Icon on Hover?', 'waves'),
            'param_name' => 'animate_icon',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => 'true',
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Set Target', 'waves'),
            'param_name' => 'target',
            'value' => array(
                esc_html__("Blank", 'waves') => "_blank",
                esc_html__("Self", 'waves') => "_self",
            ),
            'std' => '_self',
        ),
    );
    // Font Icons Global
    $waves_element_options['other']['icon'] = array(
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Choose Library, Set Icon', 'waves'),
            'value' => array(
                esc_html__('None', 'waves') => 'none',
                esc_html__('Elegant Themes', 'waves') => 'eticons',
                esc_html__('Ion Icons', 'waves') => 'ionicons',
                esc_html__('Font Awesome', 'waves') => 'fontawesome',
                esc_html__('Open Iconic', 'waves') => 'openiconic',
                esc_html__('Typicons', 'waves') => 'typicons',
                esc_html__('Entypo', 'waves') => 'entypo',
                esc_html__('Linecons', 'waves') => 'linecons',
                esc_html__('Image', 'waves') => 'fi_image',
            ),
            'param_name' => 'icon',
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('Icon', 'waves'),
            'param_name' => 'eticons',
            'value' => 'et-mobile',
            'settings' => array(
                'type' => 'eticons',
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon',
                'value' => 'eticons',
            ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('Icon', 'waves'),
            'param_name' => 'ionicons',
            'value' => 'ion-alert',
            'settings' => array(
                'type' => 'ionicons',
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon',
                'value' => 'ionicons',
            ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('Icon', 'waves'),
            'param_name' => 'fontawesome',
            'value' => 'fa fa-instagram',
            'settings' => array(
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon',
                'value' => 'fontawesome',
            ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('Icon', 'waves'),
            'param_name' => 'openiconic',
            'value' => 'vc-oi vc-oi-dial',
            'settings' => array(
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'type' => 'openiconic',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon',
                'value' => 'openiconic',
            ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('Icon', 'waves'),
            'param_name' => 'typicons',
            'value' => 'typcn typcn-adjust-brightness',
            'settings' => array(
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'type' => 'typicons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon',
                'value' => 'typicons',
            ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('Icon', 'waves'),
            'param_name' => 'entypo',
            'value' => 'entypo-icon entypo-icon-note',
            'settings' => array(
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'type' => 'entypo',
                'iconsPerPage' => 300, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon',
                'value' => 'entypo',
            ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('Icon', 'waves'),
            'param_name' => 'linecons',
            'value' => 'vc_li vc_li-heart',
            'settings' => array(
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'type' => 'linecons',
                'iconsPerPage' => 200, // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'icon',
                'value' => 'linecons',
            ),
        ),
        array(
            'type' => 'attach_image',
            'heading' => esc_html__('Thumbnail Image', 'waves'),
            'param_name' => 'fi_image',
            'dependency' => array(
                'element' => 'icon',
                'value' => 'fi_image',
            ),
        ),
    );
    // Font Icon Styles
    $waves_element_options['other']['icon_style'] = array(
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Font Color', 'waves'),
            'param_name' => 'fi_color',
            'dependency' => array(
                'element' => 'icon',
                'value' => array('ionicons', 'fontawesome', 'openiconic', 'typicons', 'entypo', 'linecons', 'pixelicons', 'eticons'),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Icon Background Color', 'waves'),
            'param_name' => 'fi_bgcolor',
            'dependency' => array(
                'element' => 'icon',
                'value' => array('ionicons', 'fontawesome', 'openiconic', 'typicons', 'entypo', 'linecons', 'pixelicons', 'eticons'),
            ),
        ),
    );

    // Inside Hovers
    $waves_element_options['other']['inside_hovers'] = array(
        esc_html__('Style 1', 'waves')=>'',
        esc_html__('Style 2', 'waves')=>'tw-hover-style-2',
        esc_html__('Style 3', 'waves')=>'tw-hover-style-3',
        esc_html__('Style 4', 'waves')=>'tw-hover-style-4',
        esc_html__('Style 5', 'waves')=>'tw-hover-style-5',
    );

    // Option Groups
    $waves_element_options['groups'] = array(
        'animation'  => __('Animation', 'waves'),
        'extra'      => __('Extra', 'waves'),
        'styling'    => __('Styling', 'waves'),
        'responsive' => __('Responsive', 'waves'),
        'carousel'   => __('Carousel', 'waves'),
        'slider'     => __('Slider', 'waves'),
        'custom'     => __('Customize', 'waves'),
        'font'       => __('Font', 'waves'),
    );
    
    // Dimension Global
    $waves_element_options['other']['height'] = array(
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Height Full Screen?', 'waves'),
            'param_name' => 'tw_dimension_type',
            'value' => array(
                esc_html__("No", 'waves')=>"",
                esc_html__("Fullscreen", 'waves')=>"fullscreen",
                esc_html__("Fullscreen Offset", 'waves')=>"fullscreen-offset",
                esc_html__("Custom Min Height", 'waves')=>"custom-min-height"
            ),
        ),
        array(
            'type' => 'tw_number',
            'heading' => esc_html__( 'Custom Min Height', 'waves'),
            'min'=>1,
            'step'=>1,
            'value' =>700,
            'param_name' => 'tw_dimension_height',
            'dependency' => array(
                'element' => 'tw_dimension_type',
                'value' => 'custom-min-height',
            ),
        ),
    );
    // Carousel Global
    $waves_element_options['other']['carousel'] = array(
        array(
            'type' => 'tw_number',
            'heading' => esc_html__( 'Items', 'waves'),
            'min'=>1,
            'step'=>1,
            'value' =>1,
            'param_name' => 'items',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'tw_number',
            'heading' => esc_html__( 'Margin', 'waves'),
            'value' =>0,
            'param_name' => 'margin',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Lowest Height', 'waves'),
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'param_name' => 'auto-height-lowest',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Center ?', 'waves'),
            'param_name' => 'center',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => '',
            'dependency' => array(
                'element' => 'items',
                'value_not_equal_to' => array( '1' , 1 ),
            ),
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Dots ?', 'waves'),
            'param_name' => 'dots',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => 'true',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Dots Each ?', 'waves'),
            'param_name' => 'dots-each',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => 'true',
            'dependency' => array(
                'element' => 'dots',
                'value' => 'true',
            ),
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Nav ?', 'waves'),
            'param_name' => 'nav',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => 'true',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Loop ?', 'waves'),
            'param_name' => 'loop',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => '',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),    
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Auto Width ?', 'waves'),
            'param_name' => 'auto-width',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => '',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Autoplay ?', 'waves'),
            'param_name' => 'autoplay',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => '',
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Autoplay Hover Pause ?', 'waves'),
            'param_name' => 'autoplay-hover-pause',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            'std' => '',
            'dependency' => array(
                'element' => 'autoplay',
                'value' => 'true',
            ),
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
        array(
            'type' => 'tw_number',
            'heading' => esc_html__( 'Autoplay Timeout', 'waves'),
            'min'=>0,
            'step'=>100,
            'value' =>5000,
            'param_name' => 'autoplay-timeout',
            'dependency' => array(
                'element' => 'autoplay',
                'value' => 'true',
            ),
            'group' => esc_html($waves_element_options['groups']['carousel']),
        ),
    );
    
    // -----------
    $waves_element_options['outer'] = array(
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Large Screens', 'waves'),
            'param_name' => 'large_screens',
            'value' => array(esc_html__('Hide', 'waves') => 'true'),
            "group" => esc_html($waves_element_options['groups']['responsive']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Desktop', 'waves'),
            'param_name' => 'desktop',
            'value' => array(esc_html__('Hide', 'waves') => 'true'),
            "group" => esc_html($waves_element_options['groups']['responsive']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Tablet Landscape', 'waves'),
            'param_name' => 'tablet',
            'value' => array(esc_html__('Hide', 'waves') => 'true'),
            "group" => esc_html($waves_element_options['groups']['responsive']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Mobile Landscape', 'waves'),
            'param_name' => 'mobile',
            'value' => array(esc_html__('Hide', 'waves') => 'true'),
            "group" => esc_html($waves_element_options['groups']['responsive']),
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__("Parallax", 'waves'),
            "param_name" => "parallax",
            'value' => '',
            "description" => wp_kses_post(sprintf(__( 'Check out the UiKit <a href="%s">Parallax Documentation</a> and then you can see it more. Example: bgy: -200;', 'waves'), 'https://getuikit.com/docs/parallax')),
            'group' => esc_html($waves_element_options['groups']['extra']),
        ),
        array(
            "type" => "tw_number",
            "class" => "",
            "heading" => esc_html__("Overlay", 'waves'),
            "param_name" => "overlay",
            "value" => "",
            "min" => 0,
            "max" => 1,
            "step" => 0.1,
            "description" => esc_html__("Example:0.4 - It means 40% Opacity. If you set the Background Color with Image then you can set the Opacity here and Your Images will cover your Background Color.", 'waves'),
            'group' => esc_html($waves_element_options['groups']['extra']),
        ),
        array(
            "type" => "textarea_raw_html",
            "class" => "",
            "heading" => esc_html__("Youtube or Vimeo Insert on Background", 'waves'),
            "param_name" => "bg_video",
            "value" => "",
            "description" => esc_html__("Here you can insert Full Youtube or Vimeo Video Links. Example: https://www.youtube.com/watch?v=OgJMJhO4pKM", 'waves'),
            'group' => esc_html($waves_element_options['groups']['extra']),
        ),
    );
    $waves_element_options['general'] = array(
        array(
            'type' => 'css_editor',
            'heading' => esc_html__('CSS box', 'waves'),
            'param_name' => 'css',
            'group' => esc_html($waves_element_options['groups']['styling']),
        ),
        array(
            'type' => 'animation_style',
            'heading' => esc_html__('Animation', 'waves'),
            'param_name' => 'animation',
            'value' => 'none',
            'settings' => array(
                'type' => array(
                    'in',
                    'out',
                    'other',
                    'ui-kit',
                ),
            ),
            "group" => esc_html($waves_element_options['groups']['animation']),
            'dependency' => array(
                'element' => 'animation_customize',
                'value_not_equal_to' => array( 'true' ),
            ),
        ),
        array(
            "type" => "tw_number",
            "class" => "",
            "heading" => esc_html__("Animation Delay", 'waves'),
            "param_name" => "animation_delay",
            "value" => "300",
            "min" => 0,
            "description" => esc_html__("Animation will start after this Delay. Example: 300. Note: Delay will not work UiKit Animations", 'waves'),
            "group" => esc_html($waves_element_options['groups']['animation']),
            'dependency' => array(
                'element' => 'animation_customize',
                'value_not_equal_to' => array( 'true' ),
            ),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Animation Repeat', 'waves'),
            'param_name' => 'animation_repeat',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            "group" => esc_html($waves_element_options['groups']['animation']),
            'dependency' => array(
                'element' => 'animation_customize',
                'value_not_equal_to' => array( 'true' ),
            ),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Insert UiKit Animation?', 'waves'),
            'param_name' => 'animation_customize',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            "group" => esc_html($waves_element_options['groups']['animation']),
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__("Animation Custom Field", 'waves'),
            "param_name" => "animation_custom",
            'value' => 'target: > div div; cls:uk-animation-slide-bottom-medium; delay: 400;',
            "description" => wp_kses_post(sprintf(__( 'Check out the UiKit <a href="%s">Scrollspy Documentation</a> and then you can see it more. Example: target: > div; cls:uk-animation-fade; delay: 200;<br/>carousel - target: empty or (inner selector of .owl-item)', 'waves'), 'https://getuikit.com/docs/scrollspy')),
            'group' => esc_html($waves_element_options['groups']['animation']),
            'dependency' => array(
                'element' => 'animation_customize',
                'value' => 'true',
            ),
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__("Custom Class", 'waves'),
            "param_name" => "custom_class",
            "value" => "",
            "group" => esc_html($waves_element_options['groups']['extra']),
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__("Custom ID", 'waves'),
            "param_name" => "custom_id",
            "value" => "",
            "description" => esc_html__("Note this option will help you build OnePage Scroll. Example: about. Then you should trigger this ID with OnePage Menu with #about link.", 'waves'),
            "group" => esc_html($waves_element_options['groups']['extra']),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__('Add Uk-Light class?', 'waves'),
            'param_name' => 'uk_light',
            'value' => array(esc_html__('Yes', 'waves') => 'true'),
            "description" => esc_html__("Inverse component Colors when displaying the image on dark backgrounds ", 'waves'),
            "group" => esc_html($waves_element_options['groups']['extra']),
        ), 
    );
    $waves_element_options['custom_font'] = array(
        array(
            'type' => 'google_fonts',
            'param_name' => 'google_fonts',
            'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
            'group' => esc_html($waves_element_options['groups']['font']),
            'dependency' => array(
                'element' => 'custom_font',
                'value' => 'yes',
            ),
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Main Title Font Customize from Google Font?', 'waves' ),
            'param_name' => 'custom_font',
            'value' => array( __( 'Yes', 'waves' ) => 'yes' ),
            'description' => __( 'You can choose from 500+ Custom Google Web Fonts.', 'waves' ),
        ),
        array(
            'type' => 'tw_number',
            'heading' => __( 'Set Font Size - Digit Only', 'waves' ),
            'param_name' => 'font_size',
            'value' => '0',
            'group' => esc_html($waves_element_options['groups']['font']),
            'dependency' => array(
                'element' => 'custom_font',
                'value' => 'yes',
            ),
        ),
        array(
            'type' => 'tw_number',
            'heading' => __( 'Set Letter Spacing - Digit Only', 'waves' ),
            'param_name' => 'letter_spacing',
            'value' => '200',
            'description' => __( 'Please Note the EM value will replaced in and 1em = 1000 Photoshop value.', 'waves' ),
            'group' => esc_html($waves_element_options['groups']['font']),
            'dependency' => array(
                'element' => 'custom_font',
                'value' => 'yes',
            ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Set Text Transform', 'waves'),
            'param_name' => 'text_transform',
            'value' => array(
                esc_html__( 'Default', 'waves') => 'none',
                esc_html__( 'Uppercase', 'waves') => 'uppercase',
                esc_html__( 'Lowercase', 'waves') => 'lowercase',
                esc_html__( 'Capitalize', 'waves') => 'capitalize',
            ),
            'std' => 'uppercase',
            'group' => esc_html($waves_element_options['groups']['font']),
            'dependency' => array(
                'element' => 'custom_font',
                'value' => 'yes',
            ),
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__("Wanna Insert custom Margin?", 'waves'),
            "param_name" => "margin",
            "value" => "",
            "description" => esc_html__("Insert Full margin value like following: Example: 10px 0 0 10px", 'waves'),
            "group" => esc_html($waves_element_options['groups']['font']),
            'dependency' => array(
                'element' => 'custom_font',
                'value' => 'yes',
            ),
        ),
    );
    $wavesElems = array(
        'vc_section',
        'vc_row',
        'vc_row_inner',
        'vc_column',
        'vc_column_inner',
        'tw_text',
        'tw_block',
        'vc_accordion',
        'vc_accordion_tab',
        'tw_app_slider',
        'tw_blog',
        'tw_blog_video',
        'tw_blog_post',
        'tw_blog_podcast',
        'tw_blog_word',
        'tw_button',
        'tw_call_to_action',
        'tw_chart_circle',
        'tw_client',
        'tw_client_item',
        'tw_comingsoon',
        'tw_counterup',
        'tw_fancybox',
        'tw_flipbox',
        'tw_flipbox_item',
        'tw_heading',
        'tw_image',
        'tw_images_carousel',
        'tw_gallery',
        'tw_iconbox',
        'tw_instagram',
        'tw_list',
        'tw_job',
        'tw_map',
        'tw_message',
        'tw_post_slider',
        'tw_post_carousel',
        'tw_course_carousel',
        'tw_portfolio',
        'tw_portfolio_carousel',
        'tw_pricinglist',
        'tw_pricingtable',
        'tw_process',
        'tw_process_item',
        'tw_progress_bar',
        'tw_slider',
        'tw_survey',
        'tw_social',
        'vc_tab',
        'vc_tabs',
        'tw_team',
        'tw_testimonial',
        'tw_testimonial_item',
        'tw_timeline',
        'tw_timeline_item',
        'tw_video',
        'gt_slider_iconbox',
        'gt_slider_iconbox_item',
    );
    if (function_exists('lvly_woocommerce') && lvly_woocommerce()){
        $wavesElems[] = 'tw_product_carousel';
    }
    if (!post_type_exists('portfolio')) {
        if (($key = array_search('portfolio', $wavesElems)) !== false) {
            unset($wavesElems[$key]);
        }
    }
    if (!post_type_exists('course')) {
        if (($key = array_search('course', $wavesElems)) !== false) {
            unset($wavesElems[$key]);
        }
    }
    foreach ($wavesElems as $wavesElem) {
        require_once ('elements/' . $wavesElem . '_options.php');
    }
    /* Start - Waves Reorder */
    if(class_exists('WPBMap')){
        class Waves_WPBMap extends WPBMap{
            public static function waves_get_sc(){
                return parent::$sc;
            }
            public static function waves_set_sc($sc){
                return parent::$sc=$sc;
            }
        }
        $vcElems=Waves_WPBMap::waves_get_sc();
        $wavesElemsRev=array_reverse($wavesElems);
        foreach($wavesElemsRev as $elem){
            $preElem=array();
            if(isset($vcElems[$elem])){
                $preElem[$elem]=$vcElems[$elem];
                unset($vcElems[$elem]);
            }
            $vcElems=array_merge($preElem,$vcElems);
        }
//        foreach($wavesElems as $elem){
//            unset($vcElems[$elem]);
//        }
        Waves_WPBMap::waves_set_sc($vcElems);
    }
    /* End   - Waves Reorder */
}

add_filter('vc_shortcodes_css_class', 'change_element_class_name', 10, 2);
function change_element_class_name($class_string, $tag) {
    if($tag == 'vc_widget_sidebar'){
        $class_string .= ' sidebar-area';
    }
   return $class_string;
}

add_action('vc_base_register_admin_css', 'waves_composer_admin_css');
function waves_composer_admin_css() {
    wp_enqueue_style('waves-composer', plugin_dir_url( __FILE__ ).'assets/css/composer.css');
    wp_enqueue_style('ionicons', LVLY_DIR . 'assets/css/ionicons.min.css');
}

// not use - vc_base_register_admin_js
// use - admin_enqueue_scripts
add_action('admin_enqueue_scripts', 'waves_composer_admin_js');
function waves_composer_admin_js() {
    wp_enqueue_script('waves-composer-atts', plugin_dir_url( __FILE__ ).'assets/js/composer-atts.js', array('jquery'), false, true);
}
function waves_rep_param_def($params = array(), $paramsNewDefault = array()) {
    foreach ($params as $i => $paramArray) {
        if (!empty($paramArray['param_name']) && isset($paramsNewDefault[$paramArray['param_name']])) {
            $params[$i]['std']=$paramsNewDefault[$paramArray['param_name']];
        }
    }
    return $params;
}
function waves_rep_param($params = array(), $paramsAtts = array()) {
    foreach ($params as $i => $paramArray) {
        if (!empty($paramArray['param_name']) && !empty($paramsAtts[$paramArray['param_name']])) {
            foreach($paramsAtts[$paramArray['param_name']] as $key=>$val){
                $params[$i][$key]=$val;
            }
        }
    }
    return $params;
}
function waves_filter_param($params,$filter,$eq=true){
    $newParams=array();
    foreach($params as $param){
        if(isset($param['param_name'])){
            $res=in_array($param['param_name'],$filter);
            if($eq&&$res || !$eq&&!$res){
              $newParams[]=$param;  
            }
        }
    }
    return $newParams;
}

/*
* Adding Shortcodes
*/
add_action('init', 'lvly_core_init');
function lvly_core_init(){
    add_shortcode( 'tw_highlight','lvly_tw_highlight' );
    add_shortcode( 'tw_dropcap','lvly_tw_dropcap' );
    add_shortcode( 'tw_get_title','lvly_tw_get_title' );
    add_shortcode( 'tw_breadcrumb','lvly_tw_breadcrumb' );
}
function lvly_tw_highlight( $atts, $content = ""){
    $atts = shortcode_atts( array(
        'text_color' => 'inherit',
        'bg_color' => '#e6e6e6',
    ), $atts, 'tw_highlight' );
    $style = '';
    $style = 'style="color:'.esc_attr($atts['text_color']).'; background-color: '.esc_attr($atts['bg_color']).';"';
    return $content?'<span class="tw-element tw-highlight" '.$style.'>' .esc_html($content).'</span>':'';
}
function lvly_tw_dropcap( $atts, $content = ""){
    $atts = shortcode_atts( array(
        'layout' => 'simple',
        'color' => '',
        'bg_color' => '',
    ), $atts, 'tw_dropcap' );
    $style = '';
    if($atts['color'] || $atts['bg_color']){
        $style .= ' style="';
        $style .= $atts['color'] ? ('color:'.esc_attr($atts['color']).';') : '';
        $style .= $atts['bg_color'] ? ('background-color:'.esc_attr($atts['bg_color']).';') : '';
        $style .= '"';
    }
    return $content?'<span class="tw-element tw-dropcaps uk-text-bold dropcap-'.esc_attr($atts['layout']).'"'.$style.'>' .esc_html($content).'</span>':'';
}
function lvly_tw_get_title() {
    global $post;
    return $post->post_title;
}
function lvly_tw_breadcrumb() {
    if (function_exists('bcn_display')) {
        echo '<div class="tw-breadcrumb-container uk-position-absolute uk-position-bottom-center tw-element" typeof="BreadcrumbList" vocab="https://schema.org/">';
            bcn_display();
        echo '</div>';
    }
}
/*
* Adding Shortcodes - Admin
*/
add_action('admin_init', 'lvly_elements_include');
function lvly_elements_include() {
    require_once 'waves-shortcode.php';
}
/*
* Adding Templates
*/
require_once 'waves-templates.php';