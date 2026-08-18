<?php
/**
 * Title: WebNova Institucional - Presentación breve
 * Slug: webnova/institutional-about-summary
 * Categories: webnova-institucional
 * Description: Presentación breve de la institución con imagen y llamado a la acción.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} -->
            <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Quiénes somos', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|sm"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--xs);margin-bottom:var(--wp--preset--spacing--sm)"><?php esc_html_e( 'Trabajamos para crear oportunidades sostenibles', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"lg"} -->
            <p class="has-lg-font-size"><?php esc_html_e( 'Somos una organización comprometida con el desarrollo social, educativo y comunitario. Diseñamos iniciativas que fortalecen capacidades y generan oportunidades para las personas y sus territorios.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"text-muted"} -->
            <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Nuestro trabajo parte de la escucha, la colaboración y la construcción de soluciones con impacto sostenible.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--md)">
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Conoce nuestra historia', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
            <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-team.jpg' ); ?>" alt="<?php esc_attr_e( 'Equipo de trabajo de la institución', 'webnova-starter-kit' ); ?>" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
