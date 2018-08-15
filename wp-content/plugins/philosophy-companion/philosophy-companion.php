<?php

/*
Plugin Name: Philosophy-Companion
Plugin URI:
Description: Companion plugin for the philosophy theme
Version: 1.0
Author: Tanmoy Biswas
Author URI:
License: GPLv2 or later
Text Domain: philosophy-companion
 */

function cptui_register_my_cpts_book() {

    /**
     * Post Type: Book.
     */

    $labels = array(
        "name" => __( "Book", "philosophy" ),
        "singular_name" => __( "book", "philosophy" ),
        "add_new" => __( "Add New Book", "philosophy" ),
        "featured_image" => __( "Book Cover", "philosophy" ),
    );

    $args = array(
        "label" => __( "Book", "philosophy" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "book", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail", "excerpt", "author" ),
    );

    register_post_type( "book", $args );
}

add_action( 'init', 'cptui_register_my_cpts_book' );
