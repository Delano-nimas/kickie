<?php
/**
 * Zorgt dat de meegeleverde site direct actief is na een schone WordPress-installatie.
 */

add_action('after_switch_theme', static function (): void {
    update_option('blogname', 'Pro Athletics Kickboxing');
    update_option('blogdescription', 'Train hard. Fight smart.');
});

add_action('after_setup_theme', static function (): void {
    if (wp_get_theme()->get_stylesheet() !== 'pro-athletics' && wp_get_theme('pro-athletics')->exists()) {
        switch_theme('pro-athletics');
    }
}, 99);
