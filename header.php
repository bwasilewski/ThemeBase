<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeBase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

	<header>
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="container">
				<div class="navbar-brand">
					<a href="<?= get_home_url() ?>" class="navbar-item"><h1 class="title is-1"><?= get_bloginfo('title') ?></h1></a>
				</div>
				<div class="navbar-menu">
					<div class="navbar-start"></div>
					<div class="navbar-end">
					<?php
						wp_nav_menu( array(
							'menu_id'		=> 'primary',
							'container'		=> false,
							'items_wrap' => '%3$s',  // removes the ul wrapper from the menu
							'walker'		=> new ThemeBase_Walker()
						) );
					?>
					</div>
				</div>
			</div>
		</nav>
	</header>
	
	<div id="content" class="site-content">
