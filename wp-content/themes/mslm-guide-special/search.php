<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Educare
 */

get_header(); ?>
    
    

    <div <?php $blog_breadcroumb_image = cs_get_option('blog_breadcroumb_image'); if(!empty($blog_breadcroumb_image)) : $blog_breadcroumb_image_array = wp_get_attachment_image_src(cs_get_option('blog_breadcroumb_image'), 'large'); ?>style="background-image:url(<?php echo esc_url($blog_breadcroumb_image_array[0]); ?>)"<?php endif; ?> class="educare-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php esc_html_e('Search Result', 'educare-champtheme'); ?></h2>
                </div>
                <div class="col-md-6 text-right">
                    <?php if (function_exists('educare_custom_breadcrumbs')) educare_custom_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main educare-post-content-area" role="main">
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
                                get_template_part( 'template-parts/content', 'search' );

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
