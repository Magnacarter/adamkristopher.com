<section id="widget-area">

	<?php
	if ( is_active_sidebar( 'akc_widgets' ) ) {
		dynamic_sidebar( 'akc_widgets' );
	} else {
		echo 'Insert widgets.';
	}
	?>

</section>
