<?php

// Register menus

function register_theme_menus() {
  register_nav_menus(array(
    'HEADER_NAV' => 'HEADER_NAV'
  ));
}
add_action('init', 'register_theme_menus');


// // Register custom blocks

// if (function_exists('acf_register_block_type')) {
//   add_action('acf/init', 'register_acf_block_types');
// }

// function register_acf_block_types() {
//   acf_register_block_type(
//     array(
//       'name' => 'hero',
//       'title' => __('Hero'),
//       'description' => 'Hero Block',
//       'render_template' => 'blocks/hero/hero.php',
//       'enqueue_style' => 'blocks/hero/styles.css',
//       'icon' => 'editor-paste-text',
//       'keywords' => array('section', 'hero')
//     )
//   );
// }
