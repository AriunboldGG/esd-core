<?php
if (!function_exists('lvly_settings_rows')) {
    function lvly_settings_rows($settings) {
        if (empty($settings['value'])) {
            $settings['value'] = array();
            foreach($settings['options']['columns'] as $col=>$val) {
                foreach($settings['options']['args'] as $fieldSettings) {
                    $settings['value'][$col][$fieldSettings['id']] = array(isset($fieldSettings['value'])?$fieldSettings['value']:'');
                }
            }
        } ?>
        <div class="type_rows"><?php
            foreach($settings['value'] as $firstColVal) {
                foreach($firstColVal as $firstArg) {
                    //Print Rows
                    foreach ($firstArg as $i=>$helperVal) { ?>
                        <div class="type_rows-item">
                            <div class="type_rows-item-fields"><?php
                                // Print Columns
                                foreach($settings['options']['columns'] as $colSlug=>$colDesc) { ?>
                                    <table class="type_rows-item-column">
                                        <tbody>
                                        <tr><th><label class="tw-label"><strong><?php echo esc_html($colDesc); ?></strong></label></th></tr><?php
                                        foreach($settings['options']['args'] as $fieldSettings) {
                                            $fieldSettings['value'] = isset($settings['value'][$colSlug][$fieldSettings['id']][$i]) ? $settings['value'][$colSlug][$fieldSettings['id']][$i] : (isset($fieldSettings['std'])?$fieldSettings['std']:(isset($fieldSettings['value'])?$fieldSettings['value']:''));
                                            $fieldSettings['id'] = $settings['id'].'['.$colSlug.']['.$fieldSettings['id'].'][]';
                                            $fieldSettings['has_parent'] = true;
                                            call_user_func('lvly_settings', $fieldSettings);
                                        } ?>
                                        </tbody>
                                    </table><?php
                                } ?>
                            </div>
                            <div class="move-buttons">
                                <a href="#" class="button type_rows-item-remove"><span class="dashicons dashicons-trash"></span><?php esc_html_e('Delete Slide', 'waves'); ?></a>
                                <a href="#" class="button type_rows-item-move" data-type="up"><span class="dashicons dashicons-arrow-up-alt"></span><?php esc_html_e('Up', 'waves'); ?></a>
                                <a href="#" class="button type_rows-item-move" data-type="down"><span class="dashicons dashicons-arrow-down-alt"></span><?php esc_html_e('Down', 'waves'); ?></a>
                            </div>
                        </div><?php
                    }
                
                            
                    break;
                } 
                break;
            } ?>
            <div class="add-buttons"><a href="#" class="button type_rows-item-add" title="Add Row"><span class="dashicons dashicons-plus"></span><?php esc_html_e('Add Slide', 'waves'); ?></a></div>
        </div><?php
    }
}
if (!function_exists('lvly_settings_category')) {
    function lvly_settings_category($settings) {
        foreach($settings['options'] as $catSlug => $catName ) { ?>
            <div class="category">
                <input type="checkbox" id="<?php echo esc_attr($settings['id'].'-'.$catSlug); ?>" name="<?php echo esc_attr($settings['id'].'['.$catSlug.']'); ?>" value="<?php echo esc_attr($catSlug);?>" <?php echo isset($settings['value'][$catSlug])?checked($settings['value'][$catSlug], $catSlug, false):'';?> />
                <label for="<?php echo esc_attr($settings['id'].'-'.$catSlug); ?>"><?php echo esc_html($catName); ?></label>
            </div><?php
        }
    }
}
if ( ! function_exists( 'lvly_settings_checkbox' ) ) {
    function lvly_settings_checkbox( $settings ) { ?>
        <input type="checkbox" id="<?php echo esc_attr($settings['id']); ?>-checkbox" name="<?php echo esc_attr($settings['id']); ?>-checkbox" value="1" <?php echo checked($settings['value'], '1', false);?> />
        <input type="hidden"   id="<?php echo esc_attr($settings['id']); ?>"          name="<?php echo esc_attr($settings['id']); ?>" value="<?php echo esc_attr( $settings['value'] ); ?>" /><?php
        // hidden field is required for uncheked value is not saved when default value is true.
    }
}
if (!function_exists('lvly_settings_textarea')) {
    function lvly_settings_textarea($settings) { ?>
        <textarea rows="5" name="<?php echo esc_attr($settings['id']); ?>"><?php echo esc_attr($settings['value']); ?></textarea><?php
    }
}
if (!function_exists('lvly_settings_text')) {
    function lvly_settings_text($settings) { ?>
        <input type="text" name="<?php echo esc_attr($settings['id']); ?>" id="<?php echo esc_attr($settings['id']); ?>" value="<?php echo esc_attr($settings['value']); ?>" /><?php
    }
}
if (!function_exists('lvly_settings_seperator')) {
    function lvly_settings_seperator($settings) { ?>
        <hr><?php
    }
}
if (!function_exists('lvly_settings_number')) {
    function lvly_settings_number($settings) { ?>
        <input type="number" name="<?php echo esc_attr($settings['id']); ?>" id="<?php echo esc_attr($settings['id']); ?>" value="<?php echo esc_attr($settings['value']); ?>" <?php if (!empty($settings['min'])) { echo ' min="'.esc_attr($settings['min']).'"';} if (!empty($settings['max'])) { echo ' max="'.esc_attr($settings['max']).'"';} if (!empty($settings['step'])) { echo ' step="'.esc_attr($settings['step']).'"';} ?> /><?php
    }
}
if (!function_exists('lvly_settings_file')) {
    function lvly_settings_file($settings) { ?>
        <input type="text" id="<?php echo esc_attr($settings['id']); ?>" name="<?php echo esc_attr($settings['id']); ?>" value="<?php echo esc_url($settings['value']); ?>" placeholder="<?php esc_html_e('Your Custom BG Image URL', 'waves');?>" size=""/>
        <a href="#" class="button insert-images theme_button format tw-browseimage"><?php esc_html_e('Insert image', 'waves'); ?></a><?php
    }
}
if (!function_exists('lvly_settings_select')) {
    function lvly_settings_select($settings) { ?>
        <div class="type_select add_item_medium">
            <select class="medium" name="<?php echo esc_attr($settings['id']); ?>"><?php
                foreach($settings['options'] as $key=>$val) { 
                        echo '<option value="'.esc_attr($key).'"'.(strval($settings['value'])===strval($key)?' selected':'').'>'.esc_html($val).'</option>';
                } ?>
            </select>
        </div><?php
    }
}
if (!function_exists('lvly_settings_selectbox')) {
    function lvly_settings_selectbox($settings) {
        $settings['options'] = array('' => esc_html__('Default', 'waves'), 'true' => esc_html__('True','waves'), 'false' => esc_html__('False','waves')); ?>
        <select class="selectbox" name="<?php echo esc_attr($settings['id']); ?>"><?php
            foreach ($settings['options'] as $key=>$val) {
                echo '<option value="'.esc_attr($key).'">'.esc_html($val).'</option>';
            } ?>
        </select><?php
    }
}
if (!function_exists('lvly_settings_selectpost')) {
    function lvly_settings_selectpost($settings) {
        $valueID='';
        $value=empty($settings['value'])?'':$settings['value']; ?>
        <div class="type_selectpost add_item_medium tw-selectpost-container" data-option="<?php echo esc_attr($value); ?>">
            <select class="medium tw_selectpost" name="<?php echo esc_attr($settings['id']); ?>"><?php
                foreach($settings['options'] as $name=>$postVal) {
                    $id='';
                    $label = $postVal;
                    if (is_array($postVal)) {
                        $id = $postVal['id'];
                        $label = $postVal['post_title'];
                    }
                    $selected = '';
                    if ($name==$value) {
                        $valueID=$id;
                        $selected = ' selected="selected"';
                    }
                    echo '<option value="' . esc_attr($name) . '" data-id="' . esc_attr($id) . '"' . esc_attr($selected) . '>' . esc_html($label) . '</option>';
                } ?>
            </select><?php
            $hrefD=admin_url( 'post.php?post=%post%&action=edit' );
            $href= str_replace('%post%', $valueID, $hrefD);
            ?>
            <a href="<?php echo esc_url($href); ?>" target="_blank" class="button tw-select-post-edit" data-href="<?php echo esc_url($hrefD); ?>"><?php esc_html_e('Edit','waves') ?></a>
        </div><?php
    }
}
if (!function_exists('lvly_settings_layout')) {
    function lvly_settings_layout($settings) { ?>
        <div class="type_layout">
            <?php 
            foreach ($settings['options'] as $val => $option) {
                echo '<a href="#" data-value="'.esc_attr($val).'"'.($val == $settings['value'] ? ' class="active"' : '').'><img src="'.esc_url($option['img']).'">'.esc_html($option['title']).'</a>';
            }
            ?>
            <input name="<?php echo esc_attr($settings['id']);?>" type="hidden" value="<?php echo esc_attr($settings['value']);?>" />
        </div><?php
    }
}
if (!function_exists('lvly_settings_radio')) {
    function lvly_settings_radio($settings) { ?>
        <div class="type_radio"><?php
            foreach ($settings['options'] as $option) {
                print '<input type="radio" style="margin-right:5px;" name="' . esc_attr($settings['name']) . '" value="' . esc_attr($option) . '" ';
                print $option == $settings['value'] ? 'checked ' : '';
                print '><span style="margin-right:20px;">' . esc_attr($option) . '</span><br />';
            } ?>
        </div><?php
    }
}
if (!function_exists('lvly_settings_color')) {
    function lvly_settings_color($settings) { ?>
        <div class="color_selector">
            <div class="color_picker"><div style="<?php echo esc_attr('background-color: '.$settings['value']); ?>;" class="color_picker_inner"></div></div>
            <input type="text" class="color_picker_value" id="<?php echo esc_attr($settings['id']); ?>" name="<?php echo esc_attr($settings['id']); ?>" value="<?php echo esc_attr($settings['value']); ?>" />
        </div><?php
    }
}
if (!function_exists('lvly_settings_fi')) {
    function lvly_settings_fi($settings) { ?>
        <div class="type_fi add_item_medium">
            <input class="fi-handler" type="hidden" name="<?php echo esc_attr($settings['id']); ?>" value="<?php print esc_attr($settings['value']);?>"/>
            <div class="button show-fi-modal"><?php esc_html_e('Edit Icon','waves'); ?></div>
            <div class="fi-viewer"></div>
        </div><?php
    }
}
if (!function_exists('lvly_settings_gallery')) {
    function lvly_settings_gallery($settings) {
        $meta = $settings['value'];
        $gallery_thumbs = '';
        $button_text = ($meta) ? esc_html__('Edit Gallery', 'waves') : esc_html__('Upload Images', 'waves');
        if ( $meta ) {
            $thumbs = explode(',', $meta);
            foreach( $thumbs as $thumb ) {
                if (!empty($thumb)) {
                    $gallery_thumbs .= '<li>' . wp_get_attachment_image( $thumb, array(32,32) ) . '</li>';
                }
            }
        } ?>
        <input type="button" class="button gallery_upload" value="<?php echo esc_attr($button_text); ?>" />
        <input type="hidden" class="gallery_images" name="<?php echo esc_attr($settings['id']); ?>" value="<?php echo esc_attr($meta ? $meta : ''); ?>" />
        <ul class="gallery-thumbs"><?php echo wp_kses_post( $gallery_thumbs); ?></ul><?php
    }
}
if (!function_exists('lvly_settings_slideshow')) {
    function lvly_settings_slideshow($settings) {
        global $wpdb;        
        if ( defined('MSWP_AVERTA_VERSION') ) {
            $masters = get_mastersliders();
        }        
        $layer_table = $wpdb->prefix . "layerslider";
        if ($wpdb->get_results($wpdb->prepare( "SHOW TABLES LIKE %s", $layer_table ))) {
            $layers = $wpdb->get_results($wpdb->prepare( "SELECT * FROM $layer_table
                                            WHERE flag_hidden = %s AND flag_deleted = %s
                                            ORDER BY date_c ASC LIMIT 100", '0', '0' ));
        }
        $revo_table = $wpdb->prefix . "revslider_sliders";
        if ($wpdb->get_results($wpdb->prepare( "SHOW TABLES LIKE %s", $revo_table ))) {
            $revos = $wpdb->get_results($wpdb->prepare( "SELECT * FROM $revo_table WHERE id <> %s",''));
        } ?>
        <select class="medium" name="<?php echo esc_attr($settings['id']); ?>" data-value="<?php print esc_attr($settings['value']);?>">
            <option value="none"><?php esc_html_e('None', 'waves'); ?></option><?php
            if (!empty($masters)) {
                    foreach($masters as $key => $item) {
                            $name = empty($item['title']) ? ('Unnamed('.$item['ID'].')') : $item['title'];
                            echo '<option value="[masterslider id=\''.esc_attr($item['ID']).'\']">'.esc_html($name).' (master)</option>';
                    }
            }
            if (!empty($layers)) {
                    foreach($layers as $key => $item) {
                            $name = empty($item->name) ? ('Unnamed('.$item->id.')') : $item->name;
                            echo '<option value="[layerslider id=\''.esc_attr($item->id).'\']">'.esc_html($name).' (layer)</option>';
                    }
            }
            if (!empty($revos)) {
                    foreach($revos as $key => $item) {
                            $name = empty($item->title) ? ('Unnamed('.$item->id.')') : $item->title;
                            echo '<option value="[rev_slider '.esc_attr($item->id).']">'.esc_html($name).' (revo)</option>';
                    }
            } ?>
        </select><?php
    }
}
if (!function_exists('lvly_settings_menu')) {
    function lvly_settings_menu($settings) { ?>
        <?php $menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
        if ( !$menus ) {
                echo '<p>' . esc_html__('Create Menu on Apperance -> Menu section and then Assign it here.', 'waves') . '</p>';
        } else {
            echo '<select name="'.esc_attr($settings['id']).'" data-value="'.esc_attr($settings['value']).'">';
                echo '<option value="">'. esc_html__('Default', 'waves') . '</option>';
                foreach ( $menus as $menu ) {
                        echo '<option value="' . esc_attr($menu->term_id) . '">'. esc_html($menu->name) . '</option>';
                }
            echo '</select>';
        }
    }
}
if (!function_exists('lvly_settings_separator')) {
    function lvly_settings_separator($settings) { ?>
        <div class="waves-separator"></div><?php
    }
}
if (!function_exists('lvly_settings')) {
    function lvly_settings($settings) {
        if (!isset($settings['id'])) {$settings['id']='none';} ?>
        <tr class="<?php echo esc_attr($settings['id'].' waves-type-'.$settings['type']); ?>" data-name="<?php echo esc_attr($settings['id']); ?>"<?php if (isset($settings['dependency'])) {echo ' data-dependency="'.esc_attr(json_encode($settings['dependency'])).'"';}?>>
            <th>
                <label for="<?php echo esc_attr($settings['id']); ?>"><?php
                    if (!empty($settings['name'])) { ?><strong><?php echo esc_html($settings['name']); ?></strong><?php }
                    if (!empty($settings['desc'])) { ?><span><?php echo wp_kses_post($settings['desc']); ?></span><?php } ?>
                </label>
            </th>
            <td><?php
                if (function_exists('lvly_settings_' . $settings['type'])) {
                    if (empty($settings['has_parent'])) {
                        $settings['id'] = LVLY_META . '[' . $settings['id'] . ']';
                    }
                    call_user_func('lvly_settings_' . $settings['type'], $settings);
                } ?>
            </td>
        </tr><?php
    }
}