jQuery(document).ready(function ($) {
    "use strict";
    /* Social Share */
    $(document).on("click", '.entry-share a', function (e) {
        e.preventDefault();
        var $socName=$(this).attr('class').replace('-share','');
        jQuery.post(lvly_script_data.ajaxurl, {action:'lvly_share_ajax',social_pid: $(this).closest('.entry-share').data('id'), social_name: $socName});
        switch ($socName) {
            case'facebook':
                window.open('https://www.facebook.com/sharer/sharer.php?u=' + jQuery(this).attr('href'), "facebookWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0");
                break;
            case'twitter':
                window.open('http://twitter.com/intent/tweet?text=' + $(this).data('title') + ' ' + jQuery(this).attr('href'), "twitterWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0");
                break;
            case'pinterest':
                window.open('http://pinterest.com/pin/create/button/?url=' + jQuery(this).attr('href') + '&media=' + $(this).data('image') + '&description=' + $(this).data('title'), "pinterestWindow", "height=640,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0");
                break;
            case'google':
                window.open('https://plus.google.com/share?url=' + jQuery(this).attr('href'), "googleWindow", "height=640,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0");
                break;
            case'linkedin':
                window.open('https://www.linkedin.com/shareArticle??mini=true&url=' + jQuery(this).attr('href') + '&title=' + $(this).data('title'), "linkedinWindow", "height=640,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0");
                break;
        }

        return false;
    });
});