<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
    <header class="clearfix">
	<div class="pull-left">
	    <?php the_post_thumbnail('wpbs-featured-home'); ?>
	</div>

	<hgroup class="teaser-header">
	    <h3 class="single-title" itemprop="headline">
		<a href="<?php echo get_permalink(); ?>">
		    <?php the_title(); ?>
		</a>
	    </h3>
	</hgroup>
    </header>
    <section>
	<?php the_excerpt(); ?>
    </section>
    <footer>
	    <?php get_template_part('partials/edit', 'info'); ?>
    </footer>
</article>