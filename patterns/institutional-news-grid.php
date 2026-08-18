<?php
/**
 * Title: WebNova Institucional - Cuadrícula de Noticias
 * Slug: webnova/institutional-news-grid
 * Categories: webnova-institucional
 * Description: Archivo dinámico de publicaciones en formato de cuadrícula con paginación.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|3xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--3xl)">
    <!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query">
        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
            <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"topRightRadius":"8px","topLeftRadius":"8px"}}} /-->
                
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
                    
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group">
                        <!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} /-->
                        <!-- wp:paragraph {"textColor":"text-muted","fontSize":"sm"} -->
                        <p class="has-text-muted-color has-text-color has-sm-font-size">—</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"text-muted","fontSize":"sm"} /-->
                    </div>
                    <!-- /wp:group -->
                    
                    <!-- wp:post-title {"isLink":true,"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
                    
                    <!-- wp:post-excerpt {"moreText":"","excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}}} /-->
                    
                    <!-- wp:read-more {"content":"<?php esc_attr_e( 'Leer noticia â†’', 'webnova-starter-kit' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} /-->
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
            <!-- wp:pattern {"slug":"webnova/institutional-news-empty-state"} /-->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

