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
<section class="<?php if( is_front_page() ) : echo ' banner-home '; else : echo ' banner '; endif; ?> white-text standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-5 col-sm-8">
                <?php
		            if(the_field('banner_subtitle')) {
			            echo '<p class="overline upper">'. the_field('banner_subtitle') .'</p>';
		            }
		        ?>
                <h1><?php the_field('banner_title'); ?>.</h1>
                <h2 ><?php the_field('banner_text_line1'); ?></h2>
                <p class="mobile-hide"><?php the_field('banner_text_line2'); ?></p>
            </div>
        </div>
    </div>
    <?php


    $banner = get_field('banner_image');
    if (is_array($banner)):
    ?>
    <img src="<?php echo $banner['sizes']['topbanner']; ?>" alt="Brand Meadow" id="home-topbanner-image">
    <?php
    endif;
    ?>
</section>
