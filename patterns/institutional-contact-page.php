<?php
/**
 * Title: Página de Contacto Institucional
 * Slug: webnova/institutional-contact-page
 * Categories: webnova-pages
 * Description: Estructura completa de la página de contacto.
 * Keywords: contacto, pagina
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<!-- wp:group {"metadata":{"name":"WebNova / Página de Contacto"},"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"var:preset|color|institucional-blue","text":"var:preset|color|white"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-institucional-blue-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"institucional-orange","fontSize":"small"} -->
            <p class="has-institucional-orange-color has-text-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Estamos para ayudarte</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|typography|font-size|x-large"}}} -->
            <h1 class="wp-block-heading" style="font-size:var(--wp--preset--typography--font-size--x-large)">Hablemos</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|typography|font-size|medium"}}} -->
            <p style="font-size:var(--wp--preset--typography--font-size--medium)">Comunícate con nuestra institución para solicitar información, conocer nuestros programas o construir nuevas alianzas.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-hero.jpg" alt="Atención al ciudadano" style="aspect-ratio:16/9;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"webnova/institutional-contact-intro"} /-->
<!-- wp:pattern {"slug":"webnova/institutional-contact-channels"} /-->
<!-- wp:pattern {"slug":"webnova/institutional-contact-form"} /-->
<!-- wp:pattern {"slug":"webnova/institutional-contact-location"} /-->
<!-- wp:pattern {"slug":"webnova/institutional-contact-hours"} /-->
<!-- wp:pattern {"slug":"webnova/institutional-contact-social"} /-->
<!-- wp:pattern {"slug":"webnova/institutional-contact-faq"} /-->
<!-- wp:pattern {"slug":"webnova/institutional-contact-cta"} /-->

</main>
<!-- /wp:group -->
