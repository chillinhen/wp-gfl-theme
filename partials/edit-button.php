
	<?php 
	if ( current_user_can('edit_post') ) :?>
	
	
	<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-action pull-right"><i class="fa fa-pencil-square"></i> <?php _e("Edit post", "wpGFL"); ?></a>
	
	<?php endif;?>
	

  