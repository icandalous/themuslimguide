<?php
/**
 * Template name: Mutashaabihaates
 *
 *
 * @package Educare
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); 
    $vc_enabled = get_post_meta($post->ID, '_wpb_vc_js_status', true);

    if(get_post_meta($post->ID, 'educare_page_meta', true)) {
        $page_meta = get_post_meta($post->ID, 'educare_page_meta', true);
    } else {
        $page_meta = array();
    }
    

    if($vc_enabled != 'true') {
        $visual_composer_detect = 'no-visual-composer-used';
    } else {
        $visual_composer_detect = '';
    }
?>
    
    <?php if(array_key_exists('titlebar', $page_meta) && $page_meta['titlebar'] != true) : else : ?>
    <div <?php if(has_post_thumbnail()) : ?>style="background-image:url(<?php echo esc_url(the_post_thumbnail_url()); ?>)"<?php endif; ?> class="educare-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
					<!--h2>
                        <?php the_title(); ?>
                    </h2-->
                 </div> 
                <div class="col-md-6 text-right">
                    <?php if (function_exists('educare_custom_breadcrumbs')) educare_custom_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="internal-content-area <?php echo esc_attr($visual_composer_detect); ?>">
        <div class="mutashab-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="internal-content">
                        <?php get_template_part( 'template-parts/content', 'page' ); 

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php endwhile; ?>

<?php
get_footer();
