
<div class="col-9 offset-2">
        <?php if ($feature['type'] == 'image' && !empty($feature['link'])): ?>
        <a href="<?php echo get_permalink($feature['link']->ID); ?>">
        <?php endif; ?>
        <div class="video-container-16-9">
            <div class="video-overlay white-text col-center banner-padding-top"
                 style="background-image: url('<?php echo $feature['image']; ?>');"><!-- Overlay Image -->
                <div class="video-info">
                    <?php if ($feature['type'] == 'video'): ?>
                    <a href="#" class="play-icon"></a>
                    <?php endif; ?>
                    <div class="mobile-hide">
                        <h1 class="medium"><?php echo $feature['title']; ?></h1>
                        <h3><?php echo $feature['subtitle']; ?></h3>
                        <p><?php echo $feature['text']; ?></p>
                    </div>
                </div>
                <div class="bm-overlay"></div>
            </div>
            <?php if ($feature['type'] == 'video'):

                //if it is a youtube video
                preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $feature['video_url'], $matches);

                $display_video = false;
                if (sizeof($matches) > 0) {
                    $display_video = true;
                }

                if ($display_video):
                ?>
            <div class="video-player">
                <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/<?php echo $matches[0]; ?>?rel=0&amp;controls=0&amp;showinfo=0&amp;"
                        frameborder="0" allowfullscreen></iframe>
            </div>
            <?php
                endif;
                endif; ?>
        </div>
        <?php if ($feature['type'] == 'image' && !empty($feature['link'])): ?>
        </a>
        <?php endif; ?>
    </div>
    </div>
    <div class="row banner-padding-top">