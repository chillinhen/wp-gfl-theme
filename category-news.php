<?php get_header(); ?>
<section role="content">
    <div class="container">
        <div id="content" class="clearfix row">
            <div id="main" class="col-sm-8">
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/article', 'page'); ?>
                <?php endwhile; ?>
                <?php get_template_part('partials/paging'); ?>
            </div>
            <aside id="sidebar1" class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>