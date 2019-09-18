
<section class="standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3><?php echo get_field('address'); ?></h3>

                <?php

                $location = get_field('map');

                if( !empty($location) ):
                    ?>
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALL4H4FKVuV07TYhxJWD0a032J9d7vSH0"></script>
