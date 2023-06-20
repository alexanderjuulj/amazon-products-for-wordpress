<?php
//hook into the init action and call create_book_taxonomies when it fires
  
add_action( 'init', 'apfp_post_type_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function apfp_post_type_taxonomy() {
  
    // Add new taxonomy, make it hierarchical like categories
    // first do the translations part for GUI
  
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      =>  __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ), 
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );    

    // Now register the taxonomy
    register_taxonomy('amazon-categories', array('amazon_product'), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'amazon-categories' ),
    ));
  
}