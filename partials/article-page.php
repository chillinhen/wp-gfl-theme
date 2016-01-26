<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header>
        
        <div class="page-header"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
        <?php #get_template_part('partials/social','bookmarks');?>
    </header> <!-- end article header -->

    <section class="post_content clearfix">     
        <?php the_content(); ?>
    </section> <!-- end article section -->

    <footer>
        <?php get_template_part('partials/edit','info');?>

    </footer> <!-- end article footer -->

</article> <!-- end article -->