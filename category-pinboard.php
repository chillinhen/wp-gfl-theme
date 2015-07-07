<?php
/*
  Template Name: GLF-Pinnwand
 */
?>


<?php get_header(); ?>
<?php
query_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    
    'orderby' => 'random',
    'order' => 'DESC'
));
?> 
<section role="content">
    <div class="container">
	<div id="content" class="clearfix row">
	    <div id="main-board" class="col-md-12" role="pinboard">
		<?php if (have_posts()) : ?>

    		<ul id="tiles">
			<?php while (have_posts()) : the_post(); ?>
			    <li><?php get_template_part('partials/article', get_post_format()); ?></li>
			    <?php endwhile;wp_reset_query(); ?>
    		</ul>
		<?php endif; ?>
	    </div>
	</div>
    </div>
</section>

<?php get_footer(); ?>