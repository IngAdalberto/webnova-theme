<?php
/**
 * Opciones del personalizador para el header WebNova.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

function webnova_theme_sanitize_checkbox($checked): bool
{
    return (bool) $checked;
}

add_action('customize_register', function (WP_Customize_Manager $wp_customize): void {
    $wp_customize->add_section('webnova_header', [
        'title' => __('Header WebNova', 'webnova-theme'),
        'priority' => 35,
    ]);

    $custom_logo_control = $wp_customize->get_control('custom_logo');

    if ($custom_logo_control) {
        $custom_logo_control->section = 'webnova_header';
        $custom_logo_control->priority = 10;
        $custom_logo_control->description = __('Carga el logo principal del encabezado. Si no hay logo, se mostrará el nombre del sitio.', 'webnova-theme');
    }

    $wp_customize->add_setting('webnova_header_sticky', [
        'default' => false,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_header_sticky', [
        'type' => 'checkbox',
        'section' => 'webnova_header',
        'label' => __('Activar header fijo superior', 'webnova-theme'),
        'description' => __('Cuando está activo, el encabezado permanece visible al hacer scroll con una sombra sutil.', 'webnova-theme'),
    ]);

    // --- TOPBAR ---
    $wp_customize->add_setting('webnova_topbar_enable', [
        'default' => false,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_topbar_enable', [
        'type' => 'checkbox',
        'section' => 'webnova_header',
        'label' => __('Mostrar barra superior', 'webnova-theme'),
    ]);

    $wp_customize->add_setting('webnova_topbar_text', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_topbar_text', [
        'type' => 'text',
        'section' => 'webnova_header',
        'label' => __('Texto informativo', 'webnova-theme'),
    ]);

    $wp_customize->add_setting('webnova_topbar_phone', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_topbar_phone', [
        'type' => 'text',
        'section' => 'webnova_header',
        'label' => __('Teléfono', 'webnova-theme'),
    ]);

    $wp_customize->add_setting('webnova_topbar_email', [
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_topbar_email', [
        'type' => 'email',
        'section' => 'webnova_header',
        'label' => __('Correo electrónico', 'webnova-theme'),
    ]);

    // Redes Sociales
    $social_networks = ['facebook' => 'Facebook', 'instagram' => 'Instagram', 'linkedin' => 'LinkedIn', 'youtube' => 'YouTube'];
    foreach ($social_networks as $key => $label) {
        $wp_customize->add_setting('webnova_social_' . $key, [
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control('webnova_social_' . $key, [
            'type' => 'url',
            'section' => 'webnova_header',
            'label' => sprintf(__('URL de %s', 'webnova-theme'), $label),
        ]);
    }

    // --- CTA ---
    $wp_customize->add_setting('webnova_cta_enable', [
        'default' => false,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_cta_enable', [
        'type' => 'checkbox',
        'section' => 'webnova_header',
        'label' => __('Mostrar botón CTA', 'webnova-theme'),
    ]);

    $wp_customize->add_setting('webnova_cta_text', [
        'default' => __('Contáctanos', 'webnova-theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_cta_text', [
        'type' => 'text',
        'section' => 'webnova_header',
        'label' => __('Texto del CTA', 'webnova-theme'),
    ]);

    $wp_customize->add_setting('webnova_cta_url', [
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_cta_url', [
        'type' => 'url',
        'section' => 'webnova_header',
        'label' => __('URL del CTA', 'webnova-theme'),
    ]);

    $wp_customize->add_setting('webnova_cta_target', [
        'default' => false,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_cta_target', [
        'type' => 'checkbox',
        'section' => 'webnova_header',
        'label' => __('Abrir en nueva pestaña', 'webnova-theme'),
    ]);

    $wp_customize->add_setting('webnova_cta_variant', [
        'default' => 'primary',
        'sanitize_callback' => function ($val) {
            return in_array($val, ['primary', 'outline'], true) ? $val : 'primary';
        },
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_cta_variant', [
        'type' => 'select',
        'section' => 'webnova_header',
        'label' => __('Variante del CTA', 'webnova-theme'),
        'choices' => [
            'primary' => __('Primario (Naranja)', 'webnova-theme'),
            'outline' => __('Borde (Contorno)', 'webnova-theme'),
        ],
    ]);
});
