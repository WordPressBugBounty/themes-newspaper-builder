<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme newspaper-builder for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'newspaper_builder_register_required_plugins', 0);
function newspaper_builder_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'newspaper-builder',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function newspaper_builder_pattern_styles()
{
	wp_enqueue_style('newspaper-builder-patterns', get_template_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('newspaper-builder-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'newspaper_builder_pattern_styles');


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Newspaper Builder pattern categories
function newspaper_builder_register_block_pattern_categories()
{
	register_block_pattern_category(
		'layout',
		array(
			'label'       => __('Layout', 'newspaper-builder'),
			'description' => __('Newspaper Builder layout patterns', 'newspaper-builder'),
		)
	);
	register_block_pattern_category(
		'Content',
		array(
			'label'       => __('Content', 'newspaper-builder'),
			'description' => __('Newspaper Builder content patterns', 'newspaper-builder'),
		)
	);
	register_block_pattern_category(
		'Contact',
		array(
			'label'       => __('Contact', 'newspaper-builder'),
			'description' => __('Newspaper Builder contact patterns', 'newspaper-builder'),
		)
	);
}

add_action('init', 'newspaper_builder_register_block_pattern_categories');





// Initialize information content
require_once trailingslashit(get_template_directory()) . 'inc/vendor/autoload.php';

use SuperbThemesThemeInformationContent\ThemeEntryPoint;
add_action("init", function () {
ThemeEntryPoint::init([
    'type' => 'block', // block / classic
    'theme_url' => 'https://superbthemes.com/newspaper-builder/',
    'demo_url' => 'https://superbthemes.com/demo/newspaper-builder/',
    'features' => array(
    	array(
    		'title' => __("Theme Designer", "newspaper-builder"),
    		'icon' => "lego-duotone.webp",
    		'description' => __("Choose from over 300 designs for footers, headers, landing pages & all other theme parts.", "newspaper-builder")
    	),
    	   	array(
    		'title' => __("Editor Enhancements", "newspaper-builder"),
    		'icon' => "1-1.png",
    		'description' => __("Enhanced editor experience, grid systems, improved block control and much more.", "newspaper-builder")
    	),
    	array(
    		'title' => __("Custom CSS", "newspaper-builder"),
    		'icon' => "2-1.png",
    		'description' => __("Add custom CSS with syntax highlight, custom display settings, and minified output.", "newspaper-builder")
    	),
    	array(
    		'title' => __("Animations", "newspaper-builder"),
    		'icon' => "wave-triangle-duotone.webp",
    		'description' => __("Animate any element on your website with one click. Choose from over 50+ animations.", "newspaper-builder")
    	),
    	array(
    		'title' => __("WooCommerce Integration", "newspaper-builder"),
    		'icon' => "shopping-cart-duotone.webp",
    		'description' => __("Choose from over 100 unique WooCommerce designs for your e-commerce store.", "newspaper-builder")
    	),
    	array(
    		'title' => __("Responsive Controls", "newspaper-builder"),
    		'icon' => "arrows-out-line-horizontal-duotone.webp",
    		'description' => __("Make any theme mobile-friendly with SuperbThemes responsive controls.", "newspaper-builder")
    	)
    )
]);
});