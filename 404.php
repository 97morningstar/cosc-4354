<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage childit
 * @since 1.0
 */
get_header();
?>
<section class="error-section pages-404  text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-box">
                    <h1><?php echo esc_html__( '404' , 'childit'); ?></h1>
                    <h2><?php echo esc_html__( 'Page Not Found', 'childit' ); ?></h2>
                    <p><?php echo esc_html__( 'The page you were looking for could not be found. ','childit');?>
                        <a href="<?php echo esc_url(home_url('/')); ?>"> <?php echo esc_html__('Go to Home', 'childit'); ?></a>
                    </p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();