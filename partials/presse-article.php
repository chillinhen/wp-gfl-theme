<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
    <header>
	<div>
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
        <div class="info text-muted">
    <?php #if (in_category('news') || is_singular( 'medienbeitraege' )) : ?>
        <div class="date"><i class="fa fa-calendar"></i><?php the_date(); ?></div>
    <?php #endif; ?>
    <div class="tags">
        <?php the_tags('<span class="tags-title"><i class="fa fa-tags"></i></span> ', ' ', ''); ?>
    </div>
</div>
	    <?php get_template_part('partials/edit', 'info'); ?>
    </footer>
</article>