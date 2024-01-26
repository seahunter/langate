<?php
/**
 * langate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package langate
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function langate_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on langate, use a find and replace
		* to change 'langate' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('langate', get_template_directory() . '/languages');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'langate'),
		)
	);
}

add_action('after_setup_theme', 'langate_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function langate_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'langate'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'langate'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}

add_action('widgets_init', 'langate_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function langate_scripts()
{
	wp_enqueue_style('langate-style', get_stylesheet_uri(), [], _S_VERSION);

	wp_enqueue_style('theme-main-style', get_theme_file_uri('/build/index.css'), [], _S_VERSION);

	wp_enqueue_script('theme-main', get_theme_file_uri('/build/index.js'), [], _S_VERSION, [
		'in_footer' => true,
		'strategy' => 'defer'
	]);
}

add_action('wp_enqueue_scripts', 'langate_scripts');

function langate_excerpt_length()
{
	return 10;
}

add_filter('excerpt_length', 'langate_excerpt_length');

include get_theme_file_path('/post-types/movie.php');

function langate_moview_main_query($query)
{
	if ($query->is_home() && $query->is_main_query()) {
		$query->set('post_type', 'movie');
	}
}

add_action('pre_get_posts', 'langate_moview_main_query');
