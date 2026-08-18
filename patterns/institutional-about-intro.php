<?php
/**
 * Title: WebNova Institucional - Introducción Nosotros
 * Slug: webnova/institutional-about-intro
 * Categories: webnova-institucional
 * Description: Sección de introducción con título, texto en dos párrafos e imagen.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","spacing":"var:preset|spacing|60"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading">Una organización comprometida con el desarrollo sostenible</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Somos una institución que trabaja junto a comunidades, familias y organizaciones para fortalecer capacidades, ampliar oportunidades y generar soluciones sostenibles.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Creemos en la colaboración, la educación y la participación como herramientas para construir cambios duraderos.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Conoce nuestros programas</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.jpg" alt="Organización trabajando" style="aspect-ratio:4/3;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
