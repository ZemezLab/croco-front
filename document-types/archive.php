<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Croco_Front_Archive_Document extends Jet_Document_Base {

	public function get_name() {
		return 'croco_archive';
	}

	public static function get_title() {
		return __( 'Croco Archive', 'jet-theme-core' );
	}

	public function get_preview_as_query_args() {
		return array(
			'post_type'   => 'post',
			'numberposts' => get_option( 'posts_per_page', 10 ),
		);
	}

}