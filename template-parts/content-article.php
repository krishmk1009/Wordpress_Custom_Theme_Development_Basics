
    <div class="container">
        <header class="content-header">
            <div class="meta mb-3">
                <span class="date"><?php echo the_date(); ?></span><span class="tag"><i
                        class='fa fa-tag'></i> <?php echo the_tags(); ?></span><span class="tag"><i class='fa fa-tag'></i>
                    category</span><span class="comment"><a href="#comments"><i class='fa fa-comment'></i> 3
                    <?php echo comments_number(); ?></a></span></div>

            <?php

            the_content();
            ?>

    </div>