<!doctype html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid main-header">
        <div class="expanded row top-row">
            
            <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/bwc_logo.svg" alt="<?php echo get_option('logo_alt_tag'); ?>" ></a>

            <div class="large-9 columns pull-right nav_social_content">
                <a href="#" id="mob-menu" style="display: none;">MENU <i class="fa fa-bars" aria-hidden="true"></i></a>
                <ul class="social-media pull-right">
                    <li><a target="_blank" href="https://www.instagram.com/brightonwingclub/" title="View us on Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/brightonwingclub" title="Find us on Facebook"><i class="fa fa-facebook"></i></a></li>
                </ul>
                <div class="nav-inner pull-right">
                    <?php
                        //Strip_tags to strip the <ul> from the menu (cleaner solution than a custom walker)
                        $menu = wp_nav_menu( array( 'theme_location' => 'Top Menu','echo' => false ) );
                        //$menu = strip_tags($menu,'<a><li><span>');
                        echo $menu;
                    ?>
                </div>
            </div>
        </div>
        
    </div>

    <?php if( is_front_page() ) : ?>
        <header >
            <img id="fpBanner" src="<?php echo get_template_directory_uri(); ?>/images/bwc_logo.svg" alt="Where can i find the best wings in Brighton?" >
        </header>
    <?php elseif( is_singular('venue') ) : ?>
        <header >
            <div id="map" style="position: absolute; width: 100%; height: 500px;"></div>
            <div  style="position: absolute; bottom: 0; width: 100%; margin-bottom: 20px">
                <div class="container">
                    <div class="row columns large-12">
                        <?php echo '<h1>'.get_the_title($post->ID).'</h1>' ?>
                        <div class="bwc_rating">
                            <span class="pull-left">Brighton Wing Club rating:&nbsp;&nbsp;</span> 
                            <div class="star-ratings-sprite pull-left"><span style="width:52%" class="star-ratings-sprite-rating"></span></div>
                        </div>
                    </div> 
                </div>  
            </div>
        </header>
    <?php endif; ?>
<div class="pad-navigation"></div>