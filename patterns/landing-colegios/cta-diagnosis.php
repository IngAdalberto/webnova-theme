<?php
/**
 * Title: Landing Colegios - CTA Diagnóstico
 * Slug: webnova/landing-colegios-cta-diagnosis
 * Categories: webnova-landing
 */
?>
<!-- wp:group {"align":"full","className":"wn-section","style":{"color":{"background":"#061B4A","text":"#ffffff"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wn-section has-text-color has-background" style="background-color:#061B4A;color:#ffffff;">
  <!-- wp:columns {"align":"wide","className":"wn-grid wn-grid--2"} -->
  <div class="wp-block-columns alignwide wn-grid wn-grid--2">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":2,"textColor":"background"} --><h2 class="wp-block-heading has-background-color has-text-color" id="diagnostico">¿Listo para mejorar la imagen de tu colegio?</h2><!-- /wp:heading -->
      <!-- wp:paragraph {"className":"wn-lead"} --><p class="wn-lead">Solicita un diagnóstico gratuito de tu presencia digital actual. Un experto de Agencia WebNova evaluará tu caso y te mostrará cómo podemos ayudarte.</p><!-- /wp:paragraph -->
      
      <!-- wp:list {"className":"wn-list-check-white"} -->
      <ul class="wn-list-check-white">
        <!-- wp:list-item --><li>Descubre oportunidades de mejora.</li><!-- /wp:list-item -->
        <!-- wp:list-item --><li>Conoce casos similares en tu ciudad.</li><!-- /wp:list-item -->
        <!-- wp:list-item --><li>Recibe una propuesta económica clara y sin compromiso.</li><!-- /wp:list-item -->
      </ul>
      <!-- /wp:list -->
      
      <!-- wp:spacer {"height":"2rem"} --><div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
      <!-- wp:heading {"level":4,"textColor":"background"} --><h4 class="wp-block-heading has-background-color has-text-color">¿Prefieres escribirnos por WhatsApp?</h4><!-- /wp:heading -->
      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button btn-track-whatsapp" href="https://wa.me/573000000000?text=Hola%20Agencia%20WebNova.%20Quiero%20solicitar%20un%20diagnóstico%20para%20la%20página%20web%20de%20mi%20colegio." target="_blank" rel="noreferrer noopener" style="color:#ffffff; border-color:#ffffff;">Contactar por WhatsApp</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"color":{"background":"#ffffff","text":"#1F2937"},"border":{"radius":"8px"}},"className":"has-background has-text-color"} -->
    <div class="wp-block-column has-background has-text-color" style="background-color:#ffffff;color:#1F2937;border-radius:8px;padding:2.5rem;">
      <!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="wp-block-heading has-medium-font-size">Solicitar diagnóstico gratuito</h3><!-- /wp:heading -->
      <!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">Completa el formulario y te contactaremos a la brevedad.</p><!-- /wp:paragraph -->
      
      <!-- wp:html -->
      <form class="wn-form wn-form-diagnostico" action="#" method="POST">
        <div style="margin-bottom: 1rem;">
            <label for="nombre_colegio" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Nombre completo *</label>
            <input type="text" id="nombre_colegio" name="nombre_colegio" required style="width: 100%; padding: 0.75rem; border: 1px solid #E5E7EB; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="institucion" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Nombre del colegio *</label>
            <input type="text" id="institucion" name="institucion" required style="width: 100%; padding: 0.75rem; border: 1px solid #E5E7EB; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="cargo" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Cargo</label>
            <input type="text" id="cargo" name="cargo" style="width: 100%; padding: 0.75rem; border: 1px solid #E5E7EB; border-radius: 4px;">
        </div>
        <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
            <div style="flex: 1;">
                <label for="ciudad" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Ciudad *</label>
                <input type="text" id="ciudad" name="ciudad" required style="width: 100%; padding: 0.75rem; border: 1px solid #E5E7EB; border-radius: 4px;">
            </div>
            <div style="flex: 1;">
                <label for="whatsapp" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">WhatsApp *</label>
                <input type="tel" id="whatsapp" name="whatsapp" required style="width: 100%; padding: 0.75rem; border: 1px solid #E5E7EB; border-radius: 4px;">
            </div>
        </div>
        <div style="margin-bottom: 1.5rem;">
            <label for="web_actual" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Sitio web actual (si existe)</label>
            <input type="url" id="web_actual" name="web_actual" placeholder="ej. www.micolegio.edu.co" style="width: 100%; padding: 0.75rem; border: 1px solid #E5E7EB; border-radius: 4px;">
        </div>
        <button type="submit" class="wp-block-button__link wp-element-button" style="width: 100%; text-align: center; background-color: #EB472A; color: #ffffff; border: none; padding: 1rem; font-weight: bold; cursor: pointer; border-radius: 4px;">Solicitar diagnóstico</button>
      </form>
      <!-- /wp:html -->
      
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
