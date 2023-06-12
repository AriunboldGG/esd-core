jQuery(document).ready(function($){
    "use strict";
    /* Button Shortcode */
    if ( $( 'body' ) . is( ':not(.block-editor-page)' ) ) {
        tinymce.PluginManager.requireLangPack('tw_button_shortcode');
        tinymce.create('tinymce.plugins.tw_button_shortcode', {
            init : function(ed, url) {
                ed.addCommand('tw_button_shortcode', function() {
                    ed.insertContent('[tw_button link="#" target="_blank" color="#151515" size="small" style="border uk-button-radius" hover="dark-hover" icon_class="ion-ios-arrow-thin-right" margin="0,0,0,0" animate_icon="true"]Read More[/tw_button]');
                });
                ed.addButton('tw_button_shortcode', {title : 'Insert Button',cmd : 'tw_button_shortcode',image : url + '/../img/shortcode_button.png'});
            },
            createControl : function(n, cm) {return null;},
            getInfo : function() {return {longname : "Shortcode",author : '',authorurl : '',infourl : '',version : "1.0"};}
        });
        tinymce.PluginManager.add('tw_button_shortcode', tinymce.plugins.tw_button_shortcode);
    }
});