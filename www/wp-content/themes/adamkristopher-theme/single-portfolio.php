<?php
/**
 * Template: Single work page
 */
get_header();

$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => '50'
);

$projects = new WP_Query( $args ) ?>

<section id="single-projects" class="grid-container">

<?php if ( $projects->have_posts() ) : ?>

<?php $i = 0 ?>

	<?php while ( $projects->have_posts() ) : $projects->the_post();?>

		<?php get_template_part( 'work-loop' ) ?>

	<?php endwhile;

wp_reset_postdata() ?>



<?php get_footer() ?>