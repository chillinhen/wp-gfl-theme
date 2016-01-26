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
            <aside id="sidebar1" class="col-md-4" role="complementary">
            	<?php if ( has_post_thumbnail() ) : ?>
            		<?php the_post_thumbnail('wpbs-featured'); ?>
            	<?php endif; ?> 
                <?php get_sidebar('children'); ?> 
            </aside>

            <div id="main" class="col-md-8">
                <!--This is a child-page.-->
                <?php #get_template_part('partials/social','bookmarks');?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', 'page'); ?>

                    <?php endwhile; ?>	
                    <?php wp_reset_query(); ?>

                <?php endif; ?>

            </div>



        <?php elseif (is_page() && count($children) > 0) : ?>
            <aside id="sidebar1" class="col-md-4" role="complementary">
                <!-- panel loop -->
                <?php if ( has_post_thumbnail() ) : ?>
                	<?php the_post_thumbnail('wpbs-featured'); ?>
                <?php endif; ?> 
                <?php get_sidebar('children'); ?>
            </aside>

            <div id="main" class="col-md-8">
                <!--This is a parent-page (with one or more children)-->

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', 'page'); ?>
                    <?php endwhile; ?>	
                    <?php wp_reset_query(); ?>
                <?php else : ?>
                <?php endif; ?>
            </div>


        <?php else : ?>
            <aside id="sidebar1" class="col-md-4" role="complementary">
                <?php get_sidebar('articles'); ?>

            </aside>

            <div id="main" class="col-md-8">
                <!--This is a parent page without children.-->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/article', 'page'); ?>
                    <?php endwhile; ?>	
                    <?php wp_reset_query(); ?>
                <?php else : ?>
                <?php endif; ?>
            </div>


        <?php endif; ?>
        <!-- is there a horizontal gfallery ??? -->
        <?php $post_object = get_field('gallery-horizontal'); ?>
        <?php
        if ($post_object):
            // override $post
            $post = $post_object;
            setup_postdata($post);
            ?>
            <div class="col-md-12">
                <?php get_template_part('partials/article', 'list_carousel'); ?>
            </div>
            <?php wp_reset_postdata(); ?>
        
        <?php endif; ?>
        <!-- end gallery -->

    </div>
</div>


<?php get_footer(); ?>