	<?php
	$post_object = get_field('gallerie');

	if ($post_object):

	    // override $post
	    $post = $post_object;
	    setup_postdata($post);
	    ?>
    	<div class="col-md-12">
		<?php get_template_part('partials/article', 'list_carousel'); ?>
    	</div>
	    <?php wp_reset_postdata();?>
<?php endif; ?>