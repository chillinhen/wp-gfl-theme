
<?php get_header(); ?>
<section role="content">
    <div id="content" class="row">
        <div class="container">
            <div id="main" class="col-sm-8">
                    <!--This is a parent page without children.-->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php get_template_part('partials/article', 'page'); ?>
                        <?php endwhile; ?>		
                    <?php else : ?>
                    <?php endif; ?>
                </div>
                <aside id="sidebar1" class="col-sm-4" role="complementary">
                    <?php get_sidebar('articles'); ?> 
                </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>