<div id="demo-overlay">
    <div class="overlay-inner">
        <div class="container">
            <a href="#" class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/Close.svg" alt="Close" ></a>
            <div class="vertical-centre">
                <div class="row row-bottom-gutter-all">
                    <div class="col-4 offset-4 col-center">
                        <h2 class="overline"><?php echo get_option('demooverlay_title'); ?></h2>
                        <p><?php echo get_option('demooverlay_text'); ?></p>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="27" title="Get Demo Overlay"]'); ?>


            </div>
        </div>
    </div>
</div>
