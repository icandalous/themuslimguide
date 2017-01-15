<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Events", "educare-toolkit" ),
        "base" => "educare_events",
        "icon" => EDUC_ACC_URL."assets/img/events-icon.png",
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Event count", "educare-toolkit" ),
                "param_name" => "count",
                "std" => "6",
                "description" => esc_html__( "How many event you want to show? ", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Columns", "educare-toolkit" ),
                "param_name" => "column",
                "std" => "2",
                "value" => array(
                    '1 Column' => '1',
                    '2 Column' => '2',
                    '3 Column' => '3'
                ),
                "description" => esc_html__( "How many column you want to show?", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Styles", "educare-toolkit" ),
                "param_name" => "style",
                "std" => "1",
                "value" => array(
                    'Style 1' => '1',
                    'Style 2' => '2'
                ),
                "description" => esc_html__( "Select any style", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Button text", "educare-toolkit" ),
                "param_name" => "btn_text",
                "std" => "Details",
                "description" => esc_html__( "Type button text", "educare-toolkit" )
            ),
        )
    )
);