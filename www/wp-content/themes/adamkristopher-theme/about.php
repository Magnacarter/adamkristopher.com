<?php
/**
 * Template Name: About Page
 */

get_header() ?>

<section id="about" class="">
	<div class="about-content-wrap grid-container">
		<div class="about-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<div class="adam-image grid-25">
				<img src="<?php the_field( 'adam_img' ) ?>">
			</div>
			<div class="about-post grid-70">
				<h1><a href="<?php the_permalink() ?>">I'm Adam Kristopher Carter</a></h1>
				<HR WIDTH="100%" COLOR="#777" SIZE="1">
				<p><?php the_content() ?></p>
			</div>
		<?php endwhile; endif ?>
		</div>
	</div><!--about-content-wrap-->

	<div class="skills-lists grid-container">

		<div class="skills grid-100">
			<h1>Skills &amp Knowledge</h1>
		</div>
		<div class='list-1 grid-25'>
			<ul>
				<li>WordPress</li>
				<li>PHP</li>
				<li>HTML</li>
				<li>CSS</li>
			</ul>
		</div>
		<div class='list-2 grid-50'>
			<ul>
				<li>JavaScript</li>
				<li>jQuery</li>
				<li>Github</li>
				<li>Version Control (with git in command line)</li>
			</ul>
		</div>
		<div class='list-3 grid-25'>
			<ul>
				<li>Photoshop</li>
				<li>Balsamic</li>
				<li>Sicilian Defense</li>
				<li>Nimzo-Indian Defense</li>
			</ul>
		</div>
	</div>


	<div class="form-wrap grid-container">
		<div class="form-text grid-60">
			<h1>Hire Me</h1>
			<HR WIDTH="100%" COLOR="#777" SIZE="1">
			<p>I am very happy you dropped by! Let's shop talk about web development and/or chess! Email me with questions or to hire me!</p>
		</div>
		<div class="contact-form grid-40">
			<?php the_field( 'contact_form' ) ?>
		</div>
	</div>
</section>

<?php get_footer() ?>