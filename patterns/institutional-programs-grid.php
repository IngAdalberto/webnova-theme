<?php
/**
 * Title: WebNova Institucional - Cuadrícula de Programas
 * Slug: webnova/institutional-programs-grid
 * Categories: webnova-institucional
 * Description: Cuadrícula principal de programas o servicios con filtros.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading"><?php esc_html_e( 'Explora nuestras áreas de trabajo', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
    <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--xl)">
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"className":"is-style-default"} -->
        <p class="is-style-default" style="font-weight:700"><a href="#"><?php esc_html_e( 'Todos', 'webnova-starter-kit' ); ?></a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"textColor":"text-muted"} -->
        <p class="has-text-muted-color has-text-color"><a href="#"><?php esc_html_e( 'Educación', 'webnova-starter-kit' ); ?></a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"textColor":"text-muted"} -->
        <p class="has-text-muted-color has-text-color"><a href="#"><?php esc_html_e( 'Desarrollo social', 'webnova-starter-kit' ); ?></a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"textColor":"text-muted"} -->
        <p class="has-text-muted-color has-text-color"><a href="#"><?php esc_html_e( 'Emprendimiento', 'webnova-starter-kit' ); ?></a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"textColor":"text-muted"} -->
        <p class="has-text-muted-color has-text-color"><a href="#"><?php esc_html_e( 'Cultura', 'webnova-starter-kit' ); ?></a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"textColor":"text-muted"} -->
        <p class="has-text-muted-color has-text-color"><a href="#"><?php esc_html_e( 'Medio ambiente', 'webnova-starter-kit' ); ?></a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-project.jpg' ); ?>" alt="<?php esc_attr_e( 'Educación y formación', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Educación', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Educación y formación', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Ampliamos el acceso a educación de calidad para niños y jóvenes en zonas rurales.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conocer más â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-client-meeting.jpg' ); ?>" alt="<?php esc_attr_e( 'Desarrollo comunitario', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Desarrollo social', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Desarrollo comunitario', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Fortalecemos la cohesión social mediante infraestructura y espacios participativos.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conocer más â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-service-team.jpg' ); ?>" alt="<?php esc_attr_e( 'Emprendimiento e inclusión', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Emprendimiento', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Emprendimiento e inclusión productiva', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Impulsamos proyectos productivos para la autonomía económica de mujeres cabeza de familia.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conocer más â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"margin":{"top":"var:preset|spacing|lg"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--lg)">
        <!-- wp:column {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder.jpg' ); ?>" alt="<?php esc_attr_e( 'Atención a población vulnerable', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Desarrollo social', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Atención a población vulnerable', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Ofrecemos acompañamiento integral a familias en situación de extrema pobreza.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conocer más â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-hero.jpg' ); ?>" alt="<?php esc_attr_e( 'Cultura y recreación', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Cultura', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Cultura y recreación', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Fomentamos el arte y el deporte como herramientas de transformación y prevención.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conocer más â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background"} -->
        <div class="wp-block-column has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-project.jpg' ); ?>" alt="<?php esc_attr_e( 'Medio ambiente y sostenibilidad', 'webnova-starter-kit' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px;aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Medio ambiente', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|xs"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e( 'Medio ambiente y sostenibilidad', 'webnova-starter-kit' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"text-muted"} -->
                <p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Protegemos los recursos naturales mediante educación y prácticas de conservación.', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-weight:700"><a href="#"><?php esc_html_e( 'Conocer más â†’', 'webnova-starter-kit' ); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

