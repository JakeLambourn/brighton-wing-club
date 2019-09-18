<?php
$contact_section_title     = get_field('contact_section_title');
$contact_section_content   = get_field('contact_section_content');

$button_title   = get_field('contact_section_button_title');
$button_link    = get_field('contact_section_button_link');

?>
<section class="demo standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 col-center">
                <?php
                bm_title($contact_section_title, $contact_section_content);
                ?>
                <?php if ($button_title != '' && $button_link != ''): ?>
                <a href="<?php echo $button_link; ?>" class="standard-top-margin btn btn-upper"><?php echo $button_title; ?></a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>