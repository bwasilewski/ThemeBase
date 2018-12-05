<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grow_Media
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
					<a href="<?= get_home_url() ?>" class="navbar-item"><?= get_bloginfo('title') ?></a>
				</div>
				<div class="navbar-menu">
					<div class="navbar-start">
						<a href="#" class="navbar-item">Item 1</a>
						<a href="#" class="navbar-item">Item 2</a>
					</div>
					<div class="navbar-end">
						<!--<a href="#" class="navbar-item">Item 1</a>
						<a href="#" class="navbar-item">Item 2</a>-->
						
					</div>
				</div>
			</div>
		</nav>
	</header>

	<div id="content" class="site-content">
