<?php
/**
 * Title: WebNova Institucional - Estado Sin Documentos
 * Slug: webnova/institutional-document-empty-state
 * Categories: webnova-institucional
 * Description: Mensaje cuando no se encuentran documentos.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"8px","width":"1px","style":"dashed","color":"var:preset|color|border"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"}} -->
<div class="wp-block-group has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-style:dashed;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:paragraph {"align":"center","textColor":"text-muted"} -->
    <p class="has-text-align-center has-text-muted-color has-text-color"><?php esc_html_e( 'Actualmente no hay documentos publicados en esta categoría.', 'webnova-starter-kit' ); ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

