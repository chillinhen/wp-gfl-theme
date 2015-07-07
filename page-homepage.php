<?php
/*
  Template Name: Homepage
 */
?>

<?php get_header(); ?>
<div class="container">
    <div id="content" class="clearfix row">
	<?php
	    $teaser_intro = get_field('teaser_intro');

	    if ($teaser_intro):
		?>
    	    <div class="col-md-4" role="intro">
		    <?php
		    // override $post
		    $post = $teaser_intro;
		    setup_postdata($post);
		    ?>

		    <?php get_template_part('partials/article', get_post_format()); ?>

		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly   ?>
    	    </div>
	    <?php endif; ?>


	    <?php
	    $teaser_01 = get_field('teaser_01');

	    if ($teaser_01):
		?>
    	    <div class="col-md-4" role="teaser">
		    <?php
		    // override $post
		    $post = $teaser_01;
		    setup_postdata($post);
		    ?>

		    <?php get_template_part('partials/article', get_post_format()); ?>

		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  ?>
    	    </div>
	    <?php endif; ?>



	    <?php
	    $post_args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 1,
		'orderby' => 'date',
		'order' => 'DESC'
	    );
	    $latestPost = new WP_Query($post_args);
	    $latestPost->set('post_type', 'post');
	    ?>
	    <?php if ($latestPost->have_posts()) : ?>
    	    <div class="col-md-4" role="news">
		    <?php while ($latestPost->have_posts()) : $latestPost->the_post(); ?>
			<?php get_template_part('partials/article', get_post_format()); ?>
			<?php
		    endwhile;
		    wp_reset_postdata();
		    ?>
    	    </div>
	    <?php endif; ?>
    </div><!-- end content -->
    <!-- Unterseiten Teaser -->
<?php
//$parent = $post->ID;
$filter = array(
    'post_type' => 'page',
    'post_parent' => 357, //id from Page NR. 1 -> (ToDO find the ID from Page with nR 1)
    'posts_per_page' => 12,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$panelLoop = new WP_Query($filter);
?>
<?php if ($panelLoop->have_posts()) : ?>
    <section role="panels" class="clearfix">
        <div class="container">
            <div class="row clearfix panels">
		<?php while ($panelLoop->have_posts()) : $panelLoop->the_post(); ?> 
		    <div class="col-md-4">
			<?php get_template_part('partials/panel', get_post_format()); ?>
		    </div>
		    <?php
		endwhile;
		wp_reset_postdata();
		?>
            </div>
        </div>
    </section>  
<?php endif; ?>
<!-- end Unterseiten Teaser -->
<!-- optional Bildergalerien -->
<section role="gallery" class="row clearfix">
    <div class="container">
	<?php get_template_part('partials/gallery','article'); ?>
    </div>
</section>
</div>
</section>
<?php get_footer(); ?>