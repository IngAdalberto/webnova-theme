<?php
/**
 * Title: Formulario de Contacto Institucional
 * Slug: webnova/institutional-contact-form
 * Categories: webnova-contact, webnova-sections
 * Description: Área de formulario de contacto a dos columnas con información de la institución.
 * Keywords: contacto, formulario, wpforms, informacion
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<!-- wp:group {"metadata":{"name":"WebNova / Formulario de Contacto"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|40","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"webnova-contact-form","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"wn-surface","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-contact-form has-wn-surface-background-color has-background has-custom-border"  style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<h3 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20)">Envíanos un mensaje</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--40)">Completa el siguiente formulario y nuestro equipo se comunicará contigo lo más pronto posible.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"webnova-contact-form-badge has-text-align-center","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|wn-text-muted"}}} -->
<p class="webnova-contact-form-badge has-text-align-center has-text-color" style="color:var(--wp--preset--color--wn-text-muted);font-size:14px">[Área reservada para formulario WPForms]</p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[wpforms id="1"]
<!-- /wp:shortcode -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"color":{"text":"var:preset|color|wn-text-muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--wn-text-muted);font-size:13px;margin-top:var(--wp--preset--spacing--30)">Al enviar este formulario, aceptas nuestra política de privacidad y tratamiento de datos personales.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<h3 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--30)">Información institucional</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:html -->
<span class="webnova-icon" aria-hidden="true" style="display:inline-block;width:24px;height:24px;margin-right:16px;color:var(--wp--preset--color--wn-primary)"><svg viewBox="0 0 24 24" role="img" focusable="false" fill="currentColor"><path d="M12 21s6-5.2 6-11a6 6 0 1 0-12 0c0 5.8 6 11 6 11Z"></path><circle cx="12" cy="10" r="2.1" fill="none" stroke="currentColor" stroke-width="2"></circle></svg></span>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--10);font-size:16px">Dirección principal</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
<p style="margin-bottom:0">Calle 00 # 00-00<br>Ciudad, País</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:html -->
<span class="webnova-icon" aria-hidden="true" style="display:inline-block;width:24px;height:24px;margin-right:16px;color:var(--wp--preset--color--wn-primary)"><svg viewBox="0 0 24 24" role="img" focusable="false" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></span>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--10);font-size:16px">Teléfonos</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
<p style="margin-bottom:0">+57 300 000 0000<br>+57 601 000 0000</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:html -->
<span class="webnova-icon" aria-hidden="true" style="display:inline-block;width:24px;height:24px;margin-right:16px;color:var(--wp--preset--color--wn-primary)"><svg viewBox="0 0 24 24" role="img" focusable="false" fill="currentColor"><circle cx="12" cy="12" r="8"></circle><path d="M12 7.5V12l3 2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--10);font-size:16px">Horarios de atención</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
<p style="margin-bottom:0">Lunes a viernes<br>8:00 a. m. a 5:00 p. m.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

