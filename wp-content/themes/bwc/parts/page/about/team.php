<?php
$team_section_subtitle  = get_field('team_section_subtitle');
$team_section_title     = get_field('team_section_title');
$team_section_content   = get_field('team_section_content');
?>

<section class="bg-white standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 col-center">
                <?php
                bm_title($team_section_title, $team_section_content,$team_section_subtitle);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <div class="team standard-padding-top">
<?php
$contact_url = get_permalink(PAGE_ID_CONTACT);

$args = array('posts_per_page' => -1,
              'post_type'      => 'team');

$team = get_posts($args);


$inline_css       = '';

foreach ($team as $t):

    $team_background_image = get_the_post_thumbnail_url($t->ID,'team-member');
    $inline_css_class = 'team-member-'.$t->post_name;
    $inline_css .= '.'.$inline_css_class . '{ background-image:url('.$team_background_image.'); }' . "\n";

?>
                    <div class="team-member clickable-item" data-link="<?php echo $contact_url; ?>">
                        <div class="team-content">
                            <p class="job"><?php echo get_field('job_title',$t->ID); ?></p>
                            <p class="name"><?php echo $t->post_title; ?></p>
                        </div>
                        <div class="overlay <?php echo $inline_css_class; ?>"></div>
                    </div>
<?php
endforeach;
?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
if (sizeof($inline_css) > 0):
?>
<style type="text/css">
<?php echo $inline_css; ?>
</style>
<?php
endif;
?>

