<?php
/**
 * Childit functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package childit
 */
if ( ! defined( 'CHILDIT_THEME_URI' ) ) {
	define( 'CHILDIT_THEME_URI', get_template_directory_uri() );
}

define( 'CHILDIT_THEME_DIR', get_template_directory() );
define( 'CHILDIT_ASSETS_URL', CHILDIT_THEME_URI . '/assets/' );
define( 'CHILDIT_CSS_URL', CHILDIT_ASSETS_URL . 'css/' );
define( 'CHILDIT_JS_FORM', CHILDIT_ASSETS_URL . 'form/' );
define( 'CHILDIT_IMG_URL', CHILDIT_ASSETS_URL . 'img/' );
define( 'CHILDIT_CUSTOM_JS_URL', CHILDIT_ASSETS_URL . 'js/' );
define( 'CHILDIT_VENDOR_URL', CHILDIT_ASSETS_URL . 'vendor/' );

define( 'CHILDIT_FREAMWORK_DIRECTORY', CHILDIT_THEME_DIR . '/framework/' );
define( 'CHILDIT_INC_DIRECTORY', CHILDIT_THEME_DIR . '/inc/' );

/* actions directory */

require_once CHILDIT_FREAMWORK_DIRECTORY . 'actions/includes.php';
require_once CHILDIT_FREAMWORK_DIRECTORY . 'redux/redux-config.php';
require_once CHILDIT_FREAMWORK_DIRECTORY . 'redux/redux-fallback.php';

require_once CHILDIT_FREAMWORK_DIRECTORY . 'plugin-list.php';

require_once CHILDIT_FREAMWORK_DIRECTORY . 'styles/index.php';
require_once CHILDIT_FREAMWORK_DIRECTORY . 'scripts/index.php';
/* widget */
require_once CHILDIT_FREAMWORK_DIRECTORY . 'widgets.php';

require_once CHILDIT_FREAMWORK_DIRECTORY . 'custom-header.php';

require_once CHILDIT_FREAMWORK_DIRECTORY . 'class-tgm-plugin-activation.php';
require_once CHILDIT_FREAMWORK_DIRECTORY . 'config-tgm.php';

require_once CHILDIT_FREAMWORK_DIRECTORY . '/dashboard/class-dashboard.php';
require_once CHILDIT_INC_DIRECTORY . 'template-tags.php';


if ( ! function_exists( 'childit_options' ) ) :

	function childit_options() {
		global $childit_options;
		$opt_pref = 'childit_';
		if ( empty( $childit_options ) ) {
			$childit_options = get_option( $opt_pref . 'options' );
		}
		return $childit_options;
	}

endif;
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! function_exists( 'childit_content_width' ) ) :

	function childit_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'childit_content_width', 1200 );
	}

endif;

add_action( 'after_setup_theme', 'childit_content_width', 0 );

if ( ! function_exists( 'childit_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function childit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on childit, use a find and replace
		 * to change 'childit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'childit', get_template_directory() . '/languages' );

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
				'primary' => esc_html__( 'Primary', 'childit' ),
			)
		);

		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'gallery',
				'audio',
				'video',
				'link',
				'quote',
			)
		);
		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Small', 'childit' ),
					'shortName' => esc_html__( 'S', 'childit' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'childit' ),
					'shortName' => esc_html__( 'M', 'childit' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'childit' ),
					'shortName' => esc_html__( 'L', 'childit' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'childit' ),
					'shortName' => esc_html__( 'XL', 'childit' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'strong yellow', 'childit' ),
					'slug'  => 'strong-yellow',
					'color' => '#f7bd00',
				),
				array(
					'name'  => esc_html__( 'strong white', 'childit' ),
					'slug'  => 'strong-white',
					'color' => '#fff',
				),
				array(
					'name'  => esc_html__( 'light black', 'childit' ),
					'slug'  => 'light-black',
					'color' => '#242424',
				),
				array(
					'name'  => esc_html__( 'very light gray', 'childit' ),
					'slug'  => 'very-light-gray',
					'color' => '#797979',
				),
				array(
					'name'  => esc_html__( 'very dark black', 'childit' ),
					'slug'  => 'very-dark-black',
					'color' => '#000000',
				),
			)
		);
		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
		$defaults = array(
			'default-image'          => '',
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => false,
			'flex-width'             => false,
			'uploads'                => true,
			'random-default'         => false,
			'header-text'            => true,
			'default-text-color'     => '',
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);

		add_theme_support( 'custom-header', $defaults );

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
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'childit_custom_background_args',
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

		// Add custom thumb size
		set_post_thumbnail_size( 870, 483, false );
		add_image_size( 'childit_blog_post_featured_image', 870, 435, true );
		add_image_size( 'childit_blog_post_featured_image_soft', 870, 435 );
		add_image_size( 'childit_blog_post_section_image', 370, 256, true );
		add_image_size( 'childit_blog_post_sidebar_image', 80, 80, true );
		add_image_size( 'childit_galleries_cont_width', 255, 255, true );
		add_image_size( 'childit_galleries_full_width', 381, 381, true );
		add_image_size( 'childit_galleries_home', 255, 252, true );
	}

endif;
add_action( 'after_setup_theme', 'childit_setup' );

function childit_build_google_font() {
	$protocol   = is_ssl() ? 'https:' : 'http:';
	$variants   = ':400,400i,500,600,700&display=swap';
	$query_args = array(
		'family' => urlencode( 'Roboto|Poppins' . $variants ),
	);
	$font_url   = add_query_arg( $query_args, $protocol . '//fonts.googleapis.com/css' );
	return $font_url;
}

function childit_add_google_font() {
	wp_enqueue_style( 'childit-google-fonts', childit_build_google_font(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'childit_add_google_font' );



if ( ! function_exists( 'childit_get_option' ) ) {

	function childit_get_option( $id ) {
		global $childit_option;
		if ( isset( $childit_option[ $id ] ) ) {
			return $childit_option[ $id ];
		}
		return '';
	}
}


add_action( 'childit_breadcrumb', 'childit_get_breadcrumb' );

function childit_show_preloader() {
	 $childit_options  = childit_options();
	$childit_preloader = isset( $childit_options['childit_site_preloader'] ) ? $childit_options['childit_site_preloader'] : 0;
	if ( $childit_preloader ) {
		?>
<div class="preloader">
  <div class="preloader-container">
	<div class="preloader-item"></div>
	<div class="preloader-item"></div>
	<div class="preloader-item"></div>
	<div class="preloader-item"></div>
	<div class="preloader-item"></div>
  </div>
</div>
		<?php
	}
}

add_action( 'childit_preloader', 'childit_show_preloader' );

function childit_query_vars( $qvars ) {
	 $qvars[] = 'pageid';
	return $qvars;
}

add_filter( 'query_vars', 'childit_query_vars' );

add_filter( 'comment_form_fields', 'childit_move_comment_field_to_bottom' );

function childit_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	unset( $fields['cookies'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

function childit_kses_allowed_html( $tags, $context ) {
	switch ( $context ) {
		case 'social':
			$tags = array(
				'a'      => array( 'href' => array() ),
				'em'     => array(),
				'strong' => array(),
			);
			return $tags;
		case 'footer_social_link':
			$tags = array(
				'li'  => array(),
				'a'   => array(
					'href'   => array(),
					'target' => array(),
				),
				'img' => array(
					'src'   => array(),
					'title' => array(),
					'alt'   => array(),
				),
			);
			return $tags;
		case 'event_heading':
			$tags = array(
				'p'      => array( 'class' => array() ),
				'h2'     => array(),
				'h3'     => array(),
				'em'     => array(),
				'strong' => array(),
			);
			return $tags;
		case 'author_avatar':
			$tags = array(
				'img' => array(
					'class'  => array(),
					'height' => array(),
					'width'  => array(),
					'src'    => array(),
					'alt'    => array(),
				),
			);
			return $tags;
		default:
			return $tags;
	}
}

add_filter( 'wp_kses_allowed_html', 'childit_kses_allowed_html', 10, 2 );



function childit_custom_css() {
	 $childit_custom_css      = '';
	$childit_options          = childit_options();
	$childit_footer_mobile_bg = isset( $childit_options['childit_footer_mobile_bg'] ) ? $childit_options['childit_footer_mobile_bg'] : 0;
	if ( $childit_footer_mobile_bg ) {
		$childit_custom_css = "
        @media (max-width: 991px) {
            footer .footer-top {
                background: url('" . esc_url( $childit_footer_mobile_bg['url'] ) . "') !important;
            }
        }";
	}
	wp_add_inline_style( 'childit-style', $childit_custom_css );
}
add_action( 'wp_enqueue_scripts', 'childit_custom_css', 20 );


