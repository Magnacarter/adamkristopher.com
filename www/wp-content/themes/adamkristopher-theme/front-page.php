<?php
/*
 * Home Page
 */
get_header() ?>

hi

<div class="flexslider flexy">
	<ul class="slides">

		<li class="slide-1">
			<h1>Fairview Mills</h1>
			<h3 class="grid-25">Food, pet food and industrial applications.</h3>
			<div class="video-button">
				<a href="<?php home_url() ?>" class="watch-video">
					<span class="video">Watch the Video</span>
				</a>
			</div>
			<div class="play-button">
				<a href="#"><img src="http://jsix.creativeproductionsgroup.com/wp-content/uploads/2015/05/play-button.png"/></a>
			</div>
			<img src="<?php the_field( 'slider_image_1' ) ?>"/>
		</li>

		<li class="slide-2"><img src="<?php the_field( 'slider_image_2' ) ?>"/></li>

		<li class="slide-3"><img src="<?php the_field( 'slider_image_3' ) ?>"/></li>

		<li class="slide-4"><img src="<?php the_field( 'slider_image_4' ) ?>"/></li>

		<li class="slide-5"><img src="<?php the_field( 'slider_image_5' ) ?>"/></li>

		<li class="slide-6"><img src="<?php the_field( 'slider_image_6' ) ?>"/></li>

	</ul>
</div>

<div class="down-arrow">
	<a href=""><img src="http://jsix.creativeproductionsgroup.com/wp-content/uploads/2015/05/Rectangle-4.png"/></a>
</div>

<section>
	<div class="body-content grid-container">
		<div class="starts grid-100">
			<h1>It All Starts</h1>
			<h4>with good people who care about the land that we farm, the soil in which we plant, the seed the crops that we grow and harvest, and the livestock we raise to produce quality products for people and their pets.</h4>
		</div>
		<div class="green-box tablet-grid-100 mobile-grid-100 grid-35">
			<h3>We're not just part of a family farm, we're part of a worldwide agriculture. Whether it's milling, farming, livestock or trucking, our family treate our employees and customers.. like family and that's a big family.</h3>
		</div>
		<div class="box-mill tablet-grid-100 mobile-grid-100 grid-45">
			<img src="<?php the_field( 'field' ) ?>"/>
		</div>
		<div class="box-dudes grid-20 tablet-grid-100 mobile-grid-50 grid-parent">
			<img src="<?php the_field( 'dudes' ) ?>"/>

			<div class="box-flag grid-100 tablet-grid-100 mobile-grid-50">
				<img src="<?php the_field( 'flag' ) ?>"/>
			</div>
		</div>

		<div class="box-dudes-mobile grid-50 tablet-grid-50 mobile-grid-50 grid-parent">
			<img src="<?php the_field( 'dudes' ) ?>"/>
		</div>

		<div class="box-flag-mobile grid-50 tablet-grid-50 mobile-grid-50">
			<img src="<?php the_field( 'flag' ) ?>"/>
		</div>

		<div class="conclusion grid-100">
			<h1>J-Six Enterprises</h1>
			<h4>with good people who care about the land that we farm, the soil in which we plant, the seed the crops that we grow and harvest, and the livestock we raise to produce quality products for people and their pets.</h4>
		</div>
	</div>
</section>

<?php get_footer() ?>