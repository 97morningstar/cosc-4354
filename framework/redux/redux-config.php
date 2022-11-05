<?php
if ( ! class_exists( 'Redux' ) ) {
	return;
}

$opt_prefix       = 'childit_';
$opt_title_prefix = 'Childit';

// This is your option name where all the Redux data is stored.
$opt_name = $opt_prefix . 'options';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// TYPICAL -> Change these values as you need/desire
	'opt_name'                  => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'display_name'              => $theme->get( 'Name' ),
	// Name that appears at the top of your panel
	'display_version'           => $theme->get( 'Version' ),
	// Version that appears at the top of your panel
	'menu_type'                 => 'menu',
	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu'            => true,
	// Show the sections below the admin menu item or not
	'menu_title'                => esc_html( $opt_title_prefix ) . esc_html__( ' Options', 'childit' ),
	'page_title'                => esc_html( $opt_title_prefix ) . esc_html__( ' Options', 'childit' ),
	// You will need to generate a Google API key to use this feature.
	// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
	'google_api_key'            => '',
	// Set it you want google fonts to update weekly. A google_api_key value is required.
	'google_update_weekly'      => false,
	// Must be defined to add google fonts to the typography module
	'disable_google_fonts_link' => true,
	'async_typography'          => false,
	// Use a asynchronous font on the front end or font string
	'admin_bar'                 => true,
	// Show the panel pages on the admin bar
	'admin_bar_icon'            => 'dashicons-portfolio',
	// Choose an icon for the admin bar menu
	'admin_bar_priority'        => 50,
	// Choose an priority for the admin bar menu
	'global_variable'           => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode'                  => false,
	// Show the time the page took to load, etc
	'update_notice'             => true,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer'                => false,
	// OPTIONAL -> Give you extra features
	'page_priority'             => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent'               => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions'          => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon'                 => '',
	// Specify a custom URL to an icon
	'last_tab'                  => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon'                 => 'icon-themes',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug'                 => '',
	// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
	'save_defaults'             => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show'              => false,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark'              => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export'        => true,
	// Shows the Import/Export panel when not used as a field.
	// CAREFUL -> These options are for advanced use only
	'transient_time'            => 60 * MINUTE_IN_SECONDS,
	'output'                    => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag'                => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	'database'                  => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'use_cdn'                   => true,
	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	// HINTS
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);


Redux::setArgs( $opt_name, $args );

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Color Settings', 'childit' ),
		'id'               => 'color_settings',
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'      => $opt_prefix . 'main_color',
				'type'    => 'color',
				'title'   => __( 'Main Color', 'childit' ),
				'default' => '#46AADC',
			),
			array(
				'id'      => $opt_prefix . 'section_title_color',
				'type'    => 'color',
				'title'   => __( 'Section Title Color', 'childit' ),
				'default' => '#46AADD',
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'General Settings', 'childit' ),
		'id'               => 'header_settings',
		'desc'             => esc_html__( 'All General Settings', 'childit' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . 'site_preloader',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display preloader before page load', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable site preloader', 'childit' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'       => $opt_prefix . 'sticky_header',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable or Disable Sticky Header', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable Sticky Header', 'childit' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'       => $opt_prefix . 'header_style',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable or Disable style', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable style', 'childit' ),
				'default'  => true,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'       => $opt_prefix . 'header_contact',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable or Disable Header Contact', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable Header Contact', 'childit' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'       => $opt_prefix . 'search_form',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable or Disable Search', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable Search', 'childit' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'events_heading',
				'type'    => 'textarea',
				'title'   => esc_html__( 'Events Heading', 'childit' ),
				'default' => '',
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Breadcrumb Settings', 'childit' ),
		'id'               => 'breadcrumb_settings',
		'desc'             => esc_html__( 'All Breadcrumb settings', 'childit' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . 'show_breadcrumb',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Breadcrumb', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable', 'childit' ),
				'default'  => true,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),

			array(
				'id'       => $opt_prefix . 'blog_breadcrumb_background',
				'type'     => 'background',
				'url'      => true,
				'title'    => esc_html__('Blog breadcrumb background', 'childit'),
				'output'   => array(
					'.layer-background',
					'.archive .layer-background'
				),
			),
			array(
				'id'       => $opt_prefix . 'background_image',
				'type'     => 'media',
				'url'      => true,
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'childit' ),
				'subtitle' => esc_html__( 'Add/Upload Background Image using the WordPress native uploader', 'childit' ),
				'title'    => esc_html__( 'Blog Single Background Image', 'childit' ),
			),
			array(
				'id'       => $opt_prefix . 'event_breadcrumb_background',
				'type'     => 'background',
				'url'      => true,
				'title'    => esc_html__('Events breadcrumb background', 'childit'),
				'output'   => array(
					'background' => '.events-archive .page-name',
				),
			),
			array(
				'id'       => $opt_prefix . 'cloud_image',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'childit' ),
				'subtitle' => esc_html__( 'Add/Upload Cloud Image using the WordPress native uploader', 'childit' ),
				'title'    => esc_html__( 'Cloud Image', 'childit' ),
				'default'  => array(
					'url' => esc_url( CHILDIT_IMG_URL . 'cloud.png' ),
				),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Contact', 'childit' ),
		'id'               => 'contact_settings',
		'desc'             => esc_html__( 'Contact', 'childit' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-th-large',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . 'gmap_api_key',
				'type'     => 'text',
				'title'    => esc_html__( 'Google Map Api Key', 'childit' ),
				'subtitle' => esc_html__( 'Set Google Map Api Key', 'childit' ),
				'default'  => '',
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Blog Settings', 'childit' ),
		'id'               => 'blog_settings',
		'desc'             => esc_html__( 'All Blog settings', 'childit' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . 'show_post_title',
				'type'     => 'switch',
				'title'    => esc_html__( 'Title in Blog Single Page', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable Title in Blog Single Page', 'childit' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Footer Settings', 'childit' ),
		'id'               => 'footer_settings',
		'desc'             => esc_html__( 'All Footer settings', 'childit' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . 'footer_bg',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'childit' ),
				'subtitle' => esc_html__( 'Add/Upload Footer BG Image using the WordPress native uploader', 'childit' ),
				'title'    => esc_html__( 'Footer BG Image', 'childit' ),
			),

			array(
				'id'       => $opt_prefix . 'footer_mobile_bg',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'childit' ),
				'subtitle' => esc_html__( 'Add/Upload Footer BG Image using the WordPress native uploader', 'childit' ),
				'title'    => esc_html__( 'Footer Mobile BG Image', 'childit' ),
			),

			array(
				'id'      => $opt_prefix . 'show_footer_logo',
				'type'    => 'switch',
				'title'   => esc_html__( 'Display Footer Logo', 'childit' ),
				'default' => false,
				'on'      => esc_html__( 'Enable', 'childit' ),
				'off'     => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'social_link',
				'type'    => 'switch',
				'title'   => esc_html__( 'Display Social Link', 'childit' ),
				'default' => false,
				'on'      => esc_html__( 'Enable', 'childit' ),
				'off'     => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'facebook_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Facebook Link', 'childit' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . 'twitter_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Twitter Link', 'childit' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . 'instagram_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Instagram Link', 'childit' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . 'social_link_list',
				'type'    => 'ace_editor',
				'title'   => esc_html__( 'Custom Social Link', 'childit' ),
				'default' => '',
			),
			array(
				'id'       => $opt_prefix . 'footer_copyright',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Copyright', 'childit' ),
				'subtitle' => esc_html__( 'Copyright Text', 'childit' ),
				'default'  => '',
			),
			array(
				'id'      => $opt_prefix . 'back_to_top',
				'type'    => 'switch',
				'title'   => esc_html__( 'Display back to top button', 'childit' ),
				'default' => false,
				'on'      => esc_html__( 'Enable', 'childit' ),
				'off'     => esc_html__( 'Disable', 'childit' ),
			),
		),
	)
);


Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Quick Links Settings', 'childit' ),
		'id'               => 'quick_link_settings',
		'desc'             => esc_html__( 'Quick Links Settings', 'childit' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'       => $opt_prefix . 'show_quick_link',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Quick Link', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable', 'childit' ),
				'default'  => false,
				'on'       => esc_html__( 'Enable', 'childit' ),
				'off'      => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'location',
				'type'    => 'text',
				'title'   => esc_html__( 'Location', 'childit' ),
				'default' => esc_html__( 'Location', 'childit' ),
			),
			array(
				'id'       => $opt_prefix . 'map_image',
				'type'     => 'media',
				'url'      => true,
				'compiler' => 'true',
				'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'childit' ),
				'title'    => esc_html__( 'Map Image', 'childit' ),
			),

			array(
				'id'      => $opt_prefix . 'book_tour_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Tour', 'childit' ),
				'default' => esc_html__( 'Book a Tour', 'childit' ),
			),
			array(
				'id'    => $opt_prefix . 'book_tour',
				'type'  => 'textarea',
				'title' => esc_html__( 'Book A Tour Shortcode', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'for_parents',
				'type'    => 'text',
				'title'   => esc_html__( 'For Parents', 'childit' ),
				'default' => esc_html__( 'For Parents', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'handbook',
				'type'    => 'text',
				'title'   => esc_html__( 'Handbook', 'childit' ),
				'default' => esc_html__( 'Parent Handbook (246 Kb)', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'handbook_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Handbook URL', 'childit' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . 'checklist',
				'type'    => 'text',
				'title'   => esc_html__( 'Checklist', 'childit' ),
				'default' => esc_html__( 'Child Care Checklist (95 KB)', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'checklist_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Checklist URL', 'childit' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . 'agreement',
				'type'    => 'text',
				'title'   => esc_html__( 'Agreement Form', 'childit' ),
				'default' => esc_html__( 'Agreement Form (94 KB)', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'agreement_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Agreement URL', 'childit' ),
				'default' => esc_url( '#' ),
			),
			array(
				'id'      => $opt_prefix . 'billing_chart',
				'type'    => 'text',
				'title'   => esc_html__( 'Monthly Billing Chart', 'childit' ),
				'default' => esc_html__( 'Monthly Billing Chart (95 KB)', 'childit' ),
			),
			array(
				'id'      => $opt_prefix . 'billing_chart_url',
				'type'    => 'text',
				'title'   => esc_html__( 'Billing Chart URL', 'childit' ),
				'default' => esc_url( '#' ),
			),

			array(
				'id'      => $opt_prefix . 'link_contact',
				'type'    => 'text',
				'title'   => esc_html__( 'Contacts', 'childit' ),
				'default' => esc_html__( 'Contacts', 'childit' ),
			),

			array(
				'id'    => $opt_prefix . 'contact_sidebar',
				'type'  => 'select',
				'data'  => 'sidebars',
				'title' => esc_html__( 'Sidebar', 'childit' ),
				'desc'  => esc_html__( 'Choose the sidebar you wish to appear.', 'childit' ),
			),
		),
	)
);
Redux::setSection(
	$opt_name,
	array(
		'title'  => esc_html__( 'Breadcrumb Customizer', 'childit' ),
		'desc'   => esc_html__( 'Change Breadcrumb style from here', 'childit' ),
		'id'     => 'theme_typography',
		'icon'   => 'el el-home',
		'fields' => array(
			array(
				'id'      => $opt_prefix . 'enable_typography',
				'type'    => 'switch',
				'title'   => esc_html__( 'Enable Typography', 'childit' ),
				'default' => false,
				'on'      => esc_html__( 'Enable', 'childit' ),
				'off'     => esc_html__( 'Disable', 'childit' ),
			),
			array(
				'required'   => array( $opt_prefix . 'enable_typography', '=', array( 1 ) ),
				'id'         => $opt_prefix . 'bread-crumb-header-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'Customize Typography', 'childit' ),
				'subtitle'   => esc_html__( 'Select breadcrumb title font family and weight.', 'childit' ),
				'google'     => true,
				'text-align' => false,
				'output'     => array( '.page-title' ),
			),
			array(
				'id'       => $opt_prefix . 'bread-crumb-background',
				'type'     => 'background',
				'title'    => esc_html__( 'Background', 'childit' ),
				'subtitle' => esc_html__( 'Change Background with image, color, etc.', 'childit' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'childit' ),
				'output'   => array( '.page-title' ),
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'            => esc_html__( 'Typography', 'childit' ),
		'id'               => 'fonts_settings',
		'desc'             => esc_html__( 'Typography', 'childit' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-font',
		'fields'           => array(
			array(
				'id'       => 'enable_typography',
				'type'     => 'switch',
				'title'    => esc_html__( 'Typography', 'childit' ),
				'subtitle' => esc_html__( 'Enable or Disable Typography', 'childit' ),
				'default'  => false,
				'off'      => esc_html__( 'Disable', 'childit' ),
				'on'       => esc_html__( 'Enable', 'childit' ),
			),
			array(
				'required'   => array( 'enable_typography', '=', '1' ),
				'id'         => $opt_prefix . '-body_typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'Body Typography', 'childit' ),
				'subtitle'   => esc_html__( 'Select body font family, size, line height, color and weight.', 'childit' ),
				'text-align' => false,
				'subsets'    => false,
				'output'     => array( 'body' ),

			),
			array(
				'required'   => array( 'enable_typography', '=', '1' ),
				'id'         => $opt_prefix . '-heading-1-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H1 Font', 'childit' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'childit' ),
				'google'     => true,
				'text-align' => false,
				'output'     => array( 'h1' ),
			),
			array(
				'required'   => array( 'enable_typography', '=', '1' ),
				'id'         => $opt_prefix . '-heading-2-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H2 Font', 'childit' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'childit' ),
				'google'     => true,
				'text-align' => false,
				'output'     => array( 'h2' ),

			),
			array(
				'required'   => array( 'enable_typography', '=', '1' ),
				'id'         => $opt_prefix . '-heading-3-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H3 Font', 'childit' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'childit' ),
				'google'     => true,
				'text-align' => false,
				'output'     => array( 'h3' ),
			),
			array(
				'required'   => array( 'enable_typography', '=', '1' ),
				'id'         => $opt_prefix . '-heading-4-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H4 Font', 'childit' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'childit' ),
				'google'     => true,
				'text-align' => false,
				'output'     => array( 'h4' ),
			),
			array(
				'required'   => array( 'enable_typography', '=', '1' ),
				'id'         => $opt_prefix . '-heading-5-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H5 Font', 'childit' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'childit' ),
				'google'     => true,
				'text-align' => false,
				'output'     => array( 'h5' ),
			),
			array(
				'required'   => array( 'enable_typography', '=', '1' ),
				'id'         => $opt_prefix . '-heading-6-typography',
				'type'       => 'typography',
				'title'      => esc_html__( 'H6 Font', 'childit' ),
				'subtitle'   => esc_html__( 'Select heading font family and weight.', 'childit' ),
				'google'     => true,
				'text-align' => false,
				'output'     => array( 'h6' ),
			),

		),
	)
);
