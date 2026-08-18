<?php
/**
 * Call to Action (CTA) del header.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

$enable_cta = (bool) get_theme_mod('webnova_cta_enable', false);

if (! $enable_cta) {
    return;
}

$text = get_theme_mod('webnova_cta_text', __('Contáctanos', 'webnova-theme'));
$url = get_theme_mod('webnova_cta_url', '#');
$target = get_theme_mod('webnova_cta_target', false);
$variant = get_theme_mod('webnova_cta_variant', 'primary');

if (empty($text)) {
    return;
}

$classes = [
    'webnova-header__cta',
    'webnova-header__cta--' . sanitize_html_class($variant)
];

$target_attr = $target ? ' target="_blank" rel="noopener noreferrer"' : '';
?>

<div class="webnova-header__cta-wrapper">
    <a href="<?php echo esc_url($url); ?>" class="<?php echo esc_attr(implode(' ', $classes)); ?>"<?php echo $target_attr; ?>>
        <?php echo esc_html($text); ?>
    </a>
</div>
