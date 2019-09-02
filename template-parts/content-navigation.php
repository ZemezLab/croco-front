<?php
/**
 * Template part for posts navigation.
 *
 * @package Kava
 */

do_action( 'kava-theme/blog/posts-navigation-before' );

$navigation_type = kava_theme()->customizer->get_value( 'blog_navigation_type' );

switch ( $navigation_type ) {
	case 'navigation':
		the_posts_navigation(
			apply_filters( 'kava-theme/posts/navigation-args',
							array(
								'prev_text' => sprintf( '
									<span class="screen-reader-text">%1$s</span>
									<i class="fa fa-angle-left" aria-hidden="true"></i> %1$s',
									esc_html__( 'Older Posts', 'kava' ) ),
								'next_text' => sprintf( '
									<span class="screen-reader-text">%1$s</span>
									%1$s <i class="fa fa-angle-right" aria-hidden="true"></i>',
									esc_html__( 'Newer Posts', 'kava' ) ),
							)
			)
		);
		break;
	case 'pagination':
		the_posts_pagination( 
			apply_filters( 'kava-theme/posts/pagination-args',
							array(
								'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
<path d="M19.375 6.125L2.75391 6.125L7.75391 1.125L6.875 0.246094L0.800781 6.30078C0.683594 6.43099 0.625 6.58073 0.625 6.75C0.625 6.91927 0.683594 7.06901 0.800781 7.19922L6.875 13.2539L7.75391 12.375L2.75391 7.375L19.375 7.375V6.125Z" fill="#5C6B79"/>
</svg>',
								'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
<path d="M0.625 7.875H17.2461L12.2461 12.875L13.125 13.7539L19.1992 7.69922C19.3164 7.56901 19.375 7.41927 19.375 7.25C19.375 7.08073 19.3164 6.93099 19.1992 6.80078L13.125 0.746094L12.2461 1.625L17.2461 6.625H0.625V7.875Z" fill="#5C6B79"/>
</svg>',
							)
			)
		);
		break;
}



do_action( 'kava-theme/blog/posts-navigation-after' );
