<section id="widget-area">

	<h2>Archives</h2>
	<HR WIDTH="100%" COLOR="#f1552a" SIZE="2">
	<?php
	if ( is_active_sidebar( 'lb_blog_widgets' ) ) {
		dynamic_sidebar( 'lb_blog_widgets' );
	} else {
		echo 'Insert widgets.';
	}
	?>

</section>
