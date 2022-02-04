<?php
get_header();
?>

<main id="main">
    MAIN (front-page.php)
    <section class="wrapper">
        <div class="detail">
            <div class="section-title">
                <h2>SECTION TITLE</h2>
            </div>
            <div class="detail-card">
                DETAIL CARD<br>
                <h3>
                    <?php
                    the_title();
                    ?>
                </h3>
                <?php
                the_excerpt();
                the_shortlink( 'Read more' );
                ?>
            </div>
        </div>
        <div class="scroller">
            SCROLLER (front-page.php)
            <?php
            if ( have_posts() ):
                while ( have_posts() ): the_post();
                    //Create scroller item for each post (see template-parts > post-summary)
                    get_template_part( 'template-parts/post-summary' );
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>