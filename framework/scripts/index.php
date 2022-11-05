<?php
class ChildItNew_Scripts {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'childit_enqueue_scripts' ) );
	}

	public function childit_enqueue_scripts() {
		$childit_options = childit_options();

		/*
		 ===============================================================
		 * JS Files
		 * ---------------------------------------------------------------
		* */
		 wp_enqueue_script( 'childit-vendor-bundle', CHILDIT_VENDOR_URL . 'vendor-bundle.js', array( 'jquery' ), time(), true );
		 wp_enqueue_script( 'childit-common', CHILDIT_CUSTOM_JS_URL . 'common.js', array( 'jquery' ), time(), true );

		$childit_object_value = array(
			'ajax_url'              => esc_url( admin_url( 'admin-ajax.php' ) ),
			'loader_img'            => esc_url( CHILDIT_IMG_URL . 'ajax-loader.gif' ),
			'CHILDIT_IMG_URL'       => esc_url( CHILDIT_IMG_URL ),
			'childit_sticky_header' => isset( $childit_options['childit_sticky_header'] ) ? $childit_options['childit_sticky_header'] : 1,
		);
		wp_localize_script( 'childit-common', 'childit_js_object', $childit_object_value );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		if ( ! is_admin() ) {
			$childit_options = childit_options();
			if ( isset( $childit_options['childit_gmap_api_key'] ) && ! empty( $childit_options['childit_gmap_api_key'] ) ) {
				wp_enqueue_script( 'chilit-google-map', '//maps.googleapis.com/maps/api/js?key=' . $childit_options['childit_gmap_api_key'] . '&callback=initMap', array(), null, true );
			}
		}
	}

}

$childItNew_Scripts = new ChildItNew_Scripts();
