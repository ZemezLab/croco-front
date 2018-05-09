<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Croco_Front_Sidebar_Document extends Jet_Document_Base {

	public function get_name() {
		return 'croco_sidebar';
	}

	public static function get_title() {
		return __( 'Croco Sidebar', 'jet-theme-core' );
	}

}