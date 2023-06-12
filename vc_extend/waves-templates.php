<?php
add_action( 'lvly_build_custom_templates_action', 'lvly_register_custom_templates' );
function lvly_register_custom_templates() {
    global $lvly_templates;
    $lvly_templates['filters'] = array(
        'accordion' => array(
            'filter' => 'filter-accordion',
            'text'   => esc_html__( 'Accordion', 'waves' ),
        ),
        'blog' => array(
            'filter' => 'filter-blog',
            'text'   => esc_html__( 'Blog', 'waves' )
        ),
        'coming-soon' => array(
            'filter' => 'filter-coming-soon',
            'text'   => esc_html__( 'Coming Soon', 'waves' ),
        ),
        'contact' => array(
            'filter' => 'filter-contact',
            'text'   => esc_html__( 'Contact', 'waves' ),
        ),
        'counter' => array(
            'filter' => 'filter-counter',
            'text'   => esc_html__( 'Counter', 'waves' ),
        ),
        'flipbox' => array(
            'filter' => 'filter-flipbox',
            'text'   => esc_html__( 'Flipbox', 'waves' ),
        ),
        'footer' => array(
            'filter' => 'filter-footer',
            'text'   => esc_html__( 'Footer', 'waves' ),
        ),
        'html' => array(
            'filter' => 'filter-html',
            'text'   => esc_html__( 'HTML', 'waves' ),
        ),
        'iconbox' => array(
            'filter' => 'filter-iconbox',
            'text'   => esc_html__( 'Iconbox', 'waves' ),
        ),
        'open-job' => array(
            'filter' => 'filter-open-job',
            'text'   => esc_html__( 'Open Job', 'waves' ),
        ),
        'portfolio' => array(
            'filter' => 'filter-portfolio',
            'text'   => esc_html__( 'Portfolio', 'waves' ),
        ),
        'pricing' => array(
            'filter' => 'filter-pricing',
            'text'   => esc_html__( 'Pricing', 'waves' ),
        ),
        'service' => array(
            'filter' => 'filter-service',
            'text'   => esc_html__( 'Service', 'waves' ),
        ),
        'shop' => array(
            'filter' => 'filter-shop',
            'text'   => esc_html__( 'Shop', 'waves' ),
        ),
        'tab' => array(
            'filter' => 'filter-tab',
            'text'   => esc_html__( 'Tab', 'waves' ),
        ),
        'table' => array(
            'filter' => 'filter-table',
            'text'   => esc_html__( 'Table', 'waves' ),
        ),
        'team' => array(
            'filter' => 'filter-team',
            'text'   => esc_html__( 'Team', 'waves' ),
        ),
        'testimonials' => array(
            'filter' => 'filter-testimonials',
            'text'   => esc_html__( 'Testimonials', 'waves' ),
        ),
        'timeline' => array(
            'filter' => 'filter-timeline',
            'text'   => esc_html__( 'Timeline', 'waves' ),
        ),
        'video' => array(
            'filter' => 'filter-video',
            'text'   => esc_html__( 'Video', 'waves' ),
        ),
    );
    $lvly_templates['templates'] = array(
        array(
            'name'          => esc_html__( 'Tab Studio', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/1.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'tab',
            'content'       => <<<CONTENT
[vc_row size="uk-section-large"][vc_column][tw_heading subtitle="" title="What We Do" title_animate=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][vc_tabs layout="uk-flex-center" tab_id="5321adef-1c64-1"][vc_tab title="About Us" tab_id="1500629325136-2"][vc_row_inner equal_height="" css=".vc_custom_1511793955984{margin-top: 70px !important;}"][vc_column_inner width="1/2"][tw_heading title_align="uk-text-left" subtitle="" title="Our Skills" heading_tag="h5" title_animate=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum nunc etiam pharetra erat fermentu feugiat velit mauris. Egestas quam utero aliquam massa nisl quis neque Lorem ipsum proin gravida veltiro velit auctor aliquet aenean sociosqu sollicitudi bibendum auctor quis nisirota elit dorest consequat ipsum nec sagittis elit.[/tw_heading][/vc_column_inner][vc_column_inner width="1/2"][tw_progress_bar][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab title="Values" tab_id="1500629377303-1-3"][vc_row_inner equal_height="" css=".vc_custom_1511793964280{margin-top: 70px !important;}"][vc_column_inner width="1/3"][tw_heading title_align="uk-text-left" subtitle="" title="Our Skills" heading_tag="h5" title_animate=""]Class aptent taciti sociosqu adero litora torquent perso conubia nostra perat mauris in erat justo nullam neque seder mauris egestas quam amet nibh. Vulputate cursus sitato amet mauris morbi accumsan ipsum velit name necrot tellus tincidunt ornare consequat auctor.[/tw_heading][/vc_column_inner][vc_column_inner width="1/3"][tw_heading title_align="uk-text-left" subtitle="" title="Our Vision" heading_tag="h5" title_animate=""]Class aptent taciti sociosqu adero litora torquent perso conubia nostra perat mauris in erat justo nullam neque seder mauris egestas quam amet nibh. Vulputate cursus sitato amet mauris morbi accumsan ipsum velit name necrot tellus tincidunt ornare consequat auctor.[/tw_heading][/vc_column_inner][vc_column_inner width="1/3"][tw_heading title_align="uk-text-left" subtitle="" title="Our Passion" heading_tag="h5" title_animate=""]Class aptent taciti sociosqu adero litora torquent perso conubia nostra perat mauris in erat justo nullam neque seder mauris egestas quam amet nibh. Vulputate cursus sitato amet mauris morbi accumsan ipsum velit name necrot tellus tincidunt ornare consequat auctor.[/tw_heading][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab title="Service" tab_id="1500629449383-2-10"][vc_row_inner equal_height="" css=".vc_custom_1511793970287{margin-top: 70px !important;}"][vc_column_inner width="1/3"][tw_iconbox layout="left" icon="eticons" eticons="et-lightbulb"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.

[tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox layout="left" title="Strategy" icon="eticons" eticons="et-strategy"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.

[tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox layout="left" title="Design" icon="eticons" eticons="et-tools"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.

[tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][/vc_row_inner][/vc_tab][/vc_tabs][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Works with Counter', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/2.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'counter',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" gutter="uk-grid-collapse"][vc_column][tw_portfolio_carousel cats="business" content_type="inside" hover="tw-hover-style-4" disable_crop="true" items="5" margin="0" dots="" nav="" loop="true" autoplay="true" autoplay-timeout="5000" layout="overlay" auto-height=""][/vc_column][/vc_row]
            [vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical"][vc_column][tw_slider tw_dimension_type="fullscreen" items="1" margin="0" dots="" nav="" auto-height=""][vc_row_inner content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" equal_height="" uk_light="true"][vc_column_inner width="1/2" custom_class="uk-flex uk-flex-column uk-flex-center uk-flex-middle uk-padding-large" css=".vc_custom_1502799607880{background-color: #151515 !important;}"][tw_heading title_align="uk-text-left" title="Lvly App" heading_tag="h1" title_animate="" css=".vc_custom_1502799768468{margin-right: 0px !important;padding-top: 150px !important;padding-bottom: 150px !important;}"]Lid est laborum dolo rumes fugats untras etharums ser quidem fugats
            vitaes nemo minima rerums unsers sadips amets.
 
            [tw_button link="#" target="_blank" color="#fff" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read More[/tw_button][/tw_heading][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1502799899017{padding-left: 0px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][tw_video min_height="680" thumb="1874"]<iframe style="height: 506px;" src="https://www.youtube.com/embed/aNPkYJOBC3Y" width="900" height="506" allowfullscreen="allowfullscreen"></iframe>[/tw_video][/vc_column_inner][/vc_row_inner][/tw_slider][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Accordion with Image', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/3.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'accordion',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-small" padding="uk-padding"][vc_column width="1/2" css=".vc_custom_1496634628572{padding-top: 120px !important;}"][vc_accordion active_tab=""][vc_accordion_tab title="Accordion First"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][vc_accordion_tab is_active="yes" title="Accordion Second"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="Accordion Third"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="Accordion Fourth"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][/vc_accordion][/vc_column][vc_column width="1/2"][tw_image image="7057" height="619"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox with Video', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/4.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" gutter="uk-grid-collapse" css=".vc_custom_1519804598551{background-color: #f7f7f7 !important;}"][vc_column width="1/2" css=".vc_custom_1502180215644{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][tw_video min_height="720" thumb="7059"][/tw_video][/vc_column][vc_column width="1/2" custom_class="uk-padding-xlarge uk-padding-remove-horizontal uk-padding-remove-bottom" css=".vc_custom_1519804612486{background-color: #f7f7f7 !important;}"][tw_heading title_animate="" title="Why Choose Us?" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][vc_row_inner equal_height="" custom_class="uk-padding uk-padding-remove-vertical"][vc_column_inner width="1/2"][tw_iconbox icon="eticons" eticons="et-lightbulb" layout="left" custom_class="uk-padding"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][tw_iconbox icon="eticons" eticons="et-tools" title="Design" layout="left" custom_class="uk-padding" css=".vc_custom_1500630432341{margin-top: 15px !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column_inner][vc_column_inner width="1/2"][tw_iconbox icon="eticons" eticons="et-strategy" title="Strategy" layout="left" custom_class="uk-padding"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][tw_iconbox icon="eticons" eticons="et-tools-2" title="Development" layout="left" custom_class="uk-padding" css=".vc_custom_1500630440058{margin-top: 15px !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio Grid', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/5.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_block slug="iconbox-3-columns-no-icon-dark"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox with Image', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/6.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="What We Offer" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish,
            modern websites, web services and online stores.[/tw_heading][/vc_column][vc_column width="1/3"][tw_iconbox icon="fi_image" title="Financial Planning" fi_image="7386"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="fi_image" title="Wealth Management" fi_image="7387"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="fi_image" title="INVESTMENT BANK" fi_image="7389"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Counter with Pricing', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/7.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'counter',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_block slug="process-2"][/vc_column][/vc_row][vc_row][vc_column][tw_block slug="pricing-table"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio with Iconbox', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/8.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" css=".vc_custom_1500439004881{padding-bottom: 0px !important;}"][vc_column][tw_portfolio cats="branding,photography,print,web-design" count="8" layout="grid" content_type="inside" gutter="uk-grid-collapse" column="col4" filter="simple" style="metro_s"][/vc_column][/vc_row][vc_row gutter="uk-grid-large"][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-lightbulb" layout="top_center" custom_class="uk-padding" fi_color="#ffffff" fi_bgcolor="#151515"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-strategy" title="Strategy" layout="top_center" custom_class="uk-padding" fi_color="#ffffff" fi_bgcolor="#151515"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-tools" title="Design" layout="top_center" custom_class="uk-padding" fi_color="#ffffff" fi_bgcolor="#151515"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials with Clients', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/9.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'testimonials',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" size="uk-section-large" gutter="uk-grid-xsmall" uk_light="true" parallax="bgy: -200;" overlay="0.2" css=".vc_custom_1525063206327{background: #151515 url(http://lvly.themewaves.com/wp-content/uploads/2018/04/testimonial-bg.jpg?id=7499);}"][vc_column][tw_testimonial][tw_testimonial_item title="What People Say" name="Steve Jobs" position="Apple"]I’m an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][tw_testimonial_item title="What People Say" name="Steve Jobs" position="Apple"]I’m an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][tw_testimonial_item title="What People Say" name="Steve Jobs" position="Apple"]I’m an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][/tw_testimonial][/vc_column][/vc_row][vc_row][vc_column][tw_block slug="clients-home-freelancer"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Footer Minimal', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/10.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'footer',
            'content'       => <<<CONTENT
            [vc_row uk_light="true" css=".vc_custom_1499230950555{background-color: #151515 !important;}"][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-map-pin" title="Location" layout="top_center" size="small-title" custom_class="uk-padding" fi_color="#151515" fi_bgcolor="#ffffff"]88, Orchard St, New York[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-phone" title="Call Us" layout="top_center" size="small-title" custom_class="uk-padding" fi_color="#151515" fi_bgcolor="#ffffff"](001) 8686 234 432[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-envelope" title="Email Us" layout="top_center" size="small-title" custom_class="uk-padding" fi_color="#151515" fi_bgcolor="#ffffff"]support@themewaves.com[/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'About Us with Counter', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/11.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'counter',
            'content'       => <<<CONTENT
            [vc_row custom_id="about"][vc_column][tw_heading title_animate="" title="The Story About Us" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][vc_row_inner][vc_column_inner][tw_image image="7091" height=""][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox title="Our Mission"]Class aptent taciti sociosqu adero litora torquent perso conubia nostra perat mauris in erat justo nullam neque seder mauris egestas quam amet nibh. Vulputate cursus sitato amet mauris morbi accumsan ipsum velit name necrot tellus tincidunt ornare consequat auctor.[/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox title="Our Vision"]Class aptent taciti sociosqu adero litora torquent perso conubia nostra perat mauris in erat justo nullam neque seder mauris egestas quam amet nibh. Vulputate cursus sitato amet mauris morbi accumsan ipsum velit name necrot tellus tincidunt ornare consequat auctor.[/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox title="Our Passion"]Class aptent taciti sociosqu adero litora torquent perso conubia nostra perat mauris in erat justo nullam neque seder mauris egestas quam amet nibh. Vulputate cursus sitato amet mauris morbi accumsan ipsum velit name necrot tellus tincidunt ornare consequat auctor.[/tw_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][tw_block slug="counter-home-career"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Video Modal', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/12.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'video',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-large" uk_light="true" parallax="bgy: -200;" overlay="0.2" css=".vc_custom_1524632586900{background: #151515 url(http://lvly.themewaves.com/wp-content/uploads/2018/04/video-fashion.jpg?id=7153);}"][vc_column][tw_heading title_animate="" title="Watch Our Video" subtitle="Realize Your Ideas" google_fonts="font_family:Playfair%20Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="24" margin="15px 0 20px 0" css=".vc_custom_1522987910364{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/tw_heading][tw_video min_height="80" css=".vc_custom_1502184197773{margin-top: 0px !important;}"][/tw_video][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio Fullwidth', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/13.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" gutter="uk-grid-collapse" css=".vc_custom_1507714451668{padding-bottom: 0px !important;}"][vc_column][tw_heading title_animate="" title="SELECTED WORK" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish,
            modern websites, web services and online stores.[/tw_heading][tw_portfolio cats="branding,photography,print,web-design" count="6" layout="grid" content_type="inside" gutter="uk-grid-collapse" filter="simple" style="metro_s" metro_height="60" css=".vc_custom_1511762285532{padding-bottom: 0px !important;}"][/vc_column][/vc_row][vc_row][vc_column][tw_block slug="iconbox-3-columns-home-classic"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Contact Map', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/14.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'contact',
            'content'       => <<<CONTENT
            [vc_row content_width="tw-empty" size="tw-empty" gutter="tw-empty" custom_id="contact"][vc_column][tw_heading title_animate="" title="Contact Us" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][/vc_column][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-map-pin" title="Location" layout="top_center" size="small-title" morelink="url:%23|title:Read%20More||" fi_color="#ffffff" fi_bgcolor="#151515"]88, Orchard St, New York[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-phone" title="Call Us" layout="top_center" size="small-title" morelink="url:%23|title:Read%20More||" fi_color="#ffffff" fi_bgcolor="#151515"]88, Orchard St, New York[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="eticons" eticons="et-envelope" title="Email Us" layout="top_center" size="small-title" morelink="url:%23|title:Read%20More||" fi_color="#ffffff" fi_bgcolor="#151515"]support@themewaves.com[/tw_iconbox][/vc_column][/vc_row][vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" gutter="uk-grid-collapse" match_height="true"][vc_column width="1/2"][tw_map style_name="Lvly Map" height="500" markers="%5B%7B%22title%22%3A%22Marker%201%22%2C%22content%22%3A%22Content%201%22%2C%22lat%22%3A%2241.5538491%22%2C%22lng%22%3A%22-82.918092%22%2C%22icon%22%3A%22http%3A%2F%2Fthemes.themewaves.com%2Fninetysix%2Fwp-content%2Fthemes%2Fninetysix%2Fassets%2Fimg%2Fmap-marker.png%22%2C%22icon_width%22%3A%2234%22%2C%22icon_height%22%3A%2254%22%7D%2C%7B%22title%22%3A%22Marker%202%22%2C%22content%22%3A%22Content%202%22%2C%22lat%22%3A%2241.5538493%22%2C%22lng%22%3A%22-83.918094%22%2C%22icon%22%3A%22http%3A%2F%2Fthemes.themewaves.com%2Fninetysix%2Fwp-content%2Fthemes%2Fninetysix%2Fassets%2Fimg%2Fmap-marker.png%22%2C%22icon_width%22%3A%2234%22%2C%22icon_height%22%3A%2254%22%7D%5D"][/vc_column][vc_column width="1/2" custom_class="uk-padding-large" css=".vc_custom_1500456451701{background-color: #f7f7f7 !important;}"][contact-form-7 id="1725"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Service with Images', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/15.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'service',
            'content'       => <<<CONTENT
            [vc_row tw_dimension_type="custom-min-height" tw_dimension_height="600" content_width="uk-container-fullwidth" gutter="uk-grid-collapse" match_height="true" valign="uk-flex-middle" css=".vc_custom_1525856795521{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" css=".vc_custom_1525856673274{background-image: url(http://lvly.themewaves.com/wp-content/uploads/2018/04/content-box1.jpg?id=7438) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column width="1/2" custom_class="uk-padding-xlarge" css=".vc_custom_1497849512036{background-color: #f7f7f7 !important;}"][tw_heading title_animate="" title="CREATIVE PROJECT" title_align="uk-text-left" custom_class="uk-padding-large uk-padding-remove-vertical"]Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum in nunc etiam pharetra erat fermentu feugiat velit mauris. Duis sed odio sit amet nibh vulputate cursus siter amet mauris morbi accumsan ipsum velit ornare lorem ipsum odio. Lorem Ipsum proin gravida auctor sociosqu sollicitudin bibendum auctor consequat sagittis sem.
 
            [tw_button link="#" target="_blank" color="#ccc" size="small" style="flat uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_heading][/vc_column][/vc_row][vc_row tw_dimension_type="custom-min-height" tw_dimension_height="600" content_width="uk-container-fullwidth" gutter="uk-grid-collapse" match_height="true" valign="uk-flex-middle" css=".vc_custom_1525856802069{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" custom_class="uk-padding-xlarge" css=".vc_custom_1497850376589{background-color: #f7f7f7 !important;}"][tw_heading title_animate="" title="CREATIVE PROJECT" title_align="uk-text-left" custom_class="uk-padding-large uk-padding-remove-vertical"]Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum in nunc etiam pharetra erat fermentu feugiat velit mauris. Duis sed odio sit amet nibh vulputate cursus siter amet mauris morbi accumsan ipsum velit ornare lorem ipsum odio. Lorem Ipsum proin gravida auctor sociosqu sollicitudin bibendum auctor consequat sagittis sem.
 
            [tw_button link="#" target="_blank" color="#ccc" size="small" style="flat uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_heading][/vc_column][vc_column width="1/2" css=".vc_custom_1525856686064{background-image: url(http://lvly.themewaves.com/wp-content/uploads/2018/04/content-box2.jpg?id=7439) !important;}"][/vc_column][/vc_row][vc_row][vc_column][tw_block slug="counter-home-classic" id="counter-home-classic"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox with Mockup', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/16.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column width="1/3" custom_class="uk-margin-small-top"][tw_iconbox icon="eticons" eticons="et-lightbulb" layout="top_right" size="icon-small" custom_class="uk-padding"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][tw_iconbox icon="eticons" eticons="et-globe" title="STRATEGY" layout="top_right" size="icon-small" custom_class="uk-padding uk-margin-remove-top uk-padding-remove-top "]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][tw_iconbox icon="eticons" eticons="et-strategy" title="DESIGN" layout="top_right" size="icon-small" custom_class="uk-padding uk-margin-remove-top uk-padding-remove-top "]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_image image="7441"][/vc_column][vc_column width="1/3" custom_class="uk-margin-small-top"][tw_iconbox icon="eticons" eticons="et-tools-2" title="DEVELOPMENT" size="icon-small" custom_class="uk-padding"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][tw_iconbox icon="eticons" eticons="et-trophy" title="MARKETING" size="icon-small" custom_class="uk-padding uk-margin-remove-top uk-padding-remove-top "]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][tw_iconbox icon="eticons" title="RESPONSIVE" size="icon-small" custom_class="uk-padding uk-margin-remove-top uk-padding-remove-top "]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox with Service', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/17.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="The Story About Us" subtitle="We Are Awesome"]Duis sed odio sit amet nibh vulputate cursus sit amet tincidunt auctor ornare odio consequat auctor. Lorem Ipsum proin gravida auctor sociosqu sollicitudin quis bibendum auctor consequat sagittis sem.[/tw_heading][vc_row_inner equal_height=""][vc_column_inner width="1/4"][tw_iconbox icon="eticons" eticons="et-lightbulb" layout="top_center"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column_inner][vc_column_inner width="1/4"][tw_iconbox icon="eticons" eticons="et-globe" title="Strategy" layout="top_center"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column_inner][vc_column_inner width="1/4"][tw_iconbox icon="eticons" eticons="et-strategy" title="Design" layout="top_center"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column_inner][vc_column_inner width="1/4"][tw_iconbox icon="eticons" eticons="et-tools-2" title="Development" layout="top_center"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" gutter="uk-grid-collapse"][vc_column width="1/3" custom_class="uk-light uk-padding-xlarge" css=".vc_custom_1524734780492{background: #151515 url(http://lvly.themewaves.com/wp-content/uploads/2018/04/column-bg.jpg?id=7312) !important;}"][tw_heading heading_tag="h5" title_animate="" title="CREATIVITY" subtitle="" title_align="uk-text-left"]Duis sed odio sit amet nibh vulputate cursus sit amet tincidunt auctor ornare odio consequat auctor. Lorem Ipsum proin gravida auctor sociosqu sollicitudin quis bibendum auctor consequat sagittis sem.
 
            [tw_button link="#" target="_blank" color="#fff" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_heading][/vc_column][vc_column width="1/3" custom_class="uk-light uk-light uk-padding-xlarge" css=".vc_custom_1497609456826{background-color: #151515 !important;}"][tw_heading heading_tag="h5" title_animate="" title="DESIGN" subtitle="" title_align="uk-text-left"]Duis sed odio sit amet nibh vulputate cursus sit amet tincidunt auctor ornare odio consequat auctor. Lorem Ipsum proin gravida auctor sociosqu sollicitudin quis bibendum auctor consequat sagittis sem.
 
            [tw_button link="#" target="_blank" color="#fff" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_heading][/vc_column][vc_column width="1/3" custom_class="uk-padding-xlarge" css=".vc_custom_1499161612989{background-color: #f7f7f7 !important;}"][tw_heading heading_tag="h5" title_animate="" title="STRATEGY" subtitle="" title_align="uk-text-left"]Duis sed odio sit amet nibh vulputate cursus sit amet tincidunt auctor ornare odio consequat auctor. Lorem Ipsum proin gravida auctor sociosqu sollicitudin quis bibendum auctor consequat sagittis sem.
 
            [tw_button link="#" target="_blank" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_heading][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/19.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column][vc_row_inner size="uk-padding-remove-vertical" gutter="uk-grid-large" equal_height=""][vc_column_inner][tw_heading title_animate="" title="What I Do" subtitle="" title_align="uk-text-left"]
 
            I design and develop services for customers of all sizes, specializing in creating stylish,
            modern websites, web services and online stores.
             
            [/tw_heading][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="eticons" eticons="et-lightbulb"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="eticons" eticons="et-target" title="Strategy"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="eticons" eticons="et-strategy" title="Design"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Timeline', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/20.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'timeline',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-small" size="uk-padding-remove-vertical"][vc_column][tw_timeline layout="style-2" css=".vc_custom_1523332008616{padding-top: 110px !important;padding-bottom: 110px !important;}"][tw_timeline_item title="WEB DESIGNER" sub_title="Google Inc" meta="JANUARY 2016 - PRESENT"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum tellus tincidunt auctor ornare odio non consequat auctor lorem Ipsum sollicitudin lorem quis bibendum auctor consequat ipsum nec sagittis sem.[/tw_timeline_item][tw_timeline_item title="DEVELOPER" sub_title="Apple Inc" meta="MARCH 2013 - MARCH 2015"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum tellus tincidunt auctor ornare odio non consequat auctor lorem Ipsum sollicitudin lorem quis bibendum auctor consequat ipsum nec sagittis sem.[/tw_timeline_item][tw_timeline_item title="MANAGER" sub_title="Envato" meta="APRIL 2010 - MARCH 2012"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum tellus tincidunt auctor ornare odio non consequat auctor lorem Ipsum sollicitudin lorem quis bibendum auctor consequat ipsum nec sagittis sem.[/tw_timeline_item][tw_timeline_item title="BACHELOR’S DEGREE" sub_title="Harvard University" meta="APRIL 2005 - MARCH 2009"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum tellus tincidunt auctor ornare odio non consequat auctor lorem Ipsum sollicitudin lorem quis bibendum auctor consequat ipsum nec sagittis sem.[/tw_timeline_item][/tw_timeline][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Contact Form', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/21.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'contact',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-small"][vc_column][tw_heading title_animate="" title="Contact Form" subtitle=""]
 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.
 
            [/tw_heading][contact-form-7 id="832"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Flipbox', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/22.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'flipbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column width="1/3"][tw_flipbox][tw_flipbox_item icon="eticons" eticons="et-lightbulb" layout="top_center" color="#f7f7f7" dark="" fi_color="#ffffff" fi_bgcolor="#151515" css=".vc_custom_1525072276476{background-color: #f7f7f7 !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_flipbox_item][tw_flipbox_item icon="eticons" eticons="et-lightbulb" uk_light="true" layout="top_center" color="" bgimage="1573" dark="true" fi_color="#151515" fi_bgcolor="#ffffff" css=".vc_custom_1525072212060{background-image: url(http://lvly.themewaves.com/wp-content/uploads/2017/07/flip-bg.jpg?id=7523) !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_flipbox_item][/tw_flipbox][/vc_column][vc_column width="1/3"][tw_flipbox][tw_flipbox_item icon="eticons" eticons="et-globe" layout="top_center" title="Marketing" color="#f7f7f7" dark="" fi_color="#ffffff" fi_bgcolor="#151515" css=".vc_custom_1525072289507{background-color: #f7f7f7 !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_flipbox_item][tw_flipbox_item icon="eticons" eticons="et-globe" uk_light="true" layout="top_center" title="Marketing" color="" bgimage="1573" dark="true" fi_color="#151515" fi_bgcolor="#ffffff" css=".vc_custom_1525072219459{background-image: url(http://lvly.themewaves.com/wp-content/uploads/2017/07/flip-bg.jpg?id=7523) !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_flipbox_item][/tw_flipbox][/vc_column][vc_column width="1/3"][tw_flipbox][tw_flipbox_item icon="eticons" eticons="et-strategy" layout="top_center" title="Branding" color="#f7f7f7" dark="" fi_color="#ffffff" fi_bgcolor="#151515" css=".vc_custom_1525072300832{background-color: #f7f7f7 !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_flipbox_item][tw_flipbox_item icon="eticons" eticons="et-strategy" uk_light="true" layout="top_center" title="Branding" color="" bgimage="1573" dark="true" fi_color="#151515" fi_bgcolor="#ffffff" css=".vc_custom_1525072225475{background-image: url(http://lvly.themewaves.com/wp-content/uploads/2017/07/flip-bg.jpg?id=7523) !important;}"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_flipbox_item][/tw_flipbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio with Right Filter', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/23.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row custom_class="uk-padding-remove-top"][vc_column][tw_portfolio cats="branding,photography,print,web-design" count="6" layout="grid" content_type="inside" gutter="uk-grid-collapse" filter="simple" filter_style="filter-right" filter_title="Our Projects" pagination="infinite" style="metro_s"][/vc_column][/vc_row]w_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_flipbox_item][/tw_flipbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Open Job', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/24.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'open-job',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="Available Jobs" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][tw_job cats="local-jobs" job_title="Custom Job Title"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Video with Callout', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/25.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'video',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-xsmall" gutter="uk-grid-collapse" uk_light="true" css=".vc_custom_1507778851289{background-color: #151515 !important;}"][vc_column][tw_call_to_action callout_title="SUBSCRIBE TO OUR NEWSLETTER" callout_desc="We will send you the monthly Newsletter" css=".vc_custom_1525958295716{padding-right: 0px !important;padding-left: 0px !important;}"][contact-form-7 id="8319" title="Newsletter Subscribe"][/tw_call_to_action][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/26.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'testimonials',
            'content'       => <<<CONTENT
            [vc_row css=".vc_custom_1498815755426{padding-bottom: 0px !important;}"][vc_column width="1/2"][tw_heading heading_tag="h5" title_animate="" title="Our Process" subtitle="" title_align="uk-text-left"]Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit nam nec tellus odio tincidunt auctor a ornare odio sed mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu litora torquent person conubia inceptos himenaeos. Mauris eratetore justo nullam ac urna eu felis dapibus condimentum sit amet a augue.[/tw_heading][/vc_column][vc_column width="1/2"][tw_progress_bar layout="style-3" values="90|Investing,80|Marketing,70|Management,95|Branding"][/vc_column][/vc_row][vc_row][vc_column][tw_block slug="testimonials"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Image with Accordion', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/27.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'accordion',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" gutter="uk-grid-collapse"][vc_column width="1/2"][tw_video min_height="600" thumb="7454"][/tw_video][/vc_column][vc_column width="1/2" custom_class="uk-padding-xlarge" css=".vc_custom_1501238249099{background-color: #f7f7f7 !important;}"][vc_accordion style="with-border" custom_class="uk-padding-large" css=".vc_custom_1503721723808{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_accordion_tab title="Accordion First"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="Accordion Second"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="Accordion Three"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="Accordion Fourth"][tw_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/tw_text][/vc_accordion_tab][/vc_accordion][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio with Right Filter', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/28.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" element_dark="true"][vc_column][tw_portfolio cats="architecture-2,building-architecture-2,exterior-architecture-2,interior-architecture-2" count="4" layout="grid" content_type="inside" hover="tw-hover-style-2" disable_crop="true" gutter="uk-grid-collapse" column="col4" filter="simple" filter_style="filter-right" filter_title="Our Projects" style="metro_s"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Service', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/29.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'service',
            'content'       => <<<CONTENT
            [vc_row size="uk-padding-remove-vertical" gutter="uk-grid-collapse" match_height="true" animation_customize="true" animation_custom="target: > div > div > div; cls:uk-animation-slide-bottom-medium; delay: 400;" custom_class="uk-margin-top-minus" css=".vc_custom_1524544988445{padding-top: 0px !important;}"][vc_column width="1/2" custom_class="uk-padding-xlarge tw-min-height-450" css=".vc_custom_1524723866591{background-image: url(http://lvly.themewaves.com/wp-content/uploads/2017/07/box-restaurant1.jpg?id=7294) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column width="1/2" custom_class="uk-padding-xlarge" css=".vc_custom_1500458749422{background-color: #f7f7f7 !important;}"][tw_text]
 
            Discover
            Our Story
            Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum nunc etiam pharetra erat fermentu feugiat velit mauris.
 
            [tw_button link="#" target="_blank" color="#ccc" size="small" style="flat uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_text][/vc_column][/vc_row][vc_row size="uk-padding-remove-vertical" gutter="uk-grid-collapse" animation_customize="true" animation_custom="target: > div > div > div; cls:uk-animation-slide-bottom-medium; delay: 400;" css=".vc_custom_1512110635155{padding-top: 0px !important;}"][vc_column width="1/2" custom_class="uk-padding-xlarge tw-min-height-450" css=".vc_custom_1524723887054{background: #f7f7f7 url(http://lvly.themewaves.com/wp-content/uploads/2017/07/box-restaurant2.jpg?id=7295) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column width="1/2" custom_class="uk-padding-xlarge uk-flex-first@l" css=".vc_custom_1522816619650{background-color: #f7f7f7 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][tw_text]
 
            Discover
            Our Menu
            Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum nunc etiam pharetra erat fermentu feugiat velit mauris.
 
            [tw_button link="#" target="_blank" color="#ccc" size="small" style="flat uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Full Menu[/tw_button][/tw_text][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Pricing List', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/30.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'pricing',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="Our Menu" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][vc_tabs layout="uk-flex-center" tab_id="23460698-e0ba-3"][vc_tab title="Starters" tab_id="1500459221339-7"][vc_row_inner][vc_column_inner width="1/2"][tw_pricinglist tw_pricinglist_items="%5B%7B%22image%22%3A%227007%22%2C%22price%22%3A%22%2419%22%2C%22title%22%3A%22Western%20Sunrise%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227008%22%2C%22price%22%3A%22%2424%22%2C%22title%22%3A%22Asparagus%20spaghetti%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227009%22%2C%22price%22%3A%22%2435%22%2C%22title%22%3A%22French%20Toast%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%5D"][/vc_column_inner][vc_column_inner width="1/2"][tw_pricinglist tw_pricinglist_items="%5B%7B%22image%22%3A%227010%22%2C%22price%22%3A%22%2419%22%2C%22title%22%3A%22Western%20Sunrise%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22featured%22%3A%22true%22%2C%22image%22%3A%227011%22%2C%22price%22%3A%22%2424%22%2C%22title%22%3A%22Asparagus%20spaghetti%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227012%22%2C%22price%22%3A%22%2435%22%2C%22title%22%3A%22French%20Toast%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab title="Lunch Sets" tab_id="1511938530487-1-8"][vc_row_inner][vc_column_inner width="1/2"][tw_pricinglist tw_pricinglist_items="%5B%7B%22image%22%3A%227007%22%2C%22price%22%3A%22%2419%22%2C%22title%22%3A%22Western%20Sunrise%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227008%22%2C%22price%22%3A%22%2424%22%2C%22title%22%3A%22Asparagus%20spaghetti%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227009%22%2C%22price%22%3A%22%2435%22%2C%22title%22%3A%22French%20Toast%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%5D"][/vc_column_inner][vc_column_inner width="1/2"][tw_pricinglist tw_pricinglist_items="%5B%7B%22image%22%3A%227011%22%2C%22price%22%3A%22%2419%22%2C%22title%22%3A%22Western%20Sunrise%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22featured%22%3A%22true%22%2C%22image%22%3A%227010%22%2C%22price%22%3A%22%2424%22%2C%22title%22%3A%22Asparagus%20spaghetti%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227012%22%2C%22price%22%3A%22%2435%22%2C%22title%22%3A%22French%20Toast%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab title="Deserts" tab_id="1511938549828-2-9"][vc_row_inner][vc_column_inner width="1/2"][tw_pricinglist tw_pricinglist_items="%5B%7B%22image%22%3A%227007%22%2C%22price%22%3A%22%2419%22%2C%22title%22%3A%22Western%20Sunrise%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227008%22%2C%22price%22%3A%22%2424%22%2C%22title%22%3A%22Asparagus%20spaghetti%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227009%22%2C%22price%22%3A%22%2435%22%2C%22title%22%3A%22French%20Toast%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%5D"][/vc_column_inner][vc_column_inner width="1/2"][tw_pricinglist tw_pricinglist_items="%5B%7B%22image%22%3A%227011%22%2C%22price%22%3A%22%2419%22%2C%22title%22%3A%22Western%20Sunrise%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22featured%22%3A%22true%22%2C%22image%22%3A%227010%22%2C%22price%22%3A%22%2424%22%2C%22title%22%3A%22Asparagus%20spaghetti%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%2C%7B%22image%22%3A%227012%22%2C%22price%22%3A%22%2435%22%2C%22title%22%3A%22French%20Toast%22%2C%22content%22%3A%22Duis%20odio%20sit%20amet%20nibh%20vulputate%20auctor.%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_tab][/vc_tabs][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox with Image', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/31.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="What We Offer" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish,
            modern websites, web services and online stores.[/tw_heading][/vc_column][vc_column width="1/3"][tw_iconbox icon="fi_image" title="Financial Planning" fi_image="7386"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="fi_image" title="Wealth Management" fi_image="7387"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="fi_image" title="INVESTMENT BANK" fi_image="7389"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Video with Progress bar', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/32.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'video',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" match_height="true" valign="uk-flex-middle"][vc_column width="1/2"][tw_video min_height="400" thumb="7084"][/tw_video][/vc_column][vc_column width="1/2" custom_class="uk-padding-xlarge" css=".vc_custom_1499164772923{background-color: #f7f7f7 !important;}"][tw_progress_bar values="90|Investments,80|Financial Analysis,70|Financial Planner,80|Business Support"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Contact Form', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/34.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'contact',
            'content'       => <<<CONTENT
           
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox with Heading', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/35.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row css=".vc_custom_1524206314537{background-color: #f9f9f9 !important;}"][vc_column][tw_heading title_animate="" title="ONE CHURCH, MANY LOCATIONS." subtitle="God Heavens Above"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris in erat justo nullam ac urna felis dapibus condimentum sit amet augue sed non. Neque elit sed utiroret mauris egestas quam ut aliquam massa nisl quis neque.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]See All Locations[/tw_button][/tw_heading][vc_row_inner equal_height="true" custom_class="uk-text-left"][vc_column_inner width="1/3"][tw_iconbox icon="fi_image" title="WHAT DO YOU BELEIVE?" layout="top_center" fi_image="7513"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="fi_image" title="Hope is Faith" layout="top_center" fi_image="7514"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="fi_image" title="Bibbble Book" layout="top_center" fi_image="7515"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Upcoming Events', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/36.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'html',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="Upcoming events" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][vc_raw_html el_class="tw-element"]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1lbGVtZW50JTIwdHctY2Fyb3VzZWwtZXZlbnQlMjB0dy1vd2wtY2Fyb3VzZWwtY29udGFpbmVyJTIyJTIwZGF0YS1kb3RzJTNEJTIydHJ1ZSUyMiUyMGRhdGEtZG90cy1lYWNoJTNEJTIydHJ1ZSUyMiUyMGRhdGEtbmF2JTNEJTIyJTIyJTIwZGF0YS1sb29wJTNEJTIyJTIyJTIwZGF0YS1hdXRvcGxheSUzRCUyMiUyMiUyMGRhdGEtYXV0b3BsYXktaG92ZXItcGF1c2UlM0QlMjIlMjIlMjBkYXRhLWF1dG9wbGF5LXRpbWVvdXQlM0QlMjI1MDAwJTIyJTIwZGF0YS1hdXRvLXdpZHRoJTNEJTIyJTIyJTIwZGF0YS1pdGVtcyUzRCUyMjIlMjIlMjBkYXRhLWNlbnRlciUzRCUyMiUyMiUyMGRhdGEtbWFyZ2luJTNEJTIyMzAlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMm93bC1jYXJvdXNlbCUyMG93bC10aGVtZSUyMiUyMGRhdGEtdWstc2Nyb2xsc3B5JTNEJTIydGFyZ2V0JTNBLnBvc3QtaXRlbSUzQiUyMGNscyUzQXVrLWFuaW1hdGlvbi1zbGlkZS1ib3R0b20tbWVkaXVtJTNCJTIwZGVsYXklM0ElMjAzNTAlM0IlMjIlM0UlMEElMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmV2ZW50LWl0ZW0lMjIlMjBkYXRhLXVrLWdyaWQlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmVudHJ5LW1lZGlhJTIwdWstd2lkdGgtMS0yJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnR3LWltYWdlLWhvdmVyJTIyJTIwdGl0bGUlM0QlMjJDbG9zZXVwJTIwb2YlMjB0aGUlMjB3b21hbiUyN3MlMjBoYW5kJTIwd2VhcmluZyUyMGJlYXV0aWZ1bCUyMHJpbmdzJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaW1nJTIwc3JjJTNEJTIyaHR0cCUzQSUyRiUyRmh0bWwudGhlbWV3YXZlcy5jb20lMkZsb3ZlbHktY29ycG9yYXRlJTJGYXNzZXRzJTJGZGVtbyUyRmV2ZW50LWNhcm91c2VsJTJGY2Fyb3VzZWwtMS5qcGclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJldmVudC1jb250ZW50JTIwdWstd2lkdGgtZXhwYW5kJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1tZXRhJTIyJTNFTWF5JTIwMjIlMkMlMjAyMDE3JTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaDMlMjBjbGFzcyUzRCUyMmV2ZW50LXRpdGxlJTIwdWstdGV4dC11cHBlcmNhc2UlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRUNodXJjaCUyMExlYWRlcnMlMjBNZWV0aW5nJTNDJTJGYSUzRSUzQyUyRmgzJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDcCUzRUR1aXMlMjBzZWQlMjBvZGlvJTIwc2l0ZXJvJTIwYW1ldCUyMG5pYmglMjBlbWl0JTIwdnVscHV0YXRlJTIwY3Vyc3VzJTIwc2l0byUyMGFtZXQlMjBhY2N1bXNhbiUyMGlwc3VtJTIwdmVsaXQlMjBvZGlvLiUzQyUyRnAlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMGNsYXNzJTNEJTIydWstYnV0dG9uJTIwdWstYnV0dG9uLWRlZmF1bHQlMjB1ay1idXR0b24tc21hbGwlMjB1ay1idXR0b24tcmFkaXVzJTIwZGFyay1ob3ZlciUyMHR3LWhvdmVyJTIyJTNFJTNDc3BhbiUyMGNsYXNzJTNEJTIydHctaG92ZXItaW5uZXIlMjIlM0UlM0NzcGFuJTNFSm9pbiUyME5vdyUzQyUyRnNwYW4lM0UlM0NpJTIwY2xhc3MlM0QlMjJpb24taW9zLWFycm93LXRoaW4tcmlnaHQlMjIlM0UlM0MlMkZpJTNFJTNDJTJGc3BhbiUzRSUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmV2ZW50LWl0ZW0lMjIlMjBkYXRhLXVrLWdyaWQlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmVudHJ5LW1lZGlhJTIwdWstd2lkdGgtMS0yJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnR3LWltYWdlLWhvdmVyJTIyJTIwdGl0bGUlM0QlMjJDbG9zZXVwJTIwb2YlMjB0aGUlMjB3b21hbiUyN3MlMjBoYW5kJTIwd2VhcmluZyUyMGJlYXV0aWZ1bCUyMHJpbmdzJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaW1nJTIwc3JjJTNEJTIyaHR0cCUzQSUyRiUyRmh0bWwudGhlbWV3YXZlcy5jb20lMkZsb3ZlbHktY29ycG9yYXRlJTJGYXNzZXRzJTJGZGVtbyUyRmV2ZW50LWNhcm91c2VsJTJGY2Fyb3VzZWwtMi5qcGclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJldmVudC1jb250ZW50JTIwdWstd2lkdGgtZXhwYW5kJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1tZXRhJTIyJTNFTWF5JTIwMjIlMkMlMjAyMDE3JTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaDMlMjBjbGFzcyUzRCUyMmV2ZW50LXRpdGxlJTIwdWstdGV4dC11cHBlcmNhc2UlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRVNlbmlvcnMlMjBCaWJsZSUyMHN0dWR5JTNDJTJGYSUzRSUzQyUyRmgzJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDcCUzRUR1aXMlMjBzZWQlMjBvZGlvJTIwc2l0ZXJvJTIwYW1ldCUyMG5pYmglMjBlbWl0JTIwdnVscHV0YXRlJTIwY3Vyc3VzJTIwc2l0byUyMGFtZXQlMjBhY2N1bXNhbiUyMGlwc3VtJTIwdmVsaXQlMjBvZGlvLiUzQyUyRnAlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMGNsYXNzJTNEJTIydWstYnV0dG9uJTIwdWstYnV0dG9uLWRlZmF1bHQlMjB1ay1idXR0b24tc21hbGwlMjB1ay1idXR0b24tcmFkaXVzJTIwZGFyay1ob3ZlciUyMHR3LWhvdmVyJTIyJTNFJTNDc3BhbiUyMGNsYXNzJTNEJTIydHctaG92ZXItaW5uZXIlMjIlM0UlM0NzcGFuJTNFSm9pbiUyME5vdyUzQyUyRnNwYW4lM0UlM0NpJTIwY2xhc3MlM0QlMjJpb24taW9zLWFycm93LXRoaW4tcmlnaHQlMjIlM0UlM0MlMkZpJTNFJTNDJTJGc3BhbiUzRSUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmV2ZW50LWl0ZW0lMjIlMjBkYXRhLXVrLWdyaWQlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmVudHJ5LW1lZGlhJTIwdWstd2lkdGgtMS0yJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnR3LWltYWdlLWhvdmVyJTIyJTIwdGl0bGUlM0QlMjJDbG9zZXVwJTIwb2YlMjB0aGUlMjB3b21hbiUyN3MlMjBoYW5kJTIwd2VhcmluZyUyMGJlYXV0aWZ1bCUyMHJpbmdzJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaW1nJTIwc3JjJTNEJTIyaHR0cCUzQSUyRiUyRmh0bWwudGhlbWV3YXZlcy5jb20lMkZsb3ZlbHktY29ycG9yYXRlJTJGYXNzZXRzJTJGZGVtbyUyRmV2ZW50LWNhcm91c2VsJTJGY2Fyb3VzZWwtMy5qcGclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJldmVudC1jb250ZW50JTIwdWstd2lkdGgtZXhwYW5kJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1tZXRhJTIyJTNFTWF5JTIwMjIlMkMlMjAyMDE3JTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaDMlMjBjbGFzcyUzRCUyMmV2ZW50LXRpdGxlJTIwdWstdGV4dC11cHBlcmNhc2UlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRVJlZ2lzdGVyJTIwU3VtbWVyJTIwRXZlbnQlM0MlMkZhJTNFJTNDJTJGaDMlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NwJTNFRHVpcyUyMHNlZCUyMG9kaW8lMjBzaXRlcm8lMjBhbWV0JTIwbmliaCUyMGVtaXQlMjB2dWxwdXRhdGUlMjBjdXJzdXMlMjBzaXRvJTIwYW1ldCUyMGFjY3Vtc2FuJTIwaXBzdW0lMjB2ZWxpdCUyMG9kaW8uJTNDJTJGcCUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1idXR0b24lMjB1ay1idXR0b24tZGVmYXVsdCUyMHVrLWJ1dHRvbi1zbWFsbCUyMHVrLWJ1dHRvbi1yYWRpdXMlMjBkYXJrLWhvdmVyJTIwdHctaG92ZXIlMjIlM0UlM0NzcGFuJTIwY2xhc3MlM0QlMjJ0dy1ob3Zlci1pbm5lciUyMiUzRSUzQ3NwYW4lM0VKb2luJTIwTm93JTNDJTJGc3BhbiUzRSUzQ2klMjBjbGFzcyUzRCUyMmlvbi1pb3MtYXJyb3ctdGhpbi1yaWdodCUyMiUzRSUzQyUyRmklM0UlM0MlMkZzcGFuJTNFJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIyZXZlbnQtaXRlbSUyMiUyMGRhdGEtdWstZ3JpZCUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIyZW50cnktbWVkaWElMjB1ay13aWR0aC0xLTIlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMGNsYXNzJTNEJTIydHctaW1hZ2UtaG92ZXIlMjIlMjB0aXRsZSUzRCUyMkNsb3NldXAlMjBvZiUyMHRoZSUyMHdvbWFuJTI3cyUyMGhhbmQlMjB3ZWFyaW5nJTIwYmVhdXRpZnVsJTIwcmluZ3MlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NpbWclMjBzcmMlM0QlMjJodHRwJTNBJTJGJTJGaHRtbC50aGVtZXdhdmVzLmNvbSUyRmxvdmVseS1jb3Jwb3JhdGUlMkZhc3NldHMlMkZkZW1vJTJGZXZlbnQtY2Fyb3VzZWwlMkZjYXJvdXNlbC0xLmpwZyUyMiUyMGFsdCUzRCUyMiUyMiUyMCUyRiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmV2ZW50LWNvbnRlbnQlMjB1ay13aWR0aC1leHBhbmQlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMnR3LW1ldGElMjIlM0VNYXklMjAyMiUyQyUyMDIwMTclM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NoMyUyMGNsYXNzJTNEJTIyZXZlbnQtdGl0bGUlMjB1ay10ZXh0LXVwcGVyY2FzZSUyMiUzRSUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTNFQ2h1cmNoJTIwTGVhZGVycyUyME1lZXRpbmclM0MlMkZhJTNFJTNDJTJGaDMlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NwJTNFRHVpcyUyMHNlZCUyMG9kaW8lMjBzaXRlcm8lMjBhbWV0JTIwbmliaCUyMGVtaXQlMjB2dWxwdXRhdGUlMjBjdXJzdXMlMjBzaXRvJTIwYW1ldCUyMGFjY3Vtc2FuJTIwaXBzdW0lMjB2ZWxpdCUyMG9kaW8uJTNDJTJGcCUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1idXR0b24lMjB1ay1idXR0b24tZGVmYXVsdCUyMHVrLWJ1dHRvbi1zbWFsbCUyMHVrLWJ1dHRvbi1yYWRpdXMlMjBkYXJrLWhvdmVyJTIwdHctaG92ZXIlMjIlM0UlM0NzcGFuJTIwY2xhc3MlM0QlMjJ0dy1ob3Zlci1pbm5lciUyMiUzRSUzQ3NwYW4lM0VKb2luJTIwTm93JTNDJTJGc3BhbiUzRSUzQ2klMjBjbGFzcyUzRCUyMmlvbi1pb3MtYXJyb3ctdGhpbi1yaWdodCUyMiUzRSUzQyUyRmklM0UlM0MlMkZzcGFuJTNFJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Music with Video', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/37.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'video',
            'content'       => <<<CONTENT
            [vc_row][vc_column width="1/2"][tw_heading title_animate="" title="Our Music" subtitle="" google_fonts="font_family:Audiowide%3Aregular|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="32" letter_spacing="0"][/tw_heading][tw_text css=".vc_custom_1524813030448{margin-top: 30px !important;}"][/tw_text][/vc_column][vc_column width="1/2"][tw_heading title_animate="" title="Latest Video" subtitle="" google_fonts="font_family:Audiowide%3Aregular|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="32" letter_spacing="0"][/tw_heading][tw_text css=".vc_custom_1524556512055{margin-top: 30px !important;background-image: url(http://lvly.themewaves.com/wp-content/uploads/2018/04/video-music.jpg?id=7050) !important;}"][tw_video thumb="3696" min_height="320"][/tw_video][/tw_text][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio 3 Column', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/38.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row][vc_column][vc_row_inner tw_dimension_type="custom-min-height" tw_dimension_height="406" content_width="uk-container-fullwidth" size="uk-section-xsmall" gutter="uk-grid-xsmall" equal_height="" custom_class="uk-position-absolute uk-position-top-center uk-width-1-1" desktop="true" tablet="true" mobile="true" css=".vc_custom_1524556636367{padding-bottom: 0px !important;background-color: #000000 !important;}"][vc_column_inner][/vc_column_inner][/vc_row_inner][tw_heading title_animate="" title="Latest Releases" subtitle="" uk_light="true" google_fonts="font_family:Audiowide%3Aregular|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="32" letter_spacing="0"][/tw_heading][tw_portfolio cats="band" count="3" layout="grid" content_type="inside" hover="tw-hover-style-4" disable_crop="true" gutter="uk-grid-medium" pagination="infinite"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Table', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/39.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'table',
            'content'       => <<<CONTENT
            [vc_column css=".vc_custom_1512114600929{margin-top: 70px !important;}"][tw_heading heading_tag="h3" title_animate="" title="Tour Dates" subtitle="" google_fonts="font_family:Audiowide%3Aregular|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="32" letter_spacing="0"][/tw_heading][tw_text][table id=2 /][/tw_text][/vc_column]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Coming Soon', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/40.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'coming-soon',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-large" uk_light="true" parallax="bgy: -150;" overlay="0.2" css=".vc_custom_1524556847440{background: #1c1c1c url(http://lvly.themewaves.com/wp-content/uploads/2018/04/countdown-bg.jpg?id=7049);}"][vc_column][tw_heading heading_tag="h2" title_animate="" title="Next Events" subtitle="" google_fonts="font_family:Audiowide%3Aregular|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="32" letter_spacing="0"]
 
            LISBON, PORTUGAL - MEO ARENA
            [/tw_heading][tw_comingsoon date="date: 2018-12-06T08:52:58+00:00"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Product Carousel', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/41.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'shop',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="Our Products" subtitle="" google_fonts="font_family:Audiowide%3Aregular|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="32" letter_spacing="0"][/tw_heading][tw_product_carousel cats="man" items="4" margin="30"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio Masonry', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/42.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="Top Destinations" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][tw_portfolio cats="top-destinations" count="4" layout="metro" hover_metro="tw-hover-style-5" gutter="uk-grid-medium" style="metro"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Video with Iconbox', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/43.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'video',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-large" uk_light="true" parallax="bgy: -200;" overlay="0.2" css=".vc_custom_1524724995384{background: #1c1c1c url(http://lvly.themewaves.com/wp-content/uploads/2018/04/travel-video.jpg?id=7297);}"][vc_column][tw_heading title_animate="" title="Watch Our Video" subtitle="REALIZE YOUR IDEAS"][/tw_heading][tw_video min_height="64"][/tw_video][/vc_column][/vc_row][vc_row][vc_column][tw_block slug="iconbox-home-travel"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Portfolio Carousel', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/44.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'portfolio',
            'content'       => <<<CONTENT
            [vc_row css=".vc_custom_1507716781113{border-top-width: 1px !important;border-top-color: #e5e5e5 !important;border-top-style: solid !important;border-radius: 1px !important;}"][vc_column][tw_heading title_animate="" title="Best Tours" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][tw_portfolio_carousel cats="best-tours" count="5" content_type="inside" items="4" margin="0" nav="" auto-width="true" autoplay="true" autoplay-hover-pause="true" autoplay-timeout="5000" layout="overlay" auto-height=""][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Medical Introduction', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/45.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row size="uk-padding-remove-vertical" custom_class="uk-margin-top-minus"][vc_column width="1/3" custom_class="uk-padding" uk_light="true" css=".vc_custom_1524554415787{background-image: url(http://lvly.themewaves.com/wp-content/uploads/2018/04/column-bg-health.jpg?id=7028) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][tw_text]
 
            Emergen Case
            Duis sed odio sit amet nibh vulputate cursus consequat auctor lorem Ipsum proin gravida sociosqu sollicitu consequat sagittis sem.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_text][/vc_column][vc_column width="1/3" custom_class="uk-padding" uk_light="true" css=".vc_custom_1499318446261{background-color: #6fb1c7 !important;}"][tw_text]
 
            24 Hours Service
            Duis sed odio sit amet nibh vulputate cursus consequat auctor lorem Ipsum proin gravida sociosqu sollicitu consequat sagittis sem.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_text][/vc_column][vc_column width="1/3" custom_class="uk-padding" css=".vc_custom_1499318519202{background-color: #f7f7f7 !important;}"][tw_text][table id=1 /][/tw_text][/vc_column][/vc_row][vc_row][vc_column width="1/3"][tw_iconbox icon="fontawesome" fontawesome="fa fa-heartbeat" title="Medical Treatment" layout="top_center" fi_color="#ffffff" fi_bgcolor="#6fb1c7"]Duis sed odio sit amet nibh vulputate
            cursus sit amet mauris morbi accumsan
            ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="fontawesome" fontawesome="fa fa-medkit" title="Emergency Help" layout="top_center" fi_color="#ffffff" fi_bgcolor="#6fb1c7"]Duis sed odio sit amet nibh vulputate
            cursus sit amet mauris morbi accumsan
            ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox icon="fontawesome" fontawesome="fa fa-stethoscope" title="Qualified Doctors" layout="top_center" fi_color="#ffffff" fi_bgcolor="#6fb1c7"]Duis sed odio sit amet nibh vulputate
            cursus sit amet mauris morbi accumsan
            ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Image with Accordion', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/46.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'accordion',
            'content'       => <<<CONTENT
            [vc_row css=".vc_custom_1507717202137{padding-bottom: 0px !important;}"][vc_column][tw_heading title_animate="" title="Departments" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][/vc_column][vc_column width="1/2"][vc_accordion][vc_accordion_tab title="OUTPATIENT SURGERY"][tw_text]Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum nunc etiam pharetra erat fermentu feugiat velit mauris egestas quam utero aliquam massa nisl quis neque.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="CARDIAC CLINICY"][tw_text]Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum nunc etiam pharetra erat fermentu feugiat velit mauris egestas quam utero aliquam massa nisl quis neque.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="OPHTHALMOLOGY CLINIC"][tw_text]Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum nunc etiam pharetra erat fermentu feugiat velit mauris egestas quam utero aliquam massa nisl quis neque.[/tw_text][/vc_accordion_tab][vc_accordion_tab title="GYNAECOLOGICAL CLINIC"][tw_text]Class aptent taciti sociosqu ad litora torquent per conubia nostra person inceptos himenaeos mauris in erat proin condimentum fermentum nunc etiam pharetra erat fermentu feugiat velit mauris egestas quam utero aliquam massa nisl quis neque.[/tw_text][/vc_accordion_tab][/vc_accordion][/vc_column][vc_column width="1/2"][tw_image image="7039" animation_customize="true" animation_custom="target: *; cls:uk-animation-slide-right-medium; delay: 400;"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox with Heading', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/47.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth"][vc_column][vc_row_inner tw_dimension_type="custom-min-height" tw_dimension_height="610" content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" equal_height="" custom_class="uk-position-absolute uk-width-1-1 uk-position-top" css=".vc_custom_1512118268675{background-color: #151515 !important;}"][vc_column_inner][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="" css=".vc_custom_1499225982707{padding-top: 70px !important;}"][vc_column_inner css=".vc_custom_1512118276218{margin-bottom: 70px !important;}"][tw_heading title_animate="" title="Who We Are" subtitle="" uk_light="true"]Class aptent taciti sociosqu ad litora torquent per conubia nostra persont inceptos mauris in erat justo nullam dapibus condimentum sit amet augue sed non. Neque elit odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio sed utiroret eiturost imirot mauris egestas quam ut aliquam massa nisl quis neque.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="light-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_heading][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="fi_image" title="Fitness Classes" layout="top_center" fi_image="7540"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="fi_image" title="Yoga Classes" layout="top_center" fi_image="7541"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tw_iconbox icon="fi_image" title="Crosfit Courses" layout="top_center" fi_image="7542"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Course HTML', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/48.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'html',
            'content'       => <<<CONTENT
            [vc_row css=".vc_custom_1500898345557{background-color: #f7f7f7 !important;}"][vc_column][tw_heading title_animate="" title="Popular Courses" subtitle=""]This is the Only Demo purpose HTML and not included the working Plugin section.[/tw_heading][vc_raw_html el_class="tw-element"]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1lbGVtZW50JTIwdHctcG9zdC1jYXJvdXNlbCUyMHR3LWNvdXJzZSUyMHR3LW93bC1jYXJvdXNlbC1jb250YWluZXIlMjIlMjBkYXRhLWRvdHMlM0QlMjJ0cnVlJTIyJTIwZGF0YS1kb3RzLWVhY2glM0QlMjJ0cnVlJTIyJTIwZGF0YS1uYXYlM0QlMjIlMjIlMjBkYXRhLWxvb3AlM0QlMjIlMjIlMjBkYXRhLWF1dG9wbGF5JTNEJTIydHJ1ZSUyMiUyMGRhdGEtYXV0b3BsYXktaG92ZXItcGF1c2UlM0QlMjIlMjIlMjBkYXRhLWF1dG9wbGF5LXRpbWVvdXQlM0QlMjI1MDAwJTIyJTIwZGF0YS1hdXRvLXdpZHRoJTNEJTIyJTIyJTIwZGF0YS1pdGVtcyUzRCUyMjMlMjIlMjBkYXRhLWNlbnRlciUzRCUyMiUyMiUyMGRhdGEtbWFyZ2luJTNEJTIyNjAlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMm93bC1jYXJvdXNlbCUyMG93bC10aGVtZSUyMiUyMGRhdGEtdWstc2Nyb2xsc3B5JTNEJTIydGFyZ2V0JTNBLnBvc3QtaXRlbSUzQiUyMGNscyUzQXVrLWFuaW1hdGlvbi1zbGlkZS1ib3R0b20tbWVkaXVtJTNCJTIwZGVsYXklM0ElMjAzNTAlM0IlMjIlMjBkYXRhLXVrLWxpZ2h0Ym94JTNEJTIyYW5pbWF0aW9uJTNBJTIwc2NhbGUlM0IlMjB0b2dnbGUlM0EudHctaW1hZ2UtaG92ZXIlMjIlM0UlMEElMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMnBvc3QtaXRlbSUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIyZW50cnktbWVkaWElMjIlMjAlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMGNsYXNzJTNEJTIydHctaW1hZ2UtaG92ZXIlMjIlMjB0aXRsZSUzRCUyMkNsb3NldXAlMjBvZiUyMHRoZSUyMHdvbWFuJTI3cyUyMGhhbmQlMjB3ZWFyaW5nJTIwYmVhdXRpZnVsJTIwcmluZ3MlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NpbWclMjBzcmMlM0QlMjJodHRwJTNBJTJGJTJGaHRtbC50aGVtZXdhdmVzLmNvbSUyRmxvdmVseS1jb3Jwb3JhdGUlMkZhc3NldHMlMkZkZW1vJTJGcG9zdC1jYXJvdXNlbCUyRmVkdWNhdGlvbi0xLmpwZyUyMiUyMGFsdCUzRCUyMiUyMiUyMCUyRiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMnBvc3QtY29udGVudCUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIydHctbWV0YSUyMiUzRUJ5JTIwS2V2aW4lMjBHcmVlciUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2gzJTIwY2xhc3MlM0QlMjJwb3N0LXRpdGxlJTIyJTNFJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlM0VDbG9zZXVwJTIwb2YlMjB0aGUlMjB3b21hbiUyN3MlMjBoYW5kJTIwd2VhcmluZyUyMGJlYXV0aWZ1bCUyMHJpbmdzJTNDJTJGYSUzRSUzQyUyRmgzJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1tZXRhJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnVrLWZsb2F0LWxlZnQlMjB1ay1tYXJnaW4tcmlnaHQlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NpJTIwY2xhc3MlM0QlMjJjb3Vyc2UtaWNvbiUyMGZhYiUyMGZhJTIwZmEtdXNlciUyMiUzRSUzQyUyRmklM0UxMjAlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnVrLWZsb2F0LWxlZnQlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NpJTIwY2xhc3MlM0QlMjJjb3Vyc2UtaWNvbiUyMGZhJTIwZmFiJTIwZmEtY29tbWVudCUyMiUzRSUzQyUyRmklM0U2OCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMGNsYXNzJTNEJTIyY291cnNlLXByaWNlJTIwdWstZmxvYXQtcmlnaHQlMjIlM0VGcmVlJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIycG9zdC1pdGVtJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJlbnRyeS1tZWRpYSUyMiUyMCUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ0dy1pbWFnZS1ob3ZlciUyMiUyMHRpdGxlJTNEJTIyR3JvdXAlMjBFbmdsaXNoJTIwTGVzc29ucyUyMGFuZCUyMElCVCUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ltZyUyMHNyYyUzRCUyMmh0dHAlM0ElMkYlMkZodG1sLnRoZW1ld2F2ZXMuY29tJTJGbG92ZWx5LWNvcnBvcmF0ZSUyRmFzc2V0cyUyRmRlbW8lMkZwb3N0LWNhcm91c2VsJTJGZWR1Y2F0aW9uLTIuanBnJTIyJTIwYWx0JTNEJTIyJTIyJTIwJTJGJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIycG9zdC1jb250ZW50JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1tZXRhJTIyJTNFQnklMjBBbmdlbGElMjBQZXJyeSUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2gzJTIwY2xhc3MlM0QlMjJwb3N0LXRpdGxlJTIyJTNFJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlM0VHcm91cCUyMEVuZ2xpc2glMjBMZXNzb25zJTIwYW5kJTIwSUJUJTIwYW5kJTIwVG9lZmwlMjB0ZXN0cyUyMGFuZCUyMGhvdyUyMHRvJTIwUHJlcGFyZSUzQyUyRmElM0UlM0MlMkZoMyUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIydHctbWV0YSUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1mbG9hdC1sZWZ0JTIwdWstbWFyZ2luLXJpZ2h0JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaSUyMGNsYXNzJTNEJTIyY291cnNlLWljb24lMjBmYWIlMjBmYSUyMGZhLXVzZXIlMjIlM0UlM0MlMkZpJTNFMTIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1mbG9hdC1sZWZ0JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaSUyMGNsYXNzJTNEJTIyY291cnNlLWljb24lMjBmYSUyMGZhYiUyMGZhLWNvbW1lbnQlMjIlM0UlM0MlMkZpJTNFNjglMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMmNvdXJzZS1wcmljZSUyMHVrLWZsb2F0LXJpZ2h0JTIyJTNFJTI0OTkuMDAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJT
            IwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJwb3N0LWl0ZW0lMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmVudHJ5LW1lZGlhJTIyJTIwJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnR3LWltYWdlLWhvdmVyJTIyJTIwdGl0bGUlM0QlMjJZb3VuZyUyMHdvbWFuJTIwcmVsYXhpbmclMjBhdCUyMGhvbWUlMjBhbmQlMjByZWFkaW5nJTIwYSUyMGJvb2slMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NpbWclMjBzcmMlM0QlMjJodHRwJTNBJTJGJTJGaHRtbC50aGVtZXdhdmVzLmNvbSUyRmxvdmVseS1jb3Jwb3JhdGUlMkZhc3NldHMlMkZkZW1vJTJGcG9zdC1jYXJvdXNlbCUyRmVkdWNhdGlvbi0zLmpwZyUyMiUyMGFsdCUzRCUyMiUyMiUyMCUyRiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMnBvc3QtY29udGVudCUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIydHctbWV0YSUyMiUzRUJ5JTIwS2ltYmVybHklMjBUcmFuJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaDMlMjBjbGFzcyUzRCUyMnBvc3QtdGl0bGUlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRVlvdW5nJTIwd29tYW4lMjByZWxheGluZyUyMGF0JTIwaG9tZSUyMGFuZCUyMHJlYWRpbmclMjBhJTIwYm9vayUzQyUyRmElM0UlM0MlMkZoMyUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIydHctbWV0YSUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1mbG9hdC1sZWZ0JTIwdWstbWFyZ2luLXJpZ2h0JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaSUyMGNsYXNzJTNEJTIyY291cnNlLWljb24lMjBmYWIlMjBmYSUyMGZhLXVzZXIlMjIlM0UlM0MlMkZpJTNFMTIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1mbG9hdC1sZWZ0JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaSUyMGNsYXNzJTNEJTIyY291cnNlLWljb24lMjBmYSUyMGZhYiUyMGZhLWNvbW1lbnQlMjIlM0UlM0MlMkZpJTNFNjglMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMmNvdXJzZS1wcmljZSUyMHVrLWZsb2F0LXJpZ2h0JTIyJTNFJTI0OTkuMDAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJwb3N0LWl0ZW0lMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMmVudHJ5LW1lZGlhJTIyJTIwJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnR3LWltYWdlLWhvdmVyJTIyJTIwdGl0bGUlM0QlMjJBeGlvbSUyMEVzc2VudGlhbCUyMFdhdGNoJTIwYXVjdG9yJTIwb3JuYXJlJTIwb2RpbyUyMHNlZCUyMG5vbiUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ltZyUyMHNyYyUzRCUyMmh0dHAlM0ElMkYlMkZodG1sLnRoZW1ld2F2ZXMuY29tJTJGbG92ZWx5LWNvcnBvcmF0ZSUyRmFzc2V0cyUyRmRlbW8lMkZwb3N0LWNhcm91c2VsJTJGZWR1Y2F0aW9uLTQuanBnJTIyJTIwYWx0JTNEJTIyJTIyJTIwJTJGJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIycG9zdC1jb250ZW50JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1tZXRhJTIyJTNFQnklMjBKb2huJTIwRG9lJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaDMlMjBjbGFzcyUzRCUyMnBvc3QtdGl0bGUlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRUF4aW9tJTIwRXNzZW50aWFsJTIwV2F0Y2glMjBhdWN0b3IlMjBvcm5hcmUlMjBvZGlvJTIwc2VkJTIwbm9uJTNDJTJGYSUzRSUzQyUyRmgzJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJ0dy1tZXRhJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnVrLWZsb2F0LWxlZnQlMjB1ay1tYXJnaW4tcmlnaHQlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NpJTIwY2xhc3MlM0QlMjJjb3Vyc2UtaWNvbiUyMGZhYiUyMGZhJTIwZmEtdXNlciUyMiUzRSUzQyUyRmklM0UxMjAlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMnVrLWZsb2F0LWxlZnQlMjIlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NpJTIwY2xhc3MlM0QlMjJjb3Vyc2UtaWNvbiUyMGZhJTIwZmFiJTIwZmEtY29tbWVudCUyMiUzRSUzQyUyRmklM0U2OCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMGNsYXNzJTNEJTIyY291cnNlLXByaWNlJTIwdWstZmxvYXQtcmlnaHQlMjIlM0UlMjQ5OS4wMCUzQyUyRmElM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZkaXYlM0UlMEElMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMnBvc3QtaXRlbSUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIyZW50cnktbWVkaWElMjIlMjAlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMGNsYXNzJTNEJTIydHctaW1hZ2UtaG92ZXIlMjIlMjB0aXRsZSUzRCUyMkFsdWQuJTIwV2ludGVyJTIwTWFnYXppbmUlMjBDb3ZlciUyMGFtZXQlMjBuaWJoJTIwdnVscHV0YXRlJTIwY3Vyc3VzJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaW1nJTIwc3JjJTNEJTIyaHR0cCUzQSUyRiUyRmh0bWwudGhlbWV3YXZlcy5jb20lMkZsb3ZlbHktY29ycG9yYXRlJTJGYXNzZXRzJTJGZGVtbyUyRnBvc3QtY2Fyb3VzZWwlMkZlZHVjYXRpb24tNS5qcGclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJwb3N0LWNvbnRlbnQlMjIlM0UlMEElMjAlMjAlM
            jAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0NkaXYlMjBjbGFzcyUzRCUyMnR3LW1ldGElMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRVByaW50JTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2gzJTIwY2xhc3MlM0QlMjJwb3N0LXRpdGxlJTIyJTNFJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlM0VBbHVkLiUyMFdpbnRlciUyME1hZ2F6aW5lJTIwQ292ZXIlMjBhbWV0JTIwbmliaCUyMHZ1bHB1dGF0ZSUyMGN1cnN1cyUzQyUyRmElM0UlM0MlMkZoMyUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIydHctbWV0YSUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1mbG9hdC1sZWZ0JTIwdWstbWFyZ2luLXJpZ2h0JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaSUyMGNsYXNzJTNEJTIyY291cnNlLWljb24lMjBmYWIlMjBmYSUyMGZhLXVzZXIlMjIlM0UlM0MlMkZpJTNFMTIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGYSUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJ1ay1mbG9hdC1sZWZ0JTIyJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDaSUyMGNsYXNzJTNEJTIyY291cnNlLWljb24lMjBmYSUyMGZhYiUyMGZhLWNvbW1lbnQlMjIlM0UlM0MlMkZpJTNFNjglMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlMjBjbGFzcyUzRCUyMmNvdXJzZS1wcmljZSUyMHVrLWZsb2F0LXJpZ2h0JTIyJTNFJTI0OTkuMDAlM0MlMkZhJTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDJTJGZGl2JTNF[/vc_raw_html][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Coming Soon', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/49.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'coming-soon',
            'content'       => <<<CONTENT
            [vc_row match_height="true" valign="uk-flex-middle" parallax="bgy: -200;" overlay="0.2" css=".vc_custom_1524561558570{background: #1c1c1c url(http://lvly.themewaves.com/wp-content/uploads/2018/04/register-bg.jpg?id=7086);}"][vc_column width="7/12" uk_light="true"][tw_heading heading_tag="h2" title_animate="true" title="Available Now" subtitle="Course for Free" max_width="title_full"][/tw_heading][tw_comingsoon date="date: 2018-12-06T08:52:58+00:00" custom_class="margin-small" css=".vc_custom_1522832289627{margin-top: 0px !important;}"][/vc_column][vc_column width="5/12" css=".vc_custom_1522831205936{padding: 40px !important;background-color: #ffffff !important;}"][tw_heading title_animate="" title="REGISTER NOW" subtitle="" custom_class="uk-dark"]
 
            Class aptent taciti sociosqu ad litora torquent per
            justo condimentum sit amet augue.
 
            [/tw_heading][contact-form-7 id="5994"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Post Carousel', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/50.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'blog',
            'content'       => <<<CONTENT
            [vc_row css=".vc_custom_1503662729216{background-color: #f7f7f7 !important;}"][vc_column][tw_heading title_animate="" title="Latest News" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][tw_post_carousel cats="education" items="3" margin="60" nav="" autoplay="true" autoplay-timeout="5000"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Post Carousel - Band Home', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/51.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'blog',
            'content'       => <<<CONTENT
            [vc_section css=".vc_custom_1507719056399{padding-top: 0px !important;background-color: #f7f7f7 !important;}"][vc_row][vc_column][vc_row_inner tw_dimension_type="custom-min-height" tw_dimension_height="445" content_width="uk-container-fullwidth" size="uk-section-xsmall" gutter="uk-grid-xsmall" equal_height="" custom_class="uk-position-absolute uk-position-top-center uk-width-1-1" desktop="true" tablet="true" mobile="true" css=".vc_custom_1523352305414{background-color: #000000 !important;}"][vc_column_inner][/vc_column_inner][/vc_row_inner][tw_heading title_animate="" title="Latest Releases" subtitle="" uk_light="true" google_fonts="font_family:Audiowide%3Aregular|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="32" letter_spacing="0"][/tw_heading][tw_post_carousel cats="music" items="3" margin="60" nav="" auto-height=""][/vc_column][/vc_row][/vc_section]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Post Carousel - Business Home', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/52.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'blog',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="Latest Blog" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][tw_post_carousel layout="style-2" cats="fashion,lifestyle,travel" items="3" margin="60" nav=""][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Post Carousel - Minimal Home', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/53.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'blog',
            'content'       => <<<CONTENT
            [vc_row parallax="bgy: -200;" css=".vc_custom_1525056602712{background: #f7f7f7 url(http://lvly.themewaves.com/wp-content/uploads/2018/04/1-2.jpg?id=7425);}"][vc_column][tw_heading title_animate="" title="Latest Blog" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][tw_post_carousel layout="style-2" show_image="" excerpt_count="18" cats="lifestyle,music,travel" items="3" margin="60" dots-each="" nav="" auto-height=""][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Footer with Clients', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/54.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'footer',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-small" css=".vc_custom_1524543452206{padding-top: 55px !important;padding-bottom: 55px !important;}"][vc_column][tw_client hover=" uk-animation-slide-bottom-medium" column="col6"][tw_client_item title="" link="url:%23|title:Client%201||" img="6975"][tw_client_item title="" link="|||" img="6976"][tw_client_item title="" link="url:%23|||" img="6977"][tw_client_item title="" link="url:%23|||" img="6978"][tw_client_item title="" link="url:%23|||" img="6979"][tw_client_item title="" link="url:%23|||" img="6980"][/tw_client][/vc_column][/vc_row]
            [vc_row gutter="uk-grid-medium" uk_light="true" css=".vc_custom_1511952671810{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #222222 !important;}"][vc_column width="1/4"][vc_wp_text]
            <div class="tw-logo">
            <h3 class="site-name"><a href="http://lvly.themewaves.com/">Lvly</a></h3>
            </div>
            [/vc_wp_text][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-map-pin" title="Location" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]88, Orchard St, New York[/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-phone" title="Call Us" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]
            <div>
            <div>(001) 8686 234 432</div>
            </div>
            [/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-envelope" title="Mail Us" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]<a href="mailto:support@themewaves.com">support@themewaves.com</a>[/tw_iconbox][/vc_column][/vc_row][vc_row size="uk-section-xsmall" match_height="true" valign="uk-flex-middle" css=".vc_custom_1511952855250{border-top-width: 1px !important;background-color: #222222 !important;border-top-color: #333333 !important;border-top-style: solid !important;border-radius: 1px !important;}"][vc_column width="1/3"][tw_text font_size="uk-text-small"]© Copyright 2017 - All Rights Reserved[/tw_text][/vc_column][vc_column width="1/3" custom_class="uk-text-center"][tw_social socials="facebook.com/themewaves,dribbble.com/themewaves,twitter.com/themewaves,dribbble.com/themewaves,pinterest.com/themewaves" custom_class="uk-text-center"][/vc_column][vc_column width="1/3" custom_class="uk-text-right"][tw_text font_size="uk-text-small" custom_class="uk-text-right"]<a data-uk-scroll="">Back To Top   <i class="ion-ios-arrow-up"></i></a>[/tw_text][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Footer with Clients', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/55.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'footer',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-small" css=".vc_custom_1524543452206{padding-top: 55px !important;padding-bottom: 55px !important;}"][vc_column][tw_client hover=" uk-animation-slide-bottom-medium" column="col6"][tw_client_item title="" link="url:%23|title:Client%201||" img="6975"][tw_client_item title="" link="|||" img="6976"][tw_client_item title="" link="url:%23|||" img="6977"][tw_client_item title="" link="url:%23|||" img="6978"][tw_client_item title="" link="url:%23|||" img="6979"][tw_client_item title="" link="url:%23|||" img="6980"][/tw_client][/vc_column][/vc_row]
            [vc_row gutter="uk-grid-medium" uk_light="true" css=".vc_custom_1511952671810{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #222222 !important;}"][vc_column width="1/4"][vc_wp_text]
            <div class="tw-logo">
            <h3 class="site-name"><a href="http://lvly.themewaves.com/">Lvly</a></h3>
            </div>
            [/vc_wp_text][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-map-pin" title="Location" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]88, Orchard St, New York[/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-phone" title="Call Us" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]
            <div>
            <div>(001) 8686 234 432</div>
            </div>
            [/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-envelope" title="Mail Us" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]<a href="mailto:support@themewaves.com">support@themewaves.com</a>[/tw_iconbox][/vc_column][/vc_row][vc_row size="uk-section-xsmall" match_height="true" valign="uk-flex-middle" css=".vc_custom_1511952855250{border-top-width: 1px !important;background-color: #222222 !important;border-top-color: #333333 !important;border-top-style: solid !important;border-radius: 1px !important;}"][vc_column width="1/3"][tw_text font_size="uk-text-small"]© Copyright 2017 - All Rights Reserved[/tw_text][/vc_column][vc_column width="1/3" custom_class="uk-text-center"][tw_social socials="facebook.com/themewaves,dribbble.com/themewaves,twitter.com/themewaves,dribbble.com/themewaves,pinterest.com/themewaves" custom_class="uk-text-center"][/vc_column][vc_column width="1/3" custom_class="uk-text-right"][tw_text font_size="uk-text-small" custom_class="uk-text-right"]<a data-uk-scroll="">Back To Top   <i class="ion-ios-arrow-up"></i></a>[/tw_text][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Footer with Clients', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/56.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'footer',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-small" css=".vc_custom_1524543452206{padding-top: 55px !important;padding-bottom: 55px !important;}"][vc_column][tw_client hover=" uk-animation-slide-bottom-medium" column="col6"][tw_client_item title="" link="url:%23|title:Client%201||" img="6975"][tw_client_item title="" link="|||" img="6976"][tw_client_item title="" link="url:%23|||" img="6977"][tw_client_item title="" link="url:%23|||" img="6978"][tw_client_item title="" link="url:%23|||" img="6979"][tw_client_item title="" link="url:%23|||" img="6980"][/tw_client][/vc_column][/vc_row]
            [vc_row gutter="uk-grid-medium" uk_light="true" css=".vc_custom_1511952671810{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #222222 !important;}"][vc_column width="1/4"][vc_wp_text]
            <div class="tw-logo">
            <h3 class="site-name"><a href="http://lvly.themewaves.com/">Lvly</a></h3>
            </div>
            [/vc_wp_text][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-map-pin" title="Location" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]88, Orchard St, New York[/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-phone" title="Call Us" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]
            <div>
            <div>(001) 8686 234 432</div>
            </div>
            [/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-envelope" title="Mail Us" layout="left" size="small-title" fi_color="#151515" fi_bgcolor="#ffffff"]<a href="mailto:support@themewaves.com">support@themewaves.com</a>[/tw_iconbox][/vc_column][/vc_row][vc_row size="uk-section-xsmall" match_height="true" valign="uk-flex-middle" css=".vc_custom_1511952855250{border-top-width: 1px !important;background-color: #222222 !important;border-top-color: #333333 !important;border-top-style: solid !important;border-radius: 1px !important;}"][vc_column width="1/3"][tw_text font_size="uk-text-small"]© Copyright 2017 - All Rights Reserved[/tw_text][/vc_column][vc_column width="1/3" custom_class="uk-text-center"][tw_social socials="facebook.com/themewaves,dribbble.com/themewaves,twitter.com/themewaves,dribbble.com/themewaves,pinterest.com/themewaves" custom_class="uk-text-center"][/vc_column][vc_column width="1/3" custom_class="uk-text-right"][tw_text font_size="uk-text-small" custom_class="uk-text-right"]<a data-uk-scroll="">Back To Top   <i class="ion-ios-arrow-up"></i></a>[/tw_text][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/57.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column css=".vc_custom_1511768678490{padding-bottom: 40px !important;}"][tw_heading subtitle="" title="WHY CHOOSE US?" title_animate=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][/vc_column][vc_column width="1/3"][tw_iconbox layout="left" size="small-typography" title="Web Design" icon="eticons" eticons="et-laptop" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit erot auctor ornare lorem ipsum odio.[/tw_iconbox][tw_iconbox layout="left" size="small-typography" title="Fully Responsive" icon="eticons" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit erot auctor ornare lorem ipsum odio.[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox layout="left" size="small-typography" title="Web Development" icon="eticons" eticons="et-tools-2" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit erot auctor ornare lorem ipsum odio.[/tw_iconbox][tw_iconbox layout="left" size="small-typography" title="Graphic Design" icon="eticons" eticons="et-puzzle" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit erot auctor ornare lorem ipsum odio.[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox layout="left" size="small-typography" title="Social Media" icon="eticons" eticons="et-genius" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit erot auctor ornare lorem ipsum odio.[/tw_iconbox][tw_iconbox layout="left" size="small-typography" title="Friendly Support" icon="eticons" eticons="et-happy" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit erot auctor ornare lorem ipsum odio.[/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Iconbox', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/58.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'iconbox',
            'content'       => <<<CONTENT
            [vc_row][vc_column css=".vc_custom_1511941377499{margin-bottom: 60px !important;}"][tw_heading title_animate="" title="WHAT WE DO" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][/vc_column][vc_column width="1/4"][tw_iconbox icon="eticons" eticons="et-lightbulb" animation="fadeInUp" animation_delay="200" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox title="STRATEGY" icon="eticons" eticons="et-globe" animation="fadeInUp" animation_delay="400" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox title="DESIGN" icon="eticons" eticons="et-strategy" animation="fadeInUp" animation_delay="600" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][vc_column width="1/4"][tw_iconbox title="DEVELOPMENT" icon="eticons" eticons="et-tools-2" animation="fadeInUp" animation_delay="800" morelink="url:%23|title:Read%20More||"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.
 
            [tw_button link="#" target="_blank" color="" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read more[/tw_button][/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Team', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/59.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'team',
            'content'       => <<<CONTENT
            [vc_row gutter="uk-grid-medium"][vc_column][tw_heading title_animate="" title="Meat Our Team" subtitle="" css=".vc_custom_1499148967146{padding-bottom: 35px !important;}"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][/vc_column][vc_column width="1/4"][tw_team name="Kevin Greer" position="Director" image="6705"][/vc_column][vc_column width="1/4"][tw_team name="Angela Perry" position="Manager" image="6706"][/vc_column][vc_column width="1/4"][tw_team name="Alex Patterson" position="Developer" image="6725"][/vc_column][vc_column width="1/4"][tw_team name="Kimberly Tran" position="Designer" image="6707"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Team', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/60.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'team',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="Our Models" subtitle="" google_fonts="font_family:Playfair%20Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic|font_style:400%20regular%3A400%3Anormal" custom_font="yes" font_size="24"]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][vc_row_inner][vc_column_inner width="1/4"][tw_team layout="style-2" name="Jessica Alba" position="Model" image="6708"][/vc_column_inner][vc_column_inner width="1/4"][tw_team layout="style-2" name="Jessica Alba" position="Model" image="6709"][/vc_column_inner][vc_column_inner width="1/4"][tw_team layout="style-2" name="Jessica Alba" position="Model" image="6710"][/vc_column_inner][vc_column_inner width="1/4"][tw_team layout="style-2" name="Jessica Alba" position="Model" image="6711"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Team - Home Fitness', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/61.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'team',
            'content'       => <<<CONTENT
            [vc_row css=".vc_custom_1499226274763{border-top-width: 1px !important;border-top-color: #e5e5e5 !important;border-top-style: solid !important;}"][vc_column][tw_heading title_animate="" title="Our Trainers" subtitle=""]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris erat justo condimentum sit amet augue.[/tw_heading][vc_row_inner equal_height=""][vc_column_inner width="1/3"][tw_team name="Kevin Greer" position="Main Trainer" image="6718"][/vc_column_inner][vc_column_inner width="1/3"][tw_team name="Angela Perry" position="Yoga Trainer" image="6717"][/vc_column_inner][vc_column_inner width="1/3"][tw_team name="Alex Patterson" position="Mass Trainer" image="6718"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Team with Service', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/62.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'team',
            'content'       => <<<CONTENT
            [vc_row content_width="uk-container-fullwidth" size="uk-padding-remove-vertical" gutter="uk-grid-collapse" uk_light="true" layout="full" grid="uk-grid-collapse" padding="uk-padding-remove-vertical"][vc_column width="1/4"][tw_team layout="tw-hover-style-1" name="Kevin Greer" position="DIRECTOR" socials="facebook.com,twitter.com,pinterest.com" hover="tw-hover-style-1" image="6705"][/vc_column][vc_column width="1/4"][tw_team layout="tw-hover-style-1" name="Angela Perry" position="MANAGER" socials="facebook.com,twitter.com,pinterest.com" hover="tw-hover-style-1" image="6706"][/vc_column][vc_column width="1/4"][tw_team layout="tw-hover-style-1" name="Alex Patterson" position="DESIGNER" socials="facebook.com,twitter.com,pinterest.com" hover="tw-hover-style-1" image="6725"][/vc_column][vc_column width="1/4"][tw_team layout="tw-hover-style-1" name="Kimberly Tran" position="DEVELOPER" socials="facebook.com,twitter.com,pinterest.com" hover="tw-hover-style-1" image="6707"][/vc_column][/vc_row]
            [vc_row custom_class="uk-section-secondary uk-light" section="uk-section-secondary" element_dark="true" css=".vc_custom_1496753017847{background-color: #222222 !important;}"][vc_column width="1/3"][tw_iconbox title="OUR MISSION"]Duis sed odio sit amet nibh vulputate cursus sit amet tincidunt auctor ornare odio consequat auctor. Lorem Ipsum proin gravida auctor sociosqu sollicitudin quis bibendum auctor consequat sagittis sem.[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox title="OUR VISSION"]Duis sed odio sit amet nibh vulputate cursus sit amet tincidunt auctor ornare odio consequat auctor. Lorem Ipsum proin gravida auctor sociosqu sollicitudin quis bibendum auctor consequat sagittis sem.[/tw_iconbox][/vc_column][vc_column width="1/3"][tw_iconbox title="OUR PASSION"]Duis sed odio sit amet nibh vulputate cursus sit amet tincidunt auctor ornare odio consequat auctor. Lorem Ipsum proin gravida auctor sociosqu sollicitudin quis bibendum auctor consequat sagittis sem.[/tw_iconbox][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials with Counter', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/63.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'counter',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-large" uk_light="true" parallax="bgy: -200;" overlay="0.4" element_dark="true" ratio="0.1" css=".vc_custom_1524475002054{background: #151515 url(http://lvly.themewaves.com/wp-content/uploads/2018/04/testimonial.jpg?id=6925);}"][vc_column][tw_testimonial items="1" nav=""][tw_testimonial_item title="What People say" name="Steve Jobs" position="Apple"]I'm an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][tw_testimonial_item title="What People say" name="Steve Jobs" position="Apple"]I'm an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][tw_testimonial_item title="What People say" name="Steve Jobs" position="Apple"]I'm an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][/tw_testimonial][/vc_column][/vc_row]
            [vc_row content_width="uk-container-fullwidth" size="uk-section-medium" animation_customize="true" animation_custom="target: &gt; div div; cls:uk-animation-slide-bottom-medium; delay: 200;" custom_class="uk-light" css=".vc_custom_1503499508679{background-color: #151515 !important;}"][vc_column width="1/4"][tw_counterup counter_style="style-2" counter_number="8500" counter_title="CODE LINES" icon="eticons" eticons="et-layers"][/vc_column][vc_column width="1/4"][tw_counterup counter_style="style-2" counter_number="4580" counter_title="WORKING HOURS" icon="eticons" eticons="et-clock"][/vc_column][vc_column width="1/4"][tw_counterup counter_style="style-2" counter_number="1800" counter_title="PROJECT DONE" icon="eticons" eticons="et-trophy"][/vc_column][vc_column width="1/4"][tw_counterup counter_style="style-2" counter_number="2200" counter_title="HAPPY CLIENTS" icon="eticons" eticons="et-happy"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials with Counter', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/64.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'counter',
            'content'       => <<<CONTENT
            [vc_row uk_light="true" parallax="bgy: -200;" overlay="0.4" css=".vc_custom_1525072652407{background: #151515 url(http://lvly.themewaves.com/wp-content/uploads/2017/07/career-testimonial-bg.jpg?id=7529);}"][vc_column][tw_testimonial items="1" nav=""][tw_testimonial_item title="What People say" img="7044"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][tw_testimonial_item title="What People say" img="7044"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][tw_testimonial_item title="What People say" img="7044"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][/tw_testimonial][/vc_column][/vc_row]
            [vc_row custom_class="uk-light" css=".vc_custom_1497948812009{background-color: #151515 !important;}"][vc_column width="1/4"][tw_counterup counter_number="19" counter_title="Year Experience"][/vc_column][vc_column width="1/4"][tw_counterup counter_number="20" counter_title="Awards"][/vc_column][vc_column width="1/4"][tw_counterup counter_number="215" counter_title="Projects Done"][/vc_column][vc_column width="1/4"][tw_counterup counter_number="301" counter_title="Happy Clients"][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/65.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'testimonials',
            'content'       => <<<CONTENT
            [vc_row uk_light="true" parallax="bgy: -200;" overlay="0.4" css=".vc_custom_1525072652407{background: #151515 url(http://lvly.themewaves.com/wp-content/uploads/2017/07/career-testimonial-bg.jpg?id=7529);}"][vc_column][tw_testimonial items="1" nav=""][tw_testimonial_item title="What People say" img="7044"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][tw_testimonial_item title="What People say" img="7044"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][tw_testimonial_item title="What People say" img="7044"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][/tw_testimonial][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/66.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'testimonials',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-large"][vc_column][tw_testimonial items="1" margin="0"][tw_testimonial_item title="What People Say" name="Steve Jobs" position="Apple" img="7044"]I'm an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][tw_testimonial_item title="What People Say" name="Steve Jobs" position="Apple" img="7044"]I'm an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][tw_testimonial_item title="What People Say" name="Steve Jobs" position="Apple" img="7044"]I'm an optimist in the sense that I believe humans are noble and honorable, and some of them are really smart. I have a very optimistic view of individuals.[/tw_testimonial_item][/tw_testimonial][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials Style', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/67.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'testimonials',
            'content'       => <<<CONTENT
            [vc_row][vc_column][tw_heading title_animate="" title="What People Say" subtitle=""]We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores.[/tw_heading][tw_testimonial layout="carousel2" items="3" margin="30" nav="" autoplay="true" autoplay-timeout="3000" single-item=""][tw_testimonial_item img="7035"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_testimonial_item][tw_testimonial_item img="7036"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_testimonial_item][tw_testimonial_item img="7037"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_testimonial_item][tw_testimonial_item img="7035"]Duis sed odio sit amet nibh vulputate cursus sit amet mauris morbi accumsan ipsum velit auctor ornare odio.[/tw_testimonial_item][/tw_testimonial][/vc_column][/vc_row]
CONTENT
        ),
        array(
            'name'          => esc_html__( 'Testimonials Style', 'waves' ),
            'image_path'    => esc_url( LVLY_CORE_PLUGIN_DIR . 'vc_extend/assets/img/templates/68.jpg' ),
            'custom_class'  => 'tw-custom-template',
            'filter'        => 'testimonials',
            'content'       => <<<CONTENT
            [vc_row size="uk-section-xsmall" css=".vc_custom_1525774299588{padding-bottom: 0px !important;background-color: #f8f8f8 !important;}"][vc_column][tw_testimonial layout="carousel3" items="1" margin="30" nav="" custom_class="custom-dots"][tw_testimonial_item title="What People say" img="7072"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][tw_testimonial_item title="What People say" img="7072"]Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos mauris justo dapibus condimentum amet augue sed non.[/tw_testimonial_item][/tw_testimonial][/vc_column][/vc_row]
CONTENT
        ),
    );
}

add_filter( 'vc_get_all_templates', 'waves_custom_template' );
function waves_custom_template( $data ) {
    global $lvly_templates;
    do_action( 'lvly_build_custom_templates_action' );
    $arr_category = array(
        'category' => 'lvly_templates',
        'category_name' => esc_html__( 'ThemeWaves Template Studio', 'waves' ),
        'category_description' => esc_html__( 'Click the Open Templates and Add on that list.', 'waves' ),
        'category_weight' => 9,
    );
    $category_templates = array();
    foreach ( $lvly_templates['templates'] as $template_id => $template_data ) {
        if ( isset( $template_data['disabled'] ) && $template_data['disabled'] ) {
            continue;
        }
        $category_templates[] = array(
            'unique_id'     => 'tw_'.$template_id,
            'name'          => $template_data['name'],
            'type'          => 'lvly_templates',
            'image'         => isset( $template_data['image_path'] ) ? $template_data['image_path'] : false,
            'custom_class'  => isset( $template_data['custom_class'] ) ? $template_data['custom_class'] : false,
            'filter'        => isset( $template_data['filter'] ) ? $template_data['filter'] : false,
        );
    }
    if ( ! empty( $category_templates ) ) {
        $arr_category['templates'] = $category_templates;
        $data[] = $arr_category;
    }
    
    return $data;
}
add_filter( 'vc_templates_render_category', 'waves_custom_template_content' );
function waves_custom_template_content( $category ) {
    global $lvly_templates;
    if ( 'lvly_templates' === $category['category'] ) {
        if ( ! empty( $category['templates'] ) ) {
            $templates='';
            
            $templates .= '<ul class="tw-template-filter vc_col-sm-2">';
                $templates .= '<li data-filter="*"><span class="button button-primary">' . esc_html__( 'All', 'waves' ) . '</span></li>';
                foreach ( $lvly_templates['filters'] as $filter ) {
                    $templates .= '<li data-filter="' . esc_attr( $filter['filter'] ) . '"><span class="button">' . esc_html( $filter['text'] ) . '</span></li>';
                }
            $templates .= '</ul>';
            $templates .= '<div class="tw-template-list vc_col-sm-10 vc_ui-template-list vc_templates-list-default_templates vc_ui-list-bar" data-vc-action="collapseAll">';
                foreach ( $category['templates'] as $template ) {
                    $name                   = isset( $template['name'] )                    ? esc_html( $template['name'] ) : esc_html( esc_html__( 'No title', 'waves' ) );
                    $template_id            = esc_attr( $template['unique_id'] );
                    $template_id_hash       = md5( $template_id ); // needed for jquery target for TTA
                    $template_name          = esc_html( $name );
                    $template_name_lower    = esc_attr( vc_slugify( $template_name ) );
                    $template_type          = esc_attr( isset( $template['type'] )          ? $template['type']             : 'custom' );
                    $template_custom_class  = esc_attr( isset( $template['custom_class'] )  ? $template['custom_class']     : '' );
                    $template_filter        = esc_attr( isset( $template['filter'] )        ? $template['filter']           : '' );
                    if ( empty( $lvly_templates['filters'][ $template_filter ]['filter'] ) ) {
                        $template_filter = '' ;
                    }else{
                        $template_filter = $lvly_templates['filters'][ $template_filter ]['filter'];
                    }

                    
                    $templates .= <<<HTML
                                <div class="vc_ui-template vc_col-sm-3 tw-template-$template_type $template_custom_class $template_filter" data-template_id="$template_id" data-template_id_hash="$template_id_hash" data-category="$template_type" data-template_unique_id="$template_id" data-template_name="$template_name_lower" data-template_type="$template_type" data-vc-content=".vc_ui-template-content">
                                    <div class="vc_ui-list-bar-item">
HTML;
                                        $templates .= apply_filters( 'vc_templates_render_template', $name, $template );
                                        $templates .= <<<HTML
                                    </div>
                                    <div class="vc_ui-template-content" data-js-content></div>
                                </div>
HTML;
                }
            $templates .= '</div>';
        }

        $category['output'] = '<div class="vc_col-md-12">';
            if ( isset( $category['category_name'] ) ) {
                $category['output'] .= '<h3>' . esc_html( 'Welcome to Templates Section', 'waves' ) . '</h3>';
            }
            if ( isset( $category['category_description'] ) ) {
                $category['output'] .= '<p class="vc_description">' . esc_html( $category['category_description'] ) . '</p>';
            }
            $category['output'] .= '<div id="tw-template-show"><button class="vc_general vc_ui-button vc_ui-button-size-sm vc_ui-button-shape-rounded vc_ui-button-action">'.esc_attr__( 'Open Templates','waves' ).'</button></div>';
        $category['output'] .= '</div>';
        $category['output'] .= '<div class="vc_column vc_col-sm-12 tw-template-container" data-tw-templates="'.esc_attr($templates).'"></div>';
    }
    return $category;   
}
add_filter( 'vc_templates_render_template', 'waves_templates_render_template', 10, 2 ); // Hook in
function waves_templates_render_template( $template_name, $template_data ) {
    if ( 'lvly_templates' === $template_data['type'] ) {
        ob_start();
            $template_id = esc_attr( $template_data['unique_id'] );
            $template_id_hash = md5( $template_id ); // needed for jquery target for TTA
            $template_name = esc_html( $template_name );
            $template_image = esc_url( isset( $template_data['image'] ) ? $template_data['image'] : '' );
            $preview_template_title = esc_attr__( 'Preview template', 'waves' );
            $add_template_title = esc_attr__( 'Add template', 'waves' );

            echo <<<HTML
            <button type="button" class="vc_ui-list-bar-item-trigger" title="$add_template_title" data-template-handler="" data-vc-ui-element="template-title">$template_name</button>
            <div class="vc_ui-list-bar-item-actions">
                <button type="button" class="vc_general vc_ui-control-button" title="$add_template_title" data-template-handler=""> <i class="vc-composer-icon vc-c-icon-add"></i>
                </button>
            </div>
            <div class="tw-template-thumb"><img src="$template_image"/></div>
HTML;
        return ob_get_clean();
    }
    return $template_name;
}
add_filter( 'vc_templates_render_backend_template', 'waves_templates_render_backend_template', 10, 2 );
add_filter( 'vc_templates_render_backend_template_preview', 'waves_templates_render_backend_template', 10, 2 );
function waves_templates_render_backend_template( $template_id, $template_type ) {
    global $lvly_templates;
    do_action( 'lvly_build_custom_templates_action' );
    $content='';
    if($template_type=='lvly_templates' ){
        $template_id=intval(str_replace( 'tw_','',$template_id));
        if(isset($lvly_templates['templates'][$template_id]['content'])){
            $content = trim( $lvly_templates['templates'][$template_id]['content'] );
            $content = str_replace( '\"', '"', $content );
            $pattern = get_shortcode_regex();
            $content = preg_replace_callback( "/{$pattern}/s", 'vc_convert_shortcode', $content );
        }else{
            $content='[vc_row][vc_column][tw_text]'.esc_html__( 'Template Not Found !!!','waves' ).'[/tw_text][/vc_column][/vc_row]';
        }
    }
    return $content;
}