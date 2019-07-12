<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kava
 */

?>

	</div><!-- #content -->

<?php kava_theme()->do_location( 'footer', 'template-parts/footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
