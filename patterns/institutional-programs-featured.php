<?php
/**
 * Title: WebNova Institucional - Programa destacado
 * Slug: webnova/institutional-programs-featured
 * Categories: webnova-institucional
 * Description: Sección para destacar uno de los programas principales con beneficios.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","verticalAlignment":"center","spacing":"var:preset|spacing|60"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-client-meeting.jpg" alt="<?php esc_attr_e( 'Programa destacado', 'webnova-starter-kit' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Programa Insignia', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading"><?php esc_html_e( 'Escuelas Comunitarias para el Futuro', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Nuestro programa más destacado transforma las escuelas públicas en centros de desarrollo integral. No solo mejoramos la infraestructura, sino que capacitamos a docentes y fortalecemos el vínculo con las familias.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:list -->
            <ul class="wp-block-list">
                <!-- wp:list-item -->
                <li><?php esc_html_e( 'Aumento del 40% en la retención escolar.', 'webnova-starter-kit' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php esc_html_e( 'Más de 50 escuelas intervenidas a nivel nacional.', 'webnova-starter-kit' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php esc_html_e( 'Integración de tecnología y habilidades digitales.', 'webnova-starter-kit' ); ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Conocer los resultados', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
