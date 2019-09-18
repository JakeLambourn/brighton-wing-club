<?php
add_shortcode('customvideo','customvideo_function');

function customvideo_function($atts) {

    $output = '';

    $display_video = false;

    $id = (int) $atts['id'];
    $image_url = wp_get_attachment_url( get_post_thumbnail_id($id) );

    $video_url = get_field('video_url',$id);

    $video_source = get_field('source',$id);

    //if it is a youtube video
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $video_url, $matches);

    if (sizeof($matches) > 0) {
        $display_video = true;
    }

    if ($display_video):

        ob_start();
?>
    <div class="video-container-16-9">
        <div class="video-overlay white-text col-center banner-padding-top"
             style="background-image: url('<?php echo $image_url; ?>');"><!-- Overlay Image -->
            <div class="video-info">
                <a href="#" class="play-icon"></a>
            </div>
        </div>
        <div class="video-player">
            <iframe width="100%" height="100%"
                    src="https://www.youtube.com/embed/<?php echo $matches[0]; ?>?rel=0&amp;controls=0&amp;showinfo=0&amp;"
                    frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <?php if (!empty($video_source)): ?>
    <p class="tagline">Source: <?php echo $video_source; ?></p>
    <?php endif; ?>
<?php

    $output = ob_get_contents();
    ob_end_clean();

    endif;

    return $output;
}