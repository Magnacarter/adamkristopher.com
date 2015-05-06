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
	<body <?php body_class() ?>>

		<div class="logo">
			<a href="<?php echo esc_url( get_home_url() ) ?>"><img src="<?php the_field( 'logo_header', 'options' ) ?>"/></a>
		</div>

		<nav>
			<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ); ?>
		</nav>

<div class="nav-wrap">
 <ul class="group" id="example-one">
    <li class="current_page_item"><a href="#">Home</a></li>
    <li><a href="#">Buy Tickets</a></li>
    <li><a href="#">Group Sales</a></li>
    <li><a href="#">Reviews</a></li>
    <li><a href="#">The Show</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Photos</a></li>
    <li><a href="#">Magic Shop</a></li>
 </ul>
</div>






