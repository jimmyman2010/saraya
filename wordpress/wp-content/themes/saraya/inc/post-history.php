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
add_action( 'init', 'saraya_history' );
function saraya_history() {
    register_post_type( 'history',
        array(
            'labels' => array(
                'name' => __( 'History' ),
                'singular_name' => __( 'Period' )
            ),
            'menu_icon' => 'dashicons-clock',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'period'),
        )
    );
}

// Main function to get quotes
function get_all_history() {
    // Retrieve one random quote
    $args = array(
        'post_type' => 'history',
        'posts_per_page' => 100,
        'orderby' => 'title',
        'order' => 'ASC'
    );
    get_the_content();
    $query = new WP_Query( $args );

    $quo = '<div class="site-history">';
    foreach($query->posts as $index => $post) {
        // Build output string
        $quo .= '<div class="body" ';
        if($index > 0) {
            //$quo .= 'style="display:none;"';
        }
        $quo .= '>' .
            nl2p($post->post_content) . '</div>';
    }
    $quo .= '</div>';

    return $quo;
}


function nl2p($str) {
    $arr=explode("\n",$str);
    $out='';

    for($i=0;$i<count($arr);$i++) {
        if(strlen(trim($arr[$i]))>0)
            if(substr($arr[$i], 0, 2) !== "<h"
                || substr($arr[$i], 0, 2) !== "<p"
                || substr($arr[$i], 0, 2) !== "<d"
                || substr($arr[$i], 0, 3) !== "<ul"
                || substr($arr[$i], 0, 3) !== "<bl") {
                $out .= '<p>' . trim($arr[$i]) . '</p>';
            } else {
                $out .= trim($arr[$i]);
            }
    }
    return $out;
}
