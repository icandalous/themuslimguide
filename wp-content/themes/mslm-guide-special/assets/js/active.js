(function ($) {
	"use strict";

    jQuery(document).ready(function($){
        
        $('.menu_wrap ul.sub-menu, .menu_wrap ul.children').siblings('a').addClass('sub-siblings');
        
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });

        $(".header-bottom-area ul.menu, #primary-menu").slicknav({
            prependTo: '.menu_col',
            allowParentLinks: true
        });
        
        $('.loader_wrep').fadeOut(1000);
    });
    
    jQuery(window).load(function(){
        jQuery(".preloader-wrap").fadeOut(1000);
    });


}(jQuery));