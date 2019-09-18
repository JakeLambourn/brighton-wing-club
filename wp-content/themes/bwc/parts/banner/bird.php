<?php
$banner_title       = get_field('banner_title');
$banner_title_line2 = get_field('banner_title_line2');
$banner_subtitle    = get_field('banner_subtitle');
$banner_button_text = get_field('banner_button_text');
$banner_image       = get_field('banner_image');
$banner_content     = get_field('banner_text')

?>
<section class="banner text-banner-bird standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-6 col-tb-6 col-sm-8">
                <h1 class="overline"><?php echo $banner_title; ?>
                    <span><?php echo $banner_title_line2; ?></span></h1>
                <?php if (!empty($banner_subtitle)): ?>
                <h2><?php echo $banner_subtitle; ?></h2>
                <?php endif; ?>
                <?php echo $banner_content; ?>
                <?php if (!empty($banner_button_text)): ?>
                    <a href="<?php echo get_permalink(PAGE_ID_CONTACT); ?>?requestdemo" class="btn btn-upper"><?php echo $banner_button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php if (is_array($banner_image)): ?>
            <img  src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_title; ?>" class="bird-top-image">
        <?php endif; ?>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/images/BlueGreen.jpg" alt="Bird" class="banner-background">
</section>
