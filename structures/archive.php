<?php

if ( ! class_exists( 'Croco_Front_Structure_Archive' ) ) {

	/**
	 * Define Croco_Front_Structure_Archive class
	 */
	class Croco_Front_Structure_Archive extends Jet_Theme_Core_Structure_Base {

		public function get_id() {
			return 'croco_archive';
		}

		public function get_single_label() {
			return esc_html__( 'Croco Archive', 'jet-theme-core' );
		}

		public function get_plural_label() {
			return esc_html__( 'Croco Archives', 'jet-theme-core' );
		}

		public function get_sources() {
			return array();
		}

		public function get_document_type() {
			return array(
				'class' => 'Croco_Front_Archive_Document',
				'file'  => get_theme_file_path( 'document-types/archive.php' ),
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
			return 'croco_archive';
		}

		/**
		 * Aproprite location name from Elementor Pro
		 * @return [type] [description]
		 */
		public function pro_location_mapping() {
			return 'archive';
		}

	}

}
