<?php 

global $more;
$more = 0;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header>
      
	<?php the_post_thumbnail('wpbs-featured'); ?>

	<hgroup class="teaser-header">
	    <h2 class="single-title" itemprop="headline">
                <i class="fa fa-plus-square"></i>
		<a href="<?php echo get_permalink(); ?>">
		    <?php the_title(); ?>
		</a>
	    </h2>
	</hgroup>
    </header>
    <section>
        <?php
        if (wp_is_mobile()) :
            the_excerpt();
        else :
            the_content('... mehr Infos');
        endif;
        ?>
    </section>
    <footer>
	    <?php get_template_part('partials/edit', 'info'); ?>
    </footer>
</article>