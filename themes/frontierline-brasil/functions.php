<?php
if (! function_exists('frontierlinechild_setup')):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * To override frontierline_setup() in a child theme, add your own frontierline_setup
 * function to your child theme's functions.php file.
 */
function frontierlinechild_setup() {
  register_nav_menu('site_menu_top', __('Topbar Menu', 'frontierline'));
}
endif;
add_action('after_setup_theme', 'frontierlinechild_setup');
