<?php
/**
 * Title: WebNova Institucional - Estado sin proyectos
 * Slug: webnova/institutional-projects-empty-state
 * Categories: webnova-institucional
 * Description: Mensaje a mostrar cuando no hay proyectos publicados.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}},"border":{"radius":"8px","color":"var:preset|color|border","width":"1px","style":"solid"}},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"}} -->
<div class="wp-block-group has-surface-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px;margin-top:var(--wp--preset--spacing--lg);margin-bottom:var(--wp--preset--spacing--lg);padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--md)">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|typography|font-size|large"}}} -->
    <p class="has-text-align-center" style="font-size:var(--wp--preset--typography--font-size--large)"><?php esc_html_e( 'Actualmente estamos preparando la publicación de nuestros proyectos.', 'webnova-starter-kit' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"align":"center","textColor":"text-muted"} -->
    <p class="has-text-align-center has-text-muted-color has-text-color"><?php esc_html_e( 'Pronto compartiremos los resultados y el impacto de nuestras iniciativas.', 'webnova-starter-kit' ); ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

