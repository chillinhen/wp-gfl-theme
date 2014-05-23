<footer role="contentinfo">
    <div class="container">
    <div id="inner-footer" class="row clearfix">
	<hr />
	<div id="widget-footer" class="clearfix row">
	    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1')) : ?>
	    <?php endif; ?>
	    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2')) : ?>
	    <?php endif; ?>
	    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3')) : ?>
	    <?php endif; ?>
	</div>

	<nav class="clearfix">
	    <?php wpGLF_meta_nav(); ?>
	    <?php #wp_bootstrap_main_nav(); ?>
	</nav>

	<p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>

	<p class="attribution">&copy; <?php bloginfo('name'); ?></p>

    </div> <!-- end #inner-footer -->
    </div>

</footer> <!-- end footer -->

</div> <!-- end #container -->

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>