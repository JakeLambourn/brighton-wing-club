<section class="blog-article">

    <?php get_template_part('parts/post/single/social'); ?>

    <div class="container adjusted-offset-2 main-article">



        <div class="row author-credit banner-padding-top">
            <div class="col-9 offset-2">
                <?php get_template_part('parts/post/single/meta'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-9 offset-2">
                <?php
                $introduction = get_field('introduction');
                if (!empty($introduction)):
                ?>
                <h2 class="main-article-caption"><?php echo $introduction; ?></h2>
                <?php endif; ?>
                <?php the_content(); ?>

                <?php
                //Adds the article button to the end of the piece
                if (get_field('article_button')):
                    $button_text = get_field('button_text');
                    if (empty($button_text)) $button_text = 'Learn More';
                ?>
                <a class="btn" href="<?php the_field('button_link'); ?>" <?php if (get_field('button_link_newwindow')) echo 'target="_blank"'; ?>><?php echo $button_text; ?></a>
                <?php
                endif;
                ?>

            </div>
        </div>

    </div>
</section>
