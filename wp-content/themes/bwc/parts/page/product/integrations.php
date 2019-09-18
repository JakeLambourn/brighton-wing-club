<?php
$section_title     = get_field('integration_title');
$section_content   = get_field('integration_text');
?>
<section class="integrations standard-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <?php
                bm_title($section_title, $section_content);
                ?>
            </div>
        </div>
        <div class="integration-logos">

            <div class="row">
                <?php
                $args = array('posts_per_page' => -1,
                    'post_type'      => 'integrations');

                $integrations = get_field('integrations');



                foreach ($integrations as $integration):

     

                    ?>
                    <div class="col-3 col-tb-4 col-sm-6 col-center">
                        <?php if (!empty($integration['url'])): ?><a href="<?php echo $integration['url'];?>" target="_blank"><?php endif; ?>
                            <img src="<?php echo $integration['image']['url']; ?>" data-fallback="<?php if (is_array($integration['fallback_image'])) echo $fallbackimage['url']; ?>" alt="<?php echo $integration['name']; ?>" >
                            <?php if (!empty($integration['url'])): ?></a><?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</section>