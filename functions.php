<?php
/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  
  register_taxonomy('artist', 'post', array(

    // Hierarchical taxonomy (like categories)
    'hierarchical' => false,

    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Artists', 'taxonomy general name' ),
      'singular_name' => _x( 'Artist', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Artists' ),
      'all_items' => __( 'All Artists' ),
      'parent_item' => __( 'Parent Artist' ),
      'parent_item_colon' => __( 'Parent Artist:' ),
      'edit_item' => __( 'Edit Artist' ),
      'update_item' => __( 'Update Artist' ),
      'add_new_item' => __( 'Add New Artist' ),
      'new_item_name' => __( 'New Artist Name' ),
      'menu_name' => __( 'Artists' ),
    ),

    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'music/artists',
      'with_front' => true,
      'hierarchical' => false
    ),
  ));

  
  register_taxonomy('genre', 'post', array(

    // Hierarchical taxonomy (like categories)
    'hierarchical' => false,

    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Genres', 'taxonomy general name' ),
      'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Genres' ),
      'all_items' => __( 'All Genres' ),
      'parent_item' => __( 'Main Genre' ),
      'parent_item_colon' => __( 'Main Genre:' ),
      'edit_item' => __( 'Edit Genre' ),
      'update_item' => __( 'Update Genre' ),
      'add_new_item' => __( 'Add New Genre' ),
      'new_item_name' => __( 'New Genre Name' ),
      'menu_name' => __( 'Genres' ),
    ),
    
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'music/genres',
      'with_front' => true,
      'hierarchical' => false
    ),
  ));

  register_taxonomy('genre', 'post', array(

    // Hierarchical taxonomy (like categories)
    'hierarchical' => false,

    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Genres', 'taxonomy general name' ),
      'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Genres' ),
      'all_items' => __( 'All Genres' ),
      'parent_item' => __( 'Main Genre' ),
      'parent_item_colon' => __( 'Main Genre:' ),
      'edit_item' => __( 'Edit Genre' ),
      'update_item' => __( 'Update Genre' ),
      'add_new_item' => __( 'Add New Genre' ),
      'new_item_name' => __( 'New Genre Name' ),
      'menu_name' => __( 'Genres' ),
    ),
    
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'music/genres',
      'with_front' => true,
      'hierarchical' => false
    ),
  ));

  register_taxonomy('year', 'post', array(

    // Hierarchical taxonomy (like categories)
    'hierarchical' => false,

    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Years', 'taxonomy general name' ),
      'singular_name' => _x( 'Year', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Years' ),
      'all_items' => __( 'All Years' ),
      'parent_item' => __( 'Main Year' ),
      'parent_item_colon' => __( 'Main Year:' ),
      'edit_item' => __( 'Edit Year' ),
      'update_item' => __( 'Update Year' ),
      'add_new_item' => __( 'Add New Year' ),
      'new_item_name' => __( 'New Year Name' ),
      'menu_name' => __( 'Years' ),
    ),
    
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'music/years',
      'with_front' => true,
      'hierarchical' => false
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
add_theme_support( 'post-thumbnails' );
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
?>