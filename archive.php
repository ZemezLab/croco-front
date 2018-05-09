<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kava
 */

get_header();

	do_action( 'kava-theme/site/site-content-before', 'archive' ); ?>

	<div class="site-content__wrap">

		<?php do_action( 'kava-theme/site/primary-before', 'index' ); ?>

		<div id="primary">

			<?php do_action( 'kava-theme/site/main-before', 'index' ); ?>

			<main id="main" class="site-main"><?php
				if ( have_posts() ) {

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

	<?php do_action( 'kava-theme/site/site-content-after', 'archive' );

get_footer();
