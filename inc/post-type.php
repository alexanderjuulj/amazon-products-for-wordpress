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
            'menu_icon'         => 'data:image/svg+xml;base64,' . base64_encode('<svg height="2500" viewBox="2.167 .438 251.038 259.969" width="2500" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="m221.503 210.324c-105.235 50.083-170.545 8.18-212.352-17.271-2.587-1.604-6.984.375-3.169 4.757 13.928 16.888 59.573 57.593 119.153 57.593 59.621 0 95.09-32.532 99.527-38.207 4.407-5.627 1.294-8.731-3.16-6.872zm29.555-16.322c-2.826-3.68-17.184-4.366-26.22-3.256-9.05 1.078-22.634 6.609-21.453 9.93.606 1.244 1.843.686 8.06.127 6.234-.622 23.698-2.826 27.337 1.931 3.656 4.79-5.57 27.608-7.255 31.288-1.628 3.68.622 4.629 3.68 2.178 3.016-2.45 8.476-8.795 12.14-17.774 3.639-9.028 5.858-21.622 3.71-24.424z" fill="#f90" fill-rule="nonzero"/><path d="m150.744 108.13c0 13.141.332 24.1-6.31 35.77-5.361 9.489-13.853 15.324-23.341 15.324-12.952 0-20.495-9.868-20.495-24.432 0-28.75 25.76-33.968 50.146-33.968zm34.015 82.216c-2.23 1.992-5.456 2.135-7.97.806-11.196-9.298-13.189-13.615-19.356-22.487-18.502 18.882-31.596 24.527-55.601 24.527-28.37 0-50.478-17.506-50.478-52.565 0-27.373 14.85-46.018 35.96-55.126 18.313-8.066 43.884-9.489 63.43-11.718v-4.365c0-8.018.616-17.506-4.08-24.432-4.128-6.215-12.003-8.777-18.93-8.777-12.856 0-24.337 6.594-27.136 20.257-.57 3.037-2.799 6.026-5.835 6.168l-32.735-3.51c-2.751-.618-5.787-2.847-5.028-7.07 7.543-39.66 43.36-51.616 75.43-51.616 16.415 0 37.858 4.365 50.81 16.795 16.415 15.323 14.849 35.77 14.849 58.02v52.565c0 15.798 6.547 22.724 12.714 31.264 2.182 3.036 2.657 6.69-.095 8.966-6.879 5.74-19.119 16.415-25.855 22.393l-.095-.095" fill="#000"/><path d="m221.503 210.324c-105.235 50.083-170.545 8.18-212.352-17.271-2.587-1.604-6.984.375-3.169 4.757 13.928 16.888 59.573 57.593 119.153 57.593 59.621 0 95.09-32.532 99.527-38.207 4.407-5.627 1.294-8.731-3.16-6.872zm29.555-16.322c-2.826-3.68-17.184-4.366-26.22-3.256-9.05 1.078-22.634 6.609-21.453 9.93.606 1.244 1.843.686 8.06.127 6.234-.622 23.698-2.826 27.337 1.931 3.656 4.79-5.57 27.608-7.255 31.288-1.628 3.68.622 4.629 3.68 2.178 3.016-2.45 8.476-8.795 12.14-17.774 3.639-9.028 5.858-21.622 3.71-24.424z" fill="#f90" fill-rule="nonzero"/><path d="m150.744 108.13c0 13.141.332 24.1-6.31 35.77-5.361 9.489-13.853 15.324-23.341 15.324-12.952 0-20.495-9.868-20.495-24.432 0-28.75 25.76-33.968 50.146-33.968zm34.015 82.216c-2.23 1.992-5.456 2.135-7.97.806-11.196-9.298-13.189-13.615-19.356-22.487-18.502 18.882-31.596 24.527-55.601 24.527-28.37 0-50.478-17.506-50.478-52.565 0-27.373 14.85-46.018 35.96-55.126 18.313-8.066 43.884-9.489 63.43-11.718v-4.365c0-8.018.616-17.506-4.08-24.432-4.128-6.215-12.003-8.777-18.93-8.777-12.856 0-24.337 6.594-27.136 20.257-.57 3.037-2.799 6.026-5.835 6.168l-32.735-3.51c-2.751-.618-5.787-2.847-5.028-7.07 7.543-39.66 43.36-51.616 75.43-51.616 16.415 0 37.858 4.365 50.81 16.795 16.415 15.323 14.849 35.77 14.849 58.02v52.565c0 15.798 6.547 22.724 12.714 31.264 2.182 3.036 2.657 6.69-.095 8.966-6.879 5.74-19.119 16.415-25.855 22.393l-.095-.095" fill="#000"/></g></svg>'),
            'rewrite'           => array( 'slug' => 'amazon-product' ), // my custom slug
            'supports'          => array( 'title', 'editor', 'thumbnail' ),
        )
    );
}
add_action('init', 'apfwp_register_post_type');