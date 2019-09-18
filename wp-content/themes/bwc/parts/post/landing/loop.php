<div class="col-3 <?php if ($count == 0) echo 'offset-2'; ?> grid-overline">
    <a href="<?php the_permalink(); ?>">
    <?php
    $thumbnail = get_the_post_thumbnail_url(null,'blog-thumbnail');
    if ($thumbnail):

        ?>
        <img src="<?php echo $thumbnail; ?>" alt=" <?php the_title(); ?>" class="fit">
    <?php endif; ?>
    <div class="article-caption col-center">
        <p class="overline">
            <strong class="upper"><?php echo post_category_list(); ?></strong>
            <?php the_title(); ?><br>
            <?php the_field('subtitle'); ?>
        </p>
    </div>
    </a>
</div>