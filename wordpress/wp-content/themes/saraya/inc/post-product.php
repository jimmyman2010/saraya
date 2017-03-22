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
add_action( 'init', 'saraya_product' );
function saraya_product() {
    register_post_type( 'product',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'menu_icon' => 'dashicons-archive',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'product'),
        )
    );
}

// Main function to get quotes
function get_all_product() {
    // Retrieve one random quote
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 100,
        'orderby' => 'title',
        'order' => 'ASC'
    );
    get_the_content();
    $query = new WP_Query( $args );

    $titles = '<ul class="tab-title">';
    $contents = '<ul class="tab-content">';
    foreach($query->posts as $index => $post) {
        // Build output string
        if($index === 0) {
            $titles .= '<li class="active"><a class="toggle" href="javascipt:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a></li>';
            $contents .= '<li class="tab-item-' . $index . ' active">
                            <a class="toggle" href="javascipt:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a>
                            <div class="body">
                                ' . nl2p($post->post_content) . '
                            </div>
                        </li>';
        } else {
            $titles .= '<li><a class="toggle" href="javascipt:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a></li>';
            $contents .= '<li class="tab-item-' . $index . '">
                            <a class="toggle" href="javascipt:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a>
                            <div class="body">
                                ' . nl2p($post->post_content) . '
                            </div>
                        </li>';
        }
    }
    $titles .= '</ul>';
    $contents .= '</ul>';


    return '<div class="site-history">' . $titles . $contents . '</div>';
}

