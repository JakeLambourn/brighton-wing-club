<?php
$services_title     = get_field('services_title');
$services_subtitle  = get_field('services_subtitle');
$services_content   = get_field('services_content');
$services_button_text = get_field('services_button_text');
$services_button_link = get_field('services_button_link');

$services = get_field('services');
?>
<section class="text-box standard-padding gradient-blue-to-white-vertical">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 col-center">

                <?php if (!empty($services_subtitle)): ?>
                <p class="overline"><?php echo $services_subtitle; ?></p>
                <?php endif; ?>
                <h1 class="smaller"><?php echo $services_title; ?></h1>
                <?php echo $services_content; ?>
                <?php if ($services_button_text): ?>
                <a class="btn btn-upper btn-top-margin" href="<?php echo $services_button_link; ?>"><?php echo $services_button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="squares bg-white squares-home-services">
    <div class="square square-light service-1">
        <div class="square-content">
            <p><?php echo $services[0]['title']; ?></p>
            <img src="<?php echo $services[0]['icon']['url']; ?>" data-fallback="<?php if (is_array( $services[0]['icon_fallback'])) echo  $services[0]['icon_fallback']['url']; ?>" alt="<?php echo $services[0]['title']; ?>" >
        </div>
        <div class="square-overlay"></div>
        <div class="bm-overlay"></div>
    </div>

    <div class="square-divided">
        <?php
        if (sizeof($services) > 1):
        $index = 1;
        ?>
        <div class="square square-half square-light service-2">
            <div class="square-content">
                <p><?php echo $services[$index]['title']; ?></p>
                <img src="<?php echo $services[$index]['icon']['url']; ?>" data-fallback="<?php if (is_array( $services[$index]['icon_fallback'])) echo  $services[$index]['icon_fallback']['url']; ?>" alt="<?php echo $services[$index]['title']; ?>" >

            </div>
            <div class="square-overlay"></div>
            <div class="bm-overlay"></div>
        </div>
        <?php endif; ?>
        <?php
        if (sizeof($services) > 2):
        $index = 2;
        ?>
        <div class="square square-half square-light service-3">
            <div class="square-content">
                <p><?php echo $services[$index]['title']; ?></p>
                <img src="<?php echo $services[$index]['icon']['url']; ?>" data-fallback="<?php if (is_array( $services[$index]['icon_fallback'])) echo  $services[$index]['icon_fallback']['url']; ?>" alt="<?php echo $services[$index]['title']; ?>" >
            </div>
            <div class="square-overlay"></div>
            <div class="bm-overlay"></div>

        </div>
        <?php endif; ?>
    </div>


</section>