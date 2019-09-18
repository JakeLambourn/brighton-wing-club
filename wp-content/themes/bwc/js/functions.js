/**
 * Functionality specific to Twenty Thirteen.
 *
 * Provides helper functions to enhance the theme experience.
 */

( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window );


	$( function() {
				
            
		
		// Mobile Menu
		$("#mob-menu").on('click', function(event){
			event.preventDefault ? event.preventDefault() : event.returnValue = false;
			 $('.nav-inner').toggle(); 
		});


		
		
		

	} );


	 _window.load(function() { 
	    

			

	});
	
	
	


	
} )( jQuery );