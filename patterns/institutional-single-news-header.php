<?php
/**
 * Title: WebNova Institucional - Encabezado Noticia Individual
 * Slug: webnova/institutional-single-news-header
 * Categories: webnova-institucional
 * Description: Encabezado para la plantilla de noticia individual con metadatos e imagen destacada.
 */

$news_page_id = get_option( 'page_for_posts' );
$news_link    = $news_page_id ? get_permalink( $news_page_id ) : home_url( '/' );
?>
<!-- wp:group {"tagName":"header","className":"webnova-single-news__header","layout":{"type":"constrained"}} -->
<header class="wp-block-group webnova-single-news__header">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--lg)">
		
		<!-- wp:paragraph {"className":"webnova-single-news__back-link"} -->
		<p class="webnova-single-news__back-link"><a href="<?php echo esc_url( $news_link ); ?>">&larr; <?php esc_html_e( 'Volver a Noticias', 'webnova-starter-kit' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"var:preset|spacing|sm"} -->
		<div style="height:var(--wp--preset--spacing--sm)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"className":"webnova-single-news__category"} /-->
		
		<!-- wp:post-title {"level":1,"className":"webnova-single-news__title"} /-->

		<!-- wp:post-excerpt {"className":"webnova-single-news__excerpt"} /-->

		<!-- wp:group {"className":"webnova-single-news__meta","style":{"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|md"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group webnova-single-news__meta" style="margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--md);font-style:normal;font-weight:400">
			<!-- wp:post-date /-->
			<!-- wp:paragraph -->
			<p>·</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Por', 'webnova-starter-kit' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:post-author {"showAvatar":false,"showBio":false} /-->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:post-featured-image {"align":"wide","className":"webnova-single-news__featured-image"} /-->

</header>
<!-- /wp:group -->
