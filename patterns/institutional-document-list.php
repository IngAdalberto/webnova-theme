<?php
/**
 * Title: WebNova Institucional - Listado de Documentos
 * Slug: webnova/institutional-document-list
 * Categories: webnova-institucional
 * Description: Listado dinámico de documentos con paginación.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"wn_document","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
    <div class="wp-block-query">
        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
            <!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-terms {"term":"wn_document_category","style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"institucional-orange","fontSize":"small"} /-->
                    <!-- wp:paragraph {"textColor":"text-muted","fontSize":"small"} -->
                    <p class="has-text-muted-color has-text-color has-small-font-size">—</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"text-muted","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"isLink":true,"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}}} /-->

                <!-- wp:post-excerpt {"moreText":"","excerptLength":30,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

                <!-- wp:read-more {"content":"<?php esc_attr_e( 'Consultar documento →', 'webnova-starter-kit' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"institucional-blue"} /-->
            </div>
            <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
            <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
                <!-- wp:query-pagination-previous /-->
                <!-- wp:query-pagination-numbers /-->
                <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:group -->

        <!-- wp:query-no-results -->
            <!-- wp:pattern {"slug":"webnova/institutional-document-empty-state"} /-->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->
