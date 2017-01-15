jQuery(document).ready(function($){
    if( $.fn.magnificPopup) {
      $( ".image-popup-link" ).magnificPopup({
          type:"image",
          gallery: {
              enabled: true
          },
          removalDelay: 300,
          mainClass: 'mfp-fade'
      });
    };
});