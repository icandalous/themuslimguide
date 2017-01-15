<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_staff_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'photo' => '',
        'title' => '',
        'job' => '',
        'links' => '',
    ), $atts ) );

    $educare_social_links_markup = vc_param_group_parse_atts( $links );

    $staff_markup = '<div class="educare-single-staff">';

    $staff_markup .= '

                        <div class="educare-staff-img">';
    if($photo) {
        $staff_markup .= '<img src="'.esc_url(wp_get_attachment_image_src($photo, 'large')[0]).'" alt="'.esc_html($title).'">';
    }
    
    if($links) {
        $staff_markup .= '<ul class="educare-staff-social-link">';
        foreach($educare_social_links_markup as $link) {
            if(!empty($link['link']) && !empty($link['icon'])) {
                $staff_markup .= '<li><a href="'.esc_url($link['link']).'" target="_blank"><i class="'.esc_attr($link['icon']).'"></i></a></li>';
            }
        }
        $staff_markup .= '</ul>';
    } 

    $staff_markup .= '
                        </div>
                        <div class="educare-staff-detail">
                            <h4>'.esc_html($title).'</h4>';
    if($job) {
        $staff_markup .= '<span class="educare-staff-position">'.esc_html($job).'</span>';
    }
    
   
    
    $staff_markup .= '
                        </div>
    ';
    $staff_markup .= '</div>';

    return $staff_markup;
}
add_shortcode('educare_staff', 'educare_staff_shortcode');