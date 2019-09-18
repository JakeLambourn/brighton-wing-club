<?php
$toptitle = get_field('toptitle');
$title = get_field('title');
$subtitle = get_field('subtitle');
$buttontext = get_field('button_text');
?>

<section class="text-banner pricing-banner">
  <div class="container fixed-height">
    <div class="vertical-centre">

      <div class="row">
        <?php if ($title != ''): ?>
          <div class="col-4 offset-4 col-center">
            <h3 class="overline"><?php echo $toptitle; ?></h3>
          </div>
        <?php endif; ?>

        <?php if ($title != ''): ?>
          <div class="col-12 col-center">
            <h1><?php echo $title; ?></h1>
          </div>
        <?php endif; ?>

        <?php if ($subtitle != ''): ?>
          <div class="col-4 offset-4 col-center">
            <p><?php echo $subtitle; ?></p>
          </div>
        <?php endif; ?>

        <?php if ($buttontext != ''): ?>
          <div class="col-4 offset-4 col-center">
            <a class="btn btn-top-margin btn-show-enquiry" href="#"><?php echo $buttontext; ?></a>
          </div>
        <?php endif; ?>

      </div>

    </div>
  </div>
</section>
