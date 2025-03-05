<?php 

function theme_styles_and_scripts() 
{
    wp_enqueue_style(
        'idm-normalize',
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
        [],
        '8.0.1'
    );

    wp_enqueue_style(
        'idm-main-style',
        get_template_directory_uri() . '/styles/main.css',
        [], 
        filemtime(get_template_directory() . '/styles/main.css')
    );

    // wp_enqueue_script(
    //     'idm-main-script',
    //     get_template_directory_uri() . '/scripts/main.js',
    //     [], 
    //     filemtime(get_template_directory() . '/scripts/main.js') //Cache-busting by file modification
    //     true//Load in the footer
    // );

}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');


function theme_setup()
{
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus([
        'primary-menus' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'theme_setup');



function register_custom_post_types() 
{
    $post_type_name = 'projects';

    $args = [

        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects found',
            'not_found_in_trash' => 'No Projects found in Trash',
        ],



        'public' =>true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'], //domain.com/projects/post-name
        'supports' =>['title','editor','thumbnail','excerpt',],
        'menu_position' => 5,
        //'taxonomies' => ['projects-categories'],//Name of custom taxonomy, only use if i have custom taxonomy
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' =>true,
    ];


    register_post_type($post_type_name, $args);
}


add_action('init','register_custom_post_types');