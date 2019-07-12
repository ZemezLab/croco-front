<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Kava
 */
?>

<?php do_action( 'kava-theme/widget-area/render', 'footer-area' ); ?>

<footer id="colophon" class="site-footer"><?php

	if ( wp_is_mobile() ) {
		get_template_part( 'footer-mobile' );
	} else {
		get_template_part( 'footer-desktop' );
	}

	?></footer><!-- #colophon -->
