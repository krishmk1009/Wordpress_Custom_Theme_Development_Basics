<div class="comments" id="comments">
    <div class="comments-header">
        <h2 class="comment-reply-title">
            <?php
            if (have_comments()) {
                echo get_comments_number() . " Comments";
            } else {
                echo "Leave a comment";
            }
            ?>
        </h2>
    </div><!-- .comments-header -->

    <div class="comments-inner">
        <?php
        if (have_comments()) {
            wp_list_comments(
                array(
                    "avatar-size" => 120,
                    'style' => "div"
                )
            );
        }
        ?>
    </div><!-- .comments-inner -->
</div><!-- comments -->




<?php if (comments_open()): ?>
    <hr class="" aria-hidden="true">
    <?php comment_form(
        array(
            "class-form" => '',
            'title-reply-before' => "<h3 id='reply-title' class='comment-reply-title'>",
            "title_reply_after " => "</h3>"
        )
    );
endif; ?>

</div>