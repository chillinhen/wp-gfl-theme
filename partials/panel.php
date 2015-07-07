<?php 

global $more;
$more = 0;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header>
	<?php the_post_thumbnail('wpbs-featured'); ?>

	<hgroup class="teaser-header">
	    <h3 class="single-title" itemprop="headline">
		<a href="<?php echo get_permalink(); ?>">
		    <?php the_title(); ?>
		</a>
	    </h3>
	</hgroup>
    </header>
    <section>
	<?php the_content('... mehr Infos'); ?>
    </section>
    <footer>
	    <?php get_template_part('partials/edit', 'info'); ?>
    </footer>
</article>