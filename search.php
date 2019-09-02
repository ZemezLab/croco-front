<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Kava
 */

global $wp_query;

get_header();

	do_action( 'kava-theme/site/site-content-before', 'search' ); ?>

	<div <?php kava_content_class() ?>>
		<div class="row">

			<?php do_action( 'kava-theme/site/primary-before', 'search' ); ?>

			<div id="primary">

				<?php do_action( 'kava-theme/site/main-before', 'search' ); ?>

				<main id="main" class="site-main container"><?php
					if ( have_posts() ) { ?>

						<header class="page-header">
							<h1 class="page-title"><?php
								/* translators: %s: search query. */
			          printf( esc_html__( 'Search results for: %s', 'kava' ), '<span>' . '&#8220;' . get_search_query() . '&#8221;' . '</span>' );
							?></h1>
							<div class="search-results"><?php
									printf( esc_html__( 'We found %s results matching your request', 'kava' ),  $wp_query->found_posts )
							?></div>

							<div class="search-results__back-btn"><?php
							  printf(
								  '<a href="https://crocoblock.com/knowledge-base/" class="elementor-button" role="button"><span class="elementor-button-text">%s</span></a>',
								  esc_html__( 'Back', 'kava' )
							  );
				      ?></div>
						</header><!-- .page-header -->

						<?php

						$done = false;

						if ( function_exists( 'jet_theme_core' ) ) {
							$done = jet_theme_core()->locations->do_location( 'croco_archive' );
						}

						if ( ! $done ) {

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							get_template_part( 'template-parts/content', 'navigation' );

						}

					} else {

						get_template_part( 'template-parts/content', 'none' );

					}
				?></main><!-- #main -->

				<?php do_action( 'kava-theme/site/main-after', 'search' ); ?>

			</div><!-- #primary -->

			<?php do_action( 'kava-theme/site/primary-after', 'search' ); ?>

		</div>
	</div><?php
get_footer();
