<?php
/**
 * Global navigation bar.
 */
?>

<nav id="nav-global" class="nav-global can-stick">
  <div class="content">
    <div class="logo"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>

    <div class="nav-mozilla">
      <span class="toggle" role="button" aria-controls="nav-mozilla-menu" aria-expanded="false" tabindex="0"><?php _e('Menu', 'frontierline'); ?></span>
      <ul class="nav-mozilla-menu" id="nav-mozilla-menu">
        <?php
        wp_nav_menu(array('theme_location' => 'site_menu_top', 'container' => false, 'menu_class' => 'content', 'fallback_cb' => 'false'));
        ?>
      </ul>
    </div>

    <a class="page-top" href="#masthead" title="<?php _e('Go to the top of the page', 'frontierline'); ?>"><?php _e('Top', 'frontierline'); ?></a>
  </div>
</nav>
