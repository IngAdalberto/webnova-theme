<?php
/**
 * Title: WebNova Institucional - CTA de Proyectos
 * Slug: webnova/institutional-projects-cta
 * Categories: webnova-institucional
 * Description: Llamado a la acción final para la página de proyectos.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide","verticalAlignment":"center","spacing":"var:preset|spacing|60"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.2"}}} -->
            <h2 class="wp-block-heading" style="line-height:1.2"><?php esc_html_e( 'Construyamos nuevos proyectos juntos', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Trabajamos con instituciones, comunidades y aliados para desarrollar iniciativas con impacto sostenible.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Conoce nuestros programas', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Contáctanos', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
