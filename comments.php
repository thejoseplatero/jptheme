<div class="comments">
    <?php comment_form(); ?>
        <?php 
            if (have_comments()) :
         ?>

            <h2>Comments</h2>

            <ul>
                <?php wp_list_comments('reverse_top_level=false'); ?>
            </ul>
            <?php else: ?>
            <h2>No comments available</h2>
        <?php endif; ?>


</div>