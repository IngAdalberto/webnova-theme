<?php
/**
 * Opciones del personalizador para el footer WebNova.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('webnova_theme_sanitize_footer_menu')) {
    function webnova_theme_sanitize_footer_menu($value): int
    {
        $menu_id = absint($value);

        return wp_get_nav_menu_object($menu_id) ? $menu_id : 0;
    }
}

add_action('customize_register', function (WP_Customize_Manager $wp_customize): void {
    $wp_customize->add_section('webnova_footer', [
        'title' => __('Footer WebNova', 'webnova-theme'),
        'priority' => 36,
    ]);

    $wp_customize->add_setting('webnova_footer_style', [
        'default' => 'dark',
        'sanitize_callback' => 'sanitize_key',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_style', [
        'section' => 'webnova_footer',
        'label' => __('Estilo visual del footer', 'webnova-theme'),
        'type' => 'select',
        'choices' => [
            'dark' => __('Azul Institucional', 'webnova-theme'),
            'light' => __('Claro', 'webnova-theme'),
        ],
        'priority' => 5,
    ]);

    $wp_customize->add_setting('webnova_footer_logo', [
        'default' => 0,
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'webnova_footer_logo', [
        'section' => 'webnova_footer',
        'label' => __('Logo del footer', 'webnova-theme'),
        'description' => __('Si no cargas un logo especifico, se usara el logo general del sitio.', 'webnova-theme'),
        'mime_type' => 'image',
        'priority' => 10,
    ]));

    $wp_customize->add_setting('webnova_footer_business_name', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_business_name', [
        'section' => 'webnova_footer',
        'label' => __('Nombre del negocio', 'webnova-theme'),
        'type' => 'text',
        'priority' => 20,
    ]);

    $wp_customize->add_setting('webnova_footer_description', [
        'default' => __('Soluciones web claras, rapidas y faciles de administrar.', 'webnova-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_description', [
        'section' => 'webnova_footer',
        'label' => __('Descripcion corta del negocio', 'webnova-theme'),
        'type' => 'textarea',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('webnova_footer_quick_title', [
        'default' => __('Enlaces rapidos', 'webnova-theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_quick_title', [
        'section' => 'webnova_footer',
        'label' => __('Titulo de enlaces rapidos', 'webnova-theme'),
        'type' => 'text',
        'priority' => 40,
    ]);

    $menus = wp_get_nav_menus();
    $menu_choices = [
        0 => __('Usar ubicacion Menú Footer WebNova', 'webnova-theme'),
    ];

    foreach ($menus as $menu) {
        $menu_choices[(int) $menu->term_id] = $menu->name;
    }

    $wp_customize->add_setting('webnova_footer_menu_id', [
        'default' => 0,
        'sanitize_callback' => 'webnova_theme_sanitize_footer_menu',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_menu_id', [
        'section' => 'webnova_footer',
        'label' => __('Menu de enlaces rapidos', 'webnova-theme'),
        'description' => __('Opcional. Si se deja en 0 intentará usar la ubicación de menú si está asignada.', 'webnova-theme'),
        'type' => 'select',
        'choices' => $menu_choices,
        'priority' => 50,
    ]);

    $wp_customize->add_setting('webnova_footer_contact_title', [
        'default' => __('Contacto', 'webnova-theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_contact_title', [
        'section' => 'webnova_footer',
        'label' => __('Titulo de contacto', 'webnova-theme'),
        'type' => 'text',
        'priority' => 90,
    ]);

    $contact_fields = [
        'webnova_footer_contact_phone' => [
            'label' => __('Telefono', 'webnova-theme'),
            'default' => '',
            'sanitize' => 'sanitize_text_field',
            'type' => 'text',
        ],
        'webnova_footer_email' => [
            'label' => __('Correo electronico', 'webnova-theme'),
            'default' => 'hola@webnova.demo',
            'sanitize' => 'sanitize_email',
            'type' => 'email',
        ],
        'webnova_footer_whatsapp_number' => [
            'label' => __('Numero de WhatsApp', 'webnova-theme'),
            'default' => '+57 300 111 2233',
            'sanitize' => 'sanitize_text_field',
            'type' => 'text',
        ],
        'webnova_footer_whatsapp_url' => [
            'label' => __('Enlace de WhatsApp', 'webnova-theme'),
            'default' => '',
            'sanitize' => 'esc_url_raw',
            'type' => 'url',
        ],
        'webnova_footer_contact_address' => [
            'label' => __('Direccion', 'webnova-theme'),
            'default' => '',
            'sanitize' => 'sanitize_text_field',
            'type' => 'text',
        ],
        'webnova_footer_contact_city' => [
            'label' => __('Ciudad', 'webnova-theme'),
            'default' => '',
            'sanitize' => 'sanitize_text_field',
            'type' => 'text',
        ],
        'webnova_footer_contact_hours' => [
            'label' => __('Horario de atencion', 'webnova-theme'),
            'default' => '',
            'sanitize' => 'sanitize_text_field',
            'type' => 'text',
        ],
        'webnova_footer_contact_map_url' => [
            'label' => __('URL del mapa de ubicacion', 'webnova-theme'),
            'default' => '',
            'sanitize' => 'esc_url_raw',
            'type' => 'url',
        ],
        'webnova_footer_cta_text' => [
            'label' => __('Texto del boton CTA', 'webnova-theme'),
            'default' => __('Hablemos', 'webnova-theme'),
            'sanitize' => 'sanitize_text_field',
            'type' => 'text',
        ],
        'webnova_footer_cta_url' => [
            'label' => __('Enlace del boton CTA', 'webnova-theme'),
            'default' => '',
            'sanitize' => 'esc_url_raw',
            'type' => 'url',
        ],
        'webnova_footer_cta_helper' => [
            'label' => __('Texto auxiliar debajo del boton', 'webnova-theme'),
            'default' => __('Te respondemos en menos de 24 horas.', 'webnova-theme'),
            'sanitize' => 'sanitize_text_field',
            'type' => 'text',
        ],
    ];

    $priority = 100;

    foreach ($contact_fields as $setting_id => $field) {
        $wp_customize->add_setting($setting_id, [
            'default' => $field['default'],
            'sanitize_callback' => $field['sanitize'],
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control($setting_id, [
            'section' => 'webnova_footer',
            'label' => $field['label'],
            'type' => $field['type'],
            'priority' => $priority,
        ]);

        $priority += 10;
    }

    $wp_customize->add_setting('webnova_footer_show_cta', [
        'default' => true,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_show_cta', [
        'section' => 'webnova_footer',
        'label' => __('Mostrar boton CTA', 'webnova-theme'),
        'type' => 'checkbox',
        'priority' => 140,
    ]);
    
    $wp_customize->add_setting('webnova_footer_cta_variant', [
        'default' => 'primary',
        'sanitize_callback' => 'sanitize_key',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_cta_variant', [
        'section' => 'webnova_footer',
        'label' => __('Variante visual del CTA', 'webnova-theme'),
        'type' => 'select',
        'choices' => [
            'primary' => __('Primario', 'webnova-theme'),
            'outline-light' => __('Borde Claro', 'webnova-theme'),
        ],
        'priority' => 141,
    ]);
    
    $wp_customize->add_setting('webnova_footer_cta_target', [
        'default' => false,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_cta_target', [
        'section' => 'webnova_footer',
        'label' => __('Abrir CTA en nueva pestaña', 'webnova-theme'),
        'type' => 'checkbox',
        'priority' => 142,
    ]);

    $social_fields = [
        'facebook' => __('Facebook', 'webnova-theme'),
        'instagram' => __('Instagram', 'webnova-theme'),
        'linkedin' => __('LinkedIn', 'webnova-theme'),
        'whatsapp' => __('WhatsApp', 'webnova-theme'),
        'youtube' => __('YouTube', 'webnova-theme'),
    ];

    $priority = 160;

    foreach ($social_fields as $network => $label) {
        $setting_id = 'webnova_footer_social_' . $network;

        $wp_customize->add_setting($setting_id, [
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control($setting_id, [
            'section' => 'webnova_footer',
            'label' => sprintf(__('URL de %s', 'webnova-theme'), $label),
            'type' => 'url',
            'priority' => $priority,
        ]);

        $priority += 10;
    }

    $wp_customize->add_setting('webnova_footer_copyright', [
        'default' => __('© [year] [site_name]. Todos los derechos reservados.', 'webnova-theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_copyright', [
        'section' => 'webnova_footer',
        'label' => __('Texto de copyright', 'webnova-theme'),
        'description' => __('Puedes usar [year] y [site_name].', 'webnova-theme'),
        'type' => 'text',
        'priority' => 210,
    ]);

    $wp_customize->add_setting('webnova_footer_privacy_url', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_privacy_url', [
        'section' => 'webnova_footer',
        'label' => __('Enlace de politica de privacidad', 'webnova-theme'),
        'type' => 'url',
        'priority' => 220,
    ]);

    $wp_customize->add_setting('webnova_footer_terms_url', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_terms_url', [
        'section' => 'webnova_footer',
        'label' => __('Enlace de terminos y condiciones', 'webnova-theme'),
        'type' => 'url',
        'priority' => 230,
    ]);

    $wp_customize->add_setting('webnova_footer_show_legal', [
        'default' => true,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_show_legal', [
        'section' => 'webnova_footer',
        'label' => __('Mostrar enlaces legales', 'webnova-theme'),
        'type' => 'checkbox',
        'priority' => 240,
    ]);
    
    $wp_customize->add_setting('webnova_footer_show_credits', [
        'default' => true,
        'sanitize_callback' => 'webnova_theme_sanitize_checkbox',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_show_credits', [
        'section' => 'webnova_footer',
        'label' => __('Mostrar creditos de WebNova', 'webnova-theme'),
        'type' => 'checkbox',
        'priority' => 250,
    ]);
    
    $wp_customize->add_setting('webnova_footer_credits_text', [
        'default' => __('Desarrollado por WebNova', 'webnova-theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_credits_text', [
        'section' => 'webnova_footer',
        'label' => __('Texto de los creditos', 'webnova-theme'),
        'type' => 'text',
        'priority' => 260,
    ]);
    
    $wp_customize->add_setting('webnova_footer_credits_url', [
        'default' => 'https://webnova.co',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('webnova_footer_credits_url', [
        'section' => 'webnova_footer',
        'label' => __('Enlace de los creditos', 'webnova-theme'),
        'type' => 'url',
        'priority' => 270,
    ]);
});
