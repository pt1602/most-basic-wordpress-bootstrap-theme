<?php

function load_stylesheets()
{
    wp_register_style('bootstrapStyles', get_template_directory_uri() . '/vendor/bs/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapStyles');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', '', 1, true);
    wp_enqueue_script('jquery');

    wp_register_script('bsjs', get_template_directory_uri() . '/vendor/bs/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('bsjs');

    wp_register_script('basicjs', get_template_directory_uri() . '/vendor/js/scripts.js', '', 1, true);
    wp_enqueue_script('basicjs');
}
add_action('wp_enqueue_scripts', 'load_js');

register_nav_menus(
  array(
      'top-menu' => __('Top Menu', 'pt1602'),
      'footer-menu' => __('Footer Menu', 'pt1602'),
  )
);

add_theme_support('menus');
add_theme_support('post-thumbnails');

// Customizer 
require get_template_directory().'/src/php/customizer.php';

// Image Sizes 
require get_template_directory().'/src/php/image-sizes.php';