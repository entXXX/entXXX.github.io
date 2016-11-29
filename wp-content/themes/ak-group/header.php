<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A&K_GROUP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<div class="bar">
			<div class="icon-left0"><a href="http://kantstovary.com/accoun"><img src="http://kantstovary.com/wp-content/uploads/2016/11/enter-1.png" alt="Вхід"></div><div class="icon-left1"><img src="http://kantstovary.com/wp-content/uploads/2016/11/vhid.png" alt="Вхід"></a></div>
			<div class="icon-left2"><a href="http://kantstovary.com/accoun"><img src="http://kantstovary.com/wp-content/uploads/2016/11/reg.png" alt="Реєстрація"></div><div class="icon-left3"><img src="http://kantstovary.com/wp-content/uploads/2016/11/Reyestratsiya.png" alt="Реєстрація"></a></div>
			<div class="icon-center"><img src="http://kantstovary.com/wp-content/uploads/2016/11/nomera.png"></div>
			<div class="icon-right0"><a href="http://kantstovary.com" style="text-decoration: none">UA</a>
			<a>|</a>
			<a href="http://kantstovary.com/ru" style="text-decoration: none">RU</a></div>
			<div class="icon-right1"><a href="http://kantstovary.com/card"><img src="http://kantstovary.com/wp-content/uploads/2016/11/card.png" alt="Кошик"></a></div>
			<div class="icon-right2"><a href="http://kantstovary.com/exit"><img src="http://kantstovary.com/wp-content/uploads/2016/11/exit.png" alt="Вихід"></a></div>
			<div class="bar-line"><img src="http://kantstovary.com/wp-content/uploads/2016/11/poloska.png" alt=""></div>
</div>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ak-group' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ak-group' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
