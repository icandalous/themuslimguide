<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function educare_presentation_box_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        //'bg' => '',
        'desc' => '',
        'link_text' => '',
        /*'icon_type' => '1',
        'icon' => '',
        'fa_icon' => '',*/
		'type' => '1',
        'link_to' => '1',
        'link_to_page' => '',
        'link_external' => '',
    ), $atts ) );
    
    if($link_to == 1) {
        $link_markup = get_page_link($link_to_page);
    } else {
        $link_markup = $link_external;
    }
    
    $educare_allowed_html_in_st = array(
        'a' => array(
            'href' => array(),
            'class' => array(),
            'target' => array(),
        ),
        'img' => array(
            'href' => array(),
            'class' => array(),
            'alt' => array(),
        ),
        'p' => array(),
        'br' => array(),
        'strong' => array(),
        'i' => array(),
    );
	
    $service_box_markup .= '<div class="animated fadeInLeft '.esc_attr(get_type_section($type)).'">
	<div class="row">
		<a href="'.esc_url($link_markup).'" class="link-presentation">
			<div class="features">	
				<div class="bloc-content">	
					<h1>'.esc_html($title).'</h1>
					<div class="contenu">'.wp_kses(wpautop($desc), $educare_allowed_html_in_st).'</div>
				</div>
			</div>
		</a>
		</div>
    </div>';

    return $service_box_markup;
}
add_shortcode('educare_presentation_box', 'educare_presentation_box_shortcode');