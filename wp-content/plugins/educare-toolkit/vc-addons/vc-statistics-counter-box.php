<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Counter box", "educare-toolkit" ),
        "base" => "educare_counter_box",
        "icon"  => EDUC_ACC_URL.'/assets/img/counter-icon.png',
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "educare-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type your section title", "educare-toolkit" )
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Color", "educare-toolkit" ),
                "param_name" => "color",
                "std" => "#000000",
                "description" => esc_html__( "Counter box text color", "educare-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Icon type", "educare-toolkit" ),
                "param_name" => "icon_type",
                "std" => esc_html__( "1", "educare-toolkit" ),
                "value" => array(
                    'Upload' => '1',
                    'Font awesome icon' => '2',
                ),
                "description" => esc_html__( "Select counter box icon type", "educare-toolkit" )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Icon", "educare-toolkit" ),
                "param_name" => "icon",
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("1"),
                ),
                "description" => esc_html__( "Upload your counter box icon here", "educare-toolkit" )
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Select icon", "educare-toolkit" ),
                "param_name" => "fa_icon",
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("2"),
                ),
                "description" => esc_html__( "Upload your counter box icon here", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Count", "educare-toolkit" ),
                "param_name" => "count",
                "description" => esc_html__( "Select counter box count", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Counter after text", "educare-toolkit" ),
                "param_name" => "after",
                "description" => esc_html__( "Type counter after text", "educare-toolkit" )
            ),
        )
    )
);