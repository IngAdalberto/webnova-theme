<?php
/**
 * Title: WebNova Institucional - Noticias Relacionadas
 * Slug: webnova/institutional-related-news
 * Categories: webnova-institucional
 * Description: Sección de noticias relacionadas (2 a 3 entradas).
 */

$current_post_id = get_the_ID();
$categories = wp_get_post_categories( $current_post_id );

$related_args = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post__not_in'   => array( $current_post_id ),
	'fields'         => 'ids',
	'no_found_rows'  => true,
);

if ( ! empty( $categories ) ) {
	$related_args['category__in'] = $categories;
}

$related_posts = get_posts( $related_args );

$using_fallback = false;
if ( empty( $related_posts ) && ! empty( $categories ) ) {
	unset( $related_args['category__in'] );
	$related_posts = get_posts( $related_args );
	$using_fallback = true;
}

if ( empty( $related_posts ) ) {
	return; 
}

$tax_query = '';
if ( ! $using_fallback && ! empty( $categories ) ) {
	$tax_query = ',"taxQuery":{"category":[' . implode( ',', $categories ) . ']}';
}
?>
<!-- wp:group {"className":"webnova-single-news__related","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group webnova-single-news__related" style="padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl)">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Noticias relacionadas', 'webnova-starter-kit' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"var:preset|spacing|md"} -->
	<div style="height:var(--wp--preset--spacing--md)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[<?php echo intval( $current_post_id ); ?>],"sticky":"","inherit":false<?php echo $tax_query; ?>},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"webnova-news-card","layout":{"type":"default"}} -->
		<div class="wp-block-group webnova-news-card">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md)">
				<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontSize":"var:preset|typography|font-size|sm"}}} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}}} /-->
				<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"var:preset|typography|font-size|sm"}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
