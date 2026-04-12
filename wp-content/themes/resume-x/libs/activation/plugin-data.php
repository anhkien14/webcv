<?php
/**
 * Plugin Data Configuration for Resume X Theme
 * 
 * This file contains all the default plugin recommendations for the Resume X theme.
 * Plugins can be added, modified, or removed using WordPress filter hooks.
 *
 * @package Resume X
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

require get_template_directory() . '/libs/activation/activation-plugin.php';
/**
 * Get default recommended plugins array
 * 
 * This function returns the base plugin configuration that can be filtered
 * by other parts of the theme or child themes.
 *
 * @return array Default plugin configuration
 */
function resume_x_get_default_plugin_data() {
    return array(
        
        // Essential Plugins
        'magical-addons-for-elementor' => array(
            'name' => __('Magical Addons', 'resume-x'),
            'slug' => 'magical-addons-for-elementor',
            'file' => 'magical-addons-for-elementor/magical-addons-for-elementor.php',
            'description' => __('Enhance your site with a collection of magical addons for Elementor.', 'resume-x'),
            'category' => 'Essential',
            'required' => false,
            'featured' => false,
            'is_local' => false
        ),
        
        'magical-posts-display' => array(
            'name' => __('Magical Posts Display', 'resume-x'),
            'slug' => 'magical-posts-display',
            'file' => 'magical-posts-display/magical-posts-display.php',
            'description' => __('Display your posts in a magical way with this addon for Elementor.', 'resume-x'),
            'category' => 'Essential',
            'required' => false,
            'featured' => true,
            'is_local' => false
        ),
        
        'magical-blocks' => array(
            'name' => __('Magical Blocks', 'resume-x'),
            'slug' => 'magical-blocks',
            'file' => 'magical-blocks/magical-blocks.php',
            'description' => __('Add magical blocks to your content.', 'resume-x'),
            'category' => 'Utility',
            'required' => false,
            'featured' => false,
            'is_local' => false
        ),
        
        // Page Builder
        'elementor' => array(
            'name' => __('Elementor Page Builder', 'resume-x'),
            'slug' => 'elementor',
            'file' => 'elementor/elementor.php',
            'description' => __('Create beautiful pages with drag & drop page builder. Perfect for creating stunning layouts with your theme.', 'resume-x'),
            'category' => 'Page Builder',
            'required' => false,
            'featured' => true,
            'is_local' => false
        ),
        
        // Utility Plugins
        'click-to-top' => array(
            'name' => __('Click to Top', 'resume-x'),
            'slug' => 'click-to-top',
            'file' => 'click-to-top/click-to-top.php',
            'description' => __('Add a "click to top" button to your site for better user experience.', 'resume-x'),
            'category' => 'Utility',
            'required' => false,
            'featured' => false,
            'is_local' => false
        ),
        
        'easy-share-solution' => array(
            'name' => __('Easy Share Solution', 'resume-x'),
            'slug' => 'easy-share-solution',
            'file' => 'easy-share-solution/easy-share-solution.php',
            'description' => __('Easily add social sharing buttons to your content.', 'resume-x'),
            'category' => 'Utility',
            'required' => false,
            'featured' => true,
            'is_local' => false
        ),
        
        // Security
        'wp-edit-password-protected' => array(
            'name' => __('WP Edit Password Protected', 'resume-x'),
            'slug' => 'wp-edit-password-protected',
            'file' => 'wp-edit-password-protected/wp-edit-password-protected.php',
            'description' => __('Easily manage password protection for your WordPress content.', 'resume-x'),
            'category' => 'Security',
            'required' => false,
            'featured' => true,
            'is_local' => false
        ),
         
        'magical-products-display' => array(
            'name' => __('Magical Product Display', 'resume-x'),
            'slug' => 'magical-products-display',
            'file' => 'magical-products-display/magical-products-display.php',
            'description' => __('Display your Product in a magical way with this addon for Elementor.', 'resume-x'),
            'category' => 'Essential',
            'required' => false,
            'featured' => true,
            'is_local' => false
        ),
        
    );
}

/**
 * Helper function to create a properly formatted plugin array
 * 
 * @param string $slug Plugin slug/key
 * @param array $args Plugin configuration arguments
 * @return array Formatted plugin array
 */
function resume_x_create_plugin_config($slug, $args = array()) {
    $defaults = array(
        'name' => '',
        'slug' => $slug,
        'file' => $slug . '/' . $slug . '.php',
        'description' => '',
        'category' => 'Other',
        'required' => false,
        'featured' => false,
        'is_local' => false,
        'version' => '', // Optional: specify required version
        'source' => '', // Optional: for local plugins
    );
    
    return wp_parse_args($args, $defaults);
}

/**
 * Helper function to add a new plugin to the recommendations
 * 
 * @param array $plugins Existing plugins array
 * @param string $slug Plugin slug/key
 * @param array $config Plugin configuration
 * @return array Modified plugins array
 */
function resume_x_add_plugin($plugins, $slug, $config) {
    $plugins[$slug] = resume_x_create_plugin_config($slug, $config);
    return $plugins;
}

/**
 * Helper function to remove a plugin from recommendations
 * 
 * @param array $plugins Existing plugins array
 * @param string $slug Plugin slug to remove
 * @return array Modified plugins array
 */
function resume_x_remove_plugin($plugins, $slug) {
    if (isset($plugins[$slug])) {
        unset($plugins[$slug]);
    }
    return $plugins;
}

/**
 * Helper function to modify an existing plugin configuration
 * 
 * @param array $plugins Existing plugins array
 * @param string $slug Plugin slug to modify
 * @param array $changes Changes to apply
 * @return array Modified plugins array
 */
function resume_x_modify_plugin($plugins, $slug, $changes) {
    if (isset($plugins[$slug])) {
        $plugins[$slug] = wp_parse_args($changes, $plugins[$slug]);
    }
    return $plugins;
}

