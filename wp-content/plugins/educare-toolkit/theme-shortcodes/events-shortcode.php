<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }


add_action('wp_ajax_nopriv_load_more_events', 'load_more_events_callback');
add_action('wp_ajax_load_more_events', 'load_more_events_callback');

function load_more_events_callback() {
    
 
    
    
    $permission = check_ajax_referer( 'load_more_events_nonce', 'nonce', false );
    if( $permission == false ) {
        echo 'error';
        $list = '
            <div class="educare-ajax-error-content">
                <i class="fa fa-warning"></i>
                <h3>I don\'t know what happened, but there is an error!</h3>
            </div>
        ';        
    }
    else {
        $post_count  = (isset($_POST['count'])) ? $_POST['count'] : 0;
        $column  = (isset($_POST['column'])) ? $_POST['column'] : 0;
        $static_count  = (isset($_POST['static_count'])) ? $_POST['static_count'] : 0;
        $btn_text  = (isset($_POST['btn_text'])) ? $_POST['btn_text'] : 0;
        $total_loaded  = (isset($_POST['total_loaded'])) ? $_POST['total_loaded'] : 0;
        $base_no = 0;
        $event_no = 0;
        
        if($column == 3) {
            $column_markup = 'col-md-4';
        } elseif($column == 1) {
            $column_markup = 'col-md-12';
        } else {
            $column_markup = 'col-md-6';
        }

        $ignore_posts = $post_count - $static_count;
        

        $settings = array(
            'showposts' => $post_count, 
            'post_type' => 'event'
        );  

        $educare_events_query = new WP_Query($settings);      

        $list = '';
        while($educare_events_query->have_posts()) : $educare_events_query->the_post();
            $base_no++;
            $event_no++;
            $idd = get_the_ID();
            $event_meta = get_post_meta($idd, 'educare_event_meta', true);



        
            if(($base_no) > $total_loaded) {
                $list .= '
                <div class="'.esc_attr($column_markup).'">
                    <div class="educare-single-event-item" id="educare-event-'.esc_attr($event_no).'">
                        <div style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd)).')" class="educare-event-thumb">
                            <div class="educare-loading-bar">
                                <p><i class="fa fa-cog fa-spin"></i> '.esc_html__('Loading ...', 'educare-toolkit').'</p>
                            </div>
                        </div>
                        
                        <div class="educare-event-desc">
                            <div class="educare-event-top">
                                <span class="educare-event-date">'.esc_html($event_meta['day']).'<span>'.esc_html($event_meta['month']).'</span></span>
                                <p><i class="fa fa-map-marker"></i> '.esc_html($event_meta['location']).'</p>
                            </div>
                            
                            <h3>'.esc_html(get_the_title($idd)).'</h3>
                            <a href="'.esc_url(get_permalink()).'" class="educare-btn bordered-btn">'.esc_html($btn_text).' <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                '; 
                
                               
            }
        
            if($event_no % $column == 0) {
                $list .='</div><div class="row">';
            } 
        
        
        
        endwhile;
        wp_reset_query(); 
    }
 
    wp_die($list);
    
    
}



function educare_events_shortcode($atts){
    extract( shortcode_atts( array(
        'column' => '2',
        'count' => '6',
        'style' => '1',
        'btn_text' => 'Details',
    ), $atts) );
    
    

    $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'event') );
    
    $event_random_id = rand(32987, 54972);
    $a_little_sum = $count + $count;
    $total_found_posts = $q->found_posts;
    $total_loaded = $a_little_sum - $count;
    
    if($column == 3) {
        $column_markup = 'col-md-4';
    } elseif($column == 1) {
        $column_markup = 'col-md-12';
    } else {
        $column_markup = 'col-md-6';
    }
    
    $event_no = 0;

    $list = '';   
    
    $list .='
        <div class="educare-events educare-events-column-'.esc_attr($column).' educare-events-style-'.esc_attr($style).'" id="educare-events-'.$event_random_id.'"><div class="row">';

        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            $event_meta = get_post_meta($idd, 'educare_event_meta', true);    
            $event_no++;
    
            $list .= '
            
                <div class="'.esc_attr($column_markup).'">
                    <div class="educare-single-event-item">
                        <div style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd)).')" class="educare-event-thumb">
                            <div class="educare-loading-bar">
                                <p><i class="fa fa-cog fa-spin"></i> '.esc_html__('Loading ...', 'educare-toolkit').'</p>
                            </div>
                        </div>
                        
                        <div class="educare-event-desc">
                            <div class="educare-event-top">
                                <span class="educare-event-date">'.esc_html($event_meta['day']).'<span>'.esc_html($event_meta['month']).'</span></span>';
                                if(array_key_exists('host', $event_meta) && !empty($event_meta['host'])) {
                                $list .= '
                                <p><i class="fa fa-user"></i> '.esc_html($event_meta['host']).'</p>';
                                }   
    
                                if(array_key_exists('location', $event_meta) && !empty($event_meta['location'])) {
                                $list .= '
                                <p><i class="fa fa-map-marker"></i> '.esc_html($event_meta['location']).'</p>';
                                }
                            $list .='
                            </div>
                            
                            <h3>'.esc_html(get_the_title($idd)).'</h3>
                            <a href="'.esc_url(get_permalink()).'" class="educare-btn bordered-btn">'.esc_html($btn_text).' <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                ';
    
                if($event_no % $column == 0) {
                    $list .='</div><div class="row">';
                }
    
        endwhile;
        $list.= '</div></div>';
        
    
        if($count < $total_found_posts) {
        $list .='
        
        <script>
        jQuery(document).ready(function($){
            $(".event-load-more-btn").click(function(){
                $.ajax({
                    type: \'POST\',
                    url: "'.esc_url(site_url()).'/wp-admin/admin-ajax.php",
                    dataType: \'html\',
                    data: {
                        count: $(this).attr("data-count"),
                        column: $(this).attr("data-column"),
                        static_count: $(this).attr("data-static-count"),
                        btn_text: $(this).attr("data-btn-text"),
                        total_loaded: $(this).attr("data-total-loaded"),
                        action: \'load_more_events\',
                        nonce: $(this).data(\'nonce\')
                    },
                    beforeSend: function(data) {
                        $("#load-next-events-message").append("<span class=\'eventmore-loading-text\'><i class=\'fa fa-cog fa-spin\'></i> events loading ...</span>");
                        $(".event-load-more-btn").hide();
                    },
                    success: function(data, result){
                        if( result != \'error\' ) {
                            $("#educare-events-'.esc_attr($event_random_id).'").append(data);




                            var posts_per_page = '.esc_attr($count).';
                            var final_count = parseInt($(".event-load-more-btn").attr("data-count")) + parseInt(posts_per_page);

                            var total_found_posts = parseInt('.esc_attr($total_found_posts).');
                            $(".event-load-more-btn").removeAttr("data-count");
                            $(".event-load-more-btn").attr("data-count", final_count);



                            var total_loaded_count = parseInt($(".event-load-more-btn").attr("data-count")) - parseInt(posts_per_page);

                            $(".event-load-more-btn").removeAttr("data-total-loaded");
                            $(".event-load-more-btn").attr("data-total-loaded", total_loaded_count);
                            $("#load-next-events-message").empty();
                            $(".event-load-more-btn").show();

                            if ( parseInt($(".event-load-more-btn").attr("data-total-loaded")) > total_found_posts) {
                                $("#load-next-events-message").append("No more events available");
                                $(".load-more-events-wrap, #load-next-events-message").fadeOut();
                                $(".event-load-more-btn").hide();
                            }
                        }
                    }
                }); 
            });
        });
        </script>         
        
        <div class="text-center">
            <div id="load-next-events-message"></div>
            <p class="load-more-events-wrap"><span class="educare-btn event-load-more-btn" data-nonce="'.esc_attr(wp_create_nonce('load_more_events_nonce')).'" data-btn-text="'.esc_attr($btn_text).'" data-count="'.esc_attr($a_little_sum).'" data-static-count="'.esc_attr($count).'" data-column="'.esc_attr($column).'" data-total-loaded="'.esc_attr($total_loaded).'">Load More</span></p>
        </div>
        ';
        }
    
    wp_reset_query();
        
    return $list;
}
add_shortcode('educare_events', 'educare_events_shortcode');