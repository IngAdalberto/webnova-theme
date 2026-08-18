<?php
/**
 * Title: CTA WhatsApp 01
 * Slug: webnova/cta-whatsapp-01
 * Categories: webnova-cta
 * Description: Banner horizontal editable para contacto por WhatsApp.
 * Keywords: cta, whatsapp, contacto, banner
 */

$webnova_whatsapp_url = 'https://wa.me/573113456587';
$webnova_whatsapp_icon = WEBNOVA_STARTER_KIT_URL . 'assets/images/whatsapp-33.png';
$webnova_whatsapp_label = __('Abrir chat de WhatsApp con Agencia WebNova', 'webnova-starter-kit');
?>
<!-- wp:group {"metadata":{"name":"WebNova / CTA WhatsApp"},"tagName":"section","align":"full","className":"wn-section webnova-cta-whatsapp","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull wn-section webnova-cta-whatsapp"><!-- wp:group {"className":"wn-container webnova-cta-whatsapp__inner","layout":{"type":"default"}} -->
<div class="wp-block-group wn-container webnova-cta-whatsapp__inner"><!-- wp:group {"className":"webnova-cta-whatsapp__left","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-cta-whatsapp__left"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo esc_url($webnova_whatsapp_url); ?>","linkTarget":"_blank","rel":"noopener noreferrer","alt":"<?php echo esc_attr($webnova_whatsapp_label); ?>","className":"webnova-cta-whatsapp__icon-link webnova-cta-whatsapp__icon"} -->
<figure class="wp-block-image size-full webnova-cta-whatsapp__icon-link webnova-cta-whatsapp__icon"><a href="<?php echo esc_url($webnova_whatsapp_url); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url($webnova_whatsapp_icon); ?>" alt="<?php echo esc_attr($webnova_whatsapp_label); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"webnova-cta-whatsapp__click"} -->
<p class="webnova-cta-whatsapp__click"><a href="<?php echo esc_url($webnova_whatsapp_url); ?>" target="_blank" rel="noopener noreferrer">Clic aqu&iacute;</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"120px","className":"webnova-cta-whatsapp__divider"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer webnova-cta-whatsapp__divider"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"webnova-cta-whatsapp__content","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-cta-whatsapp__content"><!-- wp:heading {"className":"webnova-cta-whatsapp__title"} -->
<h2 class="wp-block-heading webnova-cta-whatsapp__title">HABLEMOS POR WHATSAPP</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"webnova-cta-whatsapp__subtitle"} -->
<p class="webnova-cta-whatsapp__subtitle">Te ayudamos a elegir el plan ideal para tu negocio.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"120px","className":"webnova-cta-whatsapp__divider"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer webnova-cta-whatsapp__divider"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"webnova-cta-whatsapp__features","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-cta-whatsapp__features"><!-- wp:group {"className":"webnova-cta-whatsapp__feature","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-cta-whatsapp__feature"><!-- wp:html -->
<span class="webnova-cta-whatsapp__feature-icon" aria-hidden="true"><svg viewBox="0 0 48 48" focusable="false"><path d="M24 5l15 5v11c0 10-6 17-15 21C15 38 9 31 9 21V10l15-5z"></path><path d="M18 24l4 4 9-10"></path></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"webnova-cta-whatsapp__feature-text"} -->
<p class="webnova-cta-whatsapp__feature-text">Seguro</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"webnova-cta-whatsapp__feature","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-cta-whatsapp__feature"><!-- wp:html -->
<span class="webnova-cta-whatsapp__feature-icon" aria-hidden="true"><svg viewBox="0 0 48 48" focusable="false"><path d="M10 31a16 16 0 1 1 28 0"></path><path d="M24 31l8-13"></path><path d="M8 31h5"></path><path d="M35 31h5"></path><path d="M15 17l3 3"></path><path d="M33 17l-3 3"></path></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"webnova-cta-whatsapp__feature-text"} -->
<p class="webnova-cta-whatsapp__feature-text">R&aacute;pido</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"webnova-cta-whatsapp__feature","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-cta-whatsapp__feature"><!-- wp:html -->
<span class="webnova-cta-whatsapp__feature-icon" aria-hidden="true"><svg viewBox="0 0 48 48" focusable="false"><circle cx="24" cy="24" r="16"></circle><circle cx="24" cy="24" r="9"></circle><path d="M24 24l14-14"></path><path d="M35 7h6v6"></path><path d="M19 24l3 3 7-8"></path></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"webnova-cta-whatsapp__feature-text"} -->
<p class="webnova-cta-whatsapp__feature-text">Confiable</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"webnova-cta-whatsapp__feature","layout":{"type":"default"}} -->
<div class="wp-block-group webnova-cta-whatsapp__feature"><!-- wp:html -->
<span class="webnova-cta-whatsapp__feature-icon" aria-hidden="true"><svg viewBox="0 0 48 48" focusable="false"><path d="M9 39h31"></path><path d="M13 33v-8"></path><path d="M22 33V18"></path><path d="M31 33V12"></path><path d="M10 20l11-7 8 4 10-10"></path><path d="M33 7h6v6"></path></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"webnova-cta-whatsapp__feature-text"} -->
<p class="webnova-cta-whatsapp__feature-text">Efectivo</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"webnova-cta-whatsapp__phone"} -->
<p class="webnova-cta-whatsapp__phone">WhatsApp: +57 311 345 6587</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
