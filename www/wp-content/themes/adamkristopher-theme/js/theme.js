jQuery( document ).ready( function($) {
//Flexslider
	$(window).load(function() {
		$('.flexslider').flexslider({
			easing: "swing",
			slideshowSpeed: 50000,
			animationSpeed: 900,
			controlNav: true,
			direction: "horizontal",
			controlNav: true,
			animation: "slide", //String: Select your animation type, "fade" or "slide"
		});
	});

	//Mobile Nav
	$( '.mobile-nav a' ).click(
	function ( e ){
		e.preventDefault();
		$('.mobile-nav ul').toggle(500);
	});

	//down arrow function
	$( '.down-arrow a' ).click(
		function ( e ){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $('.body-content').offset().top
		}, 1000);
	});

	//nav triangle marker


	//Hover elements for feature project
	var featureProject = $( '.feature-project' );

	featureProject.hover(
		function() {
			$( this ).find( '.feature-hover' ).fadeIn(400);
		},
		function() {
			$( this ).find( '.feature-hover' ).fadeOut(400);
		}
	);

	//Hover elements for single projects
	var featureProject = $( '.single-project' );

	featureProject.hover(
		function() {
			$( this ).find( '.single-hover' ).fadeIn(400);
		},
		function() {
			$( this ).find( '.single-hover' ).fadeOut(400);
		}
	);

	//Hover elements for single projects
	var featureProject = $( '.single-work' );

	featureProject.hover(
		function() {
			$( this ).find( '.gallery-hover' ).fadeIn(400);
		},
		function() {
			$( this ).find( '.gallery-hover' ).fadeOut(400);
		}
	);

});

