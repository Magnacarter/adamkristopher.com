<?php
/*
 * Template Name: Portfolio
 */
get_header();

$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => '50',
	);

$portfolio = new WP_Query( $args ) ?>

<?php if ( $portfolio->have_posts() ) : while ( $portfolio->have_posts() ) : $portfolio->the_post() ?>

	<div class="portfolio">
		<h1><?php the_title() ?></h1>
		<p><?php the_field( 'description' ) ?></p>

		<div class="portfolio-image">
			<a href="<?php the_field( 'project_link' ) ?>" target="_blank"><img src="<?php the_field( 'photo' ) ?>"/></a>
		</div>

		<p><?php the_field( 'description' ) ?></p>
	</div>


<?php endwhile; endif ?>

<?php wp_reset_postdata() ?>

<?php get_footer() ?>