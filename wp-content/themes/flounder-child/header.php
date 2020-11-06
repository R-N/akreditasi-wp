<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Flounder
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fixicons.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if ( has_nav_menu( 'primary' ) ): ?>
<div class="menu-toggle nav icon dashicons dashicons-menu" id="toggle-nav"></div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<div class="menu-toggle widgets icon dashicons dashicons-screenoptions" id="toggle-widgets"></div>
<?php endif; ?>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<div class="site-branding clearfix">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			</div>
		</a>

		<!--
		<nav id="site-navigation" class="navigation-main" role="navigation">
			<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'flounder' ); ?></a>

			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				/* No fallback, we want the menu to be purposefully set. */
				'fallback_cb' => '__return_false'
			) ); ?>
		</nav><!-- #site-navigation -->
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'flounder' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'flounder' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</header><!-- #masthead -->
