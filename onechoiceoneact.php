<?php
/*
 * Plugin Name: onechoiceoneact
 */

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