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
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt'
            )
        )
    );
}


add_action( 'init', 'saraya_product_category' );
function saraya_product_category() {
    // create a new taxonomy
    register_taxonomy(
        'brand',
        'product',
        array(
            'label'              => __('Brand'),
            'labels' => array(
                'add_new_item'        => __( 'Add New Brand' )
            ),
            'rewrite' => array( 'slug' => 'brand' ),
            'hierarchical' => true
        )
    );
    register_taxonomy(
        'product_type',
        'product',
        array(
            'label'              => __('Product Type'),
            'labels' => array(
                'add_new_item'        => __( 'Add New Type' )
            ),
            'rewrite' => array( 'slug' => 'product-type' ),
            'hierarchical' => true
        )
    );
    register_taxonomy(
        'market_segment',
        'product',
        array(
            'label'              => __('Market Segment'),
            'labels' => array(
                'add_new_item'        => __( 'Add New Market Segment' )
            ),
            'rewrite' => array( 'slug' => 'market-segment' ),
            'hierarchical' => true
        )
    );
}

function add_query_vars_filter( $vars ){
    $vars[] = "pb";
    $vars[] = "ms";
    $vars[] = "pt";
    $vars[] = "pn";
    return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );


function saraya_market_segment(){
    $marketSegments = get_the_terms(null, 'market_segment');
    foreach ( $marketSegments as $item ) {
        echo '<a style="background-color: ' . get_field('colour', $item) . '" href="' . get_term_link($item, 'market_segment') . '">' . $item->name . '</a>';
    }
}

function saraya_product_type(){
    $productTypes = get_the_terms(null, 'product_type');
    if($productTypes && $productTypes[0]) {
        $item = $productTypes[0];
        echo '<a style="background-color: ' . get_field('colour', $item) . '" href="' . get_term_link($item, 'market_segment') . '">' . $item->name . '</a>';
    }
}

function saraya_brand(){
    $brands = get_the_terms(null, 'brand');
    if($brands && $brands[0]) {
        $item = $brands[0];
        echo '<a style="background-color: ' . get_field('colour', $item) . '" href="' . get_term_link($item, 'market_segment') . '">' . $item->name . '</a>';
    }
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
            $titles .= '<li class="active"><a class="toggle" href="javascript:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a></li>';
            $contents .= '<li class="tab-item-' . $index . ' active">
                            <a class="toggle" href="javascript:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a>
                            <div class="body">
                                ' . nl2p($post->post_content) . '
                            </div>
                        </li>';
        } else {
            $titles .= '<li><a class="toggle" href="javascript:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a></li>';
            $contents .= '<li class="tab-item-' . $index . '">
                            <a class="toggle" href="javascript:void(0);" data-target=".tab-item-' . $index . '">' . $post->post_title . '</a>
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

