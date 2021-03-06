<?php
/**
 * wedocracy functions and definitions
 *
 * @package wedocracy
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'wedocracy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wedocracy_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wedocracy, use a find and replace
	 * to change 'wedocracy' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wedocracy', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wedocracy' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wedocracy_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // wedocracy_setup
add_action( 'after_setup_theme', 'wedocracy_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wedocracy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Left Widgets', 'wedocracy' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Center', 'wedocracy' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Right', 'wedocracy' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'wedocracy_widgets_init' );

/*
function wedocracy_after_post_widget($content) {

	if ( is_singular(array('post', 'page')) && is_active_sidebar( 'after-post' ) && is_main_query() ) {
		dynamic_sidebar('after-post');
	}
	return $content;
}
register_sidebar( array(
	'name' => 'After Posts Widgets',
	'id' => 'after-post',
	'description' => __( 'Widget area under article text.', '$text_domain' ),
) );
add_filter( 'the_content', 'wedocracy_after_post_widget' );
*/

/**
 * Enqueue scripts and styles.
 */
function wedocracy_scripts() {
	wp_enqueue_style( 'wedocracy-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wedocracy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'wedocracy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wedocracy_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';
function wedocracy_add_custom_image_size() {
	add_image_size( 'post-banner', 1800, 9999, false );
	add_image_size( 'post-thumb', 300, 300, true );
}
add_action( 'after_setup_theme', 'wedocracy_add_custom_image_size' );

add_action('admin_notices', 'showAdminMessages');

function showAdminMessages()
{
	$plugin_messages = array();

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Download the Disqus comment system
	if(!is_plugin_active( 'disqus-comment-system/disqus.php' ))
	{
		$plugin_messages[] = 'This theme requires you to install the Disqus comment system plugin, <a href="http://wordpress.org/extend/plugins/disqus-comment-system/">download it from here</a>.';
	}

	// Download the User Social Fields plugin
	if(!is_plugin_active( 'user-social-fields/user-social-fields.php' ))
	{
		$plugin_messages[] = 'This theme requires you to install the User Social Fields plugin, <a href="http://wordpress.org/extend/plugins/user-social-fields/">download it from here</a>.';
	}

	if(count($plugin_messages) > 0)
	{
		echo '<div id="message" class="error">';

		foreach($plugin_messages as $message)
		{
			echo '<p><strong>'.$message.'</strong></p>';
		}

		echo '</div>';
	}
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

