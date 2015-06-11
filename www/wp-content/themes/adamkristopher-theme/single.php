<?php get_header() ?>

<div id="single-post" class="grid-container">

		<?php while ( have_posts() ) : the_post() ?>

			<?php get_template_part( 'loop' ) ?>

		<?php endwhile ?>

</div>

<?php get_footer() ?>