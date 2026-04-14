<?php
/*This file is part of ResumeX Dark child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
$resumex_dark_theme = wp_get_theme();
if (!defined('RESUMEX_DARK_VERSION')) {
	// Replace the version number of the theme on each release.
	define('RESUMEX_DARK_VERSION', $resumex_dark_theme->get('Version'));
}

function resumex_dark_fonts_url()
{
	$fonts_url = '';

	$font_families = array();

	$font_families[] = 'Poppins:wght@400;600&display=swap';
	$font_families[] = 'Lato:wght@400;600;700&display=swap';

	$query_args = array(
		'family' => urlencode(implode('&family=', $font_families)),
	);

	$fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css2');

	return esc_url_raw($fonts_url);
}


function resumex_dark_enqueue_child_styles()
{
	wp_enqueue_style('resumex-dark-google-font', resumex_dark_fonts_url(), array(), null);
	wp_enqueue_style('resumex-dark-parent-style', get_template_directory_uri() . '/style.css', array('resume-x-style'), RESUMEX_DARK_VERSION, 'all');
	wp_enqueue_style('resumex-dark-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array('bootstrap', 'resume-x-style', 'resume-x-main-style', 'resume-x-default-style'), RESUMEX_DARK_VERSION, 'all');
}
add_action('wp_enqueue_scripts', 'resumex_dark_enqueue_child_styles');





add_filter('excerpt_more', 'resumex_dark_exerpt_empty_string', 999);
function resumex_dark_exerpt_empty_string($more)
{
	if (is_admin()) {
		return $more;
	}
	return '';
}
function resumex_dark_excerpt_length($length)
{
	if (is_admin()) {
		return $length;
	}
	return 20;
}
add_filter('excerpt_length', 'resumex_dark_excerpt_length', 999);


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function resumex_dark_body_classes($classes)
{
	$classes[] = 'dark';

	return $classes;
}
add_filter('body_class', 'resumex_dark_body_classes');
