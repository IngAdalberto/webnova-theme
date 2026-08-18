<?php
/**
 * Barra superior del header (Topbar).
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

$enable_topbar = (bool) get_theme_mod('webnova_topbar_enable', false);

if (! $enable_topbar) {
    return;
}

$text  = get_theme_mod('webnova_topbar_text', '');
$phone = get_theme_mod('webnova_topbar_phone', '');
$email = get_theme_mod('webnova_topbar_email', '');

$social_networks = ['facebook', 'instagram', 'linkedin', 'youtube'];
$has_social = false;
$social_links = [];

foreach ($social_networks as $network) {
    $url = get_theme_mod('webnova_social_' . $network, '');
    if (! empty($url)) {
        $has_social = true;
        $social_links[$network] = $url;
    }
}

if (empty($text) && empty($phone) && empty($email) && ! $has_social) {
    return;
}
?>

<div class="webnova-header__topbar">
    <div class="webnova-header__topbar-inner">
        <div class="webnova-header__topbar-info">
            <?php if (! empty($text)) : ?>
                <span class="webnova-header__topbar-text">
                    <?php echo esc_html($text); ?>
                </span>
            <?php endif; ?>

            <?php if (! empty($phone)) : ?>
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="webnova-header__topbar-contact">
                    <?php echo webnova_theme_get_icon('phone', ['size' => 16]); ?>
                    <?php echo esc_html($phone); ?>
                </a>
            <?php endif; ?>

            <?php if (! empty($email)) : ?>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="webnova-header__topbar-contact">
                    <?php echo webnova_theme_get_icon('email', ['size' => 16]); ?>
                    <?php echo esc_html($email); ?>
                </a>
            <?php endif; ?>
        </div>

        <?php if ($has_social) : ?>
            <div class="webnova-header__topbar-social">
                <?php foreach ($social_links as $network => $url) : ?>
                    <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="webnova-header__social-link" aria-label="<?php echo esc_attr(sprintf(__('Visítanos en %s', 'webnova-theme'), ucfirst($network))); ?>">
                        <?php echo webnova_theme_get_icon($network, ['size' => 16]); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
