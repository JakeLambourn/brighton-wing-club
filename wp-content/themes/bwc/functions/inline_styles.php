<?php
/**
 * Print custom inline styles in the header
 * Neater than dotting it around within the HTML.
 */
function custom_styles() {

    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css',array(),'1.0.55');

    $post_id    = get_the_ID();
    $updated    = false;
    $custom_css = '';

    //Background images for top banners
    //Currently just used for about but easy enough to roll out elsewhere
    $banner_image = get_field('banner_image',$post_id);

    if (is_array($banner_image) && isset($banner_image['sizes']['large'])) {
        $bg_image = $banner_image['sizes']['large'];
        $custom_css .=  'section.banner-background {' . "\n" .
                        '   background: rgba(43,184,194,0.8);' . "\n" .
                        '   background: -moz-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
                        '   background: -webkit-gradient(left bottom, left top, color-stop(0%, rgba(43,184,194,0.8)), color-stop(100%, rgba(93,190,132,0.8))),url('.$bg_image.') center center no-repeat;' . "\n" .
                        '   background: -webkit-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
                        '   background: -o-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
                        '   background: -ms-linear-gradient(bottom, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
                        '   background: linear-gradient(to top, rgba(43,184,194,0.8) 0%, rgba(93,190,132,0.8) 100%),url('.$bg_image.') center center no-repeat;' . "\n" .
                        '   -webkit-background-size: cover;' . "\n" .
                        '   background-size: cover;' . "\n" .
                        '   background-attachment: scroll;' . "\n" .
                        '}' . "\n";
        $updated = true;
    }


    //background image for squares (hive and bird page)
    if (is_home()) {
        $squares = get_field('squares', PAGE_ID_BLOG);
    } else {
        $squares = get_field('squares', $post_id);
    }

    if (is_array($squares)) {
        $count = 1;
        foreach ($squares as $square) {
            $custom_css .= 'section.squares div.square.square-'.$count . ' .square-overlay { ' . "\n" .
                           '    background-image:url('.$square['background_image']['sizes']['square-image'] .');' . "\n" .
                           '}' . "\n";
            $count++;
        }
        $updated = true;
    }

    //about page - background image for sectors

    $bg_image        = get_field('sector_section_background_image',$post_id);

    if (is_array($bg_image)) {
        $custom_css .= '.bg-sectors { ' . "\n" .
            '    background-image:url('.$bg_image['sizes']['large'] .');' . "\n" .
            '}' . "\n";
    }

    //home page - services section
    $services = get_field('services');
    if (is_array($services)) {
        $count = 1;
        foreach ($services as $service) {
            $custom_css .= 'section.squares div.square.service-'.$count.' .square-overlay { ' . "\n" .
                '    background:url('.$service['background_image']['sizes']['square-image'] .');' . "\n" .
                '    background-size: cover;' . "\n" .
                '}' . "\n";
            $count++;
        }
    }

    //small squares (bird page)
    $smallsquares_text     = get_field('smallsquares_text');
    if (is_array($smallsquares_text)) {
        $count = 1;
        foreach ($smallsquares_text as $square) {
            if (is_array($square['image'])) {
                $custom_css .= '.style-item.smallsquare-' . $count . ' { ' . "\n" .
                    '    background-image:url(' . $square['image']['url'] . ');' . "\n" .
                    '}' . "\n";
            }
            $count++;
        }
    }

    //carousel background image
    $carousel_bgimage = get_field('carousel_bgimage');
    if (is_array($carousel_bgimage)) {
        $bg_image = $carousel_bgimage['sizes']['large'];

        $custom_css .= 'section.choose-templates { ' . "\n" .
                        '   background: rgba(43,184,194,0.7),url('.$bg_image.');' . "\n" .
                        '   background: -ms-linear-gradient(bottom, rgba(43,184,194,0.7) 0%, #5dbe84 100%),url('.$bg_image.');' . "\n" .
                        '   background: linear-gradient(to top, rgba(43,184,194,0.7) 0%, #5dbe84 100%),url('.$bg_image.');' . "\n" .
                        '   background-size: cover' . "\n" .
                       '}';
    }

    if ($updated)
        wp_add_inline_style( 'main', $custom_css);

}
add_action( 'wp_enqueue_scripts', 'custom_styles',10);
