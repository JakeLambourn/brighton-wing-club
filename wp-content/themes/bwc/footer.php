<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo get_field('footer_slogan') ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns no-padding-left">
                <img style="width:128px;float:left; margin-bottom: 10px;" src="<?php echo get_template_directory_uri(); ?>/images/Brand-Meadow-Logo-white.svg" alt="" />
                <span style="clear:both; float: left;">A <a href="http://www.brandmeadow.com"><u>Brand Meadow</u></a> project</span>
            </div>
            <div class="large-4 columns">
                <div class="row">
                    <a href="https://www.facebook.com/brightonwingclub" class="large-12 columns icon"><i class="fa fa-heart"></i>Follow us on Facebook</a> 
                    <a href="https://www.instagram.com/brightonwingclub/" class="large-12 columns icon"><i class="fa fa-instagram "></i>Follow us on Instagram</a> 
                    <a href="mailto:info@goldstarit.com" class="large-12 columns icon"><i class="fa fa-envelope"></i>Contact us</a> 
                </div>
            </div>
            <div class="large-4 columns">
                <div class="row">
                    <div class="large-12 columns icon" style="line-height: 17px;">
                        <ul>
                            <?php
                            //Strip_tags to strip the <ul> from the menu (cleaner solution than a custom walker)
                            $menu = wp_nav_menu( array( 'theme_location' => 'Footer','echo' => false ) );
                            $menu = strip_tags($menu,'<a><li><span>');
                            echo $menu;
                            ?>
                        </ul>
                        <copyright style="display:block; margin-top:15px;color:#677a88; font-size:13px;">&copy Copyright <?php echo date('Y') . ' <span style="white-space:nowrap">' . get_home_url(); ?><span></copyright>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</footer>

<?php echo wp_footer(); ?>
<?php //get_template_part('parts/global/inline-js'); ?>
</body>
</html>
