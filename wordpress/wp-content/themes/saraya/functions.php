<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

define('VERSION', '1.0.4.6');

if ( ! function_exists( 'dickinsons_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own dickinsons_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function dickinsons_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'dickinsons' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'dickinsons', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 140 );

	add_image_size('thumb_footer', 90, 90, true);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'dickinsons' ),
		'sidebar'  => __( 'Blog Sidebar Menu', 'dickinsons' ),
		'footer'  => __( 'Footer Menu', 'dickinsons' ),
		'footer_horizontal'  => __( 'Footer Menu (Horizontal)', 'dickinsons' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // dickinsons_setup
add_action( 'after_setup_theme', 'dickinsons_setup' );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function dickinsons_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'dickinsons' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'dickinsons' ),
		'before_widget' => '<div id="%1$s" class="module module--%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="module--title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'dickinsons_widgets_init' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function dickinsons_javascript_detection() {
	//echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'dickinsons_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function dickinsons_scripts() {
	// Add css, used in the main stylesheet.
	wp_enqueue_style( 'dickinsons-vendor', get_template_directory_uri() . '/assets/css/vendor.min.css', array(), VERSION );
	wp_enqueue_style( 'dickinsons-global', get_template_directory_uri() . '/assets/css/global.min.css', array(), VERSION );

	// Theme stylesheet.
	wp_enqueue_style( 'dickinsons-style', get_stylesheet_uri(), array(), VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		//wp_enqueue_script( 'dickinsons-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_enqueue_script( 'dickinsons-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(  ), VERSION, true );
	wp_enqueue_script( 'dickinsons-script', get_template_directory_uri() . '/assets/js/global.js', array( 'dickinsons-vendor' ), VERSION, true );

	wp_localize_script( 'dickinsons-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'dickinsons' ),
		'collapse' => __( 'collapse child menu', 'dickinsons' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'dickinsons_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function dickinsons_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'dickinsons_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function dickinsons_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function dickinsons_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
//add_filter( 'wp_calculate_image_sizes', 'dickinsons_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function dickinsons_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
//add_filter( 'wp_get_attachment_image_attributes', 'dickinsons_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function dickinsons_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'dickinsons_widget_tag_cloud_args' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/remove-meta.php';

require get_template_directory() . '/inc/recent-post.php';
require get_template_directory() . '/inc/post-quotes.php';
require get_template_directory() . '/inc/admin-settings.php';
require get_template_directory() . '/inc/random-widget.php';

/**
 * Disabling WPML�s CSS and JS files
 */
define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define('ICL_DONT_LOAD_LANGUAGES_JS', true);

/**
 * language
 */
add_filter('body_class','browser_body_class');
function browser_body_class($classes = '') {
	$classes[] = 'lang-' . ICL_LANGUAGE_CODE;
	return $classes;
}




// add new buttons
add_filter( 'mce_buttons', 'advlink_register_buttons' );

function advlink_register_buttons( $buttons ) {
	array_push( $buttons, 'separator', 'advlink' );
	return $buttons;
}

// Load the TinyMCE plugin : advlink.js (wp2.5)
add_filter( 'mce_external_plugins', 'advlink_register_tinymce_javascript' );

function advlink_register_tinymce_javascript( $plugins ) {
	$plugins['advlink'] = get_template_directory_uri() . '/assets/plugins/advlink/plugin.js';
	return $plugins;
}



function dickinsons_limit_text($text, $limit) {
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos = array_keys($words);
		$text = substr($text, 0, $pos[$limit]) . '...';
	}
	return $text;
}

