<?php
/*
 * Plugin Name: onechoiceoneact
 */

add_filter('theme_page_templates', function ($templates) {
    $templates['my-custom-page.php'] = 'My Custom Page Template';
    return $templates;
});

add_filter('template_include', function ($template) {
    if (is_page()) {
        $page_template = get_page_template_slug(get_queried_object_id());
        if ($page_template === 'my-custom-page.php') {
            return plugin_dir_path( __FILE__ ) . 'Templates/Home.php';
        }
    }
    return $template;
});