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

add_shortcode( 'custom_template', 'croco_front_custom_template_shortcode' );

function croco_front_custom_template_shortcode( $atts = array() ) {

	$atts = shortcode_atts( array(
		'id'  => 0,
		'css' => false,
	), $atts );

	$id  = $atts['id'];
	$css = $atts['css'];

	if ( ! $id ) {
		return;
	}

	$include_css = (bool) $css;

	return Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $id, $include_css );

}

add_filter( 'after_setup_theme', 'croco_front_blog_thumb' );
function croco_front_blog_thumb() {
	add_image_size( 'cfroro-front-blog', 360, 200, true );
	add_image_size( 'cfroro-front-blog-large', 560, 315, true );
}

add_filter( 'croco-site-menu/rest/url', function() {
	return 'https://crocoblock.com/wp-json/';
} );

function croco_front_footer_copyright() {
	echo apply_filters( 'crocoblock_copyright_text', $content = 'Copyright &copy; ' . ' ' . date( 'Y' ) );
	echo esc_html__( ' Info Global Services LTD. All Rights Reserved', 'crocoblock' );
}

function croco_front_add_cover() {
	echo '<div class="crocoblock-site-cover"></div>';
}
add_action( 'wp_footer', 'croco_front_add_cover' );

// Modify logo func
function croco_front_modify_logo() {

	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$html = sprintf( '<a href="https://crocoblock.com" class="custom-logo-link" rel="home" itemprop="url">%1$s</a>',
		wp_get_attachment_image( $custom_logo_id, 'full', false, array(
			'class'    => 'custom-logo',
			'itemprop' => 'logo'
		) )
	);

	return $html;
}

add_filter( 'get_custom_logo', 'croco_front_modify_logo' );

/**
 * Filter the except length .
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */

function croco_front_excerpt_length( $length ) {
	return 23;
}

add_filter( 'excerpt_length', 'croco_front_excerpt_length', 999 );

/**
 * Filter the excerpt "..." string.
 * @param string $more "..." excerpt string.
 * @return string (Maybe) modified "..." excerpt string.
 */

function croco_front_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'croco_front_excerpt_more' );

/**
 * Search results per page func.
 */

function croco_front_search_results_per_page($query) {

	if (!is_admin() && $query->is_main_query() && $query->is_search()) {
		$query->set('posts_per_page', 5);
	}
	return $query;
}

add_action('pre_get_posts', 'croco_front_search_results_per_page');

/**
 * WPSEO exclude sitemap post type [tempo func]
 */
function croco_front_site_exclude_post_type( $value, $post_type ) {
	if ( in_array( $post_type, array( 'jet-theme-core', 'post', 'author', 'category' ) ) ) {
		return true;
	} else {
		return $value;
	}
}

add_filter( 'wpseo_sitemap_exclude_post_type', 'croco_front_site_exclude_post_type', 10, 2 );

/**
 * WPSEO: delete rel links for pagination pages
 */

add_filter( 'wpseo_next_rel_link', '__return_false' );
add_filter( 'wpseo_prev_rel_link', '__return_false' );


/**
 * Show footer Made_In info.
 */

function croco_front_made_in() {

	$made_in_html = '';
	$made_in_icon = '<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6643 0C10.1259 0 8.76923 0.834195 8 2.08911C7.23077 0.834195 5.87413 0 4.33566 0C1.94406 0 0 2.01658 0 4.4974C0 9.04557 6.51748 13.9564 7.99301 13.9927H8H8.00699C9.48252 13.9564 16 9.04557 16 4.4974C16 2.01658 14.0559 0 11.6643 0Z" fill="url(#paint0_linear2)"/><path d="M0.585938 7C2.21531 10.685 6.78873 13.9637 7.99153 14H7.99852H8.00552C9.20831 13.971 13.7817 10.685 15.4111 7H0.585938Z" fill="url(#paint1_linear1)"/><defs><linearGradient id="paint0_linear2" x1="0.839161" y1="6.31087" x2="16.0459" y2="3.74369" gradientUnits="userSpaceOnUse"><stop stop-color="#1B6CC2"/><stop offset="1" stop-color="#4285CD"/></linearGradient><linearGradient id="paint1_linear1" x1="1.36348" y1="10.1571" x2="14.5646" y2="6.02933" gradientUnits="userSpaceOnUse"><stop stop-color="#FFD91A"/><stop offset="1" stop-color="#FFDE2E"/></linearGradient></defs></svg>';
	$made_in_text = esc_html__( 'Made in Ukraine.', 'crocoblock' );

	$made_in_html .= sprintf(
		'<div class="col-md-4 col-lg-4 crocoblock_made_in">%1$s<span>%2$s</span></div>',
		$made_in_icon,
		$made_in_text
	);

	echo $made_in_html;
}