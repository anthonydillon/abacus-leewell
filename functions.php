<?php
  /**
  * Register widget area.
  */
  function abacusleewell_widgets_init() {
    register_post_type( 'product', array(
      'labels' => array(
        'name' => 'Products',
        'singular_name' => 'Product',
       ),
      'description' => 'Abacus Leewell products',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 20,
      'rewrite' => array( 'slug' => 'product' ),
      'supports' => array( 'title', 'editor' )
    ));
  }
  add_action( 'widgets_init', 'abacusleewell_widgets_init' );

  remove_filter( 'get_post_meta', 'wpautop' );
?>
