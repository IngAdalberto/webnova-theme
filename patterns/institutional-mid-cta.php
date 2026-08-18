<?php
/**
 * Title: WebNova Institucional - CTA intermedio
 * Slug: webnova/institutional-mid-cta
 * Categories: webnova-institucional
 * Description: Llamado a la acción intermedio con fondo institucional.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"backgroundColor":"primary-dark","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-dark-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--3xl);padding-left:var(--wp--preset--spacing--lg)">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":2,"textColor":"background"} -->
            <h2 class="wp-block-heading has-background-color has-text-color"><?php esc_html_e( 'Juntos podemos ampliar nuestro impacto', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"surface-alt","fontSize":"lg"} -->
            <p class="has-surface-alt-color has-text-color has-lg-font-size"><?php esc_html_e( 'Conoce cómo participar, apoyar nuestros programas o construir nuevas alianzas.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Participa', 'webnova-starter-kit' ); ?></a></div>
            <!-- /wp:button -->
            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Conviértete en aliado', 'webnova-starter-kit' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
