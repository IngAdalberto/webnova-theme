<?php
require_once __DIR__ . '/../../../wp-load.php';

$block_content = '<!-- wp:group {"align":"wide","className":"is-style-animate-fade-in","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide is-style-animate-fade-in"></div>
<!-- /wp:group -->';

$blocks = parse_blocks($block_content);
echo "GROUP OUTPUT:\n";
echo serialize_block($blocks[0]);

$block_content2 = '<!-- wp:column {"className":"is-style-animate-slide-up anim-delay-sm","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}},"border":{"radius":"8px"}},"backgroundColor":"background"} -->
<div class="wp-block-column has-background-background-color has-background is-style-animate-slide-up anim-delay-sm" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg);border-radius:8px"></div>
<!-- /wp:column -->';

$blocks2 = parse_blocks($block_content2);
echo "\nCOLUMN OUTPUT:\n";
echo serialize_block($blocks2[0]);
