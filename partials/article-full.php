<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

    <header>

	<?php the_post_thumbnail('wpbs-featured'); ?>

	<hgroup class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></hgroup>

    </header> <!-- end article header -->

    <section class="post_content clearfix" itemprop="articleBody">

	<?php the_content(); ?>

	<?php wp_link_pages(); ?>

    </section> <!-- end article section -->

    <?php get_template_part('partials/footer', 'article' );?>

</article> <!-- end article -->