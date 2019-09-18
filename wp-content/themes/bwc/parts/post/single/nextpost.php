<?php
$next_post = get_previous_post();

if (!empty( $next_post )):

    $banner_image = get_field('banner_image',$next_post->ID);

    $custom_css = '';
    if (is_array($banner_image) && isset($banner_image['sizes']['large'])) {
        $bg_image = $banner_image['sizes']['large'];
        $custom_css =  'section.next-post-banner-background {' . "\n" .
            '   background: rgba(43,184,194,0.8);' . "\n" .
            '   background: -moz-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
            '   background: -webkit-gradient(left bottom, left top, color-stop(0%, rgba(43,184,194,0.8)), color-stop(100%, rgba(93,190,132,0.8))),url('.$bg_image.') center center no-repeat;' . "\n" .
            '   background: -webkit-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
            '   background: -o-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
            '   background: -ms-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
            '   background: linear-gradient(to top, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
            '   -webkit-background-size: cover;' . "\n" .
            '   background-size: cover;' . "\n" .
            '   background-attachment: scroll;' . "\n" .
            '}' . "\n";
    }

    ?>
<section class="article-banner standard-padding article-banner-background next-post-banner-background">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-center">
                <h3 class="overline upper"><?php echo post_category_outside_loop($next_post->ID); ?></h3>
                <h1><?php echo $next_post->post_title; ?></h1>
                <h2><?php echo get_field('subtitle',$next_post->ID); ?></h2>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="btn upper">Read Next Post</a>
            </div>
        </div>
    </div>
</section>
<?php

if ($custom_css):
?>
<style type="text/css">
    <?php echo $custom_css; ?>
</style>
<?php
endif;
endif;
?>