<?php

$educare_body_font_get = cs_get_option('educare_body_font');
$educare_heading_font_get = cs_get_option('educare_headding_font');

function educare_champtheme_body_gf_url() {
    $font_url = '';
    $educare_body_font_get = cs_get_option('educare_body_font');
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'educare-champtheme' ) ) {
        $font_url = add_query_arg( 'family', urlencode( ''.$educare_body_font_get['family'].':300,300i,400,400i,700,700i,900,900i&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

if($educare_heading_font_get['family'] == $educare_body_font_get['family']) {} else {
    function educare_champtheme_heading_gf_url() {
        $font_url = '';

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'educare-champtheme' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''.$educare_heading_font_get['family'].':300,300i,400,400i,700,700i,900,900i&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }    
}

function educare_champtheme_options_gf() {
    wp_enqueue_style( 'educare-champtheme-custom-google-fonts', educare_champtheme_body_gf_url(), array(), '1.0.0' );
    
    $educare_body_font_get = cs_get_option('educare_body_font');
    $educare_heading_font_get = cs_get_option('educare_headding_font');
    if($educare_heading_font_get['family'] == $educare_body_font_get['family']) {} else {
        wp_enqueue_style( 'educare-champtheme-google-heading-fonts', educare_champtheme_heading_gf_url(), array(), '1.0.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'educare_champtheme_options_gf' );    

if ( ! function_exists( 'educare_color_theme' ) ) :

	function educare_color_theme() {

		
		$educare_body_font = cs_get_option('educare_body_font');
		$educare_body_font_size = cs_get_option('educare_body_font_size');
		$educare_body_line_height = cs_get_option('educare_body_line_height');
		$educare_headding_font = cs_get_option('educare_headding_font');
		$educare_theme_color = cs_get_option('educare_theme_color');
		$footer_bg_color = cs_get_option('footer_bg_color');
		$footer_color = cs_get_option('footer_color');
        
        wp_enqueue_style(
			'educare-custom-style', get_template_directory_uri() . '/assets/css/custom-style.css'
		);
        
        $custom_css = "";
		
		if (!empty($educare_body_font)) {
			$custom_css .= "
				body {
					font-family: {$educare_body_font['family']};
					font-weight: {$educare_body_font['variant']};
				}
			";
		}

		if (!empty($educare_body_font_size)) {
			$custom_css .= "
				body {
					font-size: {$educare_body_font_size};
				}
			";
		}

		if (!empty($educare_body_line_height)) {
			$custom_css .= "
				body {
					line-height: {$educare_body_line_height};
				}
			";
		}

		if (!empty($educare_headding_font)) {
			$custom_css .= "
				h1, h2, h3, h4, h5, h6 {
					font-family: {$educare_headding_font['family']};
					font-weight: {$educare_headding_font['variant']};
				}
			";
		}
        
        if(cs_get_option('enable_boxed') == true) {
            $body_background_img = cs_get_option('body_background_img');
            $body_background_img_process = wp_get_attachment_image_src(cs_get_option('body_background_img'), 'large');
            $body_background_repeat = cs_get_option('body_background_repeat');
            $body_background_attachment = cs_get_option('body_background_attachment');
            
            if(!empty($body_background_img)) {
                $custom_css .="
                    body {
                        background-image:url($body_background_img_process[0]);
                    }
                ";
            }
            if(!empty($body_background_repeat)) {
                if($body_background_repeat == 'cover') {
                    $custom_css .="
                        body {
                            background-size: cover;
                            background-repeat:no-repeat;
                        }
                    ";
                } else {
                    $custom_css .="
                        body {
                            background-repeat: {$body_background_repeat};
                        }
                    ";
                }
            }
            if(!empty($body_background_attachment)) {
                $custom_css .="
                    body {
                        background-attachment: {$body_background_attachment};
                    }
                ";
            }
        }
        
        

		if (!empty($footer_bg_color)) {
			$custom_css .= "
				.footer.site-footer {
					background-color: {$footer_bg_color};
				}
			";
		}

		if (!empty($footer_color)) {
			$custom_css .= "
				.footer.site-footer, .footer.site-footer a, .educare-single-thumbnail-post h4, .footer-copyright-area {
					color: {$footer_color};
				}
			";
		}
        
        
        
        if (!empty($educare_theme_color)) {
			$custom_css .= "
				.spinner > div, a.educare-btn, .educare-btn, a.post-edit-link, .bordered-btn:hover, input[type='submit'], .menu-main-menu-container ul li ul li > a:after, .menu-main-menu-container ul li.boxed-menu a, .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-heading a, .styled-form input[type='submit'], .course-information h2, .read_more, .edit-link a.post-edit-link, .educare-slides .owl-dots div.active, .educare-service-box::after, .single-educare-course h2 > span, .educare-course-list .owl-nav div::after, .educare-course-list .owl-nav div i.fa, .ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y, .educare-section-title.educare-section-title-style-2 h2::after, .educare-testimonials-list .owl-nav div, .vc_row.green-overlay::after, .educare-single-staff .educare-staff-social-link, .educare-pb-date p, .educare-event-date, .loadmore-course-btn, .educare-btn.bordered-btn:hover {
					background-color: {$educare_theme_color};
				}
                
                .menu-main-menu-container ul li ul li:hover > a,
                .menu-main-menu-container ul li ul li.current_page_item > a,
                .menu-main-menu-container ul li ul li.current-page-ancestor > a {
                    border-left-color: {$educare_theme_color};
                }
                
                a, a.bordered-btn, .bordered-btn, .header-top-area a.header-right-btn:hover, .btn_effect:hover, .header-bottom-area > ul > li.current_page_item > a, .menu-main-menu-container ul li:hover > a, div.menu-main-menu-container ul li ul li a:before, .footer-copyright-area span, .footer-copyright-area i.fa, .educarecrumbs-area, .error-page-area h1, .error-page-area span, div.vc_tta.vc_tta-accordion .vc_tta-controls-icon-position-left.vc_tta-panel-title > a::after, .single-content-headding i.fa, section.widget ul li:hover, section.widget ul li:hover a, .entry-meta span i, .entry-meta span a:hover, .read_more:hover, .edit-link a.post-edit-link:hover, .factory-post-share li a, nav.posts-navigation a, .comment-author b, .comment-author b a, .comment-metadata > a:hover, .reply .comment-reply-link, .reply .comment-reply-link:hover, .entry-footer .cat-links a:hover, .entry-footer .tag-links a:hover, .educare-slide-tablecell h2 strong, .educare-single-notice h3, .testimonial-designation, .educare-counter-box h3 > span, .educare-staff-social-link li a:hover, .educare-staff-position, .educare-pb-meta, .educare-event-top, .educare-post-meta, a.bordered-btn:hover, .bordered-btn:hover {
                    color: {$educare_theme_color};
                }
                
                blockquote, a.educare-btn, .educare-btn, a.post-edit-link, a.bordered-btn, .bordered-btn, .read_more, .edit-link a.post-edit-link, .comment-author.vcard img, .search-form input[type='search']:focus, .hvr-ripple-out:after, .educare-slides .owl-dots div.active, .educare-service-box:hover .service-box-inner, .educare-single-staff:hover .educare-staff-img img, .educare-pb-date, .educare-event-desc, a.bordered-btn:hover, .bordered-btn:hover, .educare-btn.bordered-btn:hover {
                    border-color: {$educare_theme_color};
                }
                
                .woocommerce-message {
                    border-top-color: {$educare_theme_color};
                }
			";
		}
        
        

		wp_add_inline_style( 'educare-custom-style', $custom_css );
	}

	add_action( 'wp_enqueue_scripts', 'educare_color_theme' );

endif;