<?php

// Register menus

function register_theme_menus() {
  register_nav_menus(array(
    'HEADER_NAV' => 'HEADER_NAV'
  ));
}
add_action('init', 'register_theme_menus');



if (!function_exists('write_log')) {

  function write_log($log) {
      if (true === WP_DEBUG) {
          if (is_array($log) || is_object($log)) {
              error_log(print_r($log, true));
          } else {
              error_log($log);
          }
      }
  }

}