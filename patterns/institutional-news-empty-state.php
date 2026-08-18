<?php
/**
 * Title: WebNova Institucional - Estado sin noticias
 * Slug: webnova/institutional-news-empty-state
 * Categories: webnova-institucional
 * Description: Mensaje que se muestra cuando no hay publicaciones en el archivo.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl"},"margin":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}},"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px;margin-top:var(--wp--preset--spacing--xl);margin-bottom:var(--wp--preset--spacing--xl);padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|typography|font-size|lg"}},"textColor":"text-muted"} -->
    <p class="has-text-align-center has-text-muted-color has-text-color" style="font-size:var(--wp--preset--typography--font-size--lg)"><?php esc_html_e( 'Actualmente no hay noticias publicadas. Vuelve pronto para conocer nuestras novedades.', 'webnova-starter-kit' ); ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

