<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_notices_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '20',
        'height' => '400',
    ), $atts) );

    $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'notice') );

    $list = '';
    
    $educare_allowed_html_in_bitic = array(
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

    $notices_random_id = rand(32987, 54972);
    $list .= '
    <script>
        jQuery(document).ready(function($){
            $("#educare-notices-'.esc_attr($notices_random_id).'").perfectScrollbar();
        });
    </script>';
    
    
    $list .='
    <div style="height:'.esc_attr($height).'px" class="educare-notices" id="educare-notices-'.esc_attr($notices_random_id).'">';

        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            $post_content = get_the_content();
            $list .= '
                <div class="educare-single-notice">
                    <h3><i class="fa fa-calendar"></i> '.esc_html(get_the_title($idd)).'</h3>
                    '.wp_kses(wpautop($post_content), $educare_allowed_html_in_bitic).'
                </div>
                ';
        endwhile;
        $list.= '</div>';
    wp_reset_query();
        
    return $list;
}
add_shortcode('educare_notices', 'educare_notices_shortcode');