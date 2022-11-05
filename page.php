<?php
get_header();

$options = childit_options();
$childit_show_quick_link = isset( $options['childit_show_quick_link'] ) ? $options['childit_show_quick_link'] : '';
if ( $childit_show_quick_link ) {
    get_template_part( 'header-style/quicklinks' );
}
?>
<main class="main-container">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'page');
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            // End the loop.
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </div>
</main>
<?php
get_footer();