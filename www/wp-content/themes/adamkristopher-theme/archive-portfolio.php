<?php
/**
 * Portfolio Page
 */
get_header();

$args = array(
	'post_type' => 'Portfolio',
	);

$portfolio = new WP_Query( $args ) ?>

<div class="portfolio-wrap grid-container">

	<?php if ( $portfolio->have_posts() ) : while ( $portfolio->have_posts() ) : $portfolio->the_post() ?>

		<div class="portfolio-content grid-50">

			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			?>

				<div class="feature-hover">

					<a href="<?php the_field( 'project_link' ) ?>" target="_blank">

						<h1><?php the_title() ?></h1>

						<p><?php the_field( 'description' ) ?></p>

						<div class="testimonial-para">
							<i><p><?php the_field( 'testimonial' ) ?></p></i>
						</div>
					</a>

				</div>

		</div>

	<?php endwhile; endif ?>

</div>

<?php wp_reset_postdata() ?>

<?php get_footer() ?>