<?php
if (!function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup()
  {
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'wp_it_volunteers_setup');
}

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'wp_it_volunteers_scripts');

function wp_it_volunteers_scripts()
{
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main'));
  wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array('main'));
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css', array('main'));
  wp_enqueue_style( 'lightbox-style', "https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css", array() );
  wp_enqueue_style('slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array('main'));

  wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js', array(), false, true);
  wp_enqueue_script('wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array('swiper-scripts'), false, true);
  wp_enqueue_script('home-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), false, true);
  wp_enqueue_script('home-jquery', 'https://code.jquery.com/jquery-2.2.0.min.js', array(), false, false);
  wp_enqueue_script( 'lightbox-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array(), false, true );

if (is_page_template('templates/home.php')) {
  
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main'));
    wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true);

  }

  if (is_page_template('templates/about.php')) {
    wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main'));
    wp_enqueue_script('about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true);
  }

  if (is_page_template('templates/contacts.php')) {
    wp_enqueue_style('contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main'));
    wp_enqueue_script('contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true);
  }

  if (is_page_template('templates/projects.php')) {
    wp_enqueue_style('projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main'));
    wp_enqueue_script('jquery'); // це включає вбудований jQuery в WordPress
    wp_enqueue_script('projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array('jquery'), false, true);
  }

  if (is_page_template('templates/support.php')) {
    wp_enqueue_style('support-style', get_template_directory_uri() . '/assets/styles/template-styles/support.css', array('main'));
    wp_enqueue_script('support-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/support.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/form.php')) {
    wp_enqueue_style('form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/form.css', array('main'));
    wp_enqueue_script('form-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/form.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/join-us.php')) {
    wp_enqueue_style('join-us-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/join-us.css', array('main'));
  }

  if (is_singular() && locate_template('template-parts/content-post.php')) {
    wp_enqueue_style('content-post-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-post.css', array('main'));
    wp_enqueue_script( 'content-post-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/content-post.js', array(), false, true );
  }

  if (is_singular() && locate_template('template-parts/content-news-posts.php')) {
    wp_enqueue_style('content-news-posts-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-news-posts.css', array('main'));
  }

  if (is_singular() && locate_template('template-parts/aside-posts.php')) {
    wp_enqueue_style('aside-posts-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/aside-posts.css', array('main'));
  }

  if (is_singular() && locate_template('template-parts/aside-one-post.php')) {
    wp_enqueue_style('aside-one-post-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/aside-one-post.css', array('main'));
  }
  if (is_singular() && locate_template('template-parts/content-banner.php')) {
    wp_enqueue_style('content-banner', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-banner.css', array('main'));
  }
}
/** add fonts */
function add_google_fonts()
{
  wp_enqueue_style('google_web_fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Raleway:wght@400;500;600;700&display=swap');
}

add_action('wp_enqueue_scripts', 'add_google_fonts');

/** Register menus */
function wp_it_volunteers_menus()
{
  $locations = array(
    'header' => __('Header Menu', 'wp-it-volunteers'),
    'footer' => __('Footer Menu', 'wp-it-volunteers'),
  );

  register_nav_menus($locations);
}

add_action('init', 'wp_it_volunteers_menus');



// добавим роли текущего пользователя в классы body



/** ACF add options page */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'General Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'parent_slug'   => 'theme-general-settings',
  ));
}

add_filter('excerpt_more', function ($more) {
  return '...';
});

//add CPT to archive
function my_cptui_add_post_types_to_archives($query)
{

  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  if (is_category() && empty($query->query_vars['suppress_filters'])) {

    $cptui_post_types = array('materials');

    $query->set(
      'post_type',
      array_merge(
        array('post'),
        $cptui_post_types
      )
    );
  }
}
add_filter('pre_get_posts', 'my_cptui_add_post_types_to_archives');

// change request to WP for pagination on the taxonomy page
function codernote_request($query_string)
{
  if (isset($query_string['page'])) {
    if ('' != $query_string['page']) {
      if (isset($query_string['name'])) {
        unset($query_string['name']);
      }
    }
  }
  return $query_string;
}
add_filter('request', 'codernote_request');

add_action('pre_get_posts', 'codernote_pre_get_posts');
function codernote_pre_get_posts($query)
{
  if ($query->is_main_query() && !$query->is_feed() && !is_admin()  && is_archive()) {
    $query->set('paged', str_replace('/', '', get_query_var('page')));
  }
}
