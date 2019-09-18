<?php
/* Template Name: Venue Index */
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); 

	
	$args = array( 
		'posts_per_page' 	=> -1, 
		'post_type' 		=> 'venue',
		//'post__not_in'		=> array($featured_id) ,
		'order'				=>	'ASC'
	);

	$i = 0;

	$myposts = get_posts( $args );
	
	?>
	
	<section id="asasaS">
		
        <?php
            // If category set, use
            if(isset($_GET['cat'])) {
	            $args = Array(
	              'post_type' 		=> 'venue',
	              'orderby'			=> 'ID',
	              'posts_per_page' 	=> -1,
/*
	              'meta_query' => array(
						array(
							'key' => 'product_type', // name of custom field
							'value' => '"' . $_GET['cat'] . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
							'compare' => 'LIKE'
						)
					)
*/
	            );
            } else {
	            $args = Array(
	              'post_type' => 'venue',
	              'orderby'=> 'ID',
	              'posts_per_page' => -1                      
	            );
            }

            $get_festivals = new WP_Query($args);
            
            $count = $get_festivals->post_count;
            

            //echo '<!-- COUNT: '.$count . '-->';
             echo '<script>
             
             	var locations = [';
             
			 	while ($get_festivals->have_posts()) : $get_festivals->the_post();
             
			 		$location = get_field('address', $post->ID);
			 			echo '["'.get_the_title().'", '.$location['lat'].', '.$location['lng'].', 4, "'.strtolower(get_field('product_type')).'"],'."\n";
			 
			 	$x++; endwhile; wp_reset_postdata();
			 	
			 echo '];';
/*
            while ($get_festivals->have_posts()) : $get_festivals->the_post();
            
            	$location = get_field('address', $post->ID);
				echo '["'.get_the_title().'", '.$location['lat'].', '.$location['lng'].', 4, "'.strtolower(get_field('product_type')).'"],'."\n";
            
            $x++; endwhile; wp_reset_postdata();
*/
          echo '
		
				var map;
		      	function initMap() {
				      				
		        	map = new google.maps.Map(document.getElementById(\'map\'), {
		          		center: new google.maps.LatLng(50.8241384, -0.1376198),
		          		disableDefaultUI: true,
		          		scrollwheel: false,
					    navigationControl: false,
					    mapTypeControl: false,
					    scaleControl: false,
					    //draggable: false,
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
		
/*
					var marker = new google.maps.Marker({
		                position: myLatLng,
		                map: map,
		                title: \'Snazzy!\'
		            });
*/
		            
					var infowindow = new google.maps.InfoWindow();
		
					    var marker, i;
					
					    for (i = 0; i < locations.length; i++) {  
					      marker = new google.maps.Marker({
					        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					        map: map
					      });
					
					      google.maps.event.addListener(marker, \'click\', (function(marker, i) {
					        return function() {
					          infowindow.setContent(locations[i][0]);
					          infowindow.open(map, marker);
					        }
					      })(marker, i));
					    }
		    
		      	}
			
			</script>';   
        ?>        
        <div id="map" style="width: 100%; height: 500px;"></div>

    </section>

    

<?php
endwhile;
endif;
get_footer();
?>