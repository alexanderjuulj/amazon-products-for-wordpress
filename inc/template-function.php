<?php
// Load the single-recipe.php template from the plugin directory
function apfwp_single_template($single_template) {
    global $post;
    
    // Check if the current post is a "Recipe" post
    if ($post->post_type == 'amazon_product') {
        // Set the template file path to the one inside your plugin
        $plugin_single_template = plugin_dir_path(__FILE__) . '../templates/single-amazon-product.php';

        // Check if the template file exists
        if (file_exists($plugin_single_template)) {
            return $plugin_single_template;
        }
    }

    return $single_template;
}
add_filter('single_template', 'apfwp_single_template');