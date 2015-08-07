jQuery( document ).ready( function($) {

	//Hover elements for single projects on portfolio page
	var portfolioContent = $( '.portfolio-content' );

	var img = document.getElementById('portfolio-img'); 

	var width = img.clientWidth;
	var height = img.clientHeight;

	portfolioContent.hover(
		function() {
			$( this ).find( '.feature-hover' ).width(width).height(height).show(200)
		},
		function() {
			$( this ).find( '.feature-hover' ).hide();
		}
	);

});

