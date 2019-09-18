<?php
add_action('admin_menu', 'add_options_pages');
function add_options_pages() {
    add_options_page('Site Settings', 'Site Settings', 'edit_pages', 'sitesettings', 'sitesettings');
}

function sitesettings() {
    ?>
    <div class='form-wrap'>
        <h1>Site Settings</h1>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>

            <h3>Header</h3>
            <div class="form-field">
                <label for="contact_email">Logo Alt Tag</label>
                <input id="logo_alt_tag" name="logo_alt_tag" value="<?php echo get_option('logo_alt_tag'); ?>" type="text" />
            </div>

            <h3>Get Demo Overlay</h3>
            <div class="form-field">
                <label for="demooverlay_title">Title</label>
                <input id="demooverlay_title" name="demooverlay_title" value="<?php echo get_option('demooverlay_title'); ?>" type="text" />
            </div>
            <div class="form-field">
                <label for="demooverlay_text">Text</label>
                <input id="demooverlay_text" name="demooverlay_text" value="<?php echo get_option('demooverlay_text'); ?>" type="text" />
            </div>

            <h3>Get Freebie Overlay</h3>
            <div class="form-field">
                <label for="freebieoverlay_title">Title</label>
                <input id="freebieoverlay_title" name="freebieoverlay_title" value="<?php echo get_option('freebieoverlay_title'); ?>" type="text" />
            </div>
            <div class="form-field">
                <label for="freebieoverlay_text">Text</label>
                <input id="freebieoverlay_text" name="freebieoverlay_text" value="<?php echo get_option('freebieoverlay_text'); ?>" type="text" />
            </div>


            <h3>Social Links</h3>
            <div class="form-field">
                <label for="social_twitter_link">Twitter</label>
                <input id="social_twitter_link" name="social_twitter_link" value="<?php echo get_option('social_twitter_link'); ?>" type="text" />
            </div>
            <div class="form-field">
                <label for="social_facebook_link">Facebook</label>
                <input id="social_facebook_link" name="social_facebook_link" value="<?php echo get_option('social_facebook_link'); ?>" type="text" />
            </div>


            <p class="submit">
                <input id="submit" class="button button-primary" type="submit" value="Save Changes" name="submit">
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="logo_alt_tag,demooverlay_title,demooverlay_text,social_facebook_link,social_twitter_link,freebieoverlay_title,freebieoverlay_text" />

        </form>
    </div>
    <?php
}
