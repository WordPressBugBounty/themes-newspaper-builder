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

define('SUPERBTHEMES_INFO_CONTENT_TEXT_DOMAIN', "newspaper-builder");

ThemeEntryPoint::init([
	"templates" => [
		array(
			'name' => __("Front Page", "newspaper-builder"),
			'frontpage' => true,
			'required' => true,
			'image' => 'front-page.png',
		),
		array(
			'name' => __("About", "newspaper-builder"),
			'required' => false,
			'slug' => 'about',
			'image' => 'about.png',
		),
		array(
			'name' => __("Contact", "newspaper-builder"),
			'required' => false,
			'slug' => 'contact',
			'image' => 'contact.png',
		),
		array(
			'name' => __("Blog", "newspaper-builder"),
			'template_only' => true,
			'required' => true,
			'image' => 'blog.png',
		),
		array(
			'name' => __("Page", "newspaper-builder"),
			'template_only' => true,
			'required' => true,
			'image' => 'pages.png',
		),
		array(
			'name' => __("Post", "newspaper-builder"),
			'template_only' => true,
			'required' => true,
			'image' => 'posts.png',
		),
		array(
			'name' => __("Archives", "newspaper-builder"),
			'template_only' => true,
			'required' => true,
			'image' => 'archives.png',
		),
		array(
			'name' => __("Search", "newspaper-builder"),
			'template_only' => true,
			'required' => true,
			'image' => 'search.png',
		),
		array(
			'name' => __("404", "newspaper-builder"),
			'template_only' => true,
			'required' => true,
			'image' => '404.png',
		),
	],
	'theme_url' => 'https://superbthemes.com/newspaper-builder/',
	'demo_url' => 'https://superbthemes.com/demo/newspaper-builder/'
]);
