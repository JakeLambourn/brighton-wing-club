<?php
if (is_home()) {
    $squares = get_field('squares', PAGE_ID_BLOG);
} else {
    $squares = get_field('squares');
}

?>
<section class="squares bg-white">
    <?php
    $count = 1;
    $square_type = 'square-light';
    foreach ($squares as $square):

    ?>
    <div class="square <?php
    echo ' square-'.$count . ' ';
    echo $square_type;
    if ($count == 3) echo ' float-right';
    ?>">
        <div class="square-content">
            <?php if (is_array($square['image'])): ?>
            <img src="<?php echo $square['image']['url']; ?>" alt="<?php echo $square['title']; ?>"  data-fallback="<?php if (is_array($square['fallback_image'])) echo $square['fallback_image']['url']; ?>" >
            <?php endif; ?>
            <h2><?php echo $square['title']; ?></h2>
            <p><?php echo $square['content']; ?></p>
        </div>
        <div class="square-overlay"></div>
        <div class="bm-overlay"></div>
    </div>
    <?php
        $square_type =  ($square_type == 'square-light') ? 'square-dark' : 'square-light';
    $count++;
    endforeach; ?>
</section>