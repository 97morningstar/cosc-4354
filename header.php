<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<?php
		do_action( 'childit_preloader' );
		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
			get_template_part( 'header-style/header', '1' );
			if ( is_archive() ) {
				get_template_part( 'header-style/breadcrumb' );
			} elseif ( is_single() ) {
				get_template_part( 'header-style/breadcrumb-1' );
			} else {
				get_template_part( 'header-style/breadcrumb-2' );
			}
		}
