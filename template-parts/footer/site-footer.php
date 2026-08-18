<?php
/**
 * Footer principal WebNova.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('webnova_theme_footer_icon')) {
    function webnova_theme_footer_icon(string $icon): string
    {
        $icons = [
            'chevron' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="m9 18 6-6-6-6"/></svg>',
            'check' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M20 6 9 17l-5-5"/></svg>',
            'mail' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>',
            'whatsapp' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M20.5 11.8a8.4 8.4 0 0 1-12.4 7.4L4 20.4l1.3-4a8.4 8.4 0 1 1 15.2-4.6Z"/><path d="M9.2 8.5c.2-.4.4-.4.7-.4h.5c.2 0 .4.1.5.4l.7 1.6c.1.2.1.4 0 .5l-.4.5c-.1.2-.2.3 0 .6.4.8 1.2 1.6 2 2 .3.2.4.1.6 0l.6-.7c.2-.2.4-.2.6-.1l1.5.7c.2.1.4.3.4.5 0 .5-.4 1.2-.8 1.5-.5.4-1.4.5-2.8-.1-2.4-1-4.1-2.8-5.1-5.1-.5-1.3-.4-2.1.1-2.5.1-.2.3-.3.4-.5Z"/></svg>',
            'chat' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4Z"/></svg>',
            'shield' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="m9 12 2 2 4-5"/></svg>',
            'facebook' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M14 8h2V4h-3a5 5 0 0 0-5 5v3H6v4h2v4h4v-4h3l1-4h-4V9a1 1 0 0 1 1-1Z"/></svg>',
            'instagram' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><rect x="4" y="4" width="16" height="16" rx="5"/><circle cx="12" cy="12" r="3.5"/><path d="M17.5 6.8h.01"/></svg>',
            'linkedin' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M6.5 10v8"/><path d="M10.5 18v-8"/><path d="M10.5 13.5a3.5 3.5 0 0 1 7 0V18"/><path d="M6.5 6.5h.01"/></svg>',
            'youtube' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>',
            'phone' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
            'map-pin' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>',
            'clock' => '<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        ];

        return $icons[$icon] ?? '';
    }
}

if (! function_exists('webnova_theme_footer_whatsapp_url')) {
    function webnova_theme_footer_whatsapp_url(string $configured_url, string $number): string
    {
        if ($configured_url !== '') {
            return $configured_url;
        }

        $digits = preg_replace('/\D+/', '', $number);

        return $digits ? 'https://wa.me/' . $digits : '';
    }
}

$footer_style = sanitize_key((string) get_theme_mod('webnova_footer_style', 'dark'));
$footer_logo_id = absint(get_theme_mod('webnova_footer_logo', 0));
$business_name = trim((string) get_theme_mod('webnova_footer_business_name', ''));
$site_name = get_bloginfo('name');
$display_name = $business_name !== '' ? $business_name : $site_name;
$description = trim((string) get_theme_mod('webnova_footer_description', __('Soluciones web claras, rapidas y faciles de administrar.', 'webnova-theme')));
$quick_title = trim((string) get_theme_mod('webnova_footer_quick_title', __('Enlaces rapidos', 'webnova-theme')));
$footer_menu_id = absint(get_theme_mod('webnova_footer_menu_id', 0));

$contact_title = trim((string) get_theme_mod('webnova_footer_contact_title', __('Contacto', 'webnova-theme')));
$phone = trim((string) get_theme_mod('webnova_footer_contact_phone', ''));
$email = trim((string) get_theme_mod('webnova_footer_email', 'hola@webnova.demo'));
$whatsapp_number = trim((string) get_theme_mod('webnova_footer_whatsapp_number', '+57 300 111 2233'));
$whatsapp_url = webnova_theme_footer_whatsapp_url(trim((string) get_theme_mod('webnova_footer_whatsapp_url', '')), $whatsapp_number);
$address = trim((string) get_theme_mod('webnova_footer_contact_address', ''));
$city = trim((string) get_theme_mod('webnova_footer_contact_city', ''));
$hours = trim((string) get_theme_mod('webnova_footer_contact_hours', ''));
$map_url = trim((string) get_theme_mod('webnova_footer_contact_map_url', ''));

$show_cta = (bool) get_theme_mod('webnova_footer_show_cta', true);
$cta_text = trim((string) get_theme_mod('webnova_footer_cta_text', __('Hablemos', 'webnova-theme')));
$cta_url = trim((string) get_theme_mod('webnova_footer_cta_url', ''));
if ($cta_url === '' && $whatsapp_url !== '') {
    $cta_url = $whatsapp_url;
}
$cta_variant = sanitize_key((string) get_theme_mod('webnova_footer_cta_variant', 'primary'));
$cta_target = (bool) get_theme_mod('webnova_footer_cta_target', false);
$cta_helper = trim((string) get_theme_mod('webnova_footer_cta_helper', __('Te respondemos en menos de 24 horas.', 'webnova-theme')));

$copyright = (string) get_theme_mod('webnova_footer_copyright', __('© [year] [site_name]. Todos los derechos reservados.', 'webnova-theme'));
$copyright = str_replace(
    ['[year]', '[site_name]'],
    [wp_date('Y'), $site_name],
    $copyright
);
$show_legal = (bool) get_theme_mod('webnova_footer_show_legal', true);
$privacy_url = trim((string) get_theme_mod('webnova_footer_privacy_url', ''));
$privacy_url = $privacy_url !== '' ? $privacy_url : get_privacy_policy_url();
$terms_url = trim((string) get_theme_mod('webnova_footer_terms_url', ''));

$show_credits = (bool) get_theme_mod('webnova_footer_show_credits', true);
$credits_text = trim((string) get_theme_mod('webnova_footer_credits_text', __('Desarrollado por WebNova', 'webnova-theme')));
$credits_url = trim((string) get_theme_mod('webnova_footer_credits_url', 'https://webnova.co'));

$social_links = [
    'facebook' => [
        'label' => __('Facebook', 'webnova-theme'),
        'url' => trim((string) get_theme_mod('webnova_footer_social_facebook', '')),
    ],
    'instagram' => [
        'label' => __('Instagram', 'webnova-theme'),
        'url' => trim((string) get_theme_mod('webnova_footer_social_instagram', '')),
    ],
    'linkedin' => [
        'label' => __('LinkedIn', 'webnova-theme'),
        'url' => trim((string) get_theme_mod('webnova_footer_social_linkedin', '')),
    ],
    'whatsapp' => [
        'label' => __('WhatsApp', 'webnova-theme'),
        'url' => trim((string) get_theme_mod('webnova_footer_social_whatsapp', '')),
    ],
    'youtube' => [
        'label' => __('YouTube', 'webnova-theme'),
        'url' => trim((string) get_theme_mod('webnova_footer_social_youtube', '')),
    ],
];
$has_social_links = false;

foreach ($social_links as $social) {
    if ($social['url'] !== '') {
        $has_social_links = true;
        break;
    }
}
$footer_classes = 'webnova-footer webnova-footer--' . $footer_style;
?>

<footer class="<?php echo esc_attr($footer_classes); ?>" role="contentinfo">
    <div class="webnova-footer__main">
        <div class="webnova-footer__grid">
            <section class="webnova-footer__brand" aria-label="<?php esc_attr_e('Identidad del sitio', 'webnova-theme'); ?>">
                <?php if ($footer_logo_id) : ?>
                    <a class="webnova-footer__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php echo wp_get_attachment_image($footer_logo_id, 'medium', false, ['class' => 'webnova-footer__logo']); ?>
                    </a>
                <?php elseif (has_custom_logo()) : ?>
                    <?php echo get_custom_logo(); ?>
                <?php else : ?>
                    <a class="webnova-footer__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <span class="webnova-footer__site-name"><?php echo esc_html($display_name); ?></span>
                    </a>
                <?php endif; ?>

                <?php if ($footer_logo_id || has_custom_logo()) : ?>
                    <h2 class="webnova-footer__business-name"><?php echo esc_html($display_name); ?></h2>
                <?php endif; ?>

                <?php if ($description !== '') : ?>
                    <p class="webnova-footer__description"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

                <?php if ($has_social_links) : ?>
                    <nav class="webnova-footer__social" aria-label="<?php esc_attr_e('Redes sociales', 'webnova-theme'); ?>">
                        <?php foreach ($social_links as $network => $social) : ?>
                            <?php if ($social['url'] === '') : ?>
                                <?php continue; ?>
                            <?php endif; ?>
                            <a class="webnova-footer__social-link" href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr($social['label']); ?>">
                                <?php echo webnova_theme_footer_icon($network); ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </section>

            <nav class="webnova-footer__column" aria-label="<?php esc_attr_e('Navegación institucional', 'webnova-theme'); ?>">
                <h2 class="webnova-footer__heading"><?php esc_html_e('Navegación', 'webnova-theme'); ?></h2>
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'webnova-footer__menu',
                        'fallback_cb' => false,
                        'depth' => 1,
                    ]);
                } else {
                    ?>
                    <ul class="webnova-footer__menu">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Inicio', 'webnova-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/nosotros/')); ?>"><?php esc_html_e('Nosotros', 'webnova-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/proyectos/')); ?>"><?php esc_html_e('Proyectos', 'webnova-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/noticias/')); ?>"><?php esc_html_e('Noticias', 'webnova-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Contacto', 'webnova-theme'); ?></a></li>
                    </ul>
                    <?php
                }
                ?>
            </nav>

            <nav class="webnova-footer__column" aria-label="<?php esc_attr_e('Enlaces rapidos', 'webnova-theme'); ?>">
                <?php if ($quick_title !== '') : ?>
                    <h2 class="webnova-footer__heading"><?php echo esc_html($quick_title); ?></h2>
                <?php endif; ?>

                <?php
                if ($footer_menu_id || has_nav_menu('webnova_footer_menu')) {
                    wp_nav_menu([
                        'theme_location' => $footer_menu_id ? '' : 'webnova_footer_menu',
                        'menu' => $footer_menu_id ?: '',
                        'container' => false,
                        'menu_class' => 'webnova-footer__menu',
                        'fallback_cb' => false,
                        'depth' => 1,
                    ]);
                } else {
                    ?>
                    <ul class="webnova-footer__menu">
                        <?php if ($privacy_url !== '') : ?>
                            <li><a href="<?php echo esc_url($privacy_url); ?>"><?php esc_html_e('Politica de privacidad', 'webnova-theme'); ?></a></li>
                        <?php endif; ?>
                        <?php if ($terms_url !== '') : ?>
                            <li><a href="<?php echo esc_url($terms_url); ?>"><?php esc_html_e('Terminos y condiciones', 'webnova-theme'); ?></a></li>
                        <?php endif; ?>
                    </ul>
                    <?php
                }
                ?>
            </nav>

            <section class="webnova-footer__column webnova-footer__contact" aria-labelledby="webnova-footer-contact-title">
                <?php if ($contact_title !== '') : ?>
                    <h2 id="webnova-footer-contact-title" class="webnova-footer__heading"><?php echo esc_html($contact_title); ?></h2>
                <?php endif; ?>

                <ul class="webnova-footer__contact-list">
                    <?php if ($phone !== '') : ?>
                        <li>
                            <span class="webnova-footer__contact-icon"><?php echo webnova_theme_footer_icon('phone'); ?></span>
                            <a href="<?php echo esc_url('tel:' . preg_replace('/[^\d+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if ($email !== '') : ?>
                        <li>
                            <span class="webnova-footer__contact-icon"><?php echo webnova_theme_footer_icon('mail'); ?></span>
                            <a href="<?php echo esc_url('mailto:' . sanitize_email($email)); ?>"><?php echo antispambot(esc_html($email)); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if ($whatsapp_number !== '') : ?>
                        <li>
                            <span class="webnova-footer__contact-icon"><?php echo webnova_theme_footer_icon('whatsapp'); ?></span>
                            <?php if ($whatsapp_url !== '') : ?>
                                <a href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo esc_html(sprintf(__('WhatsApp: %s', 'webnova-theme'), $whatsapp_number)); ?>
                                </a>
                            <?php else : ?>
                                <span><?php echo esc_html(sprintf(__('WhatsApp: %s', 'webnova-theme'), $whatsapp_number)); ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>

                    <?php if ($address !== '') : ?>
                        <li>
                            <span class="webnova-footer__contact-icon"><?php echo webnova_theme_footer_icon('map-pin'); ?></span>
                            <div>
                                <?php if ($map_url !== '') : ?>
                                    <a href="<?php echo esc_url($map_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($address); ?></a>
                                <?php else : ?>
                                    <span><?php echo esc_html($address); ?></span>
                                <?php endif; ?>
                                <?php if ($city !== '') : ?>
                                    <br><span class="webnova-footer__contact-city"><?php echo esc_html($city); ?></span>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if ($hours !== '') : ?>
                        <li>
                            <span class="webnova-footer__contact-icon"><?php echo webnova_theme_footer_icon('clock'); ?></span>
                            <span><?php echo esc_html($hours); ?></span>
                        </li>
                    <?php endif; ?>
                </ul>

                <?php if ($show_cta && $cta_text !== '' && $cta_url !== '') : ?>
                    <a class="webnova-footer__cta webnova-footer__cta--<?php echo esc_attr($cta_variant); ?>" href="<?php echo esc_url($cta_url); ?>" <?php echo $cta_target ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
                        <span><?php echo esc_html($cta_text); ?></span>
                        <?php echo webnova_theme_footer_icon('chevron'); ?>
                    </a>
                <?php endif; ?>

                <?php if ($cta_helper !== '') : ?>
                    <p class="webnova-footer__helper"><?php echo esc_html($cta_helper); ?></p>
                <?php endif; ?>
            </section>
        </div>
    </div>

    <div class="webnova-footer__bottom">
        <div class="webnova-footer__bottom-inner">
            <p class="webnova-footer__copyright">
                <span class="webnova-footer__shield"><?php echo webnova_theme_footer_icon('shield'); ?></span>
                <span><?php echo esc_html($copyright); ?></span>
            </p>

            <div class="webnova-footer__legal-credits">
                <?php if ($show_legal && ($privacy_url !== '' || $terms_url !== '')) : ?>
                    <nav class="webnova-footer__legal" aria-label="<?php esc_attr_e('Enlaces legales', 'webnova-theme'); ?>">
                        <?php if ($privacy_url !== '') : ?>
                            <a href="<?php echo esc_url($privacy_url); ?>"><?php esc_html_e('Politica de privacidad', 'webnova-theme'); ?></a>
                        <?php endif; ?>
                        <?php if ($terms_url !== '') : ?>
                            <a href="<?php echo esc_url($terms_url); ?>"><?php esc_html_e('Terminos y condiciones', 'webnova-theme'); ?></a>
                        <?php endif; ?>
                    </nav>
                <?php endif; ?>
                
                <?php if ($show_credits && $credits_text !== '') : ?>
                    <div class="webnova-footer__credits">
                        <?php if ($credits_url !== '') : ?>
                            <a href="<?php echo esc_url($credits_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($credits_text); ?></a>
                        <?php else : ?>
                            <span><?php echo esc_html($credits_text); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
