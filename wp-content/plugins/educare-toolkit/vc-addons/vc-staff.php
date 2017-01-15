<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Teacher Profile", "educare-toolkit" ),
        "base" => "educare_staff",
        "icon"  => EDUC_ACC_URL.'/assets/img/teachers-icon.png',
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Photo", "educare-toolkit" ),
                "param_name" => "photo",
                "description" => esc_html__( "Upload staff photo..", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "educare-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type staff name or staff title", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Designation", "educare-toolkit" ),
                "param_name" => "job",
                "description" => esc_html__( "Write staff designation", "educare-toolkit" )
            ),
            array(
                "type" => "param_group",
                "heading" => esc_html__( "Social Links", "educare-toolkit" ),
                "param_name" => "links",
                "params" => array(
                    array(
                        "type" => "iconpicker",
                        "heading" => esc_html__( "Select icon", "educare-toolkit" ),
                        "param_name" => "icon",
                        "description" => esc_html__( "Select an icon for staff social links", "educare-toolkit" )
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Link", "educare-toolkit" ),
                        "param_name" => "link",
                        "value" => esc_html__( "http://", "educare-toolkit" ),
                        "description" => esc_html__( "Enter staff social profile link", "educare-toolkit" )
                    ),
                ),
                "description" => esc_html__( "Add stuff social link", "educare-toolkit" )
            ),

        )
    )
);