<?php
class One_Menu_Walker extends Walker_Nav_Menu {

    public function start_lvl(&$output, $depth = 0, $args = []) {
        // ما ساب‌منو نداریم، اگر داشتی اینجا می‌نویسی
    }

    public function end_lvl(&$output, $depth = 0, $args = []) {
        // خالی می‌ذاریم
    }

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {

        $title = $item->title;
        $url   = $item->url;

        $output .= '<li>';
        $output .= '<a href="' . esc_url($url) . '">' . esc_html($title) . '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = []) {
        $output .= '</li>';
    }
}
