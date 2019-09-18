<?php
get_header();

query_posts('p='.PAGE_ID_404.'&post_type=page');

if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('parts/banner/general'); ?>
    <?php get_template_part('parts/page/general/text'); ?>

<?php
endwhile;
endif;
get_footer();
?>