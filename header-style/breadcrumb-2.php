<?php
$options                        = childit_options();
$childit_background_image       = isset( $options['childit_background_image']['url'] ) ? $options['childit_background_image']['url'] : 0;
$childit_background_image_class = '';
if ( ! $childit_background_image ) {
	$childit_background_image_class = 'no_bd_bg';
}

$childit_cloud_image    = isset( $options['childit_cloud_image'] ) ? $options['childit_cloud_image'] : 0;
$childit_page_breadcumb = get_post_meta( get_the_id(), 'childit_show_breadcrumb', true );
if ( ! is_front_page() ) {
	if ( $childit_page_breadcumb != 'off' ) {
		?>
		<section class="page-name <?php echo esc_attr( $childit_background_image_class ); ?> mb-xs-30 mb-md-30 mb-lg-60">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-center">
							<?php
							if ( is_404() ) {
								echo esc_html__( 'Error Page', 'childit' );
							} elseif ( is_search() ) {
								if ( have_posts() ) {
									printf( __( 'Search Results for: %s', 'childit' ), '<span>' . get_search_query() . '</span>' );
								} else {
									echo esc_html__( 'Nothing Found', 'childit' );
								}
							} elseif ( is_home() ) {
								echo esc_html( get_the_title( get_option( 'page_for_posts', true ) ) );
							} else {
								the_title();
							}
							?>
						</h1>
					</div>
				</div>
			</div>
				<?php
				if ( is_page() ) {
					$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
				} else {
					$featured_img_url = $childit_background_image;
				}
				?>
				<div class="layer-background lazy" data-src="<?php echo esc_url( $featured_img_url ); ?>"></div>
			  <?php if ( isset( $childit_cloud_image['url'] ) && ! empty( $childit_cloud_image['url'] ) ) { ?>
				<img src="<?php echo esc_url( CHILDIT_IMG_URL . 'lazy.png' ); ?>" class="page-name-img lazy" data-src="<?php echo esc_url( $childit_cloud_image['url'] ); ?>" alt="<?php esc_attr_e( 'Img', 'childit' ); ?>">
			<?php } ?>
		</section>
		<!-- End page name -->
		<?php
	}
}
