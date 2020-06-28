<?php
/**
 * Check and setup theme's default settings
 *
 * @package wpboxy
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wpboxy_setup_theme_default_settings' ) ) {
	function wpboxy_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$wpboxy_posts_index_style = get_theme_mod( 'wpboxy_posts_index_style' );
		if ( '' == $wpboxy_posts_index_style ) {
			set_theme_mod( 'wpboxy_posts_index_style', 'default' );
		}

		// Sidebar position.
		$wpboxy_sidebar_position = get_theme_mod( 'wpboxy_sidebar_position' );
		if ( '' == $wpboxy_sidebar_position ) {
			set_theme_mod( 'wpboxy_sidebar_position', 'right' );
		}

		// Container width.
		$wpboxy_container_type = get_theme_mod( 'wpboxy_container_type' );
		if ( '' == $wpboxy_container_type ) {
			set_theme_mod( 'wpboxy_container_type', 'container' );
		}
	}
}
