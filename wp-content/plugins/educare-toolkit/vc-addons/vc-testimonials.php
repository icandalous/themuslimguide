<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Testimonials", "educare-toolkit" ),
        "base" => "educare_testimonials",
        "icon"  => EDUC_ACC_URL.'/assets/img/testimonials-icon.png',
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Testimonial count", "educare-toolkit" ),
                "param_name" => "count",
                "std" => "10",
                "description" => esc_html__( "Type how many testimonials you want to show. Type -1 for unlimited.", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay?", "educare-toolkit" ),
                "param_name" => "autoplay",
                "std" => "true",
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "Select how many column you want to show.", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay time", "educare-toolkit" ),
                "param_name" => "autoplay_time",
                "std" => "5000",
                "value" => array(
                    '1 Second' => '1000',
                    '2 Seconds' => '2000',
                    '3 Seconds' => '3000',
                    '4 Seconds' => '4000',
                    '5 Seconds' => '5000',
                    '6 Seconds' => '6000',
                    '7 Seconds' => '7000',
                    '8 Seconds' => '8000',
                    '9 Seconds' => '9000',
                    '10 Seconds' => '10000',
                ),
                "description" => esc_html__( "Select autoplay time", "educare-toolkit" ),
                "dependency" => array(
                    "element" => "autoplay",
                    "value" => array("true"),
                ),
            ),
        )
    )
);