<?php
/**
 * Title: WebNova Institucional - Introducción de Proyectos
 * Slug: webnova/institutional-projects-intro
 * Categories: webnova-institucional
 * Description: Sección de introducción para la página de proyectos.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","spacing":"var:preset|spacing|60"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading"><?php esc_html_e( 'Transformamos ideas en acciones concretas', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|typography|font-size|medium"}}} -->
            <p style="font-size:var(--wp--preset--typography--font-size--medium)"><?php esc_html_e( 'Cada proyecto responde a necesidades reales y se construye mediante la participación, la colaboración y el seguimiento de resultados.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}},"border":{"radius":"8px","color":"var:preset|color|border","width":"1px","style":"solid"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px;padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|typography|font-size|x-large","fontWeight":"800","lineHeight":"1"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color" style="font-size:var(--wp--preset--typography--font-size--x-large);font-weight:800;line-height:1"><?php esc_html_e( '150+', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
                <p style="font-weight:700"><?php esc_html_e( 'Comunidades impactadas', 'webnova-starter-kit' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

