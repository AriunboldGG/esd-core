jQuery(document).ready(function($){
    "use strict";
    /* Highlight Shortcode */
    if ( $( 'body' ) . is( ':not(.block-editor-page)' ) ) {
        var $tw_dropcap_shortcode='tw_dropcap_shortcode';
        tinymce.PluginManager.requireLangPack($tw_dropcap_shortcode);
        tinymce.create('tinymce.plugins.'+$tw_dropcap_shortcode, {
            init : function(ed, url) {
                ed.addCommand($tw_dropcap_shortcode, function() {
                    var selected_text = ed.selection.getContent();
                    ed.insertContent('[tw_dropcap layout="simple,square,circle" color="none" bg_color="none"]'+ selected_text +'[/tw_dropcap]');
                });
                ed.addButton($tw_dropcap_shortcode, {title : 'Insert Dropcap Shortcode',cmd : $tw_dropcap_shortcode,image : url + '/../img/shortcode_dropcap.png'});
            },
            createControl : function(n, cm) {return null;},
            getInfo : function() {return {longname : "Shortcode",author : '',authorurl : '',infourl : '',version : "1.0"};}
        });
        tinymce.PluginManager.add($tw_dropcap_shortcode,tinymce.plugins.tw_dropcap_shortcode);
    }
});