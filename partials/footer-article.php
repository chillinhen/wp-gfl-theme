    <footer>
	<?php 
	if ( current_user_can('edit_post') ) :?>
	
	<p class="meta">
	    <?php _e("Posted", "wpGFL"); ?>
	    <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time>
	    <?php _e("by", "wpGFL"); ?>
	    <?php the_author_posts_link(); ?> <span class="amp">&</span>
	    <?php _e("filed under", "wgGFL"); ?> <?php the_category(', '); ?><span class="amp">&</span>
	    <?php the_tags('<span class="tags tags-title">' . __("Schlagworte", "wpbootstrap") . ':</span> ', ' '); ?>
	</p>
	<hr>
	<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-action pull-right"><i class="fa fa-pencil-square"></i> <?php _e("Edit post", "wpGFL"); ?></a>
	
	<?php endif;?>
	
    </footer>