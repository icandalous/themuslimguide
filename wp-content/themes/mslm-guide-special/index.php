<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Educare
 */

get_header(); 
$blog_breadcroumb_image = cs_get_option('blog_breadcroumb_image');
$blog_breadcroumb_image_array = wp_get_attachment_image_src(cs_get_option('blog_breadcroumb_image'), 'large');
?>
    
    

    <div <?php if(!empty($blog_breadcroumb_image)) : ?>style="background-image:url(<?php echo esc_url($blog_breadcroumb_image_array[0]); ?>)"<?php endif; ?> class="educare-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php esc_html_e('Blog', 'educare-champtheme'); ?></h2>
                </div>
                <div class="col-md-6 text-right">
                    <div class="educarecrumbs-area">
                        <div id="educarecrumbs">
                            <a href="<?php echo esc_url(site_url()); ?>"><?php esc_html_e('Home', 'educare-champtheme'); ?></a> &nbsp; / &nbsp; <span class="current"><?php esc_html_e('Blog', 'educare-champtheme'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main educare-post-content-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-8">
                        <?php if ( have_posts() ) :

                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_format() );

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
		            </div>
		            <div class="col-md-4">
		                <?php get_sidebar(); ?>
		            </div>
		        </div>
		    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
