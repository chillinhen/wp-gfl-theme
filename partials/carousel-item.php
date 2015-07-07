    <?php
if (has_post_thumbnail()) :
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

    $bg_thumbnail = $thumb_url[0];
endif;
?>
<div class="item" style="background-image:url('<?php echo $bg_thumbnail; ?>');background-position: top center;background-repeat: no-repeat;background-size:cover;">
    <?php #the_post_thumbnail('wpbs-featured-carousel'); ?>
    <?php $quote = get_the_content(); ?>
    <?php if ($quote != '') : ?>
        <div class="carousel-caption clearfix">
	    

    	<blockquote>
    	    <h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
    	</blockquote>
            <?php get_template_part('partials/edit', 'info'); ?>
        </div>
    <?php endif; ?>
</div>
