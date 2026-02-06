<?php

/**
 * MyTheme functions and definitions.
 *
 * @package mytheme
 */
if (!defined('ABSPATH')) {
  exit;
}

/**
 * Theme setup.
 */
function mytheme_setup()
{
  load_theme_textdomain('mytheme', get_template_directory() . '/languages');

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );
  add_theme_support(
    'custom-logo',
    array(
      'height' => 120,
      'width' => 320,
      'flex-height' => true,
      'flex-width' => true,
    )
  );

  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'mytheme'),
      'footer' => __('Footer Menu', 'mytheme'),
    )
  );
}

add_action('after_setup_theme', 'mytheme_setup');

/**
 * Enqueue scripts and styles.
 */
function mytheme_enqueue_assets()
{
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri(),
    array(),
    $theme_version
  );

  $main_css_path = get_template_directory() . '/assets/css/main.css';
  wp_enqueue_style(
    'mytheme-main',
    get_template_directory_uri() . '/assets/css/main.css',
    array('mytheme-style'),
    file_exists($main_css_path) ? filemtime($main_css_path) : $theme_version
  );

  /* Page-specific CSS (after main so header/footer base styles load first) */
  if (is_front_page()) {
    $front_css_path = get_template_directory() . '/assets/css/pages/front-page.css';
    wp_enqueue_style(
      'mytheme-front-page',
      get_template_directory_uri() . '/assets/css/pages/front-page.css',
      array('mytheme-main'),
      file_exists($front_css_path) ? filemtime($front_css_path) : $theme_version
    );
  } elseif (is_page()) {
    $page_slugs = array(
      'page-about.php' => 'about',
      'page-contact.php' => 'contact',
      'page-support.php' => 'support',
      'page-used-product.php' => 'used-product',
      'page-used_product.php' => 'used-product',
      'page.php' => 'page',
    );
    $template = get_page_template_slug();
    if ($template === '') {
      $template = 'page.php';
    }
    if (isset($page_slugs[$template])) {
      $slug = $page_slugs[$template];
      $path = get_template_directory() . '/assets/css/pages/' . $slug . '.css';
      if (file_exists($path)) {
        wp_enqueue_style(
          'mytheme-page-' . $slug,
          get_template_directory_uri() . '/assets/css/pages/' . $slug . '.css',
          array('mytheme-main'),
          filemtime($path)
        );
      }
    }
  }

  /* Tailwind CSS (Play CDN) – loads in footer so DOM is ready when it scans for utility classes */
  wp_enqueue_script(
    'tailwindcss',
    'https://cdn.tailwindcss.com',
    array(),
    null,
    true
  );
  wp_add_inline_script(
    'tailwindcss',
    'tailwind.config = { corePlugins: { preflight: false } };',
    'before'
  );

  $main_js_path = get_template_directory() . '/assets/js/main.js';
  wp_enqueue_script(
    'mytheme-main',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    file_exists($main_js_path) ? filemtime($main_js_path) : $theme_version,
    true
  );
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

/**
 * Return asset URL from /assets/img/top with fallback.
 */
if (!function_exists('mytheme_top_asset')) {
  function mytheme_top_asset(string $base): string
  {
    $dir = get_template_directory() . '/assets/img/top/';
    $uri = get_template_directory_uri() . '/assets/img/top/';

    $matches = glob($dir . $base . '.*');
    if ($matches && is_file($matches[0])) {
      return $uri . basename($matches[0]);
    }

    return get_template_directory_uri() . '/assets/img/hero-placeholder.svg';
  }
}

/**
 * Register widget areas.
 */
function mytheme_widgets_init()
{
  register_sidebar(
    array(
      'name' => __('Sidebar', 'mytheme'),
      'id' => 'sidebar-1',
      'description' => __('Add widgets here.', 'mytheme'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget__title">',
      'after_title' => '</h2>',
    )
  );
}

add_action('widgets_init', 'mytheme_widgets_init');
