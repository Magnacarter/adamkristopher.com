<section id="widget-area">

	<?php
	if ( is_active_sidebar( 'jsix_widgets' ) ) {
		dynamic_sidebar( 'jsix_widgets' );
	} else {
		echo 'Insert widgets.';
	}
	?>

</section>
