<?php
/**
 * Title: WebNova Institucional - Hero dividido
 * Slug: webnova/institutional-hero-split
 * Categories: webnova-institucional
 * Description: Hero dividido entre contenido e imagen para instituciones.
 */
?>
<!-- wp:group {"align":"full","className":"webnova-institutional-hero webnova-institutional-hero--split","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull webnova-institutional-hero webnova-institutional-hero--split">
    <!-- wp:columns {"align":"wide","className":"webnova-institutional-hero__columns"} -->
    <div class="wp-block-columns alignwide webnova-institutional-hero__columns">
        <!-- wp:column {"verticalAlignment":"center","width":"55%","className":"webnova-institutional-hero__content is-style-animate-fade-in"} -->
        <div class="wp-block-column is-style-animate-fade-in is-vertically-aligned-center webnova-institutional-hero__content" style="flex-basis:55%">
            <!-- wp:paragraph {"className":"webnova-institutional-hero__eyebrow","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} -->
            <p class="webnova-institutional-hero__eyebrow has-accent-color has-text-color has-sm-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Trabajamos por el desarrollo de nuestra comunidad', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"className":"webnova-institutional-hero__title"} -->
            <h1 class="wp-block-heading webnova-institutional-hero__title"><?php echo wp_kses_post( __( 'Construimos <mark style="color:var(--wp--preset--color--accent);" class="has-inline-color has-accent-color">oportunidades</mark> que transforman vidas', 'webnova-starter-kit' ) ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"webnova-institutional-hero__description","fontSize":"lg"} -->
            <p class="webnova-institutional-hero__description has-lg-font-size"><?php esc_html_e( 'Desarrollamos programas educativos, sociales y comunitarios que fortalecen las capacidades de niños, jóvenes y familias.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"webnova-institutional-hero__actions"} -->
            <div class="wp-block-buttons webnova-institutional-hero__actions">
                <!-- wp:button {"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Conoce nuestros programas', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline webnova-btn-outline-primary"} -->
                <div class="wp-block-button is-style-outline webnova-btn-outline-primary"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Quiénes somos', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:spacer {"height":"2rem"} -->
            <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"className":"webnova-institutional-hero__trust-elements","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
            <div class="wp-block-group webnova-institutional-hero__trust-elements">
                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"sm","textColor":"primary"} -->
                <p class="has-primary-color has-text-color has-sm-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Educación · Inclusión · Desarrollo comunitario', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"className":"webnova-institutional-hero__metrics"} -->
            <div class="wp-block-columns webnova-institutional-hero__metrics">
                <!-- wp:column {"className":"webnova-institutional-hero__metric"} -->
                <div class="wp-block-column webnova-institutional-hero__metric">
                    <!-- wp:heading {"level":4,"textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}}} -->
                    <h4 class="wp-block-heading has-accent-color has-text-color" style="font-style:normal;font-weight:800"><?php esc_html_e( '+10 años', 'webnova-starter-kit' ); ?></h4>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"lineHeight":"1.2"}}} -->
                    <p class="has-sm-font-size" style="line-height:1.2"><?php esc_html_e( 'de experiencia', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"webnova-institutional-hero__metric"} -->
                <div class="wp-block-column webnova-institutional-hero__metric">
                    <!-- wp:heading {"level":4,"textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}}} -->
                    <h4 class="wp-block-heading has-accent-color has-text-color" style="font-style:normal;font-weight:800"><?php esc_html_e( '+500', 'webnova-starter-kit' ); ?></h4>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"lineHeight":"1.2"}}} -->
                    <p class="has-sm-font-size" style="line-height:1.2"><?php esc_html_e( 'personas beneficiadas', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
                
                <!-- wp:column {"className":"webnova-institutional-hero__metric"} -->
                <div class="wp-block-column webnova-institutional-hero__metric">
                    <!-- wp:heading {"level":4,"textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}}} -->
                    <h4 class="wp-block-heading has-accent-color has-text-color" style="font-style:normal;font-weight:800"><?php esc_html_e( '12', 'webnova-starter-kit' ); ?></h4>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"lineHeight":"1.2"}}} -->
                    <p class="has-sm-font-size" style="line-height:1.2"><?php esc_html_e( 'programas desarrollados', 'webnova-starter-kit' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%","className":"webnova-institutional-hero__media-col is-style-animate-slide-left"} -->
        <div class="wp-block-column is-style-animate-slide-left is-vertically-aligned-center webnova-institutional-hero__media-col" style="flex-basis:45%">
            <!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-team.jpg' ); ?>","aspectRatio":"4/5","scale":"cover","sizeSlug":"large","className":"webnova-institutional-hero__media","style":{"border":{"radius":"16px"}}} -->
            <figure class="wp-block-image size-large webnova-institutional-hero__media has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-team.jpg' ); ?>" alt="<?php esc_attr_e( 'Reemplazar con imagen de comunidad interactuando en entorno institucional', 'webnova-starter-kit' ); ?>" style="border-radius:16px;aspect-ratio:4/5;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
