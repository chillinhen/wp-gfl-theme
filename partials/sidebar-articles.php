	<?php
	$post_object_01 = get_field('sidebar-artikel_01');

	if ($post_object_01):

	    // override $post
	    $post = $post_object_01;
	    setup_postdata($post);
	    ?>
    	
	<?php get_template_part('partials/article', get_post_format()); ?>
    	
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  ?>

	<?php endif; ?>
	<?php
	$post_object_02 = get_field('sidebar-artikel_02');

	if ($post_object_02):

	    // override $post
	    $post = $post_object_02;
	    setup_postdata($post);
	    ?>
    	
		<?php get_template_part('partials/article', get_post_format()); ?>
    	
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>	
	<?php endif; ?>
	<?php
	$post_object_03 = get_field('sidebar-artikel_03');

	if ($post_object_03):

	    // override $post
	    $post = $post_object_03;
	    setup_postdata($post);
	    ?>
    	
		<?php get_template_part('partials/article', get_post_format()); ?>
    	
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  ?>
	<?php endif;
	?>