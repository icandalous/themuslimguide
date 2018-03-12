<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Mutashaabihaates", "educare-toolkit" ),
        "base" => "educare_mutashab",
        "icon" => EDUC_ACC_URL."assets/img/blog-icon.png",
        "category" => esc_html__( "educare", "educare-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Url", "educare-toolkit" ),
                "param_name" => "url",
                "description" => esc_html__( "Entrez l'url de l'API du quran", "educare-toolkit" )
            )
           
        )
    )
);