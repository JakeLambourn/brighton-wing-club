<?php
$faqs = get_field('faqs');

$section_subtitle  = get_field('faq_subtitle');
$section_title     = get_field('faq_title');
?>
<section class="faq standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-center">
                <?php
                bm_title($section_title, '',$section_subtitle);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <div class="faqs">
                    <?php foreach ($faqs as $faq): ?>
                    <div class="faq-item">
                        <div class="faq-title"><?php echo $faq['question']; ?><a href="#"></a></div>
                        <div class="faq-content">
                            <?php echo $faq['answer']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
