<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Section title", "educare-toolkit" ),
        "base" => "educare_section_title",
        "icon"  => EDUC_ACC_URL.'/assets/img/section-title-icon.png',
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "educare-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type your section title", "educare-toolkit" )
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__( "Description", "educare-toolkit" ),
                "param_name" => "desc",
                "description" => esc_html__( "Typy your section short description here", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Style", "educare-toolkit" ),
                "param_name" => "style",
                "std" => esc_html__( "1", "educare-toolkit" ),
                "value" => array(
                    'Style 1' => '1',
                    'Style 2' => '2',
                    'Style 3' => '3',
                ),
                "description" => esc_html__( "Select section title style", "educare-toolkit" )
            ),
        )
    )
);