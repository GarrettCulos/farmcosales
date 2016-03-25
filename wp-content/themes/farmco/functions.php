<?php 
/**
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 */


add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'product_post',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

    )
  );
}


?>