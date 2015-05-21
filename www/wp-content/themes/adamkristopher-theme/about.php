<?php
/**
 * Template Name: About Page
 */

get_header() ?>

<section id="about" class="grid-container">
	<div class="about-content grid-60">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
		<div class="image grid-30">
			<img src="<?php the_field( 'adam_img' ) ?>">
		</div>
		<div class="blog-post grid-70">
			<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
			<HR WIDTH="100%" COLOR="#ee6930" SIZE="1">
			<p><?php the_content() ?></p>
		</div>
	<?php endwhile; endif ?>
	</div>

	<div class="sidebar grid-30">
		<?php get_sidebar( 'homepage' ); ?>
	</div>
</section>

<?php get_footer() ?>