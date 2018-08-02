<?php

if ( ! class_exists( 'Croco_Front_Structure_404' ) ) {

	/**
	 * Define Croco_Front_Structure_Sidebar class
	 */
	class Croco_Front_Structure_404 extends Jet_Theme_Core_Structure_Base {

		public function get_id() {
			return 'croco_404';
		}

		public function get_single_label() {
			return esc_html__( 'Croco 404', 'jet-theme-core' );
		}

		public function get_plural_label() {
			return esc_html__( 'Croco 404', 'jet-theme-core' );
		}

		public function get_sources() {
			return array();
		}

		public function get_document_type() {
			return array(
				'class' => 'Croco_Front_404_Document',
				'file'  => get_theme_file_path( 'document-types/404.php' ),
			);
		}

		/**
		 * Is current structure could be outputed as location
		 *
		 * @return boolean
		 */
		public function is_location() {
			return true;
		}

		/**
		 * Location name
		 *
		 * @return boolean
		 */
		public function location_name() {
			return 'croco_404';
		}

		/**
		 * Aproprite location name from Elementor Pro
		 * @return [type] [description]
		 */
		public function pro_location_mapping() {
			return '404';
		}

	}

}
