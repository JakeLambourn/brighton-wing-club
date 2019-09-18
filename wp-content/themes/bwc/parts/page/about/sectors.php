<?php
$sector_subtitle  = get_field('sectors_subtitle');
$sector_title     = get_field('sectors_title');
$sector_content   = get_field('sectors_content');

$items           = get_field('sector_items');

?>

<section class="grid-icons bg-sectors standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 col-center">
                <?php
                bm_title($sector_title, $sector_content,$sector_subtitle);
                ?>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($items as $item):
            ?>
                <div class="col-sm-6 col-4 col-center standard-padding-top">
                    <div class="grid-item icon-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/BlueTick.svg" alt="Corporations" data-fallback="<?php echo get_template_directory_uri(); ?>/images/BlueTick.png">
                        <h3><?php echo $item['title']; ?></h3>
                        <p><?php echo $item['text']; ?></p>
                    </div>
                </div>
        <?php
        $count_items++;
        endforeach; ?>


        </div>
    </div>
    <div class="bm-overlay"></div>
</section>