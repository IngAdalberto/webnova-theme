<?php
/**
 * Navegación principal del header.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

$menu_location = 'primary';
$menu_locations = get_nav_menu_locations();
$has_menu = ! empty($menu_locations[$menu_location]);
$menu_id = 'webnova-primary-menu';
?>

<button
    class="webnova-header__toggle"
    type="button"
    aria-label="<?php esc_attr_e('Abrir menú principal', 'webnova-theme'); ?>"
    aria-controls="<?php echo esc_attr($menu_id); ?>"
    aria-expanded="false"
    data-webnova-menu-toggle
>
    <span class="webnova-header__toggle-line"></span>
    <span class="webnova-header__toggle-line"></span>
    <span class="webnova-header__toggle-line"></span>
</button>

<nav class="webnova-header__nav" aria-label="<?php esc_attr_e('Menú principal', 'webnova-theme'); ?>" data-webnova-nav>
    <div class="webnova-header__nav-inner">
        <?php
        if ($has_menu) {
            wp_nav_menu([
                'theme_location' => $menu_location,
                'container' => false,
                'menu_id' => $menu_id,
                'menu_class' => 'webnova-header__menu',
                'fallback_cb' => false,
                'depth' => 3,
            ]);
        } elseif (current_user_can('manage_options')) {
            ?>
            <p class="webnova-header__empty">
                <?php esc_html_e('Asigna un menú a la ubicación Navegación principal', 'webnova-theme'); ?>
            </p>
            <?php
        }
        
        // Incluir el CTA dentro del menú (para integrarlo en mobile al final)
        get_template_part('template-parts/header/header-cta');
        ?>
    </div>
</nav>
