<?php
get_header();
?>

<main id="main">
    MAIN (front-page.php)
    <section class="wrapper">
        <div class="section-title">
            <h2>SECTION TITLE</h2>
        </div>
        <div class="scroller">
            <?php
            if ( have_posts() ):
                while ( have_posts() ): the_post();
                    //Create scroller item for each post (see template-parts > post-summary)
                    get_template_part( 'template-parts/post-summary' );
                endwhile;
            endif;
            ?>
            <div id="overlay" class="" onclick="off()">
                <div id="overlay-card">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>