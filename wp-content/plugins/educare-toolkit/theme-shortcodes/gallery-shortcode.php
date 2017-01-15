<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_gallery_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'images' => '',
        'column' => '4',
    ), $atts ) );

    $images_m = explode(',', $images);
    
    $gallery_markup = '
    <script>
        jQuery(document).ready(function($){
            $(".educare-gallery-item").magnificPopup({
                type: \'image\',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>    
    <div class="educare-gallery educare-gallery-column-'.esc_attr($column).'">';
        
        foreach($images_m as $image) {
            $image_meta = wp_prepare_attachment_for_js($image);
            $gallery_markup .='<a title="'.esc_html($image_meta['title']).'" class="educare-gallery-item" style="background-image:url('.esc_url(wp_get_attachment_image_src($image, 'medium')[0]).')" href="'.esc_url(wp_get_attachment_image_src($image, 'large')[0]).'"><i class="fa fa-plus"></i></a>';
        }
    $gallery_markup .= '</div>';

    return $gallery_markup;
}
add_shortcode('educare_gallery', 'educare_gallery_shortcode');