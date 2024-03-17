<?php
require_once 'includes/block/index.php';
require_once 'includes/shortcodes/index.php';
require_once 'includes/get_menu_by_name.php';
/**
 * daykemit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package daykemit
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function daykemit_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on daykemit, use a find and replace
		* to change 'daykemit' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'daykemit', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'daykemit' ),
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
			'daykemit_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'daykemit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function daykemit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'daykemit_content_width', 640 );
}
add_action( 'after_setup_theme', 'daykemit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function daykemit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'daykemit' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'daykemit' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'daykemit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function daykemit_scripts() {
    // Assuming _S_VERSION is defined in your theme's functions.php or somewhere else
    $theme_version = _S_VERSION;

    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), $theme_version );

    // Google Font (Lexend)
    wp_enqueue_style( 'google-fonts-lexend', 'https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap', array(), null );

    // Font Awesome CSS
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', array(), $theme_version );

    // Themify Icons CSS
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/fonts/themify-icons.css', array(), $theme_version );

    // Owl Carousel CSS
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.css', array(), $theme_version );
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/owlcarousel/css/owl.theme.css', array(), $theme_version );

    // SlickNav CSS
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), $theme_version );

    // Magnific Popup CSS
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), $theme_version );

    // Animate CSS
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $theme_version );

    // Custom Style CSS
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
	// My custom
    wp_enqueue_style( 'my-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), $theme_version );


    // HTML5 Shim and Respond.js for IE8 support - Note: These scripts don't need versioning as they are conditionally loaded for older browsers
    wp_enqueue_script( 'html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '3.7.2' );
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

    // Enqueue jQuery (comes with WordPress)
    wp_enqueue_script('jquery');

    // Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);

    // Owl Carousel JS
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true);

    // SlickNav JS
    wp_enqueue_script('slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), _S_VERSION, true);

    // Magnific Popup JS
    wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true);

    // MixItUp JS
    wp_enqueue_script('mixitup-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), _S_VERSION, true);

    // ScrollTopControl JS
    wp_enqueue_script('scrolltopcontrol-js', get_template_directory_uri() . '/assets/js/scrolltopcontrol.js', array('jquery'), _S_VERSION, true);

    // PureCounter Vanilla JS
    wp_enqueue_script('purecounter-vanilla-js', get_template_directory_uri() . '/assets/js/purecounter_vanilla.js', array('jquery'), _S_VERSION, true);

    // WOW JS
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), _S_VERSION, true);

    // Custom Scripts JS
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true);

//	wp_enqueue_style( 'daykemit-style', get_template_directory_uri(), array(), _S_VERSION );
//	wp_enqueue_style( 'daykemit-style', get_stylesheet_uri(), array(), _S_VERSION );
//	wp_style_add_data( 'daykemit-style', 'rtl', 'replace' );
//	wp_enqueue_script( 'daykemit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'daykemit_scripts' );

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

