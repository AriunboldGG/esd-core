<?php
function lvly_post_metabox($post, $metabox) { ?>
    <input type="hidden" name="themewaves_meta_box_nonce" value="<?php echo esc_attr(wp_create_nonce(basename(__FILE__)));?>" />
    <table class="form-table tw-metaboxes">
        <tbody><?php
            if (empty($metabox['args']['has_parent'])) {
                $currID=$post->ID;
                $options = get_post_meta($currID, LVLY_META, true);
            }
            foreach ($metabox['args'] as $settings) {
                $settings['value'] = isset($settings['id'])&&isset($options[$settings['id']]) ? $options[$settings['id']] : (isset($settings['std']) ? $settings['std'] : (isset($settings['value'])?$settings['value']:''));
                call_user_func('lvly_settings', $settings);
            } ?>
        </tbody>
    </table><?php
}

add_action('save_post', 'lvly_savePostMeta');
function lvly_savePostMeta($post_id) {
    
    // verify nonce
    if (!isset($_POST['themewaves_meta_box_nonce']) || !wp_verify_nonce($_POST['themewaves_meta_box_nonce'], basename(__FILE__))) {
            return $post_id;
    }
    
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    if (isset($_POST[LVLY_META])) {
        update_post_meta($post_id, LVLY_META, $_POST[LVLY_META]);
    }
}



/* ================================================================================== */
/*      Save gallery images
/* ================================================================================== */

function lvly_save_images() {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return; }
	
        if ( !isset($_POST['ids']) || !isset($_POST['nonce']) || !wp_verify_nonce( $_POST['nonce'], 'themewaves-ajax' ) ) { return; }
        
        if ( !current_user_can( 'edit_posts' ) ) { return; }
 
	$ids = strip_tags(rtrim($_POST['ids'], ','));
        
	// update thumbs
	$thumbs = explode(',', $ids);
	$gallery_thumbs = '';
	foreach( $thumbs as $thumb ) {
            if (!empty($thumb)) {
		$gallery_thumbs .= '<li>' . wp_get_attachment_image( $thumb, array(32,32) ) . '</li>';
            }
	}

	echo balanceTags($gallery_thumbs);

	die();
}
add_action('wp_ajax_lvly_save_images', 'lvly_save_images');