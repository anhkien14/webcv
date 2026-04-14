<?php

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
 require_once get_template_directory() . '/libs/magical-plugin-activation/magical-plugin-activation.php';
/**
 * Advanced integration with custom plugin configuration
 */
function my_theme_advanced_plugin_system($plugins) {
    
   
    // Define custom plugins specific to your theme
    
    $plugins['magical-posts-display'] = array(
            'name' => __('Magical Posts Display', 'resume-x'),
            'slug' => 'magical-posts-display',
            'file' => 'magical-posts-display/magical-posts-display.php',
            'description' => __('Display posts in various ways with this plugin.', 'resume-x'),
            'category' => 'Posts',
            'required' => false,
		);
		$plugins ['click-to-top'] = array(
            'name' => __('Click To Top', 'resume-x'),
            'slug' => 'click-to-top',
            'file' => 'click-to-top/click-to-top.php',
            'description' => __('Click To Top Wordpress plugin', 'resume-x'),
		);
		$plugins ['magical-blocks'] = array(
            'name' => __('Magical Blocks', 'resume-x'),
            'slug' => 'magical-blocks',
            'file' => 'magical-blocks/magical-blocks.php',
            'description' => __('Magical Blocks Wordpress plugin', 'resume-x'),
		);
		

        
   
    
    return $plugins;
}
add_filter('magical_add_recommended_plugins', 'my_theme_advanced_plugin_system');




