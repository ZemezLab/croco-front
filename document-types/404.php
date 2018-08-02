<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Croco_Front_404_Document extends Jet_Document_Base {

	public function get_name() {
		return 'croco_404';
	}

	public static function get_title() {
		return __( 'Croco 404', 'jet-theme-core' );
	}

}