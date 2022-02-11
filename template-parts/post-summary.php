            <button class="scroller-itm" onclick="on()" value="<?php the_id() ?>">
                <div class="scroller-itm-l">
                    <?php
                    the_date( 'jS, M' );
                    the_title( '<h3>', '</h3>');
                    ?>
                </div>
                <div class="scroller-itm-r">
                    <?php
                    the_post_thumbnail();
                    ?>
                </div>
            </button>