<?php
/**
 * Title: Ubicación Contacto Institucional
 * Slug: webnova/institutional-contact-location
 * Categories: webnova-contact, webnova-sections
 * Description: Sección de ubicación con dirección, indicaciones y botón para cómo llegar.
 * Keywords: contacto, ubicacion, mapa, direccion
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<!-- wp:group {"metadata":{"name":"WebNova / Ubicación Contacto"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|40","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--30)">Nuestra ubicación</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--40)">Visítanos en nuestra sede principal. Contamos con espacios adecuados para atender tus solicitudes de forma presencial.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:html -->
<span class="webnova-icon" aria-hidden="true" style="display:inline-block;width:32px;height:32px;margin-right:16px;color:var(--wp--preset--color--wn-primary)"><svg viewBox="0 0 24 24" role="img" focusable="false" fill="currentColor"><path d="M12 21s6-5.2 6-11a6 6 0 1 0-12 0c0 5.8 6 11 6 11Z"></path><circle cx="12" cy="10" r="2.1" fill="none" stroke="currentColor" stroke-width="2"></circle></svg></span>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<h3 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--10);font-size:20px">Sede Principal</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
<p style="margin-bottom:0">Calle 00 # 00-00<br>Edificio Institucional, Piso 2<br>Ciudad, País</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com" target="_blank" rel="noopener noreferrer">Cómo llegar</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"has-custom-border"} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-client-meeting.jpg' ) ); ?>" alt="Fachada de la sede institucional" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
