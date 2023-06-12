<?php
global $waves_element_options;

    $defMarker=LVLY_DIR.'assets/images/map-marker.png';
    
$params=array(
    array(
        "type" => "textfield",
        "heading" => esc_html__("Latitude", 'waves'),
        "param_name" => "lat",
        "value" => "40.0712145",
        'description'=>wp_kses_post(__('<a href="http://www.latlong.net/" target="_blank" title="Get Longitude and Latitude">You can get it here.</a> Latitude. Note: Only Digit (max:90, min:-90)', 'waves')),
    ),
    array(
        "type" => "textfield",
        "heading" => esc_html__("Longitude", 'waves'),
        "param_name" => "lng",
        "value" => "-83.4495123",
        'description'=>wp_kses_post(__('<a href="http://www.latlong.net/" target="_blank" title="Get Longitude and Latitude">You can get it here.</a> Longitude. Note: Only Digit (max:180, min:-180)', 'waves')),
    ),
    array(
        "type" => "tw_number",
        "min" => 0,
        "max" => 21,
        "heading" => esc_html__("Zoom", 'waves'),
        "param_name" => "zoom",
        'description'=>esc_html__('Most roadmap imagery is available from zoom levels 0 to 18', 'waves'),
        "value" => "3",
    ),
    array(
        "type" => "textfield",
        "heading" => esc_html__("Your Style Name", 'waves'),
        "param_name" => "style_name",
        "value" => "Styled",
        "admin_label" => true,
    ),
    array(
        'type' => 'textarea_raw_html',
        'heading' => esc_html__( 'Style Option', 'waves'),
        'param_name' => 'json',
        'value' => waves_encode(rawurlencode('[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]}]')),
        'description'=>wp_kses(__('<a href="https://snazzymaps.com/explore" target="_blank" title="Snazzy Maps">Snazzy Maps</a>. Click the generated Popular Maps or you can create your own and insert it your or others ARRAYS.', 'waves'),array('a' => array('href' => array(),'title' => array()))),
    ),
    array(
        "type" => "tw_number",
        "min" => 0,
        "heading" => esc_html__("Min Height", 'waves'),
        "param_name" => "height",
        "value" => 350,
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Mouse Wheel on Scroll?', 'waves'),
        'description' => esc_html__( 'If you want to disable it then uncheck this option.', 'waves'),
        'param_name' => 'mouse_wheel',
        'value' => array( esc_html__( 'Enable', 'waves') => 'true' )
    ),
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Markers', 'waves'),
        'param_name' => 'markers',
        "group" => esc_html__("Markers & More", 'waves'),
        'value' => urlencode( json_encode( array(
                array(
                    'title' => esc_html__('Marker 1', 'waves'),
                    'lat' => '41.5538491',
                    'lng' => '-82.918092',
                    'icon' => esc_url($defMarker),
                    'icon_width' => 34,
                    'icon_height' => 54,
                    'content' => esc_html__('Content 1', 'waves'),
                ),
                array(
                    'title' => esc_html__('Marker 2', 'waves'),
                    'lat' => '40.5538493',
                    'lng' => '-81.918094',
                    'icon' => esc_url($defMarker),
                    'icon_width' => 34,
                    'icon_height' => 54,
                    'content' => esc_html__('Content 2', 'waves'),
                )
        ) ) ),
        'params' => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__("Marker Title", 'waves'),
                "param_name" => "title",
                "value" => esc_html__("ThemeWaves is BEST, Cheers!", 'waves'),
                'admin_label' => true
            ),
            array(
                'type' => 'textarea',
                'heading' => esc_html__( 'Marker Content', 'waves'),
                'param_name' => 'content',
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Latitude", 'waves'),
                "param_name" => "lat",
                "value" => "40.5538491",
                'description'=>esc_html__('Latitude. Note: Only Digit (max:90, min:-90)', 'waves'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Longitude", 'waves'),
                "param_name" => "lng",
                "value" => "-81.918092",
                'description'=>esc_html__('Longitude. Note: Only Digit (max:180, min:-180)', 'waves'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Upload Custom Marker Image', 'waves'),
                'description' => esc_html__( 'Default Marker located in lvly/assets/images directory', 'waves'),
                'param_name' => 'icon',
                'value' => ''
            ),
            array(
                "type" => "tw_number",
                "min" => 0,
                "heading" => esc_html__("Marker Image Width", 'waves'),
                "param_name" => "icon_width",
                "value" => 34,
            ),
            array(
                "type" => "tw_number",
                "min" => 0,
                "heading" => esc_html__("Marker Image Height", 'waves'),
                "param_name" => "icon_height",
                "value" => 54,
            ),
        ),
    ),
    array(
            'type' => 'checkbox',
            'heading' => esc_html__('Use Custom Contact with CF 7','waves'),
            'param_name' => 'contact',
            "group" => esc_html__("Markers & More", 'waves'),
            'value' => array(esc_html__( 'Yes','waves')=>'true')
    ),
    array(
        "type" => "textfield",
        "heading" => esc_html__("Map Title", 'waves'),
        "param_name" => "map_title",
        "group" => esc_html__("Markers & More", 'waves'),
        "value" => "",
        'dependency' => array(
            'element' => 'contact',
            'value' => array('true'),
        ),
    ),
    array(
        'type' => 'textarea',
        'heading' => esc_html__( 'Map Description', 'waves'),
        'param_name' => 'map_desc',
        "group" => esc_html__("Markers & More", 'waves'),
        'dependency' => array(
            'element' => 'contact',
            'value' => array('true'),
        ),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__( 'Background Color', 'waves'),
        'param_name' => 'map_bg_color',
        "group" => esc_html__("Markers & More", 'waves'),
        'value' =>'#ddd',
        'dependency' => array(
            'element' => 'contact',
            'value' => array('true'),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Contact Form 7', 'waves'),
        'value' =>$waves_element_options['other']['contact_form_7'],
        'param_name' => 'map_contact',
        "group" => esc_html__("Markers & More", 'waves'),
        'dependency' => array(
            'element' => 'contact',
            'value' => array('true'),
        ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general']
);
vc_map(array(
    "name" => esc_html__( "Google Map", 'waves'),
    "description" => esc_html__( "Customizable Snazzy Map.", 'waves' ),
    "base" => "tw_map",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_map extends WPBakeryShortCode{}