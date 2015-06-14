<?php

get_header() ?>

<section id="homepage" class="grid-container">

	<div class="homepage-content grid-65">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

		<div class="blog-post grid-100">
			<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
			<HR WIDTH="100%" COLOR="#ee6930" SIZE="1">
			 <?php the_post_thumbnail( 'large' ); ?>
			<p><?php the_excerpt() ?></p>
			<div class="read-more-button">
				<a href="<?php the_permalink() ?>"><span>Read More</span></a>
			</div>
		</div>

	<?php endwhile; endif ?>

	</div>

	<?php wp_reset_postdata() ?>

	<div class="sidebar grid-30">
		<?php get_sidebar( 'homepage' ) ?>
	</div>

</section>

<?php get_footer() ?>