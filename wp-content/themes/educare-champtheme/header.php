<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Educare
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php 
$header_email = cs_get_option('header_email');   
$header_phone_no = cs_get_option('header_phone_no');   
$social_icons = cs_get_option('social_icons');   
$educare_logo_text = cs_get_option('educare_logo_text');   
$educare_logo_regular = cs_get_option('educare_logo_regular');   
$educare_logo_regular_array = wp_get_attachment_image_src($educare_logo_regular, 'medium');   
wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(cs_get_option('enable_preloader') == true) : ?>
<div class="loader_wrep">
    <div class="loader_cell">
        <div class="spinner">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
        </div>
    </div>	
</div>
<?php endif; ?>

<div id="page" class="site <?php if(cs_get_option('enable_boxed') == true) : ?>educare-boxed-layout<?php endif; ?>">
    
    
    <header class="site-header">
        <?php 
            if(cs_get_option('enable_header_top') == true OR cs_get_customize_option('enable_header_topctm') == true) : 
            $educare_allowed_html_in_header = array(
                'a' => array(
                    'href' => array(),
                    'target' => array(),
                    'class' => array(),
                ),
                'b' => array(),
                'strong' => array()
            );
        ?>
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top">
                            <div class="row">
                                <div class="col-sm-8 col-md-6">
                                    <div class="header-left-content">
                                        <?php if(cs_get_option('header_content_type') == 'predefinied') :
                                            if(!empty($header_email)) : ?>
                                                <a href="mailto:<?php echo esc_html(cs_get_option('header_email')); ?>"><i class="fa fa-envelope"></i> <?php echo esc_html(cs_get_option('header_email')); ?></a>
                                            <?php endif; 
                                        
                                            if(!empty($header_phone_no)) : 
                                                $phone_no_finder = array(' ', '-', '(', ')');
                                                $phone_no_replacer = array('', '', '', '');
                                                $phone_no_formatted = str_replace($phone_no_finder, $phone_no_replacer, cs_get_option('header_phone_no'));
                                            ?>
                                            <a href="tel:<?php echo esc_html($phone_no_formatted); ?>"><i class="fa fa-phone"></i> <?php echo esc_html(cs_get_option('header_phone_no')); ?></a>
                                            <?php endif;
                                        else : ?>
                                            <span class="header-custom-text"><?php echo wp_kses(cs_get_option('header_others'), $educare_allowed_html_in_header); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-6">
                                    <div class="header-right-content">
                                        <?php if(cs_get_option('header_right_content_type') == 'social') : ?>
                                            <?php if(!empty($social_icons)) : ?>
                                                <?php foreach(cs_get_option('social_icons') as $social_link) : ?>
                                                <a href="<?php echo esc_url($social_link['link']); ?>" target="_blank"><i class="fa fa-<?php echo esc_html($social_link['code']); ?>"></i></a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        <?php else : ?>
                                        <span class="header-custom-text"><?php echo wp_kses(cs_get_option('header_right_others'), $educare_allowed_html_in_header); ?></span>
                                        <?php endif; ?>
                                        
                                        <?php 
                                            if(cs_get_option('enable_header_right_btn') == true) : 
                                            $header_right_btn_link_page = cs_get_option('header_right_btn_link_page');
                                            if(cs_get_option('header_right_btn_link_to') == 1 && !empty($header_right_btn_link_page)) {
                                                $hr_link_markup = get_page_link(cs_get_option('header_right_btn_link_page'));
                                            } else {
                                                $hr_link_markup = cs_get_option('header_right_btn_link_external');
                                            }
                                            
                                        ?>
                                        <a href="<?php echo esc_url($hr_link_markup); ?>" class="educare-btn header-right-btn"><?php echo esc_html(cs_get_option('header_right_btn_text')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-6">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url('/') ); ?>">
                                <?php if(cs_get_option('text_logo') == true) :
                                    if(!empty($educare_logo_text)) : ?>
                                    <h2><?php echo esc_html( cs_get_option('educare_logo_text') ); ?></h2>
                                    <?php else : ?>
                                    <h2><?php echo esc_html( bloginfo('title') ); ?></h2>
                                    <?php endif;
                                else :
                                    if(!empty($educare_logo_regular)) : ?>
                                        <img src="<?php echo esc_url($educare_logo_regular_array[0]); ?>" alt="<?php echo esc_html( bloginfo('title') ); ?>">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php echo esc_html( bloginfo('title') ); ?>">
                                    <?php endif;
                                endif; ?>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-8 menu_col col-xs-6">
                       <div class="menu_wrap">
                           <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
