<?php
$post_author = get_field('post_author');

if (is_object($post_author)) {
    $post_author_id = $post_author->ID;
    $author_name = get_the_title($post_author_id);
    $job_title   = get_field('job_title',$post_author_id);
    $image_url = get_the_post_thumbnail_url($post_author_id,'team-member');
} else {
    $author_name = get_field('author_name');
    $job_title   = get_field('author_job_title');
    $author_image   = get_field('author_image');

    $image_url = '';
    if (is_array($author_image))
        $image_url = $author_image['sizes']['team-member'];

}

?>
<div class="author-image">
    <?php if (!empty($image_url)): ?>
    <img src="<?php echo $image_url; ?>" alt="<?php echo $author_name; ?>">
    <?php endif; ?>
</div>
<p>By: <strong><?php echo $author_name; ?></strong><br>
    <?php echo $job_title; ?><br>
    <?php echo post_category_list(true,true); ?><br>
    <?php echo get_the_date(); ?></p>
