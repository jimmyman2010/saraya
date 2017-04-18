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


function button_func( $atts, $content = "Click here" ) {
    $atts = shortcode_atts( array(
        'color' => 'green',
        'link' => 'javascript:void(0);',
        'target' => '',
        'sm' => ''
    ), $atts, 'button' );
    if($atts['sm']){
        $icon = 'fa fa-' . $atts['sm'];
        if($atts['target']){ } else {
            $atts['target'] = '_blank';
        }
        if($atts['sm'] === 'email'){
            $icon = 'fa fa-envelope-o';
            $atts['target'] = '_self';
        }
        if($atts['sm'] === 'facebook' || $atts['sm'] === 'twitter'){
            $icon .= '-square';
        }
        $html = '<a target="' . $atts['target'] . '" class="button button--' . $atts['sm'] . '" href="' . $atts['link'] . '"><i class="' . $icon . '"></i>' . $content . '</a>';
    } else {
        if($atts['target']){ } else {
            $atts['target'] = '_self';
        }
        $html = '<a target="' . $atts['target'] . '" class="button button--' . $atts['color'] . '" href="' . $atts['link'] . '">' . $content . '</a>';
    }

    return $html;
}
add_shortcode( 'button', 'button_func' );


function panel_func( $atts, $content = "Click here" ) {
    $atts = shortcode_atts( array(
        'color' => ''
    ), $atts, 'button' );

    if($atts['color']) {
        if($atts['color'][0] === '#' && strlen($atts['color']) === 7){
            $html = '<div class="panel" style="color: ' . $atts['color'] . ';">' . $content . '</div>';
        } else {
            $html = '<div class="panel panel--' . $atts['color'] . '">' . $content . '</div>';
        }
    } else {
        $html = '<div class="panel">' . $content . '</div>';
    }

    return $html;
}
add_shortcode( 'panel', 'panel_func' );