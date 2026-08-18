<?php
/**
 * Title: WebNova Institucional - Noticia destacada
 * Slug: webnova/institutional-featured-news
 * Categories: webnova-institucional
 * Description: Muestra la noticia principal o más reciente en formato destacado.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:0;padding-bottom:0">
        <!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
        <div class="wp-block-query">
            <!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
                <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","style":"solid","color":"var:preset|color|border"}},"backgroundColor":"background","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"min(100%, 30rem)"}} -->
                <div class="wp-block-group has-background-background-color has-background has-custom-border"  style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:8px">
                    
                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"border":{"radius":"8px"}}} /-->
                    
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
                        
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"accent","fontSize":"sm"} /-->
                            <!-- wp:paragraph {"textColor":"text-muted","fontSize":"sm"} -->
                            <p class="has-text-muted-color has-text-color has-sm-font-size">—</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontWeight":"700"}},"textColor":"text-muted","fontSize":"sm"} /-->
                        </div>
                        <!-- /wp:group -->
                        
                        <!-- wp:post-title {"isLink":true,"level":2,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
                        
                        <!-- wp:post-excerpt {"moreText":"","excerptLength":30,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|sm"}}}} /-->
                        
                        <!-- wp:read-more {"content":"<?php esc_attr_e( 'Leer noticia â†’', 'webnova-starter-kit' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} /-->
                        
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

