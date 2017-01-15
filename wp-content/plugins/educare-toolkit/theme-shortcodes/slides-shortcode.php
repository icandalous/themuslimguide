<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_slides_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '3',
        'arrows' => 'true',
        'dots' => 'false',
        'autoplay' => 'true',
        'autoplay_time' => '5000',
        'slide_id' => '',
    ), $atts) );

    if($count == 1) {
        $q = new WP_Query( array('posts_per_page' => 1, 'post_type' => 'educare-slide', 'p' => $slide_id) );
    } else {
        $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'educare-slide') );
    }

    $list = '';

    if($count != 1) {
    $list .= '
    <script>
        jQuery(window).load(function(){
            jQuery("#educare-slides-'.esc_attr($slide_id).'").owlCarousel({
                items: 1,
                loop: true,
                autoplay: '.esc_attr($autoplay).',
                dots: '.esc_attr($dots).',
                nav: '.esc_attr($arrows).',
                autoplayTimeout: '.esc_attr($autoplay_time).',
                navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                animateIn: "slideInDown",
                animateOut: "slideOutDown",
                autoplayHoverPause: false,
                touchDrag: false,
                mouseDrag: false
            });
            
            jQuery("#educare-slides-'.esc_attr($slide_id).'").on("translate.owl.carousel", function () {
                jQuery(this).find(".owl-item .educare-slide-text > *").removeClass("fadeInUp animated").css("opacity","0");
                jQuery(this).find(".owl-item .educare-slide-st-img").removeClass("fadeInRight animated").css("opacity","0");
            });          
            jQuery("#educare-slides-'.esc_attr($slide_id).'").on("translated.owl.carousel", function () {
                jQuery(this).find(".owl-item.active .educare-slide-text > *").addClass("fadeInUp animated").css("opacity","1");
                jQuery(this).find(".owl-item.active .educare-slide-st-img").addClass("fadeInRight animated").css("opacity","1");
            });
            
        });
    </script>';
    }
    
    $list .='
    <div class="slider-preloader-wrap">
        <div class="preloader-wrap"><div class="preloader4"></div></div>
        <div class="educare-slides" id="educare-slides-'.esc_attr($slide_id).'">';

        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            if(get_post_meta($idd, 'educare_slide_meta', true)) {
                $slide_meta = get_post_meta($idd, 'educare_slide_meta', true);
            } else {
                $slide_meta = array();
            }
            $educare_allowed_html_in_slide = array(
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
                'h1' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h2' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h3' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h4' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h5' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h6' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'br' => array(),
                'strong' => array(),
                'i' => array(),
            );
            $post_content = get_the_content();
            $list .= '
                <div style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd)).')" class="single-educare-slide-item" id="single-educare-slide-item-'.esc_attr($idd).'">
                    <div class="educare-slide-table">
                        <div class="educare-slide-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="educare-slide-text">
                                            '.wp_kses(wpautop($post_content), $educare_allowed_html_in_slide).'';

            if(array_key_exists('buttons', $slide_meta) && $slide_meta['buttons']) {
            $list .='

                                            <div class="educare-slide-buttons">';
                                            foreach($slide_meta['buttons'] as $button) {
                                                if($button['linkto'] == 1) {
                                                    $btn_link_markup = get_page_link($button['to_page']);
                                                } else {
                                                    $btn_link_markup = $button['to_external'];
                                                }
                                                $list .='<a target="'.$button['tab'].'" href="'.esc_url($btn_link_markup).'" class="educare-btn btn_effect '.esc_attr($button['type']).'-btn">'.esc_html($button['btn_text']).' <i class="fa fa-long-arrow-right"></i></a>';
                                            }
                $list .='
                                            </div>';
            }
            $list .='
                                        </div>
                                    </div>
                                    <img class="educare-slide-st-img" src="'.esc_url(wp_get_attachment_image_src($slide_meta['img'], 'large')[0]).'" alt="'.esc_html(get_the_title($idd)).'"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
        endwhile;
        $list.= '</div> </div>';
    wp_reset_query();
        
    return $list;
}
add_shortcode('educare_slides', 'educare_slides_shortcode');