<?php

/**
 * Avantage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Avantage
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
function avantage_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Avantage, use a find and replace
		* to change 'avantage' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('avantage', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

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
			'menu-1' => esc_html__('Primary', 'avantage'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'avantage_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'avantage_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function avantage_content_width()
{
	$GLOBALS['content_width'] = apply_filters('avantage_content_width', 640);
}
add_action('after_setup_theme', 'avantage_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function avantage_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'avantage'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'avantage'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'avantage_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function avantage_scripts()
{
	wp_enqueue_style('avantage-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('avantage-style', 'rtl', 'replace');
	wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('style.css', get_template_directory_uri() . '/assets/css/style.css');
	// wp_enqueue_style('bootstrap4_css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css');
	wp_enqueue_style('ajax_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_script('avantage-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('ajax.style', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script('bootstrap.style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
	// wp_enqueue_script('botstrap4.style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script('bootstrap-datepicker.style', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js');


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'avantage_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action('after_setup_theme', 'theme_register_nav_menu');


add_filter('nav_menu_css_class', 'wp_kama_nav_menu_css_class_filter', 10, 4);
add_filter('nav_menu_link_attributes', 'nav_link_filter', 10, 4);





function theme_register_nav_menu()
{
	register_nav_menu('header', 'Header Menu');
	register_nav_menu('footer', 'Footer Menu');
}

function wp_kama_nav_menu_css_class_filter($classes)
{
	$classes = ['nav-item'];
	return $classes;
}

function nav_link_filter($attr)
{
	$attr['class'] = 'nav-link';
	return $attr;
}


function true_id($args)
{
	$args['post_page_id'] = 'ID';
	return $args;
}
function true_custom($column, $id)
{
	if ($column === 'post_page_id') {
		echo $id;
	}
}

add_filter('manage_pages_columns', 'true_id', 5);
add_action('manage_pages_custom_column', 'true_custom', 5, 2);
add_filter('manage_posts_columns', 'true_id', 5);
add_action('manage_posts_custom_column', 'true_custom', 5, 2);

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'    => 'Global table',
		'menu_title'    => 'Table price, phone and mail',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
};

// add custom post type
function create_rooms_post_type()
{
	$args = array(
		'public' => true,
		'show_in_rest' => true,
		'label'  => 'Номери',
		'supports' => array('title', 'editor', 'thumbnail',),
		'has_archive' => true

	);
	register_post_type('room', $args);
}
add_action('init', 'create_rooms_post_type');

add_filter('excerpt_more', fn () => ' ...');

add_filter('excerpt_length', function () {
	return 25;
});

/**
 * Enqueue custom scripts and pass room prices to the client-side using wp_add_inline_script().
 */
function single_custom_price()
{
	if (is_singular('room')) {
		$post_id = get_the_ID();
		$room_prices[] = array(
			'price_segment1' => get_field('single_price_1', $post_id),
			'price_segment2' => get_field('single_price_2', $post_id),
			'price_segment3' => get_field('single_price_3', $post_id),
			'price_segment4' => get_field('single_price_4', $post_id),
		);

		wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/single_data_price.js', array(), '1.0', true);

		wp_add_inline_script('my-script', 'const roomPrices = ' . wp_json_encode($room_prices), 'before');
	} else {
		$arrPrice = [];
		$repeater_table_field = get_field('table', 'option');

		if ($repeater_table_field) {
			while (have_rows('table', 'option')) {
				the_row();
				while (have_rows('table_subhead', 'option')) {
					the_row();
					$price = get_sub_field('table_price', 'option');
					array_push($arrPrice, $price);
				}
			}
		}

		wp_enqueue_script('my-script2', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);

		wp_add_inline_script('my-script2', 'const arrPrice = ' . wp_json_encode($arrPrice), 'before');
	}
}
add_action('wp_enqueue_scripts', 'single_custom_price');

// add weather shortcode
function avantage_weather_widget_shortcode()
{
	ob_start();
?>
	<div class="weather">
		<div class="weather-widget">
			<div class="weather-header">
				<div class="city" id="city-name">Залізний Порт</div>
				<div class="weather-icon">
					<img id="weather-icon-img" src="" alt="Weather Icon">
				</div>
			</div>
			<div class="weather-info">
				<div class="temperature" id="temperature">25°C</div>
				<div class="description" id="weather-description">Ясно</div>
				<div class="feels-like">Відчувається як: <span id="feels-like">28°C</span></div>
				<div class="feels-like">Вітер: <span id="wind">28 м/с</span></div>
			</div>
		</div>
	</div>
<?php
	return ob_get_clean();
}
add_shortcode('avantage_weather_widget', 'avantage_weather_widget_shortcode');
