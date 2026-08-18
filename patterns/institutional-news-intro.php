<?php
/**
 * Title: WebNova Institucional - Introducción de Noticias
 * Slug: webnova/institutional-news-intro
 * Categories: webnova-institucional
 * Description: Sección de introducción breve para la página de noticias.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|2xl"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--2xl)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"100%"} -->
        <div class="wp-block-column" style="flex-basis:100%">
            <!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|md"}}}} -->
            <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--md)"><?php esc_html_e( 'Conoce lo que estamos construyendo', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|typography|font-size|lg"}}} -->
            <p class="has-text-align-center" style="font-size:var(--wp--preset--typography--font-size--lg)"><?php esc_html_e( 'Compartimos noticias, actividades y resultados que reflejan el trabajo desarrollado junto a comunidades, aliados y organizaciones.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
