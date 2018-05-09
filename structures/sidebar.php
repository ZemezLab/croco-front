<?php

if ( ! class_exists( 'Croco_Front_Structure_Sidebar' ) ) {

	/**
	 * Define Croco_Front_Structure_Sidebar class
	 */
	class Croco_Front_Structure_Sidebar extends Jet_Theme_Core_Structure_Base {

		public function get_id() {
			return 'croco_sidebar';
		}

		public function get_single_label() {
			return esc_html__( 'Croco Sideabr', 'jet-theme-core' );
		}

		public function get_plural_label() {
			return esc_html__( 'Croco Sideabr', 'jet-theme-core' );
		}

		public function get_sources() {
			return array();
		}

		public function get_document_type() {
			return array(
				'class' => 'Croco_Front_Sidebar_Document',
				'file'  => get_theme_file_path( 'document-types/sidebar.php' ),
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
			return 'croco_sidebar';
		}

		/**
		 * Aproprite location name from Elementor Pro
		 * @return [type] [description]
		 */
		public function pro_location_mapping() {
			return 'sidebar';
		}

	}

}
