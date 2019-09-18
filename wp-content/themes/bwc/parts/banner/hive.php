<?php
$bannervideo = get_field('banner_video');
if (is_array($bannervideo)):
?>
<video playsinline autoplay muted loop  id="bgvid">

    <source src="<?php echo $bannervideo['url']; ?>" type="video/mp4">
</video>
<?php
endif;
?>
<div class="home-fullscreen-background"></div>
<div class="home-fullscreen-background-top hide"></div>

<?php
$banner_title       = get_field('banner_title');
$banner_title_line2 = get_field('banner_title_line2');
$banner_subtitle    = get_field('banner_subtitle');
$banner_button_text = get_field('banner_button_text');
$banner_image       = get_field('banner_image');

?>
<section class="<?php if( is_front_page() ) : echo ' banner-home '; endif; ?> banner banner-hive">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-center">
                <?php if (!empty($banner_title)): ?>
                <h1><?php echo $banner_title; ?></h1>
                <?php endif; ?>
                <?php if (!empty($banner_title_line2)): ?>
                    <h2><?php echo $banner_title_line2; ?></h2>
                <?php endif; ?>
                <?php if (!empty($banner_subtitle)): ?>
                <p><?php echo $banner_subtitle; ?></p>
                <?php endif; ?>
                <?php if (!empty($banner_button_text)): ?>
                <a href="<?php echo get_permalink(PAGE_ID_CONTACT); ?>?requestdemo" class="demo-button btn btn-upper"><?php echo $banner_button_text; ?></a>
                <?php endif; ?>

            </div>
        </div>
        <?php if (is_array($banner_image)): ?>
        <div class="row">
            <div class="col-8 offset-2 col-center">
                <img src="<?php echo $banner_image['sizes']['topbanner']; ?>" alt="<?php echo $banner_title; ?>">
            </div>
        </div>
        <?php endif; ?>
    </div>
	
	<?php 
		$bannervideo = get_field('banner_video');
		if (!is_array($bannervideo)): ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/BlueGreen.jpg" alt="Hive" class="banner-background">
	<?php endif; ?>
</section>
