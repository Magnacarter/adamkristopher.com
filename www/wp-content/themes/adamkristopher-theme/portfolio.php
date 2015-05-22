<?php
/**
 * Portfolio Loop
 */
get_header();

$args = array(
	'post_type' => 'portfolio',
	);

$portfolio = new WP_Query( $args ) ?>

<div class="portfolio-content-wrap grid-container">
	<?php if ( $portfolio->have_posts() ) : ?>

		<?php while ( $portfolio->have_posts() ) : $portfolio->the_post() ?>

		<div class="portfolio-content grid-50">
			<a href="<?php the_field( 'project_link' ) ?>"><img src="<?php the_field( 'photo' ) ?>"/></a>
				<div class="feature-hover">
					<h1><?php the_title() ?></h1>
					<p><?php the_field( 'description' ) ?></p>
					<i><p><?php the_field( 'testimonial' ) ?></p></i>
				</div>
		</div>

	<?php endwhile; endif ?>
</div>

<?php wp_reset_postdata() ?>

<?php get_footer() ?>