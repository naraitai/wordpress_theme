
<article id="article">
    <?php
        the_title('<h2 class="post-title">', '</h2>');
        the_post_thumbnail('medium', ['class' => 'img-responsive']);
    ?>

    <div class="main-text">
        <?php
            the_content();
        ?>
    </div>

    <?php
        #comments_template();
    ?>
</article>