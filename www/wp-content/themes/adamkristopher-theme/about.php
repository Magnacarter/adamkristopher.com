<?php
/**
 * Template Name: About Page
 */

get_header() ?>

<section class="about grid-container">

	<div class="lauren-image grid-33 tablet-grid-100 mobile-grid-100">
		<img src="<?php the_field('lauren_image') ?>">
	</div>
	<div class="lauren-about grid-33 tablet-grid-50 mobile-grid-100">
		<h2>Lauren Black</h2>
		<HR WIDTH="100%" COLOR="#f1552a" SIZE="2">
		<p><?php the_field('lauren_about') ?></p>
	</div>
	<div class="lauren-approach grid-33 tablet-grid-50 mobile-grid-100">
		<h2>Approach</h2>
		<HR WIDTH="100%" COLOR="#f1552a" SIZE="2">
		<p><?php the_field('lauren_approach') ?></p>
	</div>

</section>

<?php get_footer() ?>