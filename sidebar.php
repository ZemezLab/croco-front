<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kava
 */

?>

<?php

do_action( 'kava-theme/sidebar/before' );

if ( is_active_sidebar( 'sidebar' ) && 'none' !== kava_theme()->sidebar_position ) : ?>
	<aside id="secondary" <?php kava_secondary_content_class( array( 'widget-area' ) ); ?>>
		<?php

			$done = false;

			if ( function_exists( 'jet_theme_core' ) ) {
				$done = jet_theme_core()->locations->do_location( 'croco_sidebar' );
			}

			if ( ! $done ) {
				dynamic_sidebar( 'sidebar' );
			}

		?>
	</aside><!-- #secondary -->
<?php endif;

do_action( 'kava-theme/sidebar/after' );
