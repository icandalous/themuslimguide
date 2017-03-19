<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'educare_champtheme_register_required_plugins' );


function educare_champtheme_register_required_plugins() {

	$plugins = array(
		array(
			'name'      			=> esc_html__('Contact Form 7', 'educare-champtheme'),
			'slug'      			=> 'contact-form-7',
			'version'				=> '4.6',
			'required'     		=> false
		),
		array(
			'name'         		=> esc_html__('One Click Demo Import', 'educare-champtheme'),
			'slug'         		=> 'one-click-demo-import',
			'version'				=> '2.0.2',
			'required'     		=> false,
		),
		array(
			'name'      			=> esc_html__('WPBakery Visual Composer', 'educare-champtheme'),
			'slug'      			=> 'js_composer',
			'source'					=> get_template_directory(). '/inc/plugins/js_composer.zip',
			'version'				=> '5.0.1',
			'required'     		=> true
		),
		array(
			'name'      			=> esc_html__('Educare Toolkit', 'educare-champtheme'),
			'slug'      			=> 'educare-toolkit',
			'source'					=> get_template_directory(). '/inc/plugins/educare-toolkit.zip',
			'version'				=> '1.0',
			'required'     		=> true
		),

	);
    
	$config = array(
		'id'           => 'educare-champtheme',
		'default_path' => '',
		'menu'         => 'educare-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '', 
	);

	tgmpa( $plugins, $config );
}