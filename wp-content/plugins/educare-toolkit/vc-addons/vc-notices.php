<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Notices", "educare-toolkit" ),
        "base" => "educare_notices",
        "icon"  => EDUC_ACC_URL.'/assets/img/notices-icon.png',
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Notice count", "educare-toolkit" ),
                "param_name" => "count",
                "std" => "10",
                "description" => esc_html__( "Type how many notices you want to show. Type -1 for unlimited.", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Height", "educare-toolkit" ),
                "param_name" => "height",
                "std" => "400",
                "description" => esc_html__( "Type notice board height in pixels. Do not add px, just add number here.", "educare-toolkit" )
            ),
        )
    )
);