<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zhao yuechen</title>
    <?php wp_head(); ?>
</head>
<body>



    <header>
        <div id="page-header">
            <a href="<?php echo home_url() ?>">zhao yuechen</a>
        </div>
        <div class="hamburger-btn">
            <div>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="bg"></div>
        <nav>
            <?php
                $args = array(
                    'menu_class' => 'navbar-nav',
                    'container' => false,
                );
                wp_nav_menu($args);
            ?>
        </nav>
    </header>

