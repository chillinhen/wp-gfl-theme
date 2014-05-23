	<?php
	$post_object_01 = get_field('bottom-artikel_01');

	if ($post_object_01):

	    // override $post
	    $post = $post_object_01;
	    setup_postdata($post);
	    ?>
    	<div class="col-md-4">
		<?php get_template_part('partials/article', get_post_format()); ?>
    	</div>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  ?>

	<?php endif; ?>
	<?php
	$post_object_02 = get_field('bottom-artikel_02');

	if ($post_object_02):

	    // override $post
	    $post = $post_object_02;
	    setup_postdata($post);
	    ?>
    	<div class="col-md-4">
		<?php get_template_part('partials/article', get_post_format()); ?>
    	</div>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>	
	<?php endif; ?>
	<?php
	$post_object_03 = get_field('bottom-artikel_03');

	if ($post_object_03):

	    // override $post
	    $post = $post_object_03;
	    setup_postdata($post);
	    ?>
    	<div class="col-md-4">
		<?php get_template_part('partials/article', get_post_format()); ?>
    	</div>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  ?>
	<?php endif;
	?>