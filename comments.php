<?php
    if (! have_comments()) {
        echo "No comments";
    }
    else {
        echo "Comments";
    }
?>
<?php
    wp_list_comments(
        array(
            'avatar_size' => 150,
            'style' => 'div'
        )  
    );
?>
<?php
    if ( comments_open() ) {
        comment_form(
            array(
                'class_form' => ''
            )
        );
    };
?>