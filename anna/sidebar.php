<div class="col-sm-4 indexBlocos" id="lateral">

	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(Anuncio_300x250) ) : ?>
	<?php endif; ?>

	<?php echo popularPosts(); ?>

	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(Lateral_Geral) ) : ?>
	<?php endif; ?>
</div>