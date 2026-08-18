<?php
/**
 * Title: WebNova Institucional - Listado de Proyectos
 * Slug: webnova/institutional-projects-grid
 * Categories: webnova-institucional
 * Description: Cuadrícula dinámica de proyectos con paginación.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    
    <!-- wp:heading {"level":2} -->
    <h2 class="wp-block-heading"><?php esc_html_e( 'Nuestros Proyectos', 'webnova-starter-kit' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:spacer {"height":"var:preset|spacing|md"} -->
    <div style="height:var(--wp--preset--spacing--md)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"wn_project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
        <div class="wp-block-group has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} /-->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                <!-- wp:post-terms {"term":"wn_project_category","style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"small"} /-->
                
                <!-- wp:post-title {"isLink":true,"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
                
                <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"textColor":"text-muted","fontSize":"small"} /-->
                
                <!-- wp:read-more {"content":"<?php esc_attr_e( 'Conocer más â†’', 'webnova-starter-kit' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
        <!-- wp:query-pagination-previous /-->

        <!-- wp:query-pagination-numbers /-->

        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->

        <!-- wp:query-no-results -->
        <!-- wp:pattern {"slug":"webnova/institutional-projects-empty-state"} /-->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

