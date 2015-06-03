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
			<img class="lazy" data-src="<?php the_field( 'photo' ) ?>"/>
				<div class="feature-hover">
					<a href="<?php the_field( 'project_link' ) ?>" target="_blank">
						<h1><?php the_title() ?></h1>
						<p><?php the_field( 'description' ) ?></p>
						<i><p><?php the_field( 'testimonial' ) ?></p></i>
					</a>
				</div>
		</div>

	<?php endwhile; endif ?>
</div>

<?php wp_reset_postdata() ?>

<?php get_footer() ?>