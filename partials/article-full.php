<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header class="clearfix">

	<span class="single-title" itemprop="headline"><?php the_title(); ?></span>
	<p class="pull-right text-muted">veröffentlicht am: <?php the_date(); ?></p>

    </header> <!-- end article header -->

    <section class="post_content clearfix row" itemprop="articleBody">
	
	
    	<div class="col-md-12">
	    <?php the_post_thumbnail('wpbs-featured-home'); ?>
	    <hr>
		<?php the_content(); ?>
    	</div>


	<?php wp_link_pages('before=<div id="page-links">' . __('Pages:') . '&after=</div>'); ?>

    </section> <!-- end article section -->

    <footer>
	    <?php get_template_part('partials/edit', 'info'); ?>
    </footer>

</article> <!-- end article -->

<!-- Go to www.addthis.com/dashboard to customize your tools -->
