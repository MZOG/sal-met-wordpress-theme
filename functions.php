<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function sal_met_scripts() {
	wp_enqueue_style( 'defaults-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'sal-met-style', get_template_directory_uri() . '/sal-met.min.css', false, time(), 'all' );

	wp_enqueue_script( 'sal-met-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sal-met-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sal_met_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

// add_filter( 'nav_menu_css_class', '__return_empty_array', 10, 3 );

add_theme_support('post-thumbnails', array(
	'post',
	'page',
	'custom-post-type-name',
	));

	/*
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');

/**
* Single template function which will choose our template
*/
function my_single_template($single) {
global $wp_query, $post;

/**
* Checks for single template by category
* Check by category slug and ID
*/
foreach((array)get_the_category() as $cat) :

if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

endforeach;
}


function register_portfolio_sidebar() {
	register_sidebar( array(
			'name'          => __( 'Portfolio Sidebar', 'textdomain' ),
			'id'            => 'portfolio-sidebar',
			'description'   => __( 'Panel boczny strony realizacji', 'textdomain' ),
			'before_widget' => '<div class="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="post__sidebar-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'register_portfolio_sidebar' );

if ( ! function_exists( 'salmet_register_nav_menu' ) ) {

	function salmet_register_nav_menu(){
			register_nav_menus( array(
					'primary_menu' => __( 'Primary', 'text_domain' ),
			) );
	}
	add_action( 'after_setup_theme', 'salmet_register_nav_menu', 0 );
}