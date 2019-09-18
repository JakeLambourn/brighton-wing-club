<?php
$section_subtitle  = get_field('gridicon_subtitle');
$section_title     = get_field('gridicon_title');
$section_content   = get_field('gridicon_content');

$gridicons   = get_field('gridicons');
?>
<section class="grid-icons bg-white standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 col-center">
                <?php
                bm_title($section_title, $section_content,$section_subtitle);
                ?>

            </div>
        </div>
        <div class="row standard-padding-top">
            <?php
            $count = 0;
            foreach ($gridicons as $gridicon):
            $count++;
            if ($count > 3):
            ?>
        </div>
        <div class="row standard-padding-top">
            <?php
            $count = 0;
            endif;
            ?>
            <div class="col-4 col-tb-4 col-center">
                <div class="grid-item fixed-height-image">
                    <?php if (is_array($gridicon['icon'])): ?>
                        <img src="<?php echo $gridicon['icon']['url']; ?>" alt="<?php echo $gridicon['line1']; ?>" data-fallback="<?php if (is_array($gridicon['icon_fallback'])) echo $gridicon['icon_fallback']['url']; ?>" >
                    <?php endif; ?>
                    <h3><?php echo $gridicon['line1']; ?></h3>
                    <p><?php echo $gridicon['line2']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>