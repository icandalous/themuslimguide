<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_section_title_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'style' => '1',
    ), $atts ) );
    
    $educare_allowed_html_in_st2 = array(
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

    $section_title_markup = '
        <div class="educare-section-title educare-section-title-style-'.esc_attr($style).'">';
    
            if($title) {
                $section_title_markup .= '<h2>'.esc_html($title).'</h2>';
            }
            if($desc) {
                $section_title_markup .= ''.wp_kses(wpautop($desc), $educare_allowed_html_in_st2).'';
            }

    $section_title_markup .= '</div>';

    return $section_title_markup;
}
add_shortcode('educare_section_title', 'educare_section_title_shortcode');