<?php
$contact_method_items = get_field('contact_method_items');


if (sizeof($contact_method_items) > 0):
?>
<section class="grid-icons contact-methods standard-padding">
    <div class="container">
        <div class="row">
            <?php foreach ($contact_method_items as $c_item): ?>
            <div class="col-4 col-tb-4 col-center">
                <div class="grid-item larger fixed-height-image-large">
                    <img src="<?php echo $c_item['image']['url']; ?>" data-fallback="<?php if (is_array($c_item['fallback_image'])) echo $c_item['fallback_image']['url']; ?>" alt="<?php echo strip_tags($c_item['content']); ?>" >
                    <h3><?php
                        //Mike - strip tags so we can place this within an h3
                    echo strip_tags($c_item['content'],'<strong><br><span><a>');
                        ?></h3>
                </div>
            </div>
           <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>