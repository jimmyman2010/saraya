<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 8/1/2016
 * Time: 9:17 AM
 */

// Previous/next page navigation.
the_posts_pagination( array(
    'prev_text'          => __( '&laquo; previous', 'dickinsons' ),
    'next_text'          => __( 'next &raquo;', 'dickinsons' ),
) );