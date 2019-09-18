<?php
$smallsquares_subtitle = get_field('smallsquares_subtitle');
$smallsquares_title    = get_field('smallsquares_title');
$smallsquares_text     = get_field('smallsquares_text');
?>
<section class="choose-templates standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-5 col-float-right offset-1">
                <p class="overline"><?php echo $smallsquares_subtitle; ?></p>
                <h2><?php echo $smallsquares_title?></h2>
                <?php
                $count = 1;
                foreach ($smallsquares_text as $text): ?>
                <div class="style-item smallsquare-<?php echo $count; ?>">
                    <p><strong><?php echo $text['title']; ?></strong><br>
                        <?php echo $text['text']; ?></p>
                </div>
                <?php
                    $count++;
                endforeach; ?>

            </div>
            <div class="col-5 offset-1">
                <div class="bird-squares">
                    <?php
                    $squares = get_field('smallsquares_squares');
                    foreach ($squares as $square):
                    ?>
                    <div class="bird-square"><img src="<?php echo $square['image']['url']; ?>" alt="" ></div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>

        </div>
    </div>

</section>
