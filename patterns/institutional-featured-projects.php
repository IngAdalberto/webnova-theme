<?php
/**
 * Title: WebNova Institucional - Proyectos destacados
 * Slug: webnova/institutional-featured-projects
 * Categories: webnova-institucional
 * Description: Sección que destaca proyectos o iniciativas principales con diseño asimétrico.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl)">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} -->
            <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Nuestras iniciativas', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|md"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--xs);margin-bottom:var(--wp--preset--spacing--md)"><?php esc_html_e( 'Proyectos destacados', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Ver todos los proyectos', 'webnova-starter-kit' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"margin":{"top":"var:preset|spacing|xl"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--xl)">
        
        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-project.jpg' ); ?>","dimRatio":50,"overlayColor":"primary-dark","isUserOverlayColor":true,"isDark":false,"style":{"border":{"radius":"8px"}}} -->
            <div class="wp-block-cover is-light has-custom-border"  style="border-radius:8px"><span aria-hidden="true" class="wp-block-cover__background has-primary-dark-background-color has-background-dim-50 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Aulas para el futuro', 'webnova-starter-kit' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-project.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
                    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent"} -->
                    <p class="has-accent-color has-text-color" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Infraestructura', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"level":3,"textColor":"background"} -->
                    <h3 class="wp-block-heading has-background-color has-text-color"><?php esc_html_e( 'Aulas para el futuro', 'webnova-starter-kit' ); ?></h3>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"textColor":"background"} -->
                    <p class="has-background-color has-text-color"><?php esc_html_e( 'Iniciativa orientada a fortalecer espacios educativos y recursos para el aprendizaje.', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"background"} -->
                    <p class="has-background-color has-text-color" style="font-weight:700"><a href="#" style="color:var(--wp--preset--color--background)"><?php esc_html_e( 'Conoce más â†’', 'webnova-starter-kit' ); ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div></div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                
                <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"},"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px;padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700","fontSize":"var:preset|spacing|sm"}},"textColor":"accent"} -->
                    <p class="has-accent-color has-text-color" style="font-size:var(--wp--preset--spacing--sm);font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Emprendimiento', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                    <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Comunidades que emprenden', 'webnova-starter-kit' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"text-muted"} -->
                    <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Proceso de acompañamiento para desarrollar capacidades productivas y organizativas.', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conoce más â†’', 'webnova-starter-kit' ); ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"},"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px;padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700","fontSize":"var:preset|spacing|sm"}},"textColor":"accent"} -->
                    <p class="has-accent-color has-text-color" style="font-size:var(--wp--preset--spacing--sm);font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Arte', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                    <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Cultura que transforma', 'webnova-starter-kit' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"text-muted"} -->
                    <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Proyecto de participación cultural dirigido a niños, jóvenes y familias.', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conoce más â†’', 'webnova-starter-kit' ); ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

