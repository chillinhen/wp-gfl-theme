
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header>

	<hgroup class="teaser-header">
	    <h3 class="single-title" itemprop="headline">
		<a href="<?php echo get_permalink(); ?>">
		    <?php the_title(); ?>
	    </a>
	    </h3>
	</hgroup>

	

    </header> <!-- end article header -->

    <section class="post_content clearfix" itemprop="articleBody">
	<?php the_content(); ?>
    </section> <!-- end article section -->

      <footer>
	    <?php get_template_part('partials/edit', 'info'); ?>
    </footer>

</article> <!-- end article -->