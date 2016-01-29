<article id="post-<?php the_ID(); ?>" <?php post_class('panel clearfix'); ?> role="article">

    <header>
	<div>
	    <?php the_post_thumbnail('wpbs-featured-home'); ?>
	</div>

	<hgroup class="teaser-header">
	    <h3 class="single-title" itemprop="headline">
<!--		<a href="<?php #echo get_permalink(); ?>">-->
		    <?php the_title(); ?>
<!--		</a>-->
	    </h3>
	</hgroup>
    </header>
    <section>
	<?php the_excerpt(); ?>
    </section>
    <footer>
        <?php get_template_part('partials/edit', 'info'); ?><div class="date"><i class="fa fa-calendar"></i> <?php the_date(); ?></div>
    </footer>
</article>

