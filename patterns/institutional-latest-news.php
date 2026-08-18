<?php
/**
 * Title: WebNova Institucional - Noticias recientes
 * Slug: webnova/institutional-latest-news
 * Categories: webnova-institucional
 * Description: Sección que muestra las 3 noticias o publicaciones más recientes usando Query Loop.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl)">
    <!-- wp:group {"align":"wide","className":"is-style-animate-fade-in","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group is-style-animate-fade-in alignwide">
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} -->
            <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Actualidad', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|md"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--xs);margin-bottom:var(--wp--preset--spacing--md)"><?php esc_html_e( 'Noticias recientes', 'webnova-starter-kit' ); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/noticias/"><?php esc_html_e( 'Ver todas las noticias', 'webnova-starter-kit' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--xl)">
        <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query">
            <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
                <!-- wp:group {"className":"is-style-animate-slide-up","style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
                <div class="wp-block-group is-style-animate-slide-up has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} /-->
                    
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                        <!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"text-muted","fontSize":"sm"} /-->
                        
                        <!-- wp:post-title {"isLink":true,"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
                        
                        <!-- wp:post-excerpt {"moreText":"","excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}}} /-->
                        
                        <!-- wp:read-more {"content":"<?php esc_attr_e( 'Leer más â†’', 'webnova-starter-kit' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e( 'Próximamente compartiremos nuevas noticias institucionales.', 'webnova-starter-kit' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

