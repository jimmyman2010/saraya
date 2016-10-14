<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 8/2/2016
 * Time: 9:51 AM
 */

function dickinsons_recent_post(){
    $recent_posts = wp_get_recent_posts([
        'numberposts' => 3,
        'post_status' => 'publish',
        "suppress_filters" => false
    ]);

    $latest_news = '<h3>' . get_option('our_blog_' . ICL_LANGUAGE_CODE) . '</h3><ul>';

    foreach( $recent_posts as $recent ){
        $latest_news .=    '<li>';
        if(has_post_thumbnail($recent["ID"])) {
            $latest_news .= '
                                <figure><a href="' . get_permalink($recent["ID"]) . '">
                                    ' . get_the_post_thumbnail($recent["ID"], 'thumb_footer') . '
                                </a></figure>
                                ';
        }
        $latest_news .=         '<h4>
                                    <a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a>
                                </h4>
                                <div class="published-date"><i class="fa fa-calendar"></i> <span>' . dickinsons_entry_date($recent["ID"], false) . '</span></div>
                                <p>' . dickinsons_limit_text($recent["post_excerpt"], 12) . '</p>
                            </li>';
    }

    $latest_news .= '</ul>';
    return $latest_news;
}