<section class="article-banner standard-padding article-banner-background banner-background">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-center">
                <h3 class="overline upper"><?php echo post_category_list(false); ?></h3>
                <h1><?php the_title(); ?></h1>
                <?php
                $subtitle = get_field('subtitle');
                if (!empty($subtitle)):
                ?>
                <h2><?php echo $subtitle; ?></h2>
                <?php endif; ?>

                <?php
                $twitter  = get_option('social_twitter_link');
                $facebook = get_option('social_facebook_link');

                if (!empty($twitter) && !empty($facebook)):
                ?>
                <p class="tagline">Like us on</p>
                <span class="large-icons">
                        <?php if (!(empty($facebook))): ?>
                        <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <?php if (!(empty($twitter))): ?>
                        <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                    </span>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>