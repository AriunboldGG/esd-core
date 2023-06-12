<?php 
global $waves_element_options;
$params=array(
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Items', 'waves'),
        'param_name' => 'tw_pricinglist_items',
        'value' => urlencode( json_encode( array(
                array(
                    'price'=>'$19',
                    'title'=>'Western Sunrise',
                    'content'=>'Duis odio sit amet nibh vulputate auctor.',
                ),
                array(
                    'price'=>'$24',
                    'title'=>'Asparagus spaghetti',
                    'content'=>'Duis odio sit amet nibh vulputate auctor.',
                ),
                array(
                    'price'=>'$35',
                    'title'=>'French Toast',
                    'content'=>'Duis odio sit amet nibh vulputate auctor.',
                ),
                array(
                    'price'=>'$22',
                    'title'=>'Pasta bolognese',
                    'content'=>'Duis odio sit amet nibh vulputate auctor.',
                ),
        ) ) ),
        'params' => array(
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Is Featured?', 'waves'),
                'param_name' => 'featured',
                'std' => false,
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Insert Image', 'waves'),
                "description" => esc_html__( "Recommended Image Size 60x60", 'waves' ),
                'param_name' => 'image',
                'value' => ''
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Price', 'waves'),
                'param_name' => 'price',
                'value' => esc_html__('19$', 'waves'),
                "admin_label" => true,
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Title', 'waves'),
                'param_name' => 'title',
                'value' => esc_html__('Western Sunrise', 'waves'),
                "admin_label" => true,
            ),
            array(
                'type' => 'textarea',
                'heading' => esc_html__( 'Content', 'waves'),
                'param_name' => 'content',
                'value' => esc_html__('Duis sed odio sit amet nibh vulputate cursus sit amet', 'waves'),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Title Link', 'waves'),
                "description" => esc_html__( "Your Inserted Custom Links will applied on Title with New Window.", 'waves' ),
                'param_name' => 'link',
                'value' => '',
            ),
        ),
    ),
);
$params=array_merge(
    $params,
    $waves_element_options['general'],
    $waves_element_options['custom_font']
);
vc_map(array(
    "name" => esc_html__( "Pricing List", 'waves'),
    "description" => esc_html__( "Product Image with Price and Description.", 'waves' ),
    "base" => "tw_pricinglist",
    "icon" => "", // Simply pass url to your icon here
    "category" => 'ThemeWaves',
    "params" => $params,
));
class WPBakeryShortCode_tw_pricinglist extends WPBakeryShortCode{
    /**
    * Used to get field name in vc_map function for google_fonts, font_container and etc..
    *
    * @param $key
    *
    * @since 4.4
    * @return bool
    */
    protected function getField( $key ) {
        return isset( $this->fields[ $key ] ) ? $this->fields[ $key ] : false;
    }

    /**
    * Get param value by providing key
    *
    * @param $key
    *
    * @since 4.4
    * @return array|bool
    */
    protected function getParamData( $key ) {
            return WPBMap::getParam( $this->shortcode, $this->getField( $key ) );
    }
}