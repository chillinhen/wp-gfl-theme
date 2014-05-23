
<?php get_header(); ?>
<em>Detailansicht/-seite (Single)</em>
<section role="content">
    <div class="container">
<div id="content" class="clearfix row">
    <?php if (have_posts()) : ?>
        <div id="main" class="col-md-8 clearfix" role="main">

	    <?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('partials/article', 'full'); ?>


	    <?php endwhile; ?>			

	<?php else : ?>

	    <?php get_template_part('partials/article', '404'); ?>
        </div> <!-- end #main -->
    <?php endif; ?>


    <aside id="sidebar" class="col-md-4 clearfix" role="aside">

	<?php get_template_part('partials/sidebar', 'articles'); ?>


    </aside>

	</div><!--end content -->
    </div>
</section>

<?php get_footer(); ?>