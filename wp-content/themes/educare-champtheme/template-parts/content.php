<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Educare
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if('post' === get_post_type()) : ?>
    
        <?php if(has_post_thumbnail()) : ?>
        <div class="post-featured-content">
            <?php if(!is_singular()):  ?>
                <a href="<?php esc_url(the_permalink()); ?>">
            <?php endif; ?>
                <?php the_post_thumbnail('large'); ?>
            <?php if(!is_singular()):  ?>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <h2 class="main-blog-title">
            <?php if(!is_singular()):  ?>
                <a href="<?php esc_url(the_permalink()); ?>">
            <?php endif; ?>
                <?php echo esc_html(the_title()); ?>
            <?php if(!is_singular()):  ?>
                </a>
            <?php endif; ?>
        </h2>
    
    <?php endif; ?>


	<header class="entry-header">
		<?php
        
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php educare_champtheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
	<?php 
        if('course' === get_post_type() OR 'event' === get_post_type()) : 
        if('event' === get_post_type()) {
            if(get_post_meta($post->ID, 'educare_event_meta', true)) {
                $event_meta = get_post_meta($post->ID, 'educare_event_meta', true);
            } else {
                $event_meta = array();
            }
            if(array_key_exists('btn_link_to_page', $event_meta)) {
                if($event_meta['btn_link_to_page'] == 1) {
                    $link_markup = get_page_link($event_meta['btn_link_to_page_link']);
                } else {
                    $link_markup = $event_meta['btn_link_to_external_link'];
                }
            }
            
            $event_assigned_cat = get_the_terms( $post->ID, 'event_cat' );
            
            $event_assigned_cat_array = array();
            if($event_assigned_cat && ! is_wp_error( $event_assigned_cat )) {
                foreach ( $event_assigned_cat as $cat ) {
                    $event_assigned_cat_array[] = $cat->name;
                }
            }

            $event_assigned_cat_list = join( ", ", $event_assigned_cat_array );     
        } else {
            if(get_post_meta($post->ID, 'educare_course_meta', true)) {
                $course_meta = get_post_meta($post->ID, 'educare_course_meta', true);
            } else {
                $course_meta = array();
            }
            
            $course_assigned_cat = get_the_terms( $post->ID, 'course_cat' );
            
            $course_assigned_cat_array = array();
            if($course_assigned_cat && ! is_wp_error( $course_assigned_cat )) {
                foreach ( $course_assigned_cat as $cat ) {
                    $course_assigned_cat_array[] = $cat->name;
                }
            }

            $course_assigned_cat_list = join( ", ", $course_assigned_cat_array );  
            
            if(array_key_exists('cta_linkto', $course_meta)) {
                if($course_meta['cta_linkto'] == 1) {
                    $link_markup = get_page_link($course_meta['cta_to_page']);
                } else {
                    $link_markup = $course_meta['cta_to_external'];
                }
            }
        }
    ?>
	
	<div class="course-top-area">
        <div class="row">
            <?php if(has_post_thumbnail()) : ?>
            <div class="small-d-course-featured-img">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="course-featured-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)">
                <div class="educare-loading-bar">
                    <p><i class="fa fa-cog fa-spin"></i> <?php esc_html_e('Loading ...', 'educare-champtheme'); ?></p>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-md-4 col-md-offset-8">
                <div class="course-information">
                    <h2><?php 
                        if('event' === get_post_type()) {
                            esc_html_e('Event Information', 'educare-champtheme');
                        } else {
                            esc_html_e('Course Information', 'educare-champtheme'); 
                        }
                    ?></h2>
                    <ul>
                        <?php if('event' === get_post_type()) : ?>
                            <?php if(array_key_exists('meta', $event_meta) && !empty($event_meta['meta'])) : foreach($event_meta['meta'] as $info) : ?>
                            <li><?php echo esc_html($info['title']); ?>:<span><?php echo esc_html($info['info']); ?></span></li>
                            <?php endforeach; endif; ?>
                        <?php else : ?>
                            <?php if(array_key_exists('info', $course_meta) && !empty($course_meta['info'])) : foreach($course_meta['info'] as $info) : ?>
                            <li><?php echo esc_html($info['title']); ?>:<span><?php echo esc_html($info['text']); ?></span></li>
                            <?php endforeach; endif; ?>
                        <?php endif; ?>

                        <?php if('event' === get_post_type()) : ?>
                            <?php if($event_assigned_cat && ! is_wp_error( $event_assigned_cat )) : ?>
                            <li><?php esc_html_e('Category', 'educare-champtheme'); ?> <span><?php echo esc_html($event_assigned_cat_list); ?></span></li>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if(!empty($course_meta['price'])) : ?>
                            <li><?php esc_html_e('Price', 'educare-champtheme'); ?> <span><?php echo esc_html(cs_get_option('currency_code')); ?> <?php echo esc_html($course_meta['price']); ?></span></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                    
                    <?php if('event' === get_post_type()) : ?>
                        <?php if($event_meta['tickets_btn'] == true) : ?>
                        <div class="course-register-not-btn">
                            <a target="<?php echo esc_attr($event_meta['link_tab']); ?>" href="<?php echo esc_url($link_markup); ?>" class="educare-btn"><?php echo esc_html($event_meta['btn_text']); ?></a>
                        </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php if(array_key_exists('enable_reg_button', $course_meta) && $course_meta['enable_reg_button'] == true) : ?>
                        <div class="course-register-not-btn">
                            <a target="<?php echo esc_attr($course_meta['cta_tab']); ?>" href="<?php echo esc_url($link_markup); ?>" class="educare-btn"><?php echo esc_html($course_meta['btn_text']); ?></a>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</div>
	<?php endif; ?>

	<div class="entry-content">
	    <?php if('event' === get_post_type()) : ?>
	    <div class="single-content-headding">
	        <h2><?php the_title(); ?></h2>
	        <p>
	            <?php if(!empty($event_meta['location'])) : ?>
	            <span class="course-location"><i class="fa fa-map-marker"></i> <?php echo esc_html($event_meta['location']); ?></span>
	            <?php endif; ?>
	            
	            <?php if($event_assigned_cat && ! is_wp_error( $event_assigned_cat )) : ?>
	            <span class="event-cat"><i class="fa fa-tags"></i> <?php echo esc_html($event_assigned_cat_list); ?></span>
	            <?php endif; ?>
	        </p>
	    </div>
	    <?php elseif('course' === get_post_type()) : ?>
	    <div class="single-content-headding">
	        <h2><?php the_title(); ?></h2>
	        <p>
	            <?php if(!empty($course_meta['teacher'])) : ?>
	            <span class="course-teacher"><i class="fa fa-user"></i> <?php echo esc_html($course_meta['teacher']); ?></span>
	            <?php endif; ?>
	            
	            <?php if($course_assigned_cat && ! is_wp_error( $course_assigned_cat )) : ?>
	            <span class="course-cat"><i class="fa fa-tags"></i> <?php echo esc_html($course_assigned_cat_list); ?></span>
	            <?php endif; ?>
	        </p>
	    </div>
	    
	    <?php endif; ?>
	    
	    
		<?php
            
            if(!is_singular()){
                the_excerpt();
                echo '<div><a class="read_more" href="'.esc_url(get_permalink()).'">'.esc_html__('Learn More ', 'educare-champtheme').'</a></div>';
            }else{
                the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'educare-champtheme' ),
                    'after'  => '</div>',
                ) );
            }
        
		?>
		
		<?php if('event' === get_post_type() && !empty($event_meta['location'])) : ?>
		<div id="event-google-map"></div>
		<script>
            jQuery(document).ready(function($){
                $("#event-google-map").gmap3({
                    address: '<?php echo esc_html($event_meta['location']); ?>',
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId : google.maps.MapTypeId.ROADMAP,
                    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{ "color": "#ffffff" }, {"visibility": "on"} ]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{ "color": "#ffffff" },{"visibility":"off"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{ "color": "#ffffff" }]},{"featureType":"water","elementType":"geometry","stylers":[{ "color": "#5aa938" }, {"visibility": "on"} ]}]
                })
                
                .marker({
                    address: '<?php echo esc_html($event_meta['location']); ?>',
                    icon: 'http://maps.google.com/mapfiles/marker_green.png'
                  });
            });
        </script>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php educare_champtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
