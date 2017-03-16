<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 3/16/2017
 * Time: 10:37 AM
 */

function bar_function( $atts ) {
    $atts = shortcode_atts( array(
        'color' => 'black'
    ), $atts, 'bar' );

    return '<div class="bar"><span class="color--' . $atts['color'] . '"></span></div>';
}
add_shortcode( 'bar', 'bar_function' );