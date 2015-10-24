<?php if (current_user_can('edit_post')) : ?>
    <hr>
    <div class="info text-muted">
        <div class="author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></div>
        <div class="edit">
            <a href="<?php echo get_edit_post_link(); ?>">
                <i class="fa fa-pencil-square"></i> 
                <?php _e("Edit post", "wpGFL"); ?>
            </a>
        </div>
    </div>

<?php endif; ?>

