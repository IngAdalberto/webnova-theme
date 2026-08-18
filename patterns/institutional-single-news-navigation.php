<?php
/**
 * Title: WebNova Institucional - Navegación Noticia Individual
 * Slug: webnova/institutional-single-news-navigation
 * Categories: webnova-institucional
 * Description: Navegación anterior y siguiente para la plantilla de noticia individual.
 */
?>
<!-- wp:group {"className":"webnova-single-news__navigation","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group webnova-single-news__navigation" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|typography|font-size|sm","textTransform":"uppercase"}}} -->
			<p style="font-size:var(--wp--preset--typography--font-size--sm);text-transform:uppercase"><?php esc_html_e( 'Noticia anterior', 'webnova-starter-kit' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"var:preset|typography|font-size|sm","textTransform":"uppercase"}}} -->
			<p class="has-text-align-right" style="font-size:var(--wp--preset--typography--font-size--sm);text-transform:uppercase"><?php esc_html_e( 'Noticia siguiente', 'webnova-starter-kit' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow","textAlign":"right"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
