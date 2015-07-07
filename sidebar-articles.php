 <?php if (has_post_thumbnail()) :
        ?>
        <div class="thumbnail">
            <?php get_template_part('partials/post-thumbnail'); ?>
        </div>
    <?php
    endif;?>
<?php
$article_sidebar = array();
for ($label = 1; $label <= 3; $label++)
{
    $article_sidebar[] = get_field('sidebar_artikel_0' .$label);
}
//print articles
foreach ($article_sidebar as $key => $post) {
    if($post) :
        setup_postdata($post);
        get_template_part('partials/article', get_post_format());
        wp_reset_postdata();
    else :
        get_sidebar();?>
        <?php break;
    endif;
}
?>
