<section id="home-carousel" class="home-carousel home-carousel-gradient-change large-padding">
        <div class="container">

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="home-slideshow white-text standard-padding">
                        <div class="cycle-slideshow"
                             data-cycle-slides="> div.cycle-item"
                             data-cycle-timeout="8000"
                             data-cycle-swipe=true
                             data-cycle-swipe-fx=fade
                        >

                            <?php
                            $top_carousel = get_field('top_carousel');

                            foreach ($top_carousel as $item): ?>
                            <div class="cycle-item col-center">
                                <?php if (!empty($item['subtitle'])): ?>
                                <p class="overline"><?php echo $item['subtitle']; ?></p>
                                <?php endif; ?>
                                <h2><?php echo $item['title']; ?></h2>
                                <?php echo $item['text']; ?>
                            </div>
                            <?php endforeach; ?>
							<?php
								if( count($top_carousel) > 1 ) : 
							?>
                            	<a href="#" class="cycle-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/left-arrow.png" alt="Previous"></a>
								<a href="#" class="cycle-next"><img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png" alt="Next"></a>
								<div class="cycle-pager"></div>
							<?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="gradient-background"></div>
</section>