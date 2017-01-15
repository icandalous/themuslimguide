<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_counter_box_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        'color' => '#000000',
        'icon_type' => '1',
        'icon' => '',
        'fa_icon' => '',
        'count' => '',
        'after' => '',
    ), $atts ) );

    $counter_box_markup = '
        <div class="educare-counter-box">';
    
            if($icon_type == 1 && !empty($icon)) {
                $counter_box_markup .= '<div class="counter-box-icon"><img src="'.esc_url(wp_get_attachment_image_src($icon, 'thumbnail')[0]).'" alt="'.esc_html($title).'"/></div>';
            } elseif($icon_type == 2 && !empty($fa_icon)) {
                $counter_box_markup .= '<div class="counter-box-icon"><i class="'.esc_attr($fa_icon).'"></i></div>';
            }
            
        $counter_box_markup .= '<h3><span><span class="educare-count count">'.esc_html($count).'</span>'.esc_html($after).'</span> '.esc_html($title).'</h3>';

    $counter_box_markup .= '</div>';

    return $counter_box_markup;
}
add_shortcode('educare_counter_box', 'educare_counter_box_shortcode');