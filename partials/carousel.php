<?php $argsCarousel = array(
    'post_type' => 'carousel-item',
    'orderby' => 'random');

$newCarousel = new WP_Query($argsCarousel);
?>
<?php if ($newCarousel->have_posts()) : ?>
    
	<div id="carousel-top-fold" class="carousel slide clearfix carousel-fade" data-ride="carousel" data-interval="10000" data-wrap="true" data-pause="hover" role="banner">
    	<!-- Indicators -->
    	
    	<!-- Wrapper for slides -->
    	<div class="carousel-inner">
		<?php while ($newCarousel->have_posts()) : $newCarousel->the_post(); ?>
		    <?php get_template_part('partials/carousel', 'item'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
    	</div>
        <ol class="carousel-indicators">
	    <?php $counter = 0; ?>
		<?php while ($newCarousel->have_posts()) : $newCarousel->the_post(); ?>
		    
		    <li data-target="#carousel-top-fold" data-slide-to="<?php echo $counter; ?>"><?php echo $counter; ?> </li>
		    <?php $counter++; ?>
		<?php endwhile; ?>
    	</ol>
    	<!-- Controls -->
    	<a class="left carousel-control" href="#carousel-top-fold" data-slide="prev">
    	    <i class="fa fa-angle-left fa-3x"></i>
    	</a>
    	<a class="right carousel-control" href="#carousel-top-fold" data-slide="next">
    	    <i class="fa fa-angle-right fa-3x"></i>
    	</a>
        </div>



<?php endif; ?>