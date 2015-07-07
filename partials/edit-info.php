<div class="s clearfix">
    <span class="meta pull-left">
        <?php the_time( get_option( 'date_format' ) ); ?>
    </span>
    <span class="tags pull-right">
        <?php the_tags('<span class="tags-title"><i class="fa fa-tags"></i></span> ', ' ', ''); ?>
    </span>
</div>
    <?php if (current_user_can('edit_post')) : ?>
    <hr/>
    <div class="s clearfix">
        <span class="author pull-left"><?php _e("Author", "wpGFL"); ?> <?php the_author_posts_link(); ?></span>
        <span class="edit pull-right">
            <a href="<?php echo get_edit_post_link(); ?>" class="btn btn-action pull-right"><i class="fa fa-pencil-square"></i> <?php _e("Edit post", "wpGFL"); ?></a>
        </span>
    <?php endif; ?>
</div>

