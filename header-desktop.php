<div class="site-header__wrap container">
	<div class="header-container__flex">
		<div class="site-main-navigation"><?php
			if ( class_exists( '\\Croco_Site_Menu\\Menu' ) ) {
				\Croco_Site_Menu\Menu::instance()->desktop_menu_render();
			}
		?></div>
		<div class="site-branding"><?php
			the_custom_logo();
		?></div>
		<div class="site-actions-menu"><?php
			if ( class_exists( '\\Croco_Site_Menu\\Menu' ) ) {
				\Croco_Site_Menu\Menu::instance()->desktop_support_menu_render();
			}
		?></div>
	</div>
</div>
