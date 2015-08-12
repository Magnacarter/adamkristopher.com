jQuery( document ).ready( function($) {
	//Hover elements for single work on portfolio page
	var singleWork = $( '.portfolio-content' );

	singleWork.hover(
		function() {
			$( this ).find( '.feature-hover' ).fadeIn(400);
		},
		function() {
			$( this ).find( '.feature-hover' ).fadeOut(200);
		}
	);
});

