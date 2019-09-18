<?php
$support_items = get_field('support_items');
if (sizeof($support_items) > 0):
?>
<section class="grid-icons bg-supportus white-text standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 col-center">
                <?php
                bm_title(get_field('support_title'),get_field('support_content'),get_field('support_subtitle'));
                ?>

            </div>
        </div>
        <div class="row standard-padding-top">
            <?php
            foreach ($support_items as $item):
            ?>
            <div class="col-sm-6 col-tb-3 col-3 col-center">
                <div class="grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/WhiteSupportTick.svg" alt="<?php echo $item['line_1']; ?>" data-fallback="<?php echo get_template_directory_uri(); ?>/images/WhiteSupportTick.png">
                    <h3><?php echo $item['line_1']; ?></h3>
                    <p><?php echo $item['line_2']; ?></p>
                </div>
            </div>
           <?php endforeach; ?>

        </div>

    </div>
    <div class="bm-overlay"></div>
</section>
<?php
endif;
?>