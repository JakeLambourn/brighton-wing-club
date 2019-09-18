<section class="alternating-text-photo animate-slide">
    <?php
$otherproducts = get_field('otherproducts');

foreach ($otherproducts as $otherproduct):

    $background_colour = ($otherproduct['background_colour'] == 'grey') ? 'background-grey' : 'background-white';

    if ($otherproduct['image_position'] == 'bottom'):
?>
    <div class="alternating-text-photo-item <?php echo $background_colour; ?> standard-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 col-center">
                    <div class="alternating-text">
                        <?php
                        bm_title($otherproduct['title'], $otherproduct['content'],$otherproduct['subtitle']);
                        ?>
                        <?php if ($otherproduct['button_text'] != ''): ?>
                        <a class="btn btn-upper" href="<?php echo $otherproduct['button_link']; ?>"><?php echo $otherproduct['button_text']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <?php if (is_array($otherproduct['image'])): ?>
                    <img src="<?php echo $otherproduct['image']['sizes']['large']; ?>" alt="<?php echo $otherproduct['title']; ?>">
                    <?php endif; ?>
                    <?php
						$bannervideo = $otherproduct['video_o_product'];
						if (is_array($bannervideo)):
						?>
						<video playsinline autoplay muted loop  id="product_vid">
						    <source src="<?php echo $bannervideo['url']; ?>" type="video/mp4">
						</video>
					<?php
					endif;
					?>
                </div>

            </div>

        </div>
    </div>
    <?php
    else:

        $imageright = ($otherproduct['image_position'] == 'right') ? true : false;

        if ($imageright)
            $slide = 'slide-right';
        else
            $slide = 'slide-left';

		$bannervideo = $otherproduct['video_o_product'];
    ?>
    <div class="alternating-text-photo-item <?php echo $background_colour; if (is_array($bannervideo)): echo ' has_video'; endif; ?>">
        <div class="container">
            <div class="row">

                <div class="col-4 offset-2 col-tb-6<?php if (!$imageright) echo ' col-float-right'; ?>">
                    <div class="alternating-text standard-padding-top">
                        <?php
                        bm_title($otherproduct['title'], $otherproduct['content'],$otherproduct['subtitle']);
                        ?>
                        <?php if ($otherproduct['button_text'] != ''): ?>
                            <a class="btn btn-upper" href="<?php echo $otherproduct['button_link']; ?>"><?php echo $otherproduct['button_text']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                	<?php
						if (is_array($bannervideo)):
							echo '<div class="col-6 col-tb-6 ">';
						else :
							echo '<div class="col-5 col-tb-6">';
						endif;
					?>
                    <?php if (is_array($otherproduct['image'])): ?>
                        <img src="<?php echo $otherproduct['image']['sizes']['image-5cols']; ?>" alt="<?php echo $otherproduct['title']; ?>" class="<?php echo $slide; ?>">
                    <?php endif; ?>
                    <?php
						if (is_array($bannervideo)):
						?>
						<video playsinline autoplay muted loop  id="product_vid">
						    <source src="<?php echo $bannervideo['url']; ?>" type="video/mp4">
						</video>
					<?php
					endif;
					?>
                </div>
            </div>
        </div>
    </div>

    <?php
    endif;
    ?>
<?php endforeach; ?>
</section>
