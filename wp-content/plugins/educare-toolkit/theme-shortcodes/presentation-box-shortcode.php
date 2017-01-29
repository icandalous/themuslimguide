<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_presentation_box_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        'bg' => '',
        'desc' => '',
        'link_text' => '',
        'icon_type' => '1',
        'icon' => '',
        'fa_icon' => '',
        'link_to' => '1',
        'link_to_page' => '',
        'link_external' => '',
    ), $atts ) );
    
    if($link_to == 1) {
        $link_markup = get_page_link($link_to_page);
    } else {
        $link_markup = $link_external;
    }
    
    $educare_allowed_html_in_st = array(
        'a' => array(
            'href' => array(),
            'class' => array(),
            'target' => array(),
        ),
        'img' => array(
            'href' => array(),
            'class' => array(),
            'alt' => array(),
        ),
        'p' => array(),
        'br' => array(),
        'strong' => array(),
        'i' => array(),
    );

    $service_box_markup = '<a href="'.esc_url($link_markup).'" style="background-image:url('.esc_url(wp_get_attachment_image_src($bg, 'medium')[0]).')"  class="educare-service-box"><div class="service-box-inner">';
    
        $service_box_markup .='
            <div class="educare-service-box-image">';
        /*if($icon_type == 1) {
            $service_box_markup .='
                <img src="'.esc_url(wp_get_attachment_image_src($icon, 'medium')[0]).'" alt="'.esc_attr($title).'"/>
            ';
        } else {
            $service_box_markup .='<i class="'.esc_attr($fa_icon).'"></i>';
        }*/
        
        $service_box_markup .='
            </div>
            <h2>'.esc_html($title).'</h2>
            <div class="educare-service-box-content">
                '.wp_kses(wpautop($desc), $educare_allowed_html_in_st).'
            </div>
        ';

    $service_box_markup .= '</div></a>';

    return $service_box_markup;
}
add_shortcode('educare_presentation_box', 'educare_presentation_box_shortcode');