<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page = ($current_page == 'bird.php') ? 'Bird' : 'Hive';
?>
<section class="demo standard-padding">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 col-center">
                <h2 class="overline">Demo <?php echo $page; ?></h2>
                <p>We can integrate with most third party platforms including the following</p>
            </div>
        </div>
        <form action="#" method="post">
            <div class="row row-bottom-gutter">
                <div class="col-4 offset-2"><input type="text" name="name" value="" placeholder="Your Name"></div>
                <div class="col-4"><input type="email" name="name" value="" placeholder="E-Mail"></div>
            </div>
            <div class="row row-bottom-gutter">
                <div class="col-4 offset-2"><input type="text" name="name" value="" placeholder="Mobile"></div>
                <div class="col-4"><input type="text" name="name" value="" placeholder="Company"></div>
            </div>
            <div class="row">
                <div class="col-12 col-center">
                    <a href="#" class="btn btn-upper">Get Demo</a>
                </div>
            </div>
        </form>
    </div>
</section>