<?php
$section_subtitle  = get_field('feature_pack_subtitle');
$section_title     = get_field('feature_pack_title');
$section_content   = get_field('feature_pack_content');

?>

<section class="grid-icons contact-enquiries bg-grey standard-padding feature-packs-section">
  <div class="container">

    <div class="col-center">
      <h3 class="overline"> <?php echo $section_subtitle ?></h3>
      <h2> <?php echo $section_title ?></h2>
      <p> <?php echo $section_content ?></p>
    </div>


    <?php if( have_rows('feature_pack_row') ): ?>

      <?php while( have_rows('feature_pack_row') ): the_row(); ?>

        <div class="feature-packs">

          <div class="gradient-background-column">
            <div class="gradient-background">
            </div>
            <h3 class="feature-pack-title"><?php the_sub_field('title'); ?></h3>
            <p class="feature-pack-content"><?php the_sub_field('text'); ?></p>
          </div>

          <?php if( have_rows('feature_pack_row_items') ): ?>
            <div class="feature-pack-column">


              <?php while( have_rows('feature_pack_row_items') ): the_row(); ?>
                <div class="feature-pack-item tooltip">

                  <div class="grid-item larger fixed-height-image">
                    <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
                    <h3><?php the_sub_field('title'); ?></h3>
                  </div>

                  <?php if (get_sub_field('tooltip')): ?>
                    <span class="tooltiptext"><?php the_sub_field('tooltip'); ?></span>
                  <?php endif; ?>

                </div>
              <?php endwhile; ?>

            </div>
          <?php endif; ?>

        </div>

      <?php endwhile; ?>

    <?php endif; ?>

  </div>

</section>
