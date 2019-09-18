<?php
get_header();

if (!is_archive() && !is_category()) {
    get_template_part('parts/page/product/squares');
}

get_template_part('parts/post/landing/top');
get_template_part('parts/post/landing/menu'); ?>

    <section>
        <div class="container adjusted-offset-2 nooverline">
            <div class="row banner-padding-top">
<?php
$count          = 0;
$count_6        = 0;
$feature_count  = 0;

$features = get_field('features',PAGE_ID_BLOG);
$feature_array = array();

foreach ($features as $feature) {
    $feature_array[] = array( 'type'          => $feature['type'],
                            'title'         => $feature['title'],
                            'subtitle'      => $feature['subtitle'],
                            'text'          => $feature['text'],
                            'image'         => $feature['image']['url'],
                            'video_url'     => $feature['video_url'],
                            'link'          => $feature['link']);
}

if ( have_posts() ) :
    while ( have_posts() ) : the_post();


        if ($count_6 == 0 && is_home()) {
            $feature = $feature_array[$feature_count];

            include(locate_template('parts/post/landing/video.php'));
            $feature_count++;
        }
        include(locate_template('parts/post/landing/loop.php'));
        $count++;
        $count_6++;

        if ($count_6 > 5) $count_6 = 0;
        if ($count > 2) $count= 0;

    endwhile;
endif;

/*
        if (is_home()) {
            $feature = $feature_array[$feature_count];
            include(locate_template('parts/post/landing/video.php'));
        }
*/
        ?>
            </div>
        </div>
    </section>
<?php
get_footer();
?>