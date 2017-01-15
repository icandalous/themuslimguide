<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Blog posts", "educare-toolkit" ),
        "base" => "educare_blog_posts",
        "icon" => EDUC_ACC_URL."assets/img/blog-icon.png",
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Count", "educare-toolkit" ),
                "param_name" => "count",
                "std" => "3",
                "description" => esc_html__( "Type how many posts you want to show.", "educare-toolkit" )
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
                "heading" => esc_html__( "Category name", "educare-toolkit" ),
                "param_name" => "category",
                "description" => esc_html__( "Type category name. Leave blank to show posts from all categories", "educare-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Read more button text", "educare-toolkit" ),
                "param_name" => "btn_text",
                "std" => "Details",
                "description" => esc_html__( "Type read more button text", "educare-toolkit" )
            ),
        )
    )
);