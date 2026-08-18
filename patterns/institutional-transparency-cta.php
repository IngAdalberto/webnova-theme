<?php
/**
 * Title: WebNova Institucional - CTA Transparencia
 * Slug: webnova/institutional-transparency-cta
 * Categories: webnova-institucional
 * Description: Llamado a la acción para la página de transparencia.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--3xl);padding-left:var(--wp--preset--spacing--lg)">
    <!-- wp:group {"align":"wide","style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"},"spacing":{"padding":{"top":"var:preset|spacing|2xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|xl"}}},"backgroundColor":"background","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
    <div class="wp-block-group alignwide has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px;padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--xl)">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading"><?php esc_html_e( '¿Necesitas información adicional?', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"text-muted","fontSize":"lg"} -->
            <p class="has-text-muted-color has-text-color has-lg-font-size"><?php esc_html_e( 'Contáctanos para resolver dudas o solicitar información institucional complementaria.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Contáctanos', 'webnova-starter-kit' ); ?></a></div>
            <!-- /wp:button -->
            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Conoce nuestra institución', 'webnova-starter-kit' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

