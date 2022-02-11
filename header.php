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
            <?php
            // Get logo, site name and tagline
            if (function_exists( 'the_custom_logo' ) ) {
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

                if (has_custom_logo()) {
                    echo '<img class="logo" src="' .esc_url( $logo[0] ). '" alt="' . get_bloginfo( 'name' ) . '">';
                    echo '<div><h1>' . get_bloginfo('name') . '</h1>';
                    echo '<p>' . get_bloginfo('description') . '</p></div>';
                } else {
                    echo '<div><h1>' . get_bloginfo('name') . '</h1>';
                    echo '<p>' . get_bloginfo('description') . '</p></div>';
                }
            }
            ?>
        </header>
        <nav id="nav-main" class="nav">
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
            <a href="javascript:void(0);" class="icon" onclick="expdMenu()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>