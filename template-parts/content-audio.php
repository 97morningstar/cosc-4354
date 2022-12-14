
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-post">
        <?php
        if (is_sticky()) {
            echo '<div class="sticky_post_icon pull-right" title="' . esc_attr__('Sticky Post', 'childit') . '"><span class="fas fa-map-pin" aria-hidden="true"></span></div>';
        }
        ?>
        <div class="post-image">
            <?php
            $childit_audio_url = get_post_meta(get_the_ID(), 'childit-audio-markup', true);
            if ($childit_audio_url) {
                ?>
                <div class="post-music">
                    <iframe src="<?php echo esc_url($childit_audio_url);?>"></iframe>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="post-teaser">
            <?php echo childit_post_meta(); ?>
            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more"><?php echo esc_html__('read more', 'childit') ?><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"><path d="M0.505883 5.20577L0.491834 5.2027L6.51423 5.2027L4.62101 7.10009C4.5283 7.19272 4.47745 7.31821 4.47745 7.44992C4.47745 7.58162 4.5283 7.70623 4.62101 7.79909L4.91559 8.09382C5.00823 8.18645 5.13166 8.23767 5.2633 8.23767C5.39501 8.23767 5.51852 8.18682 5.61115 8.09418L8.85649 4.84913C8.94949 4.75613 9.00035 4.63226 8.99998 4.50048C9.00035 4.36796 8.94949 4.24401 8.85649 4.15116L5.61115 0.905818C5.51852 0.813257 5.39508 0.76233 5.2633 0.76233C5.13166 0.76233 5.00823 0.813331 4.91559 0.905818L4.62101 1.20055C4.5283 1.29304 4.47745 1.41655 4.47745 1.54826C4.47745 1.67989 4.5283 1.79689 4.62101 1.88945L6.53559 3.79745L0.499152 3.79745C0.227908 3.79745 -1.94412e-05 4.03123 -1.94175e-05 4.30233L-1.93811e-05 4.71918C-1.93574e-05 4.99028 0.23464 5.20577 0.505883 5.20577Z"/></svg></a>
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links pagination">',
                        'after' => '</div>',
                    ));
                    ?>
        </div>
    </div>
</div>