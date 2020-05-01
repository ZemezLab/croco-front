<div class="container">
	<div class="footer-widget-area">
		<div class="row">
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-1' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-2' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-3' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-4' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-5' ); ?>
		</div>
	</div>
	<div class="site-info row">
	  <?php
		  croco_front_footer_copyright();
      croco_front_made_in();
      croco_footer_social();
    ?>
	</div><!-- .site-info -->
</div>