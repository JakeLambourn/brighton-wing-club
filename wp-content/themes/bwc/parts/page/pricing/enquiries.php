<?php
$section_subtitle  = get_field('enquiries_subtitle');
$section_title     = get_field('enquiries_title');
$section_content   = get_field('enquiries_content');

$enquiry_items   = get_field('enquiry_items');
?>

<section id="overlay-enquiry-container" class="grid-icons contact-enquiries bg-grey standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-center">
                <?php
                bm_title($section_title, $section_content,$section_subtitle);
                ?>
            </div>
        </div>
        <?php
        if (sizeof($enquiry_items) > 0):
        ?>
        <div class="row standard-padding-top">
            <?php foreach ($enquiry_items as $item):
                ?>
            <div class="col-4 col-tb-4 col-center">
                <div class="grid-item larger fixed-height-image">
                    <img src="<?php echo $item['image']['url']; ?>" data-fallback="<?php if (is_array($item['fallback_image'])) echo $item['fallback_image']['url']; ?>" alt="<?php echo $enquiry_items['title']; ?>" >
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['text']; ?></p>
                    <a class="btn btn-fullwidth btn-top-margin btn-show-enquiry" href="#"><?php echo $item['button_text']; ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
        endif;
        ?>
    </div>

    <?php
    $section_subtitle  = get_field('send_enquiry_overlay_subtitle');
    $section_title     = get_field('send_enquiry_overlay_title');
    $section_content   = get_field('send_enquiry_overlay_content');

    ?>
    <div id="overlay-enquiry" class="white-text">

        <div class="container">
            <a class="close" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Pink-detailedform-close.svg" alt="Close" data-fallback="<?php echo get_template_directory_uri(); ?>/images/Pink-detailedform-close.png">
            </a>
            <div class="vertical-centre">
                <div class="row">
                    <div class="col-8 offset-2 col-center">
                        <?php
                        bm_title($section_title,$section_content,$section_subtitle);
                        ?>
                    </div>
                </div>
                <div class="white-fields">
                    <?php echo do_shortcode('[contact-form-7 id="116" title="Contact page - send enquiry"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
