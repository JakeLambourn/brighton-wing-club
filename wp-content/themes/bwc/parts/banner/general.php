<section class="text-banner">
    <div class="container fixed-height">
        <div class="vertical-centre">
            <div class="row">
                <div class="col-12 col-center">
                    <h1 class="overline"><?php the_title(); ?></h1>
                </div>
            </div>
            <?php
            $subtitle = get_field('subtitle');
            if ($subtitle != ''):
            ?>
            <div class="row">
                <div class="col-4 offset-4 col-center">
                    <p><?php echo $subtitle; ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
