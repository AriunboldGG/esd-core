jQuery(document).ready(function($){
    "use strict";
    /* Highlight Shortcode */
    if ( $( 'body' ) . is( ':not(.block-editor-page)' ) ) {
        var $tw_highlight_shortcode='tw_highlight_shortcode';
        tinymce.PluginManager.requireLangPack($tw_highlight_shortcode);
        tinymce.create('tinymce.plugins.'+$tw_highlight_shortcode, {
            init : function(ed, url) {
                ed.addCommand($tw_highlight_shortcode, function() {
                    var selected_text = ed.selection.getContent();
                    ed.insertContent('[tw_highlight text_color="inherit" bg_color="#e6e6e6"]'+ selected_text +'[/tw_highlight]');
                });
                ed.addButton($tw_highlight_shortcode, {title : 'Insert Highlight Shortcode',cmd : $tw_highlight_shortcode,image : url + '/../img/shortcode_highlight.png'});
            },
            createControl : function(n, cm) {return null;},
            getInfo : function() {return {longname : "Shortcode",author : '',authorurl : '',infourl : '',version : "1.0"};}
        });
        tinymce.PluginManager.add($tw_highlight_shortcode,tinymce.plugins.tw_highlight_shortcode);
    }
});