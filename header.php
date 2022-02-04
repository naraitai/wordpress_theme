<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        //Load stylesheet
        wp_head();
        ?>
    </head>
    <body>
        <header id="header">
            HEADER.PHP
        </header>
        <nav id="nav-main">
            NAV (HEADER.PHP)
            <?php
            //Generate navbar
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    //Remove WordPress added div container
                    'container' => ''
                )
            );
            ?>
        </nav>