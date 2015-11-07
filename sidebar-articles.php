<?php 
$sidebar_articles = array();
for ($label = 1; $label <= 3; $label++) :
    $sidebar_articles[] = get_field('sidebar-artikel_0' . $label);

endfor;
?>


<?php

foreach ($sidebar_articles as $post) :
    if ($post) :
        setup_postdata($post);
        get_template_part('partials/article', get_post_format());
    endif;
    wp_reset_postdata();
endforeach;


foreach ($sidebar_articles as $post) :
    if (!($post)) :
        get_sidebar();
    endif;
endforeach;
?>
