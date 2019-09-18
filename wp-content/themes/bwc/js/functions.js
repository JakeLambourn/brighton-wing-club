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


		// Google Map
		var map;
      	function initMap() {

      		console.log('Lat: 50.8338553 ' + document.getElementById("main-body").getAttribute("data-lat"));
      		console.log('Lng: -0.1390252 ' + document.getElementById("main-body").getAttribute("data-lng"));


      		var myLatLng = {lat: parseInt(document.getElementById("main-body").getAttribute("data-lat")) , lng: parseInt(document.getElementById("main-body").getAttribute("data-lng")) };

        	map = new google.maps.Map(document.getElementById('map'), {
          		center: myLatLng,
          		zoom: 14,
          		styles: [
				    {
				        "featureType": "all",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "weight": "2.00"
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#9c9c9c"
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "labels.text",
				        "stylers": [
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape.man_made",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#eeeeee"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#7b7b7b"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#c8d7d4"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#070707"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            }
				        ]
				    }
				]
        	});

			var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Snazzy!'
            });
      	}