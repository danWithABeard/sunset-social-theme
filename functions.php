<?php
/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
) );

if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
  acf_add_options_sub_page('Header');
  acf_add_options_sub_page('Footer');
}

/** 
 * Include primary navigation menu
 */
function untheme_nav_init() {
  register_nav_menus( array(
    'menu-1' => 'Primary Menu',
    'menu-2' => 'Footer Contact',
    'menu-3' => 'Footer Credits'
  ) );
}
add_action( 'init', 'untheme_nav_init' );

/**
 * Register widget area.
 *
 */
function untheme_widgets_init() {
  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar-1',
    'description'   => 'Add widgets',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'untheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function untheme_scripts() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_enqueue_style( 'webflow', get_template_directory_uri() . '/assets/css/webflow.css' );
  wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'untheme_scripts' );

function untheme_create_post_custom_post() {
  register_post_type('custom_post', 
    array(
    'labels' => array(
      'name' => __('Custom Post', 'untheme'),
    ),
    'public'       => true,
    'hierarchical' => true,
    'supports'     => array(
      'title',
      'editor',
      'excerpt',
      'custom-fields',
      'thumbnail',
    ), 
    'taxonomies'   => array(
        'post_tag',
        'category',
    ) 
  ));
}
add_action('init', 'untheme_create_post_custom_post'); // Add our work type