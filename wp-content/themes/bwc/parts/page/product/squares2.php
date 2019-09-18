<?php
if (is_home()) {
    $squares = get_field('squares2', PAGE_ID_BLOG);
    $include_title  = get_field('squares_includetitle2', PAGE_ID_BLOG);
} else {
    $squares = get_field('squares2');
    $include_title  = get_field('squares_includetitle2');
}



if ($include_title):

$section_title      = get_field('squares_title2');
$section_subtitle   = get_field('squares_subtitle2');
$section_content    = get_field('squares_content2');
?>
    <section class="text-box standard-padding bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3 col-center">
                    <?php if (!empty($section_subtitle)): ?>
                    <p class="overline">Be on brand. Stay on brand.</p>
                    <?php endif; ?>
                    <h1 class="smaller"><?php echo $section_title; ?></h1>
                    <div class="title-content">
                    <div class="title-content">
                         <?php echo $section_content; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php
endif;
?>
<section class="squares bg-white squares-home">
    <?php
    $count = 1;
    $square_type = 'square-light';
    foreach ($squares as $square):

        $extra_class = '';
        if (is_home() && $count == 1) {
            $extra_class = 'freebie-overlay';
        }

        ?>
        <div class="square <?php
        echo ' square-'.$count . ' ';
        echo $square_type;
        if ($count == 3) echo ' float-right';
        ?>">
            <div class="square-content col-center">
                <?php if (is_array($square['image'])): ?>
                    <img src="<?php echo $square['image']['url']; ?>" alt="<?php echo $square['title']; ?>"  data-fallback="<?php if (is_array($square['fallback_image'])) echo $square['fallback_image']['url']; ?>" >
                <?php endif; ?>
                <?php if (!empty($square['subtitle'])): ?>
                <h3 class="overline upper"><?php echo $square['subtitle']; ?></h3>
                <?php endif; ?>
                <?php if (!empty($square['image_as_text'])): ?>
                <h1><?php echo $square['image_as_text']; ?></h1>
                <?php endif; ?>
                <h2><?php echo $square['title']; ?></h2>
                <p><?php echo $square['content']; ?></p>

                <?php if (!empty($square['button_text'])): ?>
                    <?php if (strstr(strtolower($square['button_text']),'video') !== FALSE): ?>
                <a <?php if ($square['button_popup']) : echo 'data-lity'; else : echo ' target="_blank" '; endif; ?> href="<?php echo $square['button_link']; ?>" class="<?php echo $extra_class; ?> btn btn-upper btn-rounded">
                    <i class="fa fa-caret-right"></i>
                    <?php echo $square['button_text']; ?></a>
                    <?php else: ?>
                <a <?php if ($square['button_popup']) : echo 'data-lity'; else : echo ' target="_blank" '; endif; ?> href="<?php echo $square['button_link']; ?>" class="<?php //echo $extra_class; ?> btn btn-upper"><?php echo $square['button_text']; ?></a>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
            <div class="square-overlay"></div>
            <div class="bm-overlay"></div>
        </div>
        <?php
        if (!is_home()) {
            $square_type = ($square_type == 'square-light') ? 'square-dark' : 'square-light';
        }
        $count++;
    endforeach; ?>
</section>
