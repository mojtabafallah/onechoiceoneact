<?php
/*
 * Plugin Name: onechoiceoneact
 */
require_once plugin_dir_path(__FILE__) . 'inc/class-menu-walker.php';
add_filter('theme_page_templates', function ($templates) {
    $templates['Home.php'] = 'Home Page Template';
    return $templates;
});

add_filter('template_include', function ($template) {
    if (is_page()) {
        $page_template = get_page_template_slug(get_queried_object_id());
        if ($page_template === 'Home.php') {
            return plugin_dir_path(__FILE__) . 'Templates/Home.php';
        }
    }
    return $template;
});

function one_assets()
{
    if (is_page()) {
        $page_template = get_page_template_slug(get_queried_object_id());
        if ($page_template === 'Home.php') {
            wp_enqueue_script('one-owl-carousel', plugin_dir_url(__FILE__) . '/assets/js/owl.carousel.min.js', ['jquery'], '1.0', true);
            wp_enqueue_script('one-script', plugin_dir_url(__FILE__) . '/assets/js/script.js', ['jquery'], '1.0', true);

            wp_enqueue_style('one-owl-carousel', plugin_dir_url(__FILE__) . '/assets/css/owl.carousel.min.css', '1.0');
            wp_enqueue_style('one-owl-carousel-theme', plugin_dir_url(__FILE__) . '/assets/css/owl.theme.default.css', '1.0');
            wp_enqueue_style('one-style', plugin_dir_url(__FILE__) . '/assets/css/style.css', '1.0');
        }
    }
}

add_action('wp_enqueue_scripts', 'one_assets');

define('one_url_images', plugin_dir_url(__FILE__) . '/assets/images');

add_action('init', function () {
    register_nav_menus([
        'one_top_menu' => 'One Choice Top Menu',
    ]);
    register_nav_menus([
        'one_mobile_top_menu' => 'One Choice Mobile Top Menu',
    ]);

    register_nav_menus([
        'one_footer_menu' => 'One Choice Footer Menu',
    ]);
});

add_action('acf/init', function () {

    add_filter('acf/settings/save_json', function () {
        return plugin_dir_path(__FILE__) . 'acf-json';
    });

    add_filter('acf/settings/load_json', function ($paths) {
        $paths = [];
        $paths[] = plugin_dir_path(__FILE__) . 'acf-json';
        return $paths;
    });

});