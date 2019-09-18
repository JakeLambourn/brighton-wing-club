<section class="choose-templates standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 col-center">
                <p class="overline">Hive: imagine if...</p>
                <h2>Choose your templates</h2>
                <p>Personalised something about the need tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
    </div>

    <div class="carousel">
        <div class="carousel-container">
        <?php $handle = opendir("images/hive/carousel/");
        $count = 0;
              while($file = readdir($handle)) {
                  $count++;
                  if ($file !== '.' && $file !== '..'):

                      ?>
                    <a href="#" class="carouselitem">
                        <img src="images/hive/carousel/<?php echo $file; ?>" alt="">
                        <p><strong>Cloth Bag</strong><br>
                        456 x 576</p>
                    </a>
                      <?php
                  if ($count >= 10) break;
                  endif;
              }
        ?>
        </div>

    </div>

</section>