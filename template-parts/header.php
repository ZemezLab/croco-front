<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kava
 */
?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'crocoblock' ); ?></a>
	<header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader"><?php
	  if ( wp_is_mobile() ) {
		  get_template_part( 'header-mobile' );
	  } else {
		  get_template_part( 'header-desktop' );
	  }
	  ?></header>
	<div id="content" class="site-content">