<?php
/**
 * Title: WebNova Institucional - Hero minimalista
 * Slug: webnova/institutional-hero-minimal
 * Categories: webnova-institucional
 * Description: Hero minimalista sin imagen con diseño limpio y tipografía destacada.
 */
?>
<!-- wp:group {"align":"full","className":"webnova-institutional-hero webnova-institutional-hero--minimal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull webnova-institutional-hero webnova-institutional-hero--minimal">
    <!-- wp:columns {"align":"wide","className":"webnova-institutional-hero__columns"} -->
    <div class="wp-block-columns alignwide webnova-institutional-hero__columns">
        <!-- wp:column {"width":"100%","className":"webnova-institutional-hero__content has-text-align-center"} -->
        <div class="wp-block-column webnova-institutional-hero__content has-text-align-center" style="flex-basis:100%">
            <!-- wp:spacer {"height":"2rem"} -->
            <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph {"className":"webnova-institutional-hero__eyebrow","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} -->
            <p class="webnova-institutional-hero__eyebrow has-accent-color has-text-color has-sm-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Educación, inclusión y desarrollo', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"className":"webnova-institutional-hero__title","style":{"typography":{"lineHeight":"1.1","fontSize":"clamp(2.5rem, 6vw, 5rem)"}}} -->
            <h1 class="wp-block-heading webnova-institutional-hero__title" style="font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.1"><?php echo wp_kses_post( __( 'Construimos <mark style="color:var(--wp--preset--color--accent);" class="has-inline-color has-accent-color">oportunidades</mark><br>que transforman vidas', 'webnova-starter-kit' ) ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"webnova-institutional-hero__description","fontSize":"lg","align":"center"} -->
            <p class="has-text-align-center webnova-institutional-hero__description has-lg-font-size" style="margin-left:auto;margin-right:auto;max-width:800px;"><?php esc_html_e( 'Impulsamos programas y proyectos que fortalecen capacidades y generan cambios sostenibles en las comunidades. Descubre cómo estamos marcando la diferencia.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"webnova-institutional-hero__actions"} -->
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
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
