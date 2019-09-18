<!-- Related/Article Grid -->
<!-- Article Grid -->
<?php
$related = get_field('related_posts');

if (sizeof($related) > 0):
?>
<section>
    <div class="container adjusted-offset-2 nooverline">

        <div class="row banner-padding-top">
            <div class="col-10 offset-1 col-center">
                <h2>Related Articles</h2>
            </div>
        </div>

        <div class="row banner-padding-top">

            <?php
            $count = 0;
            foreach ($related as $post):
                setup_postdata($post);

                $thumbnail = get_the_post_thumbnail_url(null,'blog-thumbnail');
            ?>
                <div class="col-3 <?php if ($count == 0) echo 'offset-2'; ?> grid-overline">
                    <?php if ($thumbnail): ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail; ?>" alt=" <?php the_title(); ?>" class="fit"></a>
                    <?php endif; ?>
                    <div class="article-caption col-center">
                        <p class="overline">
                            <strong class="upper"><?php echo post_category_list(); ?></strong>
                            <?php the_title(); ?><br>
                            <?php the_field('subtitle'); ?>
                        </p>
                    </div>
                </div>
            <?php
                $count++;
                if ($count >= 3) $count= 0;
            endforeach;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</section>
<?php
endif;
?>
<!-- // Article Grid -->