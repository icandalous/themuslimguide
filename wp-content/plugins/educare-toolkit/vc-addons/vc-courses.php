<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Courses", "educare-toolkit" ),
        "base" => "educare_courses",
        "icon" => EDUC_ACC_URL."assets/img/courses-icon.jpg",
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Type", "educare-toolkit" ),
                "param_name" => "type",
                "std" => "1",
                "value" => array(
                    'Carousel' => '1',
                    'Pagination' => '2',
                ),
                "description" => esc_html__( "Select how many column you want to show.", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Count", "educare-toolkit" ),
                "param_name" => "count",
                "std" => "10",
                "description" => esc_html__( "Type how many course you want to show.", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select category", "pro-toolkit" ),
                "param_name" => "category",
                "value" => educare_toolkit_gcc_as_list(),
                "description" => esc_html__( "Select category for course.", "pro-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Columns", "educare-toolkit" ),
                "param_name" => "columns",
                "std" => "3",
                "value" => array(
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                ),
                "description" => esc_html__( "Select how many column you want to show.", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Button text", "educare-toolkit" ),
                "param_name" => "btn_text",
                "std" => "Learn More",
                "description" => esc_html__( "Type course read more button text.", "educare-toolkit" )
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
                "dependency" => array(
                    "element" => "type",
                    "value" => array("1"),
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
                    "element" => "type",
                    "value" => array("1"),
                ),
            ),
        )
    )
);