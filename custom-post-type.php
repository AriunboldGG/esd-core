<?php
if ( ! defined( 'WPINC' ) ) {
	die;
}
/* * *********************** */
/* Attachment Category */
/* * *********************** */
 if (!function_exists('tw_attachment_cat_register')){
    add_action('init', 'tw_attachment_cat_register', 10);
    function tw_attachment_cat_register() {
        register_taxonomy("attachment_cat", array("attachment"), array("hierarchical" => true, "label" => esc_html__("Media Categories", 'waves'), "singular_label" => esc_html__("Media Category", 'waves'), 'rewrite' => array( 'slug' => 'attachment_category')));
    }
 }
/* * *********************** */
/* Custom post type: Portfolio */
/* * *********************** */
if(!post_type_exists( 'portfolio' )){
    if (!function_exists('tw_portfolio_register')){
        add_action('init', 'tw_portfolio_register', 10);
        function tw_portfolio_register() {
            $slug = 'portfolio';
            if(function_exists('waves_option')){
                $slug = waves_option('portfolio_slug', 'portfolio');
            }
             
            $labels = array(
                'name' => esc_html__('Portfolios','waves'),
                'singular_name' => esc_html__('Portfolio', 'waves'),
                'add_new' => esc_html__('Add New', 'waves'),
                'add_new_item' => esc_html__('Add New Portfolio', 'waves'),
                'edit_item' => esc_html__('Edit Portfolio', 'waves'),
                'new_item' => esc_html__('New Portfolio', 'waves'),
                'all_items' => esc_html__('All Portfolios', 'waves'),
                'view_item' => esc_html__('View Portfolio', 'waves'),
                'search_items' => esc_html__('Search Portfolios', 'waves'),
                'not_found' =>  esc_html__('No Portfolio found', 'waves'),
                'not_found_in_trash' => esc_html__('No Portfolio found in Trash', 'waves'),
                'menu_name' => esc_html__('Portfolios', 'waves')
            );    
            $args = array(
                'labels' => $labels,
                'public' => true,
                'has_archive' => false,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'hierarchical' => false,

                'menu_icon' => 'dashicons-tagcloud',
                'rewrite' => array( 'slug' => $slug),
                'supports' => array('title', 'editor', 'author', 'page-attributes','thumbnail','custom-fields','revisions')
            );
            register_post_type('portfolio', $args);
            register_taxonomy("portfolio_cat", array("portfolio"), array("hierarchical" => true, "label" => esc_html__("Portfolio Categories", 'waves'), "singular_label" => esc_html__("Portfolio Category", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
            flush_rewrite_rules();
        }
    }

    if (!function_exists('tw_portfolio_edit_columns')){
        add_filter('manage_edit-portfolio_columns', 'tw_portfolio_edit_columns');
        function tw_portfolio_edit_columns($columns){	
            $newcolumns = array(
                "cb" => "<input type=\"checkbox\" />",
                "title" => esc_html__("Portfolio Title", 'waves'),
                "portfolio_cat" => esc_html__("Categories", 'waves'),
            );
            $columns= array_merge($newcolumns, $columns);
            return $columns;
        }
    }
}

if(!post_type_exists( 'lovelyblock' )){

    /* * *********************** */
    /* Custom post type: Lvly Content Block */
    /* * *********************** */

    if (!function_exists('tw_lovelyblock_register')){
        add_action('init', 'tw_lovelyblock_register', 10);
        function tw_lovelyblock_register() {
            $slug = 'lovelyblock';
             
            $labels = array(
                'name' => esc_html__('Content Blocks','waves'),
                'singular_name' => esc_html__('Content Block', 'waves'),
                'add_new' => esc_html__('Add New', 'waves'),
                'add_new_item' => esc_html__('Add New', 'waves'),
                'edit_item' => esc_html__('Edit Block', 'waves'),
                'new_item' => esc_html__('New Content Block', 'waves'),
                'all_items' => esc_html__('Content Blocks', 'waves'),
                'view_item' => esc_html__('View Content Block', 'waves'),
                'search_items' => esc_html__('Search Content Blocks', 'waves'),
                'not_found' =>  esc_html__('No Content Block found', 'waves'),
                'not_found_in_trash' => esc_html__('No Content Block found in Trash', 'waves'),
                'menu_name' => esc_html__('Content Block', 'waves')
            );    
            $args = array(
                'labels' => $labels,
                'public' => true,
                'has_archive' => false,
                'publicly_queryable' => true,
                'exclude_from_search' => true,
                'show_ui' => true,
                'hierarchical' => false,

                'menu_icon' => 'dashicons-tagcloud',
                'rewrite' => array( 'slug' => $slug),
                'supports' => array('title', 'editor', 'author', 'revisions')
            );
            register_post_type('lovelyblock', $args);
            register_taxonomy("lovelyblock_cat", array("lovelyblock"), array("hierarchical" => true, "label" => esc_html__("Block Categories", 'waves'), "singular_label" => esc_html__("Block Category", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
            flush_rewrite_rules();
        }
    }

    if (!function_exists('tw_lovelyblock_edit_columns')){
        add_filter('manage_edit-lovelyblock_columns', 'tw_lovelyblock_edit_columns');
        function tw_lovelyblock_edit_columns($columns){	
            $newcolumns = array(
                "cb" => "<input type=\"checkbox\" />",
                "title" => esc_html__("Block Title", 'waves'),
                "lovelyblock_cat" => esc_html__("Categories", 'waves'),
            );
            $columns= array_merge($newcolumns, $columns);
            return $columns;
        }
    }
}

if(!post_type_exists( 'lovelyjob' )){

    /* * *********************** */
    /* Custom post type: Lvly Content Block */
    /* * *********************** */

    if (!function_exists('tw_lovelyjob_register')){
        add_action('init', 'tw_lovelyjob_register', 10);
        function tw_lovelyjob_register() {
            $slug = 'job';
             
            $labels = array(
                'name' => esc_html__('Jobs','waves'),
                'singular_name' => esc_html__('Job', 'waves'),
                'add_new' => esc_html__('Add New', 'waves'),
                'add_new_item' => esc_html__('Add New', 'waves'),
                'edit_item' => esc_html__('Edit Job', 'waves'),
                'new_item' => esc_html__('New Job', 'waves'),
                'all_items' => esc_html__('Jobs', 'waves'),
                'view_item' => esc_html__('View Job', 'waves'),
                'search_items' => esc_html__('Search Jobs', 'waves'),
                'not_found' =>  esc_html__('No Job found', 'waves'),
                'not_found_in_trash' => esc_html__('No Job found in Trash', 'waves'),
                'menu_name' => esc_html__('Job', 'waves')
            );    
            $args = array(
                'labels' => $labels,
                'public' => true,
                'has_archive' => false,
                'publicly_queryable' => true,
                'exclude_from_search' => true,
                'show_ui' => true,
                'hierarchical' => false,

                'menu_icon' => 'dashicons-tagcloud',
                'rewrite' => array( 'slug' => $slug),
                'supports' => array('title', 'editor', 'author', 'revisions')
            );
            register_post_type('lovelyjob', $args);
            register_taxonomy("lovelyjob_cat", array("lovelyjob"), array("hierarchical" => true, "label" => esc_html__("Job Categories", 'waves'), "singular_label" => esc_html__("Job Category", 'waves'), 'rewrite' => array( 'slug' => $slug.'_category')));
            flush_rewrite_rules();
        }
    }

    if (!function_exists('tw_lovelyjob_edit_columns')){
        add_filter('manage_edit-lovelyjob_columns', 'tw_lovelyjob_edit_columns');
        function tw_lovelyjob_edit_columns($columns){	
            $newcolumns = array(
                "cb" => "<input type=\"checkbox\" />",
                "title" => esc_html__("Job Title", 'waves'),
                "lovelyjob_cat" => esc_html__("Categories", 'waves'),
            );
            $columns= array_merge($newcolumns, $columns);
            return $columns;
        }
    }
}

add_action("manage_posts_custom_column", "lvly_custom_columns");
function lvly_custom_columns($column) {
    global $post;
    switch ($column) {
        case "portfolio_cat":
            echo get_the_term_list($post->ID, 'portfolio_cat', '', ', ', '');
            break;
        case "lovelyblock_cat":
            echo get_the_term_list($post->ID, 'lovelyblock_cat', '', ', ', '');
            break;
        case "lovelyjob_cat":
            echo get_the_term_list($post->ID, 'lovelyjob_cat', '', ', ', '');
            break;
    }
}
        
add_action('restrict_manage_posts', 'lvly_filter_post_type_by_taxonomy');
function lvly_filter_post_type_by_taxonomy() {
	global $typenow;
        $post_types = array(
            'portfolio' => 'portfolio_cat',
            'lovelyjob' => 'lovelyjob_cat',
            'lovelyblock' => 'lovelyblock_cat'
        );
        foreach($post_types as $post_type => $taxonomy){
            if ($typenow == $post_type) {
                    $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
                    $info_taxonomy = get_taxonomy($taxonomy);
                    wp_dropdown_categories(array(
                            'show_option_all' => esc_html__( "All Categories", 'waves' ),
                            'taxonomy'        => $taxonomy,
                            'name'            => $taxonomy,
                            'hierarchical'    => 1,
                            'orderby'         => 'name',
                            'selected'        => $selected,
                            'show_count'      => true,
                            'hide_empty'      => true,
                    ));
            }
	}
}
add_filter('parse_query', 'lvly_convert_id_to_term_in_query');
function lvly_convert_id_to_term_in_query($query) {
	global $pagenow;
        $post_types = array(
            'portfolio' => 'portfolio_cat',
            'lovelyjob' => 'lovelyjob_cat',
            'lovelyblock' => 'lovelyblock_cat'
        );
        foreach($post_types as $post_type => $taxonomy){
            $q_vars    = &$query->query_vars;
            if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
                    $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
                    $q_vars[$taxonomy] = $term->slug;
            }
        }
}