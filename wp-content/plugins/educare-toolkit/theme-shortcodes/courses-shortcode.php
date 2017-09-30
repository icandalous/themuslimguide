<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function educare_courses_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '10',
        'type' => '1',
        'category' => '',
        'columns' => '3',
        'btn_text' => esc_html__('Learn More', 'educare-toolkit'),
        'loadmore_text' => esc_html__('Load More', 'educare-toolkit'),
        'autoplay' => 'true',
        'autoplay_time' => '5000',
    ), $atts) );
    if($category) {
        $q = new WP_Query(array(
            'posts_per_page' => $count, 
            'post_type' => 'course', 
            'tax_query' => array(
                array(
                    'taxonomy' => 'course_cat',
                    'field'    => 'term_id',
                    'terms'    => $category,
                ),
            ),
        ));
    } else {
        $q = new WP_Query(array('posts_per_page' => $count, 'post_type' => 'course'));
    }
    
    $currency = cs_get_option('currency_code');
    
    $course_no = 0;
    $course_random_id = rand(32987, 54972);
    
    if($type == 1) {
    $educare_courses_markup = '
    <div class="educare-course-list-wrap">
    <div id="educare-course-list-'.esc_attr($course_random_id).'" class="educare-course-list row">';
    } else {
        $educare_courses_markup = '<div class="educare-course-list-wrap educare-course-list-'.esc_attr($columns).'"><div class="row">';
    }
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $course_meta = get_post_meta($idd, 'educare_course_meta', true);
        $post_content = get_the_excerpt();
        $course_no++;
        $a_little_sum = $count + $count;
        $total_found_posts = $q->found_posts;
        $total_loaded = $a_little_sum - $count;
    
        if($type == 2) {
            if($columns == 3) {
                $course_column_markup = 'col-md-4';
            } elseif($columns == 4) {
                $course_column_markup = 'col-md-3';
            } else {
                $course_column_markup = 'col-md-6';
            }
            $educare_courses_markup .= '<div class="'.esc_attr($course_column_markup).'">';
        }
		
		if(empty($course_column_markup)){
			$course_column_markup = 'col-md-3';
		}
    
        $educare_courses_markup .= '
  <div class="cours '. $course_column_markup.'">
    <div class="card one-edge-shadow">
      <div class="card-block">
         <h6 class="card-title">'.esc_html(get_the_title($idd)).'</h6><p class="card-text">
                '.$post_content.'</p>
                <a href="'.esc_url(get_permalink()).'" class="btn btn-details-courses">'.esc_html($btn_text).'</a>
      </div>
    </div>
  </div>
        ';
    
        if($type == 2) {
            $educare_courses_markup .= '</div>';
        }
    
        if($type == 2 && $course_no % $columns == 0) {
            $educare_courses_markup .='</div><div class="row">';
        }
    
    endwhile;
    wp_reset_query();
    
    $educare_courses_markup .= '</div>';
    
    
    if($type == 2) {
    $educare_courses_markup .= '     
    <div class="load-more-courses-wrap">
    <p id="load-next-courses-message"></p>
    <span data-nonce="'.esc_attr(wp_create_nonce('load_more_courses_nonce')).'" data-count="'.esc_attr($a_little_sum).'" data-static-count="'.esc_attr($count).'" data-category="'.esc_attr($category).'" data-columns="'.esc_attr($columns).'" data-btn-text="'.esc_attr($btn_text).'" data-total-loaded="'.esc_attr($total_loaded).'" class="loadmore-course-btn">'.esc_html($loadmore_text).' <i class="fa fa-long-arrow-right"></i></span></div>    
    ';
    }
    
    
    $educare_courses_markup .= '</div>';
    
    return $educare_courses_markup;
}
add_shortcode('educare_courses', 'educare_courses_shortcode');