<?php

if (!function_exists('get_menu_by_name')) {
    function get_menu_by_name($menu_name)
    {
        $menu = wp_get_nav_menu_object($menu_name);
        if (!$menu) {
            return [];
        }
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        if (!$menu_items) {
            return [];
        }
        $menu_array = array();
        foreach ($menu_items as $item) {
            if (!$item->menu_item_parent) {
                $menu_array[$item->ID] = array(
                    'ID' => $item->ID,
                    'title' => $item->title,
                    'url' => $item->url,
                    'object_id' => $item->object_id,
                    'object_type' => $item->object,
                    'children' => array(),
                );
            }
        }
        foreach ($menu_items as $item) {
            if ($item->menu_item_parent) {
                $menu_array[$item->menu_item_parent]['children'][] = array(
                    'ID' => $item->ID,
                    'title' => $item->title,
                    'url' => $item->url,
                    'object_id' => $item->object_id,
                    'object_type' => $item->object,
                    'parent' => $item->menu_item_parent,
                );
            }
        }
        return $menu_array;
    }
}

/*
 array(4) {
  [2208]=>
  array(6) {
    ["ID"]=>
    int(2208)
    ["title"]=>
    string(91) "Trang chủTrang chủ"
    ["url"]=>
    string(22) "http://localhost:3050/"
    ["object_id"]=>
    string(1) "7"
    ["object_type"]=>
    string(4) "page"
    ["children"]=>
    array(1) {
      [0]=>
      array(6) {
        ["ID"]=>
        int(2205)
        ["title"]=>
        string(90) "Kho gameAll GAMES"
        ["url"]=>
        string(29) "http://localhost:3050/?cat=23"
        ["object_id"]=>
        string(2) "23"
        ["object_type"]=>
        string(8) "category"
        ["parent"]=>
        string(4) "2208"
      }
    }
  }
  [2207]=>
  array(6) {
    ["ID"]=>
    int(2207)
    ["title"]=>
    string(90) "Tin tứcTIN TỨC"
    ["url"]=>
    string(29) "http://localhost:3050/?cat=24"
    ["object_id"]=>
    string(2) "24"
    ["object_type"]=>
    string(8) "category"
    ["children"]=>
    array(0) {
    }
  }
 */