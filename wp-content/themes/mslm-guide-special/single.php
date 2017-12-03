<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Educare
 */

get_header(); ?>
   
    <div <?php if(has_post_thumbnail()) : ?>style="background-image:url(<?php echo esc_url(the_post_thumbnail_url()); ?>)"<?php endif; ?> class="educare-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--h2>
                        <?php 
                        if('course' === get_post_type()) {
                            echo ''.esc_html_e('Course details', 'educare-champtheme').'';
                        } elseif('event' === get_post_type()) {
                            echo ''.esc_html_e('Event details', 'educare-champtheme').'';
                        } else {
                            echo ''.esc_html_e('Blog', 'educare-champtheme').'';
                        }?>
                    </h2-->
                    
                    
                </div>
                <div class="col-md-6 text-right">
                    <?php if( 'post' === get_post_type() ) : ?>
                    <?php if (function_exists('educare_custom_breadcrumbs')) educare_custom_breadcrumbs(); ?>
                    <?php else : ?>
                    <div class="educarecrumbs-area">
                        <div id="educarecrumbs">
                            <a href="<?php esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'educare-champtheme'); ?></a> &nbsp; / &nbsp; <span class="current"><?php the_title(); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>  
    
    <div class="educare-post-content-area">
        <div class="container">
            <div class="row">
                <div class="<?php if('post' === get_post_type()) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?>">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                        if('post' === get_post_type()) {
                            
                            if(cs_get_option('blog_post_nav') == true) {
                                the_post_navigation();
                            }

                            // If comments are open or we have at least one comment, load up the comment template.
                            /*if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;*/
                        }

                    endwhile; // End of the loop.
                    ?>                    
                </div>
                
                <div class="col-md-4">
                    <?php if('post' === get_post_type()) {get_sidebar();} ?>
                </div>
            </div>
        </div>
    </div>  

<?php
get_footer();
