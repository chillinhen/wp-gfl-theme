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
	    <div id="main-board" class="col-sm-12" role="pinboard">
		<?php if (have_posts()) : ?>

    		<ul id="tiles">
			<?php while (have_posts()) : the_post(); ?>
			    <li class="box"><?php get_template_part('partials/article', get_post_format()); ?></li>
			    <?php endwhile; ?>
    		</ul>
		<?php endif; ?>
	    </div>
            <div id="paging" class="col-sm-offset-5 col-sm-2">

                <nav>
                    <span class="pull-left"><?php previous_posts_link('<i class="fa fa-caret-left"></i> Newer') ?></span>
                    <span class="pull-right"><?php next_posts_link('Older <i class="fa fa-caret-right"></i>') ?></span>
                </nav>
            </div>
	</div>
    </div>
</section>

<?php get_footer(); ?>