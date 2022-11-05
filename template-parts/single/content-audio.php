<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-image">
        <?php
        $childit_audio_url = get_post_meta(get_the_ID(), 'childit-audio-markup', true);
        if ($childit_audio_url) {
            ?>
            <div class="post-music">
                <iframe src="<?php echo esc_url($childit_audio_url); ?>"></iframe>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="post-description">
        <?php echo childit_post_meta(); ?>
        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-pagination post-nav-links pagination"><div class="page-numbers">',
            'after' => '</div></div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'childit') . ' </span>%',
            'separator' => ' ',
        ));

        if (has_tag()) {
            childit_post_tags();
        }
        get_template_part('template-parts/single/post-author', 'box');
        get_template_part('template-parts/single/post-pagination', 'box');
        ?>
    </div>
</div>