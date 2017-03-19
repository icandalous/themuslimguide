<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Educare
 */
$educare_allowed_html_in_footer = array(
    'a' => array(
        'href' => array(),
        'target' => array(),
        'class' => array(),
    ),
    'i' => array(),
    'b' => array(),
    'strong' => array()
);
$footer_left_text = cs_get_option('footer_left_text');
$footer_right_text = cs_get_option('footer_right_text');
?>

	<div class="footer site-footer">
        <?php if(is_active_sidebar('footer-widgets')) : ?>
        <div class="footer-top-widgets">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-sep"></div>
                    </div>
                </div>
            </div>
        </div>
	    <?php endif; ?>
	    
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php if(!empty($footer_left_text)) : ?>
                        <p><?php echo wp_kses(cs_get_option('footer_left_text'), $educare_allowed_html_in_footer); ?></p>
                        <?php else : ?>
                        <p><?php esc_html_e('Copyright @ Educare 2017. All right reserved', 'educare-champtheme'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 text-right">
                        <?php if(!empty($footer_right_text)) : ?>
                        <p><?php echo wp_kses(cs_get_option('footer_right_text'), $educare_allowed_html_in_footer); ?></p>
                        <?php else : ?>
                        <p><?php esc_html_e('Designed with', 'educare-champtheme'); ?> <i class="fa fa-heart"></i> <?php esc_html_e('by champtheme', 'educare-champtheme'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>   
        </div>   
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
