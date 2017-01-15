<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Educare Gallery", "educare-toolkit" ),
        "base" => "educare_gallery",
        "icon" => EDUC_ACC_URL."assets/img/galleries-icon.png",
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "attach_images",
                "heading" => esc_html__( "Upload images", "educare-toolkit" ),
                "param_name" => "images",
                "description" => esc_html__( "Upload images for gallery.", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Columns", "educare-toolkit" ),
                "param_name" => "column",
                "std" => "4",
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
                    '10' => '10',
                ),
                "description" => esc_html__( "Select gallery columns", "educare-toolkit" )
            ),
        )
    )
);