<?php
/*
  Template Name: GLF-Hauptseite-Level-2
 */
?>
<?php get_header(); ?>
<em>Haupt-/Detailseiten Level 2</em>
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
<!-- Unterseiten Teaser -->
<?php
$parent = $post->ID;
$filter = array(
    'post_type' => 'page',
    'post_parent' => $parent,
    'posts_per_page' => 12,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$panelLoop = new WP_Query($filter);
?>
<?php if ($panelLoop->have_posts()) : ?>
    <section role="panels" class="clearfix">
        <div class="row clearfix panels thick-line">
	    <?php while ($panelLoop->have_posts()) : $panelLoop->the_post(); ?> 
		<div class="col-md-4">
		    <?php get_template_part('partials/article', get_post_format()); ?>
		</div>
		<?php
	    endwhile;
	    wp_reset_postdata();
	    ?>
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
<!-- end Bildergalerien -->

<!-- optional weitere Artikel-Teaser -->
<section role="panels" class="row clearfix">
    <div class="container">
	<?php get_template_part('partials/bottom', 'articles', get_post_format()); ?>
    </div>
</section>
<?php get_footer(); ?>