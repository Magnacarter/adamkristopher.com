<article>
	<div class="excerpt grid-65">

		<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>

		<ul class="info">
			<li>By <a href="<?php bloginfo( 'siteurl' ) ?>/about/"><?php the_author() ?></a></li>
			<li><?php the_time( 'F j, Y' ); ?></li>
			<li><?php the_category( ', ' ) ?></li>
		</ul>

		<HR WIDTH="100%" COLOR="#ee6930" SIZE="1">

		<?php if ( is_single() ) : ?>

			<div class="featured-image">
				<?php the_post_thumbnail( array(400, 600) ) ?>
			</div>

			<?php the_content() ?>

			<?php comments_template() ?>

		<?php else : ?>

			<?php the_excerpt() ?>

			<p><a class="post-link" href="<?php the_permalink() ?>">Continue Reading &rarr;</a></p>

		<?php endif ?>

	</div>

	<div class="blog-sidebar grid-30">
		<?php get_sidebar( 'homepage' ) ?>
	</div>
</article>