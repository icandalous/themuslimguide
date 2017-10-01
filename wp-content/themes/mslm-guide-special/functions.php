<?php
/**
 * Educare functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Educare
 */

if ( ! function_exists( 'educare_champtheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function educare_champtheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Educare, use a find and replace
	 * to change 'educare-champtheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'educare-champtheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'educare-champtheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'educare_champtheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'educare_champtheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function educare_champtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'educare_champtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'educare_champtheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function educare_champtheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'educare-champtheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'educare-champtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets', 'educare-champtheme' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add footer widgets here.', 'educare-champtheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'educare_champtheme_widgets_init' );

function educare_champtheme_sidebar1_params($params) {

$sidebar_id = $params[0]['id'];

if ( $sidebar_id == 'footer-widgets' ) {

    $total_widgets = wp_get_sidebars_widgets();
    $sidebar_widgets = count($total_widgets[$sidebar_id]);
    
    /*if($sidebar_widgets == 2) {
        $footer_wid_width_markup = 'col-xs-12 col-sm-6';
    } elseif($sidebar_widgets == 3) {
        $footer_wid_width_markup = 'col-md-4 col-xs-12 col-sm-6';
    }  elseif($sidebar_widgets == 4) {
        $footer_wid_width_markup = 'col-md-3 col-xs-12 col-sm-6';
    }  elseif($sidebar_widgets == 5) {
        $footer_wid_width_markup = 'col-md-3 col-xs-12 col-sm-6';
    }  elseif($sidebar_widgets == 6) {
        $footer_wid_width_markup = 'col-md-2 col-xs-12 col-sm-6';
    } else {
        $footer_wid_width_markup = 'col-md-12';
    }*/

    $params[0]['before_widget'] = str_replace('class="', 'class="'.$footer_wid_width_markup.' ', $params[0]['before_widget']);
}

return $params;
}
add_filter('dynamic_sidebar_params','educare_champtheme_sidebar1_params');


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/libs/cs-framework/cs-framework.php';
require get_template_directory() . '/libs/cs-framework-overwrites.php';
require get_template_directory() . '/libs/custom-breadcrumbs/custom-breadcrumbs.php';



/**
 * Enqueue scripts and styles.
 */

function educare_champtheme_google_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'educare-champtheme' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Roboto:300,300i,400,400i,700,700i,900,900i&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function educare_champtheme_scripts() {
    
    
    wp_enqueue_style( 'educare-champtheme-google-fonts', educare_champtheme_google_fonts_url(), array(), '1.0.0' );
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.5.1' );
    wp_enqueue_style( 'jquery-slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0.10' );
	wp_enqueue_style( 'educare-champtheme-style', get_stylesheet_uri() );

    
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'jquery-waypoint', get_template_directory_uri() . '/assets/js/waypoint.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'jquery-counter', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '20151215', true );
    
	wp_enqueue_script( 'educare-champtheme-active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), '20151215', true );
    
    
    global $post_type;
    $gmap_api_key = cs_get_option('gmap_api_key');
    if($post_type == 'event' && !empty($gmap_api_key)) {
        wp_enqueue_script( 'gmap-api-key', '//maps.googleapis.com/maps/api/js?key='.cs_get_option('gmap_api_key').'', array(), '20151215', false );
    }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'educare_champtheme_scripts' );


require get_template_directory() . '/inc/theme-style.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';




/**
 * Favicon.
 */


if(function_exists('wp_site_icon') && has_site_icon()) { } else {
    $educare_favicon = cs_get_option('educare_favicon');
    if ( ! function_exists( 'educare_champtheme_favicon' ) && !empty($educare_favicon) ) {
        function educare_champtheme_favicon() {
            $educare_favicon_id = cs_get_option('educare_favicon');
            $educare_favicon_url = wp_get_attachment_image_src($educare_favicon_id, 'thumbnail');
            ?>
            <link rel="shortcut icon" type="image/png" href="<?php echo esc_url($educare_favicon_url[0]); ?>"/>
            <?php
        }
        add_action('wp_head', 'educare_champtheme_favicon');
    }   
}





/**
 * Required plugin install notice.
 */
require get_template_directory() . '/inc/required-plugins.php';

/**
 * Import demo data.
 */

function educare_champtheme_import_files() {
return array(
		array(
			'import_file_name'             => esc_html__('Demo Import 1', 'educare-champtheme'),
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/inc/demo-contents/educare-demo-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/inc/demo-contents/educare-demo-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . '/inc/demo-contents/educare-demo-customizer.dat',
//			'import_preview_image_url'     => get_template_directory_uri().'/inc/demo-contents/educare-demo-preview.jpg',
			'import_notice'                => esc_html__( 'After import demo, just set static homepage from settings > reading, check widgets & menus. You will be done! :-)', 'educare-champtheme' ),
		)
	);
} //industry_import_files
add_filter( 'pt-ocdi/import_files', 'educare_champtheme_import_files' );


// Removing unnecessary scripts
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');


//ADD function utils for the menu footer
if ( ! function_exists( 'wpdocs_get_post_top_ancestor_id' ) ) {
/**
 * Gets the id of the topmost ancestor of the current page.
 *
 * Returns the current page's id if there is no parent.
 * 
 * @return int ID of the top ancestor page.
 */
function wpdocs_get_post_top_ancestor_id() {
    if ( ! $post = get_post() ) {
        return;
    }
     
    $top_ancestor = $post->ID;
    if ( $post->post_parent ) {
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
        $top_ancestor = $ancestors[0];
    }
     
    return $top_ancestor;
}
} // Exists.