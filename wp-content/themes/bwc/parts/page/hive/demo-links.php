<?php
$demo_links = get_field('demo_links');

?>
<section class="alternating-text-photo animate-fade bg-white standard-padding">
    <?php
    $right = true;
    $count = 0;
    foreach ($demo_links as $link): ?>

    <?php if ($link['full_size_image'] == 1): ?>
    <div class="alternating-text-with-background standard-padding-top">
        <div class="alternating-text">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <?php
                        bm_title($link['title'],$link['content'],$link['subtitle']);

                        if (!empty($link['button_text'])):
                            ?>
                            <a class="btn btn-upper mobile-hide" href="<?php echo $link['button_link']; ?>"><?php echo $link['button_text']; ?></a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="mobile-hide">
            <div class="photo-bg-container">
                <div class="photo-bg-inner">
                    <img src="<?php echo $link['image']['sizes']['large']; ?>" alt="<?php echo $link['title']; ?>" class="fade-right photo-background">
                </div>
            </div>
        </div>
        <div class="mobile-only col-center">
            <?php if (is_array($link['image_mobile'])): ?>
            <img src="<?php echo $link['image_mobile']['sizes']['large']; ?>" alt="<?php echo $link['title']; ?>" class="photo-background">
            <?php else: ?>
                <img src="<?php echo $link['image']['sizes']['large']; ?>" alt="<?php echo $link['title']; ?>" class="photo-background">
            <?php endif; ?>
            <?php if (!empty($link['button_text'])): ?>
                <a class="btn btn-upper" href="<?php echo $link['button_link']; ?>"><?php echo $link['button_text']; ?></a>
            <?php endif; ?>
        </div>
    </div>
    <?php
    else:
    ?>
    <div class="container<?php if ($count > 0) echo ' standard-padding-top'; ?>">
        <div class="row">

            <div class="col-4 offset-2<?php if ($right) echo ' col-float-right'; ?>">
                <?php
                bm_title($link['title'],$link['content'],$link['subtitle']);

                if (!empty($link['button_text'])):
                ?>
                <a class="btn btn-upper mobile-hide" href="<?php echo $link['button_link']; ?>"><?php echo $link['button_text']; ?></a>
                <?php endif; ?>
            </div>
            <div class="col-5">
                <?php if (is_array($link['image'])): ?>
                <img src="<?php echo $link['image']['sizes']['image-5cols']; ?>" alt="<?php echo $link['title']; ?>" class="<?php if ($right) echo 'fade-left'; else echo 'fade-right'; ?>">
                <?php endif; ?>
                <div class="mobile-only col-center">
                    <?php if (!empty($link['button_text'])): ?>
                        <a class="btn btn-upper" href="<?php echo $link['button_link']; ?>"><?php echo $link['button_text']; ?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <?php
    endif;
        $right = ($right) ? false : true;
        $count++;
    endforeach; ?>

</section>