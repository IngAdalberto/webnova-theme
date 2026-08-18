<?php
/**
 * Subsistema de animaciones para WebNova Theme.
 * Registra estilos de bloque y encola assets.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Encolar estilos y scripts de animaciones en el frontend y editor.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'webnova-animations',
        WEBNOVA_THEME_URI . '/assets/css/animations.css',
        [],
        WEBNOVA_THEME_VERSION
    );

    wp_enqueue_script(
        'webnova-animations',
        WEBNOVA_THEME_URI . '/assets/js/animations.js',
        [],
        WEBNOVA_THEME_VERSION,
        true
    );
});

add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_style(
        'webnova-animations-editor',
        WEBNOVA_THEME_URI . '/assets/css/animations.css',
        [],
        WEBNOVA_THEME_VERSION
    );
});

/**
 * Registrar estilos de bloque para animaciones.
 */
add_action('init', function () {
    if (! function_exists('register_block_style')) {
        return;
    }

    $blocks_to_animate = [
        'core/group',
        'core/columns',
        'core/column',
        'core/image',
        'core/cover',
        'core/heading',
        'core/paragraph',
        'core/buttons',
        'core/button'
    ];

    $animations = [
        'animate-fade-in'    => __('Fade In (Aparecer)', 'webnova-theme'),
        'animate-slide-up'   => __('Slide Up (Deslizar Arriba)', 'webnova-theme'),
        'animate-slide-right'=> __('Slide Right (Deslizar Derecha)', 'webnova-theme'),
        'animate-slide-left' => __('Slide Left (Deslizar Izquierda)', 'webnova-theme'),
    ];

    foreach ($blocks_to_animate as $block) {
        foreach ($animations as $name => $label) {
            register_block_style($block, [
                'name'  => $name,
                'label' => $label,
            ]);
        }
    }
});
