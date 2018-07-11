<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kava
 */
get_header();

	do_action( 'kava-theme/site/site-content-before', 'index' ); ?>

	<div class="site-content__wrap">

		<?php do_action( 'kava-theme/site/primary-before', 'index' ); ?>

		<div id="primary">

			<?php do_action( 'kava-theme/site/main-before', 'index' ); ?>

			<main id="main" class="site-main"><?php
				if ( have_posts() ) {

					$done = false;

					if ( function_exists( 'jet_theme_core' ) ) {
						$done = jet_theme_core()->locations->do_location( 'croco_archive' );
					}

					if ( ! $done ) {

					?><div <?php kava_posts_list_class(); ?>><?php

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( kava_get_post_template_part_slug(), kava_get_post_style() );

						endwhile;

					?></div><?php

					}

				} else {
					get_template_part( 'template-parts/content', 'none' );
				}
			?></main><!-- #main -->

			<?php do_action( 'kava-theme/site/main-after', 'index' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'kava-theme/site/primary-after', 'index' ); ?>

	</div>

	<?php do_action( 'kava-theme/site/site-content-after', 'index' );

get_footer();
