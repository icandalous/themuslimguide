<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function educare_testimonials_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '10',
        'autoplay' => 'true',
        'autoplay_time' => '5000',
    ), $atts) );
    
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'testimonial')
        );
    $testimonials_random_id = rand(32987, 54972);
    $educare_testimonials_markup = '
    <div class="educare-testimonial-list-wrap">
    <script>
        jQuery(document).ready(function($){
            $("#educare-testimonials-list-'.esc_attr($testimonials_random_id).'").owlCarousel({
                items: 1,
                nav: true,
                navText: ["<i class=\'fa fa-long-arrow-left\'></i>", "<i class=\'fa fa-long-arrow-right\'></i>"],
                loop: true,
                dots: false,
                animateIn: "slideInDown",
                animateOut: "slideOutDown",
                margin: 30,
                autoplay: '.esc_attr($autoplay).',
                autoplayTimeout: '.esc_attr($autoplay_time).'
            });
        });
    </script>
    <div id="educare-testimonials-list-'.esc_attr($testimonials_random_id).'" class="educare-testimonials-list"><div class="single-educare-testimonial-wrap">';
    $testimonial_no = 0;
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $testimonial_meta = get_post_meta($idd, 'educare_testimonial_meta', true);
        $post_content = get_the_content();
        $testimonial_no++;
        $educare_allowed_html_in_tes = array(
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
    
    
        $educare_testimonials_markup .= '
            
            <div class="single-educare-testimonial">
                '.get_the_post_thumbnail($idd, 'thumbnail').'
                <h3>'.esc_html(get_the_title()).'</h3>';
    
        if(!empty($testimonial_meta['info'])) {
        $educare_testimonials_markup .='   
                <p class="testimonial-designation">'.esc_html($testimonial_meta['info']).'</p>';
        }
        $educare_testimonials_markup .=' 
                <div class="testimonial-content">
                    '.wp_kses(wpautop($post_content), $educare_allowed_html_in_tes).'
                </div>
            </div>';
    
        if($testimonial_no % 2 == 0) {
            $educare_testimonials_markup .= '
                </div>
                <div class="single-educare-testimonial-wrap">
            ';
        }
    

    endwhile;
    $educare_testimonials_markup .= '</div></div></div>';
    wp_reset_query();
    return $educare_testimonials_markup;
}
add_shortcode('educare_testimonials', 'educare_testimonials_shortcode');