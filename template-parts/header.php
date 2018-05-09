<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kava
 */
?>
<div <?php kava_header_class(); ?>>
	<div class="header-container__wrap container">
		<?php do_action( 'kava-theme/header/before' ); ?>
		<?php kava_main_menu(); ?>
		<div class="header-logo"><?php kava_header_logo(); ?></div>
		<div class="header-actions">
			<a href="https://account.crocoblock.com/" class="header-actions__account-link">Account</a>
			<div class="header-actions__support">
				<a href="#" class="header-actions__support-link">Support</a>
				<div class="header-actions__support-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'support' ) ); ?>
				</div>
			</div>
		</div>
		<?php do_action( 'kava-theme/header/after' ); ?>
	</div>
</div>
