<?php
class ChildIt_Style {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'childit_enqueue_style' ), 20 );
	}

	public function childit_enqueue_style() {
		// Register Style
		wp_enqueue_style( 'use-fontawesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css' );
		wp_enqueue_style( 'childit-style', get_stylesheet_uri() );
		$options              = childit_options();
		$childit_header_style = isset( $options['childit_header_style'] ) ? $options['childit_header_style'] : 1;
		if ( $childit_header_style ) {
			wp_enqueue_style( 'childit-themeing', CHILDIT_CSS_URL . 'childit-themeing.css', false, '1' );
		}
		if ( function_exists( 'childit_main_color' ) ) {
			$childit_main_color = childit_main_color();
			wp_add_inline_style( 'childit-style', $childit_main_color );
		}
		require_once CHILDIT_FREAMWORK_DIRECTORY . 'styles/color-style.php';
		if ( function_exists( 'childit_main_color' ) ) {
			$childit_main_color = childit_main_color();
			wp_add_inline_style( 'childit-style', $childit_main_color );
		}
	}

}

$childIt_Style = new ChildIt_Style();
