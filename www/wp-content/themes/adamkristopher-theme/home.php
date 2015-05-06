<?php
/**
 * Blog page template
 */

get_header() ?>

<section id="blog">

	<div class="excerpts grid-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

			<div class="blog-image-wrap grid-70 tablet-grid-100 mobile-grid-100">
				<div class="thumbnail">
					<?php the_post_thumbnail( array( 600, 600 ) ) ?>
				</div>
			</div>

			<div class="excerpt-area grid-30 tablet-grid-100 mobile-grid-100">
				<div class="title">
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				</div>
				<HR WIDTH="100%" COLOR="#f1552a" SIZE="2">
				<div class="excerpt">
					<p><?php the_excerpt() ?></p>
				</div>
			</div>

		<?php endwhile; endif;

		wp_reset_postdata() ?>

	</div><!-- .excerpts -->

	<?php get_sidebar( 'homepage' ) ?>

</section>

<?php get_footer() ?>