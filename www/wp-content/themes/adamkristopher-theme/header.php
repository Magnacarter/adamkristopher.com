<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<title><?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?> class="lazy">

		<div class="nav grid-container">
			<div class="logo grid-50">
				<h1><a href="<?php echo esc_url( get_home_url() ) ?>">Adam Carter</a></h1>
			</div>

			<nav class="big-nav grid-30">
				<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ); ?>
			</nav>

			<div class="mobile-nav">
				<a href=""><img src="http://adamkristopher.com/wp-content/uploads/2015/05/HAMBURGER_MENU-512.png"/></a>
				<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ); ?>
			</div>

			<div class="nav-line">
				<HR WIDTH="100%" COLOR="#000" SIZE="1">
			</div>

			<div class="site-description">
				<p><?php bloginfo( 'description' ) ?></p>
			</div>
		</div>