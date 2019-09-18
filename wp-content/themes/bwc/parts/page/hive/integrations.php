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

                $integrations = get_posts($args);


                foreach ($integrations as $integration):

                    $clientimage    = get_field('clientimage',$integration->ID);
                    $fallbackimage  = get_field('fallback_image',$integration->ID);
                    $url            = get_field('url',$integration->ID);

                    ?>
                    <div class="col-3 col-tb-4 col-sm-6 col-center">
                        <?php if (!empty($url)): ?><a href="<?php echo $url;?>" target="_blank"><?php endif; ?>
                            <img src="<?php echo $clientimage['url']; ?>" data-fallback="<?php if (is_array($fallbackimage)) echo $fallbackimage['url']; ?>" alt="<?php echo $client->post_title; ?>" >
                            <?php if (!empty($url)): ?></a><?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</section>