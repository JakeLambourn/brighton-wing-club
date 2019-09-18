<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-1">
                <div class="header-logo">
                    <a id="logo" href="index.php"><img src="images/BrandMeadowLogo.svg" alt="Brand Meadow" ></a>

                    <a href="#" id="menu-open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="col-11">
                <nav>
                    <div class="nav-inner">
                        <ul>
                            <li class="demo-button"><a href="#">Get Demo</a></li>
                            <li <?php if ($current_page == 'hive.php') echo 'class="selected"'; ?>><a href="hive.php">Hive</a></li>
                            <li <?php if ($current_page == 'bird.php') echo 'class="selected"'; ?>><a href="bird.php">Bird</a></li>
                            <li <?php if ($current_page == 'about.php') echo 'class="selected"'; ?>><a href="about.php">About</a></li>
                            <li <?php if ($current_page == 'contact.php') echo 'class="selected"'; ?>><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="pad-navigation"></div>