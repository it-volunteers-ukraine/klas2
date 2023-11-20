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
  wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array());
  wp_enqueue_style('wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('swiper-style', 'main'));
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');

  wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js', array(), false, true);
  wp_enqueue_script('wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array('swiper-scripts'), false, true);
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
    wp_enqueue_script('projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/form.php')) {
    wp_enqueue_style('form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/form.css', array('main'));
    wp_enqueue_script('form-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/form.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/join-us.php')) {
    wp_enqueue_style('join-us-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/join-us.css', array('main'));
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


/** ACF add options page */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
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


// library custom post type
add_action( 'init', 'register_library_post_types' );

function register_library_post_types(){

	register_post_type( 'post_type_name', [
		'label'  => null,
		'labels' => [
			'name'               => 'materials',
			'singular_name'      => 'material',
			'add_new'            => 'Add material',
			'add_new_item'       => 'Add new material',
			'edit_item'          => 'Edit material',
			'new_item'           => 'New material',
			'view_item'          => 'View material',
			'search_items'       => 'Search material',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Library',
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}