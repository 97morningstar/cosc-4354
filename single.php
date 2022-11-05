<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package childit
 */
get_header();
?>

<main class="main-container">
    <section class="pb-xs-15 pb-md-70 pb-lg-120">
        <div class="container">
            <div class="row">
                <?php
                if (is_active_sidebar('blog_sidebar')) {
                    echo '<div class="col-xl-9 col-lg-8 pt-xs-30 pt-md-60">';
                } else {
                    echo '<div class="col-xl-12 col-lg-12 pt-xs-30 pt-md-60">';
                }
                ?>
                <div class="blog-post single-post mb-xs-30 mb-md-60 mb-lg-90">
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/single/content', get_post_format());
                        ?>
                    </div>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                endwhile; // End of the loop.
                ?>
            </div>
            <?php
            if (is_active_sidebar('blog_sidebar')) {
                get_sidebar();
            }
            ?>
        </div>
        </div>
    </section>
</main>
<?php
get_footer();