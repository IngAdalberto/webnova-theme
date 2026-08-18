<?php
/**
 * Funciones base del tema WebNova.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

define('WEBNOVA_THEME_VERSION', '0.1.0');
define('WEBNOVA_THEME_PATH', get_template_directory());
define('WEBNOVA_THEME_URI', get_template_directory_uri());
define('WEBNOVA_THEME_GITHUB_REPO', 'tu-usuario/tu-repositorio'); // Reemplaza con tu usuario/repo de GitHub


require_once WEBNOVA_THEME_PATH . '/inc/class-private-update-checker.php';
require_once WEBNOVA_THEME_PATH . '/inc/icons.php';

if (! defined('WEBNOVA_THEME_UPDATE_CHECKER_REGISTERED')) {
    $webnova_theme_update_checker = new WebNova_Theme_Private_Update_Checker(get_template(), WEBNOVA_THEME_VERSION);
    $webnova_theme_update_checker->hooks();

    define('WEBNOVA_THEME_UPDATE_CHECKER_REGISTERED', true);
}

function webnova_theme_get_layout_width_presets(): array
{
    return [
        'full' => [
            'label' => __('Ancho completo', 'webnova-theme'),
            'description' => __('Las secciones ocupan todo el ancho disponible.', 'webnova-theme'),
            'site_width' => '100%',
            'site_gutter' => '0px',
        ],
        'wide' => [
            'label' => __('Amplio con margenes', 'webnova-theme'),
            'description' => __('Mantiene una presencia amplia, con aire lateral en pantallas grandes.', 'webnova-theme'),
            'site_width' => '1440px',
            'site_gutter' => '32px',
        ],
        'boxed' => [
            'label' => __('Contenido centrado', 'webnova-theme'),
            'description' => __('Usa un ancho mas contenido para sitios sobrios o corporativos.', 'webnova-theme'),
            'site_width' => '1180px',
            'site_gutter' => '32px',
        ],
    ];
}

function webnova_theme_sanitize_layout_width(string $value): string
{
    $value = sanitize_key($value);
    $presets = webnova_theme_get_layout_width_presets();

    return isset($presets[$value]) ? $value : 'full';
}

function webnova_theme_get_dynamic_css(): string
{
    $css = ':root{';
    
    // Layout Width
    $layout_width = webnova_theme_sanitize_layout_width((string) get_theme_mod('webnova_layout_width', 'full'));
    $presets = webnova_theme_get_layout_width_presets();
    $preset = $presets[$layout_width] ?? $presets['full'];
    
    $css .= '--wn-site-width:' . esc_html((string) $preset['site_width']) . ';';
    $css .= '--wn-site-gutter:' . esc_html((string) $preset['site_gutter']) . ';';

    // Dynamic Colors
    $primary = get_option('webnova_primary_color', '');
    if ($primary && preg_match('/^#([a-f0-9]{3}){1,2}$/i', $primary)) {
        $css .= '--wn-color-primary:' . $primary . ';';
        $css .= '--wp--preset--color--primary:' . $primary . ';';
        $css .= '--wp--preset--color--webnova-primary:' . $primary . ';';
    }
    
    $accent = get_option('webnova_accent_color', '');
    if ($accent && preg_match('/^#([a-f0-9]{3}){1,2}$/i', $accent)) {
        $css .= '--wn-color-accent:' . $accent . ';';
        $css .= '--wp--preset--color--accent:' . $accent . ';';
        $css .= '--wp--preset--color--webnova-accent:' . $accent . ';';
        $css .= '--wp--preset--color--webnova-secondary:' . $accent . ';'; // Legacy
    }
    
    $background = get_option('webnova_background_color', '');
    if ($background && preg_match('/^#([a-f0-9]{3}){1,2}$/i', $background)) {
        $css .= '--wn-color-background:' . $background . ';';
        $css .= '--wp--preset--color--background:' . $background . ';';
        $css .= '--wp--preset--color--webnova-surface:' . $background . ';';
    }

    $css .= '}';
    return $css;
}

add_action('after_setup_theme', function () {
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/main.css');
    add_theme_support('custom-logo', [
        'height' => 128,
        'width' => 320,
        'flex-height' => true,
        'flex-width' => true,
    ]);

    register_nav_menus([
        'primary' => __('Navegación principal', 'webnova-theme'),
        'topbar'  => __('Barra superior', 'webnova-theme'),
        'footer'  => __('Navegación pie de página', 'webnova-theme'),
        'legal'   => __('Menú legal', 'webnova-theme'),
    ]);
});

require_once WEBNOVA_THEME_PATH . '/inc/customizer-header.php';
require_once WEBNOVA_THEME_PATH . '/inc/animations.php';
require_once WEBNOVA_THEME_PATH . '/inc/customizer-footer.php';

add_action('init', function () {
    register_block_pattern_category('webnova', [
        'label' => __('WebNova', 'webnova-theme'),
    ]);

    register_block_pattern_category('webnova-landing', [
        'label' => __('WebNova Landing Empresarial', 'webnova-theme'),
    ]);

    register_block_pattern_category('webnova-institucional', [
        'label' => __('WebNova Sitio Institucional', 'webnova-theme'),
    ]);

    register_block_pattern_category('webnova-comercial', [
        'label' => __('WebNova Sitio Comercial', 'webnova-theme'),
    ]);

    $pattern_files = array_merge(
        glob(get_template_directory() . '/patterns/*.php') ?: [],
        glob(get_template_directory() . '/patterns/*/*.php') ?: []
    );

    foreach ($pattern_files as $pattern_file) {
        $headers = get_file_data($pattern_file, [
            'title' => 'Title',
            'slug' => 'Slug',
            'categories' => 'Categories',
        ]);

        if (empty($headers['slug']) || empty($headers['title'])) {
            continue;
        }

        if (WP_Block_Patterns_Registry::get_instance()->is_registered($headers['slug'])) {
            continue;
        }

        ob_start();
        include $pattern_file;
        $content = trim((string) ob_get_clean());

        register_block_pattern($headers['slug'], [
            'title' => $headers['title'],
            'categories' => array_filter(array_map('trim', explode(',', $headers['categories']))),
            'content' => $content,
        ]);
    }
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'webnova-factory-framework',
        WEBNOVA_THEME_URI . '/assets/css/factory-framework.css',
        [],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_style(
        'webnova-theme-main',
        WEBNOVA_THEME_URI . '/assets/css/main.css',
        ['webnova-factory-framework'],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_style(
        'webnova-header',
        WEBNOVA_THEME_URI . '/assets/css/webnova-header.css',
        ['webnova-theme-main'],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_style(
        'webnova-footer',
        WEBNOVA_THEME_URI . '/assets/css/webnova-footer.css',
        ['webnova-theme-main'],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_style(
        'webnova-institutional-hero',
        WEBNOVA_THEME_URI . '/assets/css/patterns/institutional-hero.css',
        ['webnova-theme-main'],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_script(
        'webnova-theme-main',
        WEBNOVA_THEME_URI . '/assets/js/main.js',
        [],
        WEBNOVA_THEME_VERSION,
        true
    );

    wp_enqueue_script(
        'webnova-header',
        WEBNOVA_THEME_URI . '/assets/js/webnova-header.js',
        [],
        WEBNOVA_THEME_VERSION,
        true
    );

    wp_add_inline_style('webnova-theme-main', webnova_theme_get_dynamic_css());
});

add_action('enqueue_block_editor_assets', function (): void {
    wp_enqueue_style(
        'webnova-factory-framework-editor',
        WEBNOVA_THEME_URI . '/assets/css/factory-framework.css',
        [],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_style(
        'webnova-theme-main-editor',
        WEBNOVA_THEME_URI . '/assets/css/main.css',
        ['webnova-factory-framework-editor'],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_style(
        'webnova-footer-editor',
        WEBNOVA_THEME_URI . '/assets/css/webnova-footer.css',
        ['webnova-theme-main-editor'],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_style(
        'webnova-institutional-hero-editor',
        WEBNOVA_THEME_URI . '/assets/css/patterns/institutional-hero.css',
        ['webnova-theme-main-editor'],
        WEBNOVA_THEME_VERSION
    );

    wp_add_inline_style('webnova-theme-main-editor', webnova_theme_get_dynamic_css());
});

function webnova_theme_render_site_header(): string
{
    ob_start();
    include WEBNOVA_THEME_PATH . '/template-parts/header/site-header.php';

    return (string) ob_get_clean();
}

function webnova_theme_render_site_footer(): string
{
    ob_start();
    include WEBNOVA_THEME_PATH . '/template-parts/footer/site-footer.php';

    return (string) ob_get_clean();
}

add_shortcode('webnova_site_header', 'webnova_theme_render_site_header');
add_shortcode('webnova_site_footer', 'webnova_theme_render_site_footer');

add_filter('render_block_core/template-part', function (string $block_content, array $block): string {
    $attrs = $block['attrs'] ?? [];

    if (($attrs['slug'] ?? '') === 'header') {
        return webnova_theme_render_site_header();
    }

    if (($attrs['slug'] ?? '') === 'footer') {
        return webnova_theme_render_site_footer();
    }

    return $block_content;
}, 10, 2);
