<?php
/**
 * Branding (Logo y título) del header.
 *
 * @package WebNovaTheme
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<div class="webnova-header__brand">
    <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
    <?php else : ?>
        <a class="webnova-header__site-name" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <?php echo esc_html(get_bloginfo('name')); ?>
        </a>
    <?php endif; ?>
</div>
