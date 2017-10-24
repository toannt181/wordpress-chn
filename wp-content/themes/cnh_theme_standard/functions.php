<?php
/**
 * CNH_theme_standard functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CNH_theme_standard
 */

if ( ! function_exists( 'cnh_theme_standard_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cnh_theme_standard_setup() {

		//Enabling Support for Category Thumbnails
		add_theme_support( 'category-thumbnails' );


		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CNH_theme_standard, use a find and replace
		 * to change 'cnh_theme_standard' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cnh_theme_standard', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cnh_theme_standard' ),
		) );

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cnh_theme_standard_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cnh_theme_standard_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cnh_theme_standard_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cnh_theme_standard_content_width', 640 );
}

add_action( 'after_setup_theme', 'cnh_theme_standard_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cnh_theme_standard_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cnh_theme_standard' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cnh_theme_standard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'cnh_theme_standard_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cnh_theme_standard_scripts() {
//	wp_enqueue_style( 'cnh_theme_standard-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cnh_theme_standard-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cnh_theme_standard-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'cnh_theme_standard_scripts' );

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

/**
 * Add filter for display product category
 */
add_filter( 'get_the_archive_title', function ( $title ) {

	if ( is_tax( 'product-cat' ) ) {

		$title = single_cat_title( '', false );

	}

	return $title;

} );

/**
 * Set number product show on page
 */
add_action( 'pre_get_posts', function ( $query ) {
	if ( is_tax( 'product-cat' ) ) {
		$query->set( 'posts_per_page', 2 );

		return;
	}
}, 1 );

/**
 * Add Advance custom field to page setting
 */
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page();

}

/*
 * Builds custom HTML.
 *
 * With this function, I can alter WPP's HTML output from my theme's functions.php.
 * This way, the modification is permanent even if the plugin gets updated.
 *
 * @param	array	$mostpopular
 * @param	array	$instance
 * @return	string
 */
function my_custom_popular_posts_html_list( $mostpopular, $instance ){
	$output = '<ol class="wpp-list">';

	// loop the array of popular posts objects
	foreach( $mostpopular as $popular ) {

		$stats = array(); // placeholder for the stats tag

		// Comment count option active, display comments
		if ( $instance['stats_tag']['comment_count'] ) {
			// display text in singular or plural, according to comments count
			$stats[] = '<span class="wpp-comments">' . sprintf(
					_n( '1 comment', '%s comments', $popular->comment_count, 'wordpress-popular-posts' ),
					number_format_i18n( $popular->comment_count )
				) . '</span>';
		}

		// Pageviews option checked, display views
		if ( $instance['stats_tag']['views'] ) {

			// If sorting posts by average views
			if ($instance['order_by'] == 'avg') {
				// display text in singular or plural, according to views count
				$stats[] = '<span class="wpp-views">' . sprintf(
						_n( '1 view per day', '%s views per day', intval($popular->pageviews), 'wordpress-popular-posts' ),
						number_format_i18n( $popular->pageviews, 2 )
					) . '</span>';
			} else { // Sorting posts by views
				// display text in singular or plural, according to views count
				$stats[] = '<span class="wpp-views">' . sprintf(
						_n( '1 view', '%s views', intval($popular->pageviews), 'wordpress-popular-posts' ),
						number_format_i18n( $popular->pageviews )
					) . '</span>';
			}
		}

		// Author option checked
		if ( $instance['stats_tag']['author'] ) {
			$author = get_the_author_meta( 'display_name', $popular->uid );
			$display_name = '<a href="' . get_author_posts_url( $popular->uid ) . '">' . $author . '</a>';
			$stats[] = '<span class="wpp-author">' . sprintf( __( 'by %s', 'wordpress-popular-posts' ), $display_name ). '</span>';
		}

		// Date option checked
		if ( $instance['stats_tag']['date']['active'] ) {
			$date = date_i18n( $instance['stats_tag']['date']['format'], strtotime( $popular->date ) );
			$stats[] = '<span class="wpp-date">' . sprintf( __( 'posted on %s', 'wordpress-popular-posts' ), $date ) . '</span>';
		}

		// Category option checked
		if ( $instance['stats_tag']['category'] ) {
			$post_cat = get_the_category( $popular->id );
			$post_cat = ( isset( $post_cat[0] ) )
				? '<a href="' . get_category_link( $post_cat[0]->term_id ) . '">' . $post_cat[0]->cat_name . '</a>'
				: '';

			if ( $post_cat != '' ) {
				$stats[] = '<span class="wpp-category">' . sprintf( __( 'under %s', 'wordpress-popular-posts' ), $post_cat ) . '</span>';
			}
		}

		// Build stats tag
		if ( !empty( $stats ) ) {
			$stats = '<div class="wpp-stats">' . join( ' | ', $stats ) . '</div>';
		}

		$excerpt = ''; // Excerpt placeholder

		// Excerpt option checked, build excerpt tag
		if ( $instance['post-excerpt']['active'] ) {

			$excerpt = get_excerpt_by_id( $popular->id );
			if ( !empty( $excerpt ) ) {
				$excerpt = '<div class="wpp-excerpt">' . $excerpt . '</div>';
			}

		}

		$output .= "<li>";
		$output .= "<h2 class=\"entry-title\"><a href=\"" . get_permalink( $popular->id ) . "\" title=\"" . esc_attr( $popular->title ) . "\">" . $popular->title . "</a></h2>";
		$output .= $stats;
		$output .= $excerpt;
		$output .= "</li>" . "\n";

	}

	$output .= '</ol>';

	return $output;
}

add_filter( 'wpp_custom_html', 'my_custom_popular_posts_html_list', 10, 2 );
