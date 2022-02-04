
            <div class="scroller-item">
                <div class="post-info">
                    <p class="date">
                    <?php
                    //Format: 1st, Jan
                    the_date('jS, M');
                    ?>
                    </p>

                    <?php
                    the_title( '<h3>', '</h3>');
                    ?>
                </div>

                <?php
                the_post_thumbnail();
                ?>
            </div>