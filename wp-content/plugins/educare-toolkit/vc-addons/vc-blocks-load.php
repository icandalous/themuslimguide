<?php

if (!defined('ABSPATH')) die('-1');

// Class started
class educareVCExtendAddonClass {

    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'educareIntegrateWithVC' ) );
    }
 
    public function educareIntegrateWithVC() {
        // Checks if Visual composer is not installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'educareShowVcVersionNotice' ));
            return;
        }
 

        // visual composer addons.
        include EDUC_ACC_PATH . '/vc-addons/vc-slides.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-service-box.php';
		include EDUC_ACC_PATH . '/vc-addons/vc-presentation-box.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-section-title.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-courses.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-notices.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-testimonials.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-statistics-counter-box.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-staff.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-blog-posts.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-logo-carousel.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-events.php';
        include EDUC_ACC_PATH . '/vc-addons/vc-gallery.php';

    }

    // show visual composer version
    public function educareShowVcVersionNotice() {
        $theme_data = wp_get_theme();
        echo '
        <div class="notice notice-warning">
          <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.site_url().'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'educare-crazycafe'), $theme_data->get('Name')).'</p>
        </div>';
    }
}
// Finally initialize code
new educareVCExtendAddonClass();