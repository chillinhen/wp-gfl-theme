<?php get_header(); ?>

<section>
    <div class="container">
        <div id="content" class="row">
            <div id="main" class="col-md-8" role="main">
                <?php get_template_part('partials/article', '404'); ?>
            </div>
            <aside id="sidebar" class="col-md-4" role="aside">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>