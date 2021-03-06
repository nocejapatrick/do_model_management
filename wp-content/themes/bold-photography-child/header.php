<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bold_Photography
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bold-photography' ); ?></a>

	<header id="masthead" class="site-header featured-image">
		<div class="site-header-main">
			<div class="wrapper">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
				<div class="menu-toggle-wrapper">
					<button id="open-nav" class="open-nav-btn"><svg class="icon icon-bars" > <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg></button>
				</div>
				
			</div><!-- .wrapper -->
			<?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
		</div><!-- .site-header-main -->
	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/navigation/navigation', 'social-floating' ); ?>

	<?php bold_photography_sections(); ?>

	<div id="content" class="site-content section">
		<div class="wrapper">
