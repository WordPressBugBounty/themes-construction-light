<?php
/**
 * Construction Light functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Construction Light
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.7' );
}

if ( ! function_exists( 'construction_light_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function construction_light_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Construction Light, use a find and replace
		 * to change 'construction-light' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'construction-light', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('construction-light-medium', 350, 280, true);
		add_image_size( 'construction-light-portfolio', 300, 300, true );
		add_image_size( 'construction-light-team', 350, 420, true );
		add_image_size( 'construction-light-post-format', 770, 450, true );
		add_image_size( 'construction-light-aboutus', 475, 475, true );


		/**
		 * Enable support for post formats
		 *
		 * @link https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array( 'gallery', 'quote', 'audio', 'image', 'video' ) );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1'  => esc_html__( 'Primary Menu', 'construction-light' ),
			'menu-2'  => esc_html__( 'Top Menu', 'construction-light' )
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
		add_theme_support( 'custom-background', apply_filters( 'construction_light_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		 // Add support for responsive embedded content.
		 add_theme_support('responsive-embeds');

		 add_theme_support('custom-line-height');
 
		 add_theme_support('custom-spacing');
 
		 add_theme_support('custom-units');

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
add_action( 'after_setup_theme', 'construction_light_setup' );


/**
 * Enqueue admin scripts and styles.
 */
function construction_light_admin_editor_style() {
	add_editor_style( get_stylesheet_directory_uri() . '/custom-editor-style.css', array(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
}
add_action( 'admin_init', 'construction_light_admin_editor_style' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function construction_light_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'construction_light_content_width', 640 );
}
add_action( 'after_setup_theme', 'construction_light_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function construction_light_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Right Widget Sidebar Area', 'construction-light' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'construction-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Left Widget Sidebar Area', 'construction-light' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'construction-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'Menu Sidebar', 'construction-light' ),
		'id'            => 'menu-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'construction-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));


	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area One', 'construction-light' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'construction-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Two', 'construction-light' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'construction-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Three', 'construction-light' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'construction-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Four', 'construction-light' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'construction-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));


}
add_action( 'widgets_init', 'construction_light_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function construction_light_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Load Bootstrap CSS Library File
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/library/bootstrap/css/bootstrap' . esc_attr( $min ) . '.css');

	// Load Font-awesome CSS Library File
	wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/assets/library/fontawesome/css/all' . esc_attr( $min ) . '.css');

	// Load owl.carousel Library File
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/assets/library/owlcarousel/css/owl.carousel' . esc_attr( $min ) . '.css');

	// Load animate File
	wp_enqueue_style( 'animate', get_template_directory_uri(). '/assets/css/animate.css','3.7.0');

	// Load magnefic Library File
	wp_enqueue_style( 'magnefic', get_template_directory_uri(). '/assets/library/magnific-popup/magnefic' . esc_attr ( $min ) . '.css');


	wp_enqueue_style( 'construction-light-style', get_stylesheet_uri() );
	if ( has_header_image() ) {
		$custom_css = '.nav-classic{ background-image: url("' . esc_url( get_header_image() ) . '"); background-repeat: no-repeat; background-position: center center; background-size: cover; }';
		wp_add_inline_style( 'construction-light-style', $custom_css );
	}

	// Load responsive Library File
	wp_enqueue_style( 'responsive', get_template_directory_uri(). '/assets/css/responsive.css');

	//jquery.isotope
	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery', 'imagesloaded' ), '1.0.0', true );
	wp_register_script( 'countdown-timer', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery', 'imagesloaded' ), '1.0.0', true );

	//wow
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), true );	

	wp_enqueue_script( 'odometer', get_template_directory_uri() . '/assets/js/odometer.js', array('jquery'), '1.0.0', true );

	//waypoints
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets//library/waypoints/waypoints' . esc_attr ( $min ) . '.js', array('jquery'), true );	

	//counter
	wp_enqueue_script( 'counter', get_template_directory_uri() . '/assets/library/counter/jquery.counterup' . esc_attr ( $min ) . '.js', array('jquery'), true );

	//bootstrap
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/library/bootstrap/js/bootstrap' . esc_attr ( $min ) . '.js', array('jquery'), '2.0.3' ,true );	

	//owl.carousel
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/library/owlcarousel/js/owl.carousel' . esc_attr ( $min ) . '.js', array('jquery'),'2.3.4', true );

	//magnific-popup
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/library/magnific-popup/magnific-popup' . esc_attr ( $min ) . '.js', array('jquery'),'1.1.0', true );	

	//theia-sticky
	wp_enqueue_script( 'theia-sticky-sidebar', get_template_directory_uri() . '/assets/library/theia-sticky-sidebar/js/theia-sticky-sidebar' . esc_attr ( $min ) . '.js', array('jquery'), true );

	wp_enqueue_script( 'construction-light-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'construction-light-custom', get_template_directory_uri() . '/assets/js/construction-light.js', array('jquery','masonry', 'countdown-timer', 'jquery-ui-accordion'), true );

	/**
     * Load PrettyPhoto JavaScript File 
    */
    wp_enqueue_script('jquery-prettyPhoto', get_template_directory_uri() . '/assets/library/prettyphoto/js/jquery.prettyPhoto.js', array(), '3.1.6', true);
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/assets/library/prettyphoto/css/prettyPhoto.css' );

	// Localize the script with new data
    $sticky_sidebar = get_theme_mod( 'construction_light_sticky_sidebar','disable' );

	wp_localize_script('construction-light-custom', 'construction_light_script', array(
        'sticky_sidebar'=> $sticky_sidebar
    ));


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'construction_light_scripts' );


/**
 * Admin Enqueue scripts and styles.
*/
if ( ! function_exists( 'construction_light_admin_scripts' ) ) {

    function construction_light_admin_scripts( $hook ) {

    	if( $hook != 'edit.php' && $hook != 'post.php' && $hook != 'post-new.php' && 'widgets.php' != $hook )

        return;

        wp_enqueue_script('construction-light-admin', get_template_directory_uri() . '/assets/js/constructionlight-admin.js', array( 'jquery', 'jquery-ui-sortable', 'customize-controls' ) ); 
        wp_enqueue_style( 'construction-light-admin-style', get_template_directory_uri() . '/assets/css/constructionlight-admin.css');    
    }
}
add_action('admin_enqueue_scripts', 'construction_light_admin_scripts');


/**
 * Sets the Construction Light Template Instead of front-page.
 */
function construction_light_front_page_set( $template ) {

  $construction_light_front_page = get_theme_mod( 'construction_light_enable_frontpage' ,false);

  if( true != $construction_light_front_page ){

    if ( 'posts' == get_option( 'show_on_front' ) ) {

      include( get_home_template() );

    } else {

      include( get_page_template() );
      
    }
  }
}
add_filter( 'construction_light_enable_front_page', 'construction_light_front_page_set' );


/**
 * Load Files.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/** remove widgets block editor */
function construction_light_widget_theme_support() {

    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'construction_light_widget_theme_support' );


if( !function_exists ('construction_light_add_last_nav_item')){
	/** 
	 * Adding Search and Sidebar Navigation Items
	 */
	function construction_light_add_last_nav_item($items, $args) {
		
		if($args->theme_location == 'menu-1'):

			$enable_search = get_theme_mod('construction_light_enable_search', 'enable');

			$search_layout = get_theme_mod('construction_light_search_layout', 'layout_one');

			if( get_theme_mod('construction_light_menu_sidebar', 'disable') == 'enable'){

				$items .= '<li class="menu-item-sidebar menu-item float-right"><a class="" href="javascript:void(0)" data-toggle-target=".header-sidebar-content"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle"><i class="fas fa-th"></i></a></li>';
			}

			if( $enable_search == 'enable'):
				$items .= '<li class="menu-item-search menu-item float-right"><a class="searchicon '.esc_html($search_layout).'" href="javascript:void(0)"><i class="fas fa-search"></i></a></li>';
			endif;

			return $items;

		endif;

		return $items;
	}
	add_filter('wp_nav_menu_items','construction_light_add_last_nav_item', 10, 2);
}

if ( ! function_exists( 'construction_light_font_family' ) ) {

	/**
	 * @package Construction Light
	 * @param  [array] $typography
	 * @return [string]
	 */
	function construction_light_font_family( $typography ) {

		$font_type   = isset( $typography['font-type'] ) && $typography['font-type'] ? $typography['font-type'] : '';
		$system_font = isset( $typography['system-font'] ) && $typography['system-font'] ? $typography['system-font'] : '';
		$google_font = isset( $typography['google-font'] ) && $typography['google-font'] ? $typography['google-font'] : '';
		$custom_font = isset( $typography['custom-font'] ) && $typography['custom-font'] ? $typography['custom-font'] : '';

		switch ( $font_type ) :
			case 'system':
				$font_family = $system_font;
				break;

			case 'google':
				$font_family = $google_font;
				break;

			case 'custom':
				$font_family = $custom_font;
				break;

			default:
				$font_family = false;
				break;
		endswitch;

		return $font_family;
	}
}

if ( ! function_exists( 'construction_light_font_weight' ) ) {

	/**
	 * @package Construction Light
	 * [construction_light_font_weight]
	 * @param  [array] $typography
	 * @return [mix]
	 */
	function construction_light_font_weight( $typography ) {

		$font_weight = isset( $typography['font-weight'] ) && $typography['font-weight'] ? $typography['font-weight'] : '';
		if ( empty( $font_weight ) ) {
			return $font_weight;
		}
		if ( ! is_numeric( $font_weight ) ) {
			if ( preg_match( '/\\d/', $font_weight ) > 0 ) {
				$font_weight = preg_replace( '/[^0-9]/', '', $font_weight );
			} else {
				$font_weight = 400;
			}
		}
		return $font_weight;
	}
}

if ( ! function_exists( 'construction_light_isset' ) ) {
	/**
	 * @package Construction Light
	 * @param string $var
	 * @return string
	 */
	function construction_light_isset( &$var ) {
		if ( isset( $var ) ) {
			return $var;
		}
		return '';
	}
}

add_action('construction-light-pro-link', function(){
	return 'https://sparklewpthemes.com/wordpress-themes/construction-wordpress-theme/';
});