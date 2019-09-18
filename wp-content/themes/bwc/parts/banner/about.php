<?php
$banner_title       = get_field('banner_title');
$banner_title_line2 = get_field('banner_title_line2');
$banner_subtitle    = get_field('banner_subtitle');
?>
<section class="text-banner-large-text banner-about banner-background banner standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-10">
                <h1 class="overline"><?php
                    echo $banner_title;
                    if ($banner_title_line2 != '') echo '<span>'.$banner_title_line2.'</span>';
                ?></h1>
                <?php
                if ($banner_subtitle != ''): ?>
                <p><?php echo $banner_subtitle; ?></p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
