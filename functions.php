<?php
/**
 * Child functions and definitions.
 */
add_action( 'wp_enqueue_scripts', 'croco_front_enqueue_styles' );

/**
 * Enqueue styles.
 */
function croco_front_enqueue_styles() {
	wp_enqueue_style( 'nucleo-glyph', get_stylesheet_directory_uri() . '/css/nucleo-glyph.css' );
	wp_enqueue_style( 'croco-kava-theme-style', get_template_directory_uri() . '/style.css' );
}

/**
 * Reset theme modules
 */
if ( ! function_exists( 'kava_get_allowed_modules' ) ) {
	function kava_get_allowed_modules() {
		return apply_filters( 'kava-theme/allowed-modules', array() );
	}
}

add_action( 'after_setup_theme', 'croco_front_register_menus', 10 );

function croco_front_register_menus() {

	register_nav_menus( array(
		'support' => 'Support',
	) );

}

add_action( 'jet-theme-core/structures/register', 'croco_front_structures' );

function croco_front_structures( $structures_manager ) {

	require get_theme_file_path( 'structures/archive.php' );
	require get_theme_file_path( 'structures/sidebar.php' );
	require get_theme_file_path( 'structures/404.php' );

	$structures_manager->register_structure( 'Croco_Front_Structure_Archive' );
	$structures_manager->register_structure( 'Croco_Front_Structure_Sidebar' );
	$structures_manager->register_structure( 'Croco_Front_Structure_404' );

}

add_action( 'wp_head', 'croco_front_google_verification' );

function croco_front_google_verification() {
	echo '<meta name="google-site-verification" content="nDrRlx4SAlMzk-QCq9cK019NwmzJE-D2V_kkqpCkmG0" />';
}

add_action( 'wp_head', 'croco_front_domain_verify' );

function croco_front_domain_verify() {
	echo '<meta name="p:domain_verify" content="0f26e47a72f58aa46cd268c58eba545f"/>';
}