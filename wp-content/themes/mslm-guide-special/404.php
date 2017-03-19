<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Educare
 */

get_header(); ?>
    
    <div class="educare-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php esc_html_e('Error page', 'educare-champtheme'); ?></h2>
                </div>
                <div class="col-md-6 text-right">
                    <div class="educarecrumbs-area">
                        <div id="educarecrumbs">
                            <a href="<?php esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'educare-champtheme'); ?></a> &nbsp; / &nbsp; <span class="current"><?php esc_html_e('error page', 'educare-champtheme'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="error-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <h1><?php esc_html_e('404', 'educare-champtheme'); ?></h1>
                    <p><span><?php esc_html_e('Sorry....', 'educare-champtheme'); ?></span> <?php esc_html_e(' This page is not found.', 'educare-champtheme'); ?></p>
                    <p><?php esc_html_e('The page you are looking for can\'t be found.', 'educare-champtheme'); ?></p>
                    <a href="<?php esc_url(home_url('/')); ?>"><?php esc_html_e('Back to home', 'educare-champtheme'); ?> <i class="fa fa-long-arrow-right"></i></a>
                </div>
                
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error.png" alt="">
                </div>
            </div>
        </div>
    </div>   

<?php
get_footer();
