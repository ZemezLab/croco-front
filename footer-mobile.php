
<div class="container">
	<div class="footer-widget-area mobile">
		<div class="row">
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-1' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-2' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-3' ); ?>
		<?php do_action( 'kava-theme/widget-area/render', 'footer-widget-area-4' ); ?>
		</div>
	</div>
	<div class="site-info mobile">
	  <?php
		  croco_front_footer_copyright();
	    croco_front_made_in();
    ?>
	</div><!-- .site-info -->
</div>