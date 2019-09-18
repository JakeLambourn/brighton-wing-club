<?php
$clients_title     = get_field('clients_section_title');
$clients_content   = get_field('clients_section_content');

$section_title     = get_field('faq_title');
$section_content   = get_field('faq_content');

$show_client_section = get_field('client_section_show');

if ($show_client_section):
?>
<section class="integrations standard-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <?php
                bm_title($clients_title, $clients_content);
                ?>
            </div>
        </div>
        <div class="integration-logos standard-top-margin">
            <div class="row">
                <?php
                $args = array('posts_per_page' => -1,
                    'post_type'      => 'clients');

                $clients = get_posts($args);


                foreach ($clients as $client):

                    $clientimage    = get_field('clientimage',$client->ID);
                    $fallbackimage  = get_field('fallback_image',$client->ID);
                    $url            = get_field('url',$client->ID);

                ?>
                <div class="col-3 col-sm-6">
                    <?php if (!empty($url)): ?><a href="<?php echo $url;?>" target="_blank"><?php endif; ?>
                    <img src="<?php echo $clientimage['url']; ?>" data-fallback="<?php if (is_array($fallbackimage)) echo $fallbackimage['url']; ?>" alt="<?php echo $client->post_title; ?>" >
                    <?php if (!empty($url)): ?></a><?php endif; ?>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<?php
endif;