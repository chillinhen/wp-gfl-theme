<div class="item">
    <?php the_post_thumbnail('wpbs-featured-carousel'); ?>
        <div class="carousel-caption clearfix">
	<blockquote>
		<?php the_content(); ?>
            <cite><?php the_title(); ?></cite>
    	</blockquote>
            <?php get_template_part('partials/edit', 'button'); ?>
        </div>
</div>