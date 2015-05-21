<?php

get_header() ?>

<section id="homepage grid-container">
	<div class="homepage-content grid-50">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<h1><?php the_title() ?></h1>
			<p><?php the_content() ?></p>
		<?php endwhile; endif ?>
	</div>
</section>

<?php get_footer() ?>