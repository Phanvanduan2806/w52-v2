<?php
add_shortcode('c_breadcrumb', function () {
    if (is_single() || is_category() || is_page()) {
        $breadcrumb_html = '<ul>';
        $breadcrumb_html .= '<li><a href="' . get_bloginfo('url') . '">Trang chủ</a></li>';

        if (is_category()) {
            $category = get_queried_object();
            if ($category) {
                $breadcrumb_html .= '<li> / <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
        }
        if (is_single()) {
            $post_categories = wp_get_post_categories(get_the_ID());
            if (!empty($post_categories)) {
                $cat = get_category($post_categories[0]);
                $breadcrumb_html .= '<li> / <a href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a></li>';
            }
            $breadcrumb_html .= '<li> / ' . get_the_title() . '</li>';
        }
        if (is_page() && !is_front_page()) {
            $breadcrumb_html .= '<li> / ' . get_the_title() . '</li>';
        }
        $breadcrumb_html .= '</ul>';


        return $breadcrumb_html;
    }
    return '';
});
