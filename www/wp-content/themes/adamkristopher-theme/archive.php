<?php
/*
 * Template Name: Archives
 */
get_header() ?>

<section id="archive-page" class="grid-container">

	<div class="archive-categories grid-100">
		<ul>
			<?php wp_list_categories() ?>
		</ul>
	</div>

</section>

<?php get_footer() ?>