
<?php
	if ( class_exists( '\\Croco_Site_Menu\\Menu' ) ) {
	\Croco_Site_Menu\Menu::instance()->footer_top_ajax_template();
	}
?>
<div class="container">
	<div class="footer-widget-area">
		<div class="row">
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-1' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-2' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-3' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-4' ); ?>
		</div>
	</div>
	<div class="site-info">
	  <?php croco_front_footer_copyright(); ?>
	</div><!-- .site-info -->
</div>