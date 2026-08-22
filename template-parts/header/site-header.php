<?php
/**
 * Header principal WebNova.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

$is_sticky = (bool) get_theme_mod('webnova_header_sticky', false);
$header_classes = trim('webnova-header webnova-premium-header' . ($is_sticky ? ' webnova-header--sticky' : ''));
?>

<a class="skip-link screen-reader-text" href="#wp--skip-link--target">
    <?php esc_html_e('Saltar al contenido', 'webnova-theme'); ?>
</a>

<header class="<?php echo esc_attr($header_classes); ?>" data-webnova-header>
    <?php get_template_part('template-parts/header/topbar'); ?>
    
    <div class="webnova-header__inner">
        <?php get_template_part('template-parts/header/branding'); ?>
        <?php get_template_part('template-parts/header/navigation'); ?>
    </div>
</header>
