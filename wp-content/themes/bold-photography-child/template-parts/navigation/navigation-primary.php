<?php
/**
 * Primary Menu Template
 *
 * @package Bold_Photography Pro
 */

?>
	<div id="site-header-menu" class="site-header-menu">
		<div id="primary-menu-wrapper" class="">
			<!-- <div class="menu-toggle-wrapper">
				<button id="menu-toggle"  class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo bold_photography_get_svg( array( 'icon' => 'bars' ) ); echo bold_photography_get_svg( array( 'icon' => 'close' ) ); ?><span class="menu-label"><?php echo esc_html_e( 'Menu', 'bold-photography' ); ?></span></button>
			</div> -->

			<div class="menu-inside-wrapper">
				<?php if ( has_nav_menu( 'primary-menu' ) ) : ?>

					<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'bold-photography' ); ?>">
						<?php
							wp_nav_menu( array(
									'container'      => '',
									'theme_location' => 'primary-menu',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'menu nav-menu',
								)
							);
						?>

				<?php else : ?>

					<nav id="site-navigation" class="main-navigation default-page-menu" aria-label="<?php esc_attr_e( 'Primary Menu', 'bold-photography' ); ?>">
						<?php wp_page_menu(
							array(
								'menu_class' => 'primary-menu-container',
								'before'     => '<ul id="menu-primary-items" class="menu nav-menu">',
								'after'      => '</ul>',
							)
						); ?>

				<?php endif; ?>

					</nav>

				<div class="mobile-social-search">
					<div class="search-container">
						<?php get_search_form(); ?>
					</div>
				</div>
				<div id="primary-search-wrapper" class="menu-wrapper">
					<div class="menu-toggle-wrapper">
						<button id="close-nav" class="close-btn"><svg class="icon icon-close" > <use href="#icon-close" xlink:href="#icon-close"></use> </svg></button>
					</div>

					<!-- <div class="menu-inside-wrapper">
						<div class="search-container">
							<?php get_Search_form(); ?>
						</div>
					</div> -->
				</div>
			</div>
		</div>

	
	</div>
