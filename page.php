<!-- test version -->
<?php get_header(); ?>
<div id="content" class="row">
    <div class="container">        
        <!-- here the child pages -->
        <?php
        global $post;
        $children = get_pages(array('child_of' => $post->ID));
        ?>




        <?php if (is_page() && $post->post_parent) : ?>

            <div id="main" class="col-md-8">
                <!--This is a child-page.-->
                <?php #get_template_part('partials/social','bookmarks');?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', 'page'); ?>
                    <?php endwhile; ?>		
                <?php else : ?>
                <?php endif; ?>
            </div>
            <aside id="sidebar1" class="col-md-4" role="complementary">
                <?php get_sidebar('children'); ?> 
            </aside>


        <?php elseif (is_page() && count($children) > 0) : ?>
            <div id="main" class="col-md-8">
                <!--This is a parent-page (with one or more children)-->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', 'page'); ?>
                    <?php endwhile; ?>		
                <?php else : ?>
                <?php endif; ?>
            </div>

            <aside id="sidebar1" class="col-md-4" role="complementary">
                <!-- panel loop -->
                <?php get_sidebar('children'); ?>
            </aside>
        <?php else : ?>
            <div id="main" class="col-md-8">
                <!--This is a parent page without children.-->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', 'page'); ?>
                    <?php endwhile; ?>		
                <?php else : ?>
                <?php endif; ?>
            </div>
            <aside id="sidebar1" class="col-md-4" role="complementary">
                <?php get_sidebar('articles'); ?> 
            </aside>

        <?php endif; ?>
    </div>
    <section role="gallery" class="row clearfix">
    <div class="container">
	<?php get_template_part('partials/gallery','article'); ?>
    </div>
</section>
</div>

<?php get_footer(); ?>