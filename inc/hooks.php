<?php
/**
 * Custom hooks.
 *
 * @package wpboxy
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wpboxy_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function wpboxy_site_info() {
		do_action( 'wpboxy_site_info' );
	}
}

if ( ! function_exists( 'wpboxy_add_site_info' ) ) {
	add_action( 'wpboxy_site_info', 'wpboxy_add_site_info' );

	/**
	 * Add site info content.
	 */
	function wpboxy_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'wpboxy' ) ),
			sprintf(
				/* translators:*/
				esc_html__( 'Designed By %s', 'wpboxy' ),
				'WPBOXY'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Theme: %1$s by %2$s.', 'wpboxy' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://wpboxy.com', 'wpboxy' ) ) . '">wpboxy.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Version: %1$s', 'wpboxy' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'wpboxy_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
