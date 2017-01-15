<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Slides", "educare-toolkit" ),
        "base" => "educare_slides",
        "icon"  => EDUC_ACC_URL.'/assets/img/slides-icon.png',
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Slides count", "educare-toolkit" ),
                "param_name" => "count",
                "std" => esc_html__( "3", "educare-toolkit" ),
                "value" => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    'Unlimited' => '-1',
                ),
                "description" => esc_html__( "How many slide you want to show?", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select slide", "educare-toolkit" ),
                "param_name" => "slide_id",
                "value" => educare_toolkit_get_post_as_list(),
                "description" => esc_html__( "Click here if you dont know slide ID.", "educare-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show arrows?", "educare-toolkit" ),
                "param_name" => "arrows",
                "std" => esc_html__( "true", "educare-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "If you want visible slide arrows then select Yes", "educare-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show dots?", "educare-toolkit" ),
                "param_name" => "dots",
                "std" => esc_html__( "false", "educare-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "Appear slides dot", "educare-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay?", "educare-toolkit" ),
                "param_name" => "autoplay",
                "std" => esc_html__( "true", "educare-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "If you want enable slides autoplay, select yes", "educare-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay time", "educare-toolkit" ),
                "param_name" => "autoplay_time",
                "std" => esc_html__( "5000", "educare-toolkit" ),
                "value" => array(
                    '1 Seconds' => '1000',
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
                "description" => esc_html__( "Select autoplay time..", "educare-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
        )
    )
);