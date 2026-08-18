<?php
/**
 * Title: WebNova Institucional - Hero imagen de fondo
 * Slug: webnova/institutional-hero-cover
 * Categories: webnova-institucional
 * Description: Hero con imagen de fondo y superposición para instituciones.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-team.jpg' ); ?>","dimRatio":60,"overlayColor":"primary-dark","isUserOverlayColor":true,"align":"full","className":"webnova-institutional-hero webnova-institutional-hero--cover has-transparent-header"} -->
<div class="wp-block-cover alignfull webnova-institutional-hero webnova-institutional-hero--cover has-transparent-header"><span aria-hidden="true" class="wp-block-cover__background has-primary-dark-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Fondo institucional genérico', 'webnova-starter-kit' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-institutional-team.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"60%","className":"webnova-institutional-hero__content"} -->
        <div class="wp-block-column webnova-institutional-hero__content" style="flex-basis:60%">
            <!-- wp:paragraph {"className":"webnova-institutional-hero__eyebrow","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} -->
            <p class="webnova-institutional-hero__eyebrow has-accent-color has-text-color has-sm-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Trabajamos por el desarrollo de nuestra comunidad', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"className":"webnova-institutional-hero__title","textColor":"background"} -->
            <h1 class="wp-block-heading webnova-institutional-hero__title has-background-color has-text-color"><?php echo wp_kses_post( __( 'Construimos <mark style="color:var(--wp--preset--color--accent);" class="has-inline-color has-accent-color">oportunidades</mark> que transforman vidas', 'webnova-starter-kit' ) ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"webnova-institutional-hero__description","fontSize":"lg","textColor":"background"} -->
            <p class="webnova-institutional-hero__description has-background-color has-text-color has-lg-font-size"><?php esc_html_e( 'Desarrollamos programas educativos, sociales y comunitarios que fortalecen las capacidades de niños, jóvenes y familias.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"webnova-institutional-hero__actions"} -->
            <div class="wp-block-buttons webnova-institutional-hero__actions">
                <!-- wp:button {"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Conoce nuestros programas', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline webnova-btn-outline-white"} -->
                <div class="wp-block-button is-style-outline webnova-btn-outline-white"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Quiénes somos', 'webnova-starter-kit' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->
