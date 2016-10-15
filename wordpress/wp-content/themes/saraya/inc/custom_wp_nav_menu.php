<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 10/15/2016
 * Time: 1:59 PM
 */
// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus($menu_name) {
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '';
        foreach ((array) $menu_items as $key => $menu_item) {
            if(in_array('special-submenu', $menu_item->classes)){
                $menu_list .= clean_custom_menu_details($menu_items, $menu_item);
            }
        }
    }

    return $menu_list;
}

function clean_custom_menu_details($menu_items, $menu_item_parent){
    $str = '<div class="submenu menu-item-' . $menu_item_parent->ID . '">
            <div class="container">
                <ul class="menu-link">
                    <li class="links">
                        <h3>' . $menu_item_parent->title . '</h3>
                        <ul>';

    foreach ($menu_items as $key => $menu_item) {
        if (intval($menu_item->menu_item_parent) === intval($menu_item_parent->ID)) {
            $str .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
    }

    $str .= '           </ul>
                    </li>';

    foreach ($menu_items as $key => $menu_item) {
        if (intval($menu_item->menu_item_parent) === intval($menu_item_parent->ID)) {
            $str .= '<li>
                        <h4>' . $menu_item->title . '</h4>
                        <figure>
                            <a href="' . $menu_item->url . '">' . get_the_post_thumbnail(intval($menu_item->object_id), 'thumb_menu') . '
                            </a>
                        </figure>
                    </li>';
        }
    }

    $str .= '    </ul>
             </div>
             </div>';
    return $str;
}