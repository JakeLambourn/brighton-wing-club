<?php
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post();

get_template_part('parts/post/single/header');
get_template_part('parts/post/single/content');
get_template_part('parts/post/single/related');
get_template_part('parts/post/single/nextpost');



endwhile;
endif;
get_footer();
