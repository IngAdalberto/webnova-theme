<?php
/**
 * Title: WebNova Institucional - CTA Noticias
 * Slug: webnova/institutional-news-cta
 * Categories: webnova-institucional
 * Description: Llamado a la acción final para la página de noticias.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
    <!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
            <!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}} -->
            <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--sm)"><?php esc_html_e( 'Mantente conectado con nuestra institución', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|typography|font-size|lg"}}} -->
            <p style="font-size:var(--wp--preset--typography--font-size--lg)"><?php esc_html_e( 'Conoce nuestros programas, proyectos y formas de participar en las iniciativas que desarrollamos.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Contáctanos', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
                <!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|background"}}} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:var(--wp--preset--color--background)"><?php esc_html_e( 'Conoce nuestros proyectos', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
