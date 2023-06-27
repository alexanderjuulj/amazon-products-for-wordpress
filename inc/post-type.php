<?php 
// Register the custom post type for Amazon products
function apfwp_register_post_type() {
    register_post_type('amazon_product',
        array(
            'labels' => array(
                'name'                  => __('Amazon', 'apfwp'),
                'singular_name'         => __('Amazon Product', 'apfwp'),
                'menu_name'             => _x( 'Amazon', 'Admin Menu text', 'apfwp' ),
                'name_admin_bar'        => _x( 'Amazon Product', 'Add New on Toolbar', 'apfwp' ),
                'add_new'               => __( 'Add New', 'apfwp' ),
                'add_new_item'          => __( 'Add New Amazon Product', 'apfwp' ),
                'new_item'              => __( 'New Amazon Product', 'apfwp' ),
                'edit_item'             => __( 'Edit Amazon Product', 'apfwp' ),
                'view_item'             => __( 'View Amazon Product', 'apfwp' ),
                'all_items'             => __( 'All Products', 'apfwp' ),
                'search_items'          => __( 'Search Amazon Products', 'apfwp' ),
                'parent_item_colon'     => __( 'Parent Amazon Products:', 'apfwp' ),
                'not_found'             => __( 'No Amazon Products found.', 'apfwp' ),
                'not_found_in_trash'    => __( 'No Amazon Products found in Trash.', 'apfwp' ),
                'featured_image'        => _x( 'Amazon Product Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'apfwp' ),
                'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'apfwp' ),
                'remove_featured_image' => _x( 'Remove image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'apfwp' ),
                'use_featured_image'    => _x( 'Use as image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'apfwp' ),
                'archives'              => _x( 'Amazon Product archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'apfwp' ),
                'insert_into_item'      => _x( 'Insert into Amazon Product', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'apfwp' ),
                'uploaded_to_this_item' => _x( 'Uploaded to this Amazon Product', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'apfwp' ),
                'filter_items_list'     => _x( 'Filter Amazon Products list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'apfwp' ),
                'items_list_navigation' => _x( 'Amazon Products list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'apfwp' ),
                'items_list'            => _x( 'Amazon Products list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'apfwp' ),
            ),
            'public'            => true,
            'has_archive'       => true,
    		'menu_position'     => 21,
            'menu_icon'         => 'dashicons-amazon',
            'rewrite'           => array( 'slug' => 'amazon-product' ), // my custom slug
            'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        )
    );
}
add_action('init', 'apfwp_register_post_type');