<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page = ($current_page == 'bird.php') ? 'Bird' : 'Hive';

$section_title     = get_field('demo_section_title');
$section_content   = get_field('demo_section_text');
?>
<section class="demo standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 col-center">
                <?php
                bm_title($section_title, $section_content);
                ?>
            </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="27" title="Get Demo Overlay"]'); ?>

    </div>
</section>