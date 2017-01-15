<?php
if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_toolkit_logo_shortcode( $atts, $content = null  ) {
 
    extract( shortcode_atts( array(
        'attribute' => '',
        'another' => ''
    ), $atts ) );
 
    $logo_markup ='';
    
    if(!empty(cs_get_option('educare_logo_light'))) {
        $logo_markup .='<img class="footer-logo-img" src="'.esc_url(wp_get_attachment_image_src(cs_get_option('educare_logo_light'), 'medium')[0]).'" alt="'.esc_html(get_bloginfo('name')).'"/>';
    } else {
        $logo_markup .= '<h2 class="footer-logo"><span>'.esc_html(get_bloginfo('name')).'</span></h2>';
    }
    
    return $logo_markup;
}   
add_shortcode('logo', 'educare_toolkit_logo_shortcode');