<?php 

// The Query
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'foerderer',
);
$sponsorFilter = new WP_Query( $args );

// The Loop
if ( $sponsorFilter->have_posts() ) : ?>
	<div id="tag-cloud">
	<?php while ( $sponsorFilter->have_posts() ) : $sponsorFilter->the_post();?>
		<a <?php post_class('label'); ?> href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

	<?php endwhile; ?>
	</div>

<?php endif; wp_reset_postdata();?>

