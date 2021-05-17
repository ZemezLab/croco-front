<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kava
 */
?>


<header id="masthead" <?php crocoblock_header_class(); ?> itemscope itemtype="http://schema.org/WPHeader"><?php
  if ( wp_is_mobile() ) {
	  get_template_part( 'header-mobile' );
  } else {
	  get_template_part( 'header-desktop' );
  }
  ?></header>