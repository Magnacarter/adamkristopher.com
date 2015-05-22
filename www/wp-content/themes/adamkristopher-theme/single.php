<?php get_header() ?>

<div id="single-post" class="grid-container">

	<div class="grid-75">

		<?php while ( have_posts() ) : the_post() ?>

			<?php get_template_part( 'loop' ) ?>

		<?php endwhile ?>

	</div>

</div>

<?php get_footer() ?>