<?php
/*
Plugin Name: Adam's Random Quote
Version: 2.0
Plugin URI: http://burucs.com
Description: Loads a Random Quote from custom post types
Author: Adam Burucs
Author URI: http://burucs.com
*/

// Register custom post type
add_action( 'init', 'ab_arq_random_quote' );
function ab_arq_random_quote() {
    register_post_type( 'random_quote',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'menu_icon' => 'dashicons-format-quote',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'quotes'),
        )
    );
}

// Create admin interface

add_filter("manage_edit-random_quote_columns", "ab_arq_project_edit_columns");

function ab_arq_project_edit_columns($columns) {
    $columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "title" => "Person",
        "description" => "Quote",
    );

    return $columns;
}

add_action("manage_posts_custom_column",  "ab_arq_project_custom_columns");

function ab_arq_project_custom_columns($column) {
    global $post;
    switch ($column) {
        case "description":
            the_excerpt();
            break;
    }
}

// Main function to get quotes
function ab_arq_generate() {
    // Retrieve one random quote
    $args = array(
        'post_type' => 'random_quote',
        'posts_per_page' => 3,
        'orderby' => 'rand'
    );
    $query = new WP_Query( $args );

    $quo = '<div class="slider-testimonials">';
    foreach($query->posts as $index => $post) {
        // Build output string
        $quo .= '<div class="body" ';
        if($index > 0) {
            $quo .= 'style="display:none;"';
        }
        $quo .= '><blockquote>"' .
            $post->post_content .
            '"</blockquote>' .
            '<p><i>' .
            $post->post_title .
            '</i></p></div>';
    }
    $quo .= '</div>';

    return $quo;
}

// Helper function
function ab_arq_change_bloginfo( $text, $show ) {
    if( 'description' == $show ) {
        $text = ab_arq_generate();
    }
    return $text;
}

// Override default filter with the new quote generator
//add_filter( 'bloginfo', 'ab_arq_change_bloginfo', 10, 2 );
