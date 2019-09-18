<?php

$price_top_text     = get_field('price_top_text');
$price_currency     = get_field('price_currency');
$price_main     = get_field('price_main');
$price_content_left     = get_field('price_content_left');
$price_content_right     = get_field('price_content_right');

$section_title     = get_field('included_features_title');

?>

<section class="grid-icons contact-enquiries bg-grey features-section">
  <div class="container bg-white features-container">
    <div class="row">
      <div class="col-6 offset-3 price-from">



        <?php if ($price_top_text  != ''): ?>
          <span class="price-top-text"><?php echo $price_top_text ; ?></span>
        <?php endif; ?>

        <?php if ($price_main  != ''): ?>
          <div class="price-container">
            <?php if ($price_currency  != ''): ?>
              <span class="price-currency"><?php echo $price_currency ; ?></span>
            <?php endif; ?>

            <span class="price-main"><?php echo $price_main ; ?></span>
          </div>
        <?php endif; ?>

        <?php if ($price_content_left != ''): ?>
          <div class="price-content-left"><?php echo $price_content_left ; ?></div>
        <?php endif; ?>

        <?php if ($price_content_right  != ''): ?>
          <div class="price-content-right"><?php echo $price_content_right ; ?></div>
        <?php endif; ?>

      </div>

    </div>

    <?php if( have_rows('included_features_items') ): ?>

      <div class="row included-features">

        <div class="col-12 col-center">
          <h3 class="overline included-features-title"> <?php echo $section_title ?></h3>
        </div>

        <?php while( have_rows('included_features_items') ): the_row(); ?>

          <div class="included-features-item tooltip">

            <div class="grid-item larger fixed-height-image">
              <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" >
              <h3><?php the_sub_field('title'); ?></h3>
            </div>

            <span class="tooltiptext"><?php the_sub_field('tooltip'); ?></span>

          </div>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>

  </div>

</section>
