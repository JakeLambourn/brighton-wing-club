<section class="choose-templates standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 col-center">
                <?php
                bm_title(get_field('choose_your_templates_title'),get_field('choose_your_templates_content'),get_field('choose_your_templates_subtitle'));
                ?>
            </div>
        </div>
    </div>

    <div class="carousel <?php if (get_field('carousel_whitebox')) echo 'carousel-whitebox'; ?>">
        <div class="carousel-container">
            <?php
            $templates = get_field('templates');

            foreach ($templates as $template):
                ?>

                <a href="#" data-featherlight="<?php echo $template['image']['url']; ?>" class="carouselitem">
                    <img src="<?php echo $template['image']['sizes']['templates-carousel']; ?>" alt="<?php echo $template['name']; ?>">
                    <p><strong><?php echo $template['name']; ?></strong><br>
                        <?php
                        echo $template['dimensions']; ?></p>
                </a>
                <?php
            endforeach;
            ?>
        </div>

    </div>

</section>