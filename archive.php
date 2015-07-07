
<?php get_header(); ?>
<section role="content">
    <div id="content" class="row">
        <div class="container">
            <?php #if (is_category()) : ?>
	    <div id="main-board" class="col-md-12" role="pinboard">
                <h2><?php echo $post_type->labels->singular_name ?></h2>
    		<ul id="tiles">
			<?php while (have_posts()) : the_post(); ?>
			    <li><?php get_template_part('partials/presse-article', get_post_format()); ?></li>
			    <?php endwhile;wp_reset_query(); ?>
    		</ul>
		
	    </div>
            <?php #endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>