<?php
/**
 * Title: WebNova Institucional - Programas destacados
 * Slug: webnova/institutional-featured-programs
 * Categories: webnova-institucional
 * Description: Sección que muestra tres programas o servicios destacados en tarjetas.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl)">
    <!-- wp:group {"align":"wide","className":"is-style-animate-fade-in","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group is-style-animate-fade-in alignwide">
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} -->
            <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Nuestro impacto', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|md"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--xs);margin-bottom:var(--wp--preset--spacing--md)"><?php esc_html_e( 'Programas destacados', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Ver todos los programas', 'webnova-starter-kit' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"margin":{"top":"var:preset|spacing|xl"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--xl)">
        <!-- wp:column {"className":"is-style-animate-slide-up","style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column is-style-animate-slide-up has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-client-meeting.jpg' ); ?>","aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-client-meeting.jpg' ); ?>" alt="<?php esc_attr_e( 'Programa de acompañamiento', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Acompañamiento educativo', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Fortalecemos habilidades académicas y personales mediante espacios de aprendizaje y orientación.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conoce el programa â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"is-style-animate-slide-up anim-delay-sm","style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column is-style-animate-slide-up anim-delay-sm has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-project.jpg' ); ?>","aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-project.jpg' ); ?>" alt="<?php esc_attr_e( 'Desarrollo comunitario', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Desarrollo comunitario', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Acompañamos comunidades en la identificación y ejecución de iniciativas sostenibles.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conoce el programa â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"is-style-animate-slide-up anim-delay-md","style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column is-style-animate-slide-up anim-delay-md has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-service-team.jpg' ); ?>","aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-service-team.jpg' ); ?>" alt="<?php esc_attr_e( 'Formación para el empleo', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Formación para el empleo', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Desarrollamos capacidades técnicas y humanas para ampliar las oportunidades laborales.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conoce el programa â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

