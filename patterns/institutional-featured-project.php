<?php
/**
 * Title: WebNova Institucional - Proyecto destacado
 * Slug: webnova/institutional-featured-project
 * Categories: webnova-institucional
 * Description: Sección para presentar un proyecto principal o destacado.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","verticalAlignment":"center","spacing":"var:preset|spacing|60"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-team-collab.jpg" alt="<?php esc_attr_e( 'Proyecto destacado', 'webnova-starter-kit' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Proyecto Destacado', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( '• Educación', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading"><?php esc_html_e( 'Aulas para el futuro', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Iniciativa orientada a fortalecer espacios de aprendizaje, capacidades docentes y acceso a recursos educativos tecnológicos en zonas rurales.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
                <p class="has-small-font-size" style="font-weight:700">📍 <?php esc_html_e( 'Región Norte', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
                <p class="has-small-font-size" style="font-weight:700">✅ <?php esc_html_e( 'En ejecución', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Conocer el proyecto', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
