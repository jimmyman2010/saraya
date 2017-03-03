<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 11/8/2016
 * Time: 6:30 PM
 */


add_action( 'widgets_init', 'register_my_sidebars' );
function register_my_sidebars() {
    register_sidebar( array(
        'name' => __( 'Right Hand Rail Sidebar', 'ability' ),
        'id' => 'right-hand-rail-sidebar',
        'description' => __( 'Widgets in this area will be shown on right hand rail.', 'ability' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget--title">',
        'after_title'   => '</h3>',
    ) );


    /*register_sidebar( array(
        'name' => __( 'Footer Menu', 'ability' ),
        'id' => 'footer-menu-sidebar',
        'description' => __( 'Widgets in this area will be shown menu on footer.', 'ability' ),
        'before_widget' => '<div id="%1$s" class="personal-column %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="personal-column--title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Address', 'ability' ),
        'id' => 'footer-address-sidebar',
        'description' => __( 'Widgets in this area will be shown address on footer.', 'ability' ),
        'before_widget' => '<div id="%1$s" class="contact-info %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="contact-info--title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer CTAs', 'ability' ),
        'id' => 'footer-ctas-sidebar',
        'description' => __( 'Widgets in this area will be shown additional footer.', 'ability' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer CTAs Mini', 'ability' ),
        'id' => 'footer-ctas-mini-sidebar',
        'description' => __( 'Widgets in this area will be shown additional footer.', 'ability' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );*/
}
