
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



    </header> <!-- end article header -->

    <section class="post_content clearfix" itemprop="articleBody">

	<div class="list_carousel">
				<ul id="caroufredsel">
		<?php the_content(); ?>
				</ul>
				<div class="clearfix"></div>
				<a id="prev2" class="prev" href="#">&lt;</a>
				<a id="next2" class="next" href="#">&gt;</a>
				<div id="pager2" class="pager"></div>
			</div>

    </section> <!-- end article section -->

    <?php get_template_part('partials/footer', 'article'); ?>

</article> <!-- end article -->