<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package childit
 */
get_header();
?>
<main class="main-container">
    <!-- Begin blog-posts -->
    <div class="blog-posts-preview pb-xs-10 pb-md-50 pb-lg-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 pt-xs-30 pt-md-60">
                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/content', get_post_format());
                        endwhile;
                        the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_next'=>false
                          ));
                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                </div>
                <?php
                if (is_active_sidebar('blog_sidebar')) {
                    get_sidebar();
                }
                ?>
            </div>
        </div>
    </div>
    <!-- End blog-posts -->
</main>
<?php
get_footer();
