jQuery(document).ready(function($){
    "use strict";
    /* \js_composer\assets\js\params\composer-atts.js  */
    if(typeof vc!=='undefined'){
        if(typeof vc.atts!=='undefined'){
            vc.atts.tw_selectpost_multi = {
                init: function(param, $field) {
                    $( '[list="tw-select-post-multi-selector"]' ) . trigger( 'tw-select-post-multi-change' );
                }
            };
            vc.atts.tw_select_multiple = {
                parse: function ( param ) {
                    var $val=$('[name=' + param.param_name + ']', this.content() ).val();
                    return $val?$val.join( ',' ):'';
                }
            };
            vc.atts.tw_category = {
                parse: function ( param ) {
                    var $val=$('[name=' + param.param_name + ']', this.content() ).val();
                    return $val?$val.join( ',' ):'';
                }
            };
        }
        if(typeof vc.shortcode_view!=='undefined'){
            window.LvlyFlipBoxView = window.VcColumnView.extend({
                checkIsEmpty:function () {
                    var $this=this;
                    setTimeout(function(){
                        var $crEl=$this.$el;
                        var $items=$('[data-element_type="tw_flipbox_item"]',$crEl).length;
                        if($items<2){
                            $crEl.removeClass('tw-flipbox-full');
                        }else{
                            $crEl.addClass('tw-flipbox-full');
                        }
                        if($items){
                            $this.unsetEmpty();
                        }else{
                            $this.setEmpty();
                        }
                    },500);
                }
            });
            window.LvlySliderView = window.VcAccordionView.extend({
		        render: function() {
                    window.LvlySliderView.__super__.render.call(this);
                    var $this=this;
                        $this.$content.sortable({
                            axis: "y",
                            handle: "h3",
                            stop: function(event, ui) {
                                // IE doesn't register the blur when sorting
                                // so trigger focusout handlers to remove .ui-state-focus
                                ui.item.prev().triggerHandler("focusout");
                                $(this).find('> .wpb_sortable').each(function() {
                                        var shortcode = $(this).data('model');
                                        shortcode.save({
                                                'order': $(this).index()
                                        }); // Optimize
                                });
                            }
                        });
                    
                    return this;
		        },
                addTab: function(e) {
                    this.adding_new_tab = true;
                    e.preventDefault();
                    var row = vc.shortcodes.create({
                        shortcode: 'vc_row_inner',
                        parent_id: this.model.id
                    });
                    vc.shortcodes.create({
                        shortcode: 'vc_column_inner',
                        params: {
                                width: '1/1'
                        },
                        parent_id: row.id
                    });
		        }
            });
            window.LvlyRowInnerView = window.VcRowView.extend({
                ready: function(e) {
                    window.LvlyRowInnerView.__super__.ready.call(this, e);
                                if (this.$content.closest('.wpb_tw_slider').length) {
                                    this.$content.closest('.wpb_vc_row_inner').addClass('wpb_tw_slider_item').prepend('<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons">'+this.$content.closest('[data-tw-slider-item]').data('tw-slider-item')+'</h3>');
                    }
                    return this;
                },
                checkIsEmpty: function(){
                    window.LvlyRowInnerView.__super__.checkIsEmpty.call( this );
                    var $twBlocks=$('>.wpb_element_wrapper>.wpb_column_container>.wpb_tw_block',$('>.wpb_vc_column_inner',this.$content).first());
                    if($twBlocks.length){
                        this.$el.addClass('tw-block-container');
                        $('>.vc_controls>.vc_row_layouts>a[data-cells-mask="12"]',this.$el).click();
                        $twBlocks.siblings(':not(.wpb_tw_block)').addClass('tw-block-siblings');
                        
                    }else{
                        this.$el.removeClass('tw-block-container').find('.tw-block-siblings').removeClass('tw-block-siblings');
                    }
                }
            });
            window.LvlyRowView = window.VcRowView.extend({
                checkIsEmpty: function(){
                    window.LvlyRowView.__super__.checkIsEmpty.call( this );
                    var $twBlocks=$('>.wpb_element_wrapper>.wpb_column_container>.wpb_tw_block',$('>.wpb_vc_column',this.$content).first());
                    if($twBlocks.length){
                        this.$el.addClass('tw-block-container');
                        $('>.vc_controls>.vc_row_layouts>a[data-cells-mask="12"]',this.$el).click();
                        $twBlocks.siblings(':not(.wpb_tw_block):not(.wpb_vc_row_inner)').addClass('tw-block-siblings');
                    }else{
                        this.$el.removeClass('tw-block-container').find('.tw-block-siblings').removeClass('tw-block-siblings');
                    }
                }
            });
        }
    }

    /* Post Multi Select */
    $( document ).on( 'click', '.tw-select-post-multi-list .action-remove', function() {
        var $crPid = $( this ) . closest( 'li' ) . data( 'id' );
        if( undefined !== $crPid && $crPid ){
            $crPid = $crPid+'';
            var $crField = $( this ) . closest( '.tw-select-post-multi-list' ) . siblings( '.tw-select-post-multi-field' );
            var $crFieldVal = $crField . val() . split( ',' );
            var i = $crFieldVal . indexOf( $crPid );
            if ( i !== -1 ){
                $crFieldVal . splice( i, 1 );
            }
            $crField . val( $crFieldVal ) . siblings( '[list="tw-select-post-multi-selector"]' ) . trigger( 'tw-select-post-multi-change' );
        }
    } );
    $( document ).on( 'tw-select-post-multi-change', '[list="tw-select-post-multi-selector"]', function() {
        var $crDataListInput = $( this );
        var $crDataList = $crDataListInput . siblings( '#tw-select-post-multi-selector' );
        var $crThumbList = $crDataListInput . siblings( '.tw-select-post-multi-list' );
        var $crThumbListItems = $( '>li', $crThumbList );
        var $crSelectField = $crDataListInput . siblings( '.tw-select-post-multi-field' );
        var $crSelectFieldVal = $crSelectField . val() . split( ',' );
        var $crSelectFieldValNew = [];
        $crThumbListItems . css( 'background-image', '' ) . addClass( 'post-empty' ) . data( 'pid', '' );
        $( 'option', $crDataList ) . removeAttr( 'disabled' );
        $crSelectFieldVal . forEach( function( $pid ) {
            if ( $pid ) {
                var $post = $( 'option[value="' + $pid + '"]', $crDataList );
                var $slot = $crThumbListItems . filter( '.post-empty' ) . first();
                if ( $slot . length ) {
                    $slot . attr( 'data-id', $pid );
                    $slot . removeClass( 'post-empty' );
                    $crSelectFieldValNew . push( $pid );
                    $post . attr( 'disabled', 'disabled' );
                    var $postThumb = undefined === $post . data( 'thumb' ) ? false : $post . data( 'thumb' );
                    if( $postThumb ) {
                        $slot . css( 'background-image', 'url(' + $postThumb + ')' );
                    }
                }
            }            
        } );
        $crSelectField . val( $crSelectFieldValNew . join() );
        if ( $crThumbListItems . filter( '.post-empty' ) . length ) {
            $crDataListInput . closest( '.tw-select-post-multi-container' ) . removeClass( 'tw-select-post-multi-list-full' );
        } else {
            $crDataListInput . closest( '.tw-select-post-multi-container' ) . addClass( 'tw-select-post-multi-list-full' );
        }
    });
    $( document ).on( 'change', '[list="tw-select-post-multi-selector"]', function() {
        var $crDataListInput = $( this );
        var $crDataListInputVal = $crDataListInput . val();
        var $crDataList = $crDataListInput . siblings( '#tw-select-post-multi-selector' );
        var $crSelectField = $crDataListInput . siblings( '.tw-select-post-multi-field' );
        var $crSelected = $( 'option[value="' + $crDataListInputVal + '"]', $crDataList );
        if ( $crSelected . length ) {
            $crDataListInput . val( '' );
            var $crSelectFieldVal = $crSelectField . val() . split( ',' );
            if ( $crSelectFieldVal . indexOf( $crDataListInputVal ) === -1 ) {
                $crSelectFieldVal . push( $crDataListInputVal );
            }
            $crSelectField . val( $crSelectFieldVal );
        }
        $crDataListInput . trigger( 'tw-select-post-multi-change' );
    });

    /* template */
    $(document).on( 'click', '#tw-template-show button', function(){
        var $tw_templates =  $('[data-tw-templates]');
        $tw_templates.html($tw_templates.data('tw-templates'));
        $('#tw-template-show').remove();
    });

    var $slctAllTemplates = '.tw-template-list>.tw-custom-template';
    $(document).on( 'input', '#vc_templates_name_filter', function(){
        var $filterAll = $('.tw-template-filter>[data-filter="*"] > span');
        if($filterAll.is(":not(.button-primary)")){
            $filterAll.addClass('button-primary').closest('li').siblings('li').find('.button-primary').removeClass('button-primary');
            $( $slctAllTemplates ).removeClass('tw-hidden-for-filter');
        }
    });
    $(document).on( 'click', '.tw-template-filter>li', function(){
        var $crFilter = $(this);
        var $crFilterClass = $crFilter.data('filter');
        var $templateListItems = $( $slctAllTemplates );
        $('#vc_templates_name_filter').val('');
        $templateListItems.removeClass('tw-hidden-for-filter').css('display', '');
        
        if ( $crFilter.find('span').hasClass('button-primary') && $crFilterClass !== '*') {
            $crFilter.find('span').removeClass('button-primary');
        } else {
            $crFilter.find('span').addClass('button-primary').closest('li').siblings('li').find('.button-primary').removeClass('button-primary');
            if ( $crFilterClass !== '*' ) { 
                $templateListItems.filter(':not(.'+$crFilterClass+')').addClass('tw-hidden-for-filter');
            }
        }
    });
});