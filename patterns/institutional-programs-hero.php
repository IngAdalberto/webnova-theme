<?php
/**
 * Title: WebNova Institucional - Hero de Programas
 * Slug: webnova/institutional-programs-hero
 * Categories: webnova-institucional
 * Description: Hero interior para la página de programas o servicios.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Nuestros programas', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|typography|font-size|x-large"}}} -->
            <h1 class="wp-block-heading" style="font-size:var(--wp--preset--typography--font-size--x-large)"><?php esc_html_e( 'Desarrollamos iniciativas para el cambio social', 'webnova-starter-kit' ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|typography|font-size|medium"}}} -->
            <p style="font-size:var(--wp--preset--typography--font-size--medium)"><?php esc_html_e( 'Generamos oportunidades, fortalecemos capacidades y producimos impacto sostenible en las comunidades.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-client-meeting.jpg" alt="<?php esc_attr_e( 'Programas en acción', 'webnova-starter-kit' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
