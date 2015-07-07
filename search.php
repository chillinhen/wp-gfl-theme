<!-- test version -->
<?php get_header(); ?>
<div id="content" class="row">
    <div class="container">        
        <div class="page-header col-md-12">
            <h1>
                <span><?php _e("Search Results for","wpbootstrap"); ?>:</span> 
                    <?php echo esc_attr(get_search_query()); ?>
            </h1>
        </div>
       

            <div id="main" class="col-md-8">
                <!--This is a child-page.-->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', 'page'); ?>
                    <?php endwhile; ?>	
                    <?php get_template_part('partials/paging');?>
                <?php else : ?>
                    <?php get_template_part('partials/article','404');?>
                <?php endif; ?>
            </div>
             <aside id="sidebar1" class="col-md-4" role="complementary">
                <?php get_sidebar(); ?> 
            </aside>

    </div>
</div>
</section>
<?php get_footer(); ?>