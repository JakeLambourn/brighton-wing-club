<?php
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); 


	$aadr = get_field('address') ;
	
	echo '<script>
		
			var map;
	      	function initMap() {
	
	      		var myLatLng = {lat: '.$aadr['lat'].' , lng: '.$aadr['lng'].' };
	
	        	map = new google.maps.Map(document.getElementById(\'map\'), {
	          		center: myLatLng,
	          		disableDefaultUI: true,
	          		scrollwheel: false,
				    navigationControl: false,
				    mapTypeControl: false,
				    scaleControl: false,
				    draggable: false,
	          		zoom: 16,
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
	                title: \'Snazzy!\'
	            });
	      	}
		
		</script>'; 

?>

    <article id="main-body" class="container" data-lat="<?php echo $aadr['lat'] ?>" data-lng="<?php echo $aadr['lng'] ?>">
        <div class="row">
            <div class="large-9 columns">
				<div class="row">
            		<div class="large-12 columns main-content">
            			<?php echo the_content() ?>
            		</div>
            	</div>

            	<div class="bwcReview">
            		<span class="quote-before">&ldquo;</span>
            		<span class="quote-after">&rdquo;</span>
            		<span class="tagline">The Official Brighton Wing Club Review</span>
            		<ul>
            			<li>
            				<div>A great wing, tasty juicy and the right amount of spice</div>
							<div class="src">@Dean Hodges</div>
            			</li>
            		</ul>
            	</div>
            	<a href="/" class="button primary bwcReadmore">Read more reviews</a>
            	
            	<div class="row venueGallery">
                    <div class="large-12 columns">
	                    <?php
		                    if(get_field('gallery')):
		                    		                    	
		                    	// Repeater List
		                    	$repeater = get_field('gallery');    
		                        echo '<ul>';
		                        $x = 0;
		                        	foreach($repeater as $item) {
			                        	if( $x == 0 ) {
				                        	$class="no-padding-left";
			                        	} else {
				                        	$class="";
			                        	}
			                        	echo '<li class="end columns large-4 '.$class.'"><div style="background-image:url('.$item['images'].'); height: 200px; background-size: cover;"></div></li>';
		                        	}
		                         echo '</ul>';
		                         
	                         endif;
		                ?>
                    </div>
            	</div>
            	
            	
            	<div class="row venueGallery">
                    <div class="large-12 columns">
	                    <?php comments_template() ?>
                    </div>
                   </div>

<!--
                <div class="row">
                    <div class="large-12 columns">
                        <?php
                            if(get_field('related_page_links')):

                                echo '<div class="row related_page_links">';
                                
                                // Repeater List
                                $repeater = get_field('related_page_links'); 
                                $x = 0;   
                                foreach($repeater as $item) {
                                    
                                    switch (count($repeater)) {
                                        case 2:
                                            $columns = 'large-6 medium-6 columns';
                                            break;
                                        case 3:
                                            $columns = 'large-4 medium-4 columns';
                                            break;
                                        case 4:
                                            $columns = 'large-6 medium-6 columns';
                                            break;
                                    }

                                    echo '<a href="'.$item['page'].'" class="'.$columns.'">';
                                    
                                        echo '<div class="content-wrapper">
                                                <img src="'.$item['bg_image'].'" />
                                                <h3>'.$item['title_if_different_from_page_title'].'</h3>';
                                            echo '<div>'.$item['excerpt'].'</div>
                                                <div class="button">Read more</div>
                                            </div>';
                                    
                                    echo '</a>';
                                    //$x++;
                                    
                                }

                                echo '</div>';
                                 
                             endif;
                        ?>
                    </div>
                </div>
-->
            </div>
            <div class="large-3 columns venue-details">				
				<ul>
					<li class="externalLinks">
						<?php if( get_field('facebook_page') ) : ?>
							<a href="<?php echo get_field('facebook_page') ?>" target="blank" class="socialIcon"><i class="fa fa-facebook" ></i></a>
						<?php endif; ?>
						<?php if( get_field('twitter_page') ) : ?>
							<a href="<?php echo get_field('twitter_page') ?>" target="blank" class="socialIcon"><i class="fa fa-twitter" ></i></a>
						<?php endif; ?>
						<?php if( get_field('instagram_page') ) : ?>
							<a href="<?php echo get_field('instagram_page') ?>" target="blank" class="socialIcon"><i class="fa fa-instagram" ></i></a>
						<?php endif; ?>
					</li>
					<li class="additionalLinks">
						<a href="<?php echo get_field('website') ?>" target="blank"><i class="fa fa-globe" ></i>Website</a><br />
						<?php if( get_field('menu_link') ) : ?>
							<a href="<?php echo get_field('menu_link') ?>" target="blank"><i class="fa fa-cutlery" ></i>Menu</a>
						<?php endif; ?>
					</li>
					<li>
            			<h3>Google Rating</h3>
            			<div class="star-ratings-sprite"><span style="width:52%" class="star-ratings-sprite-rating"></span></div>
            		</li>
					<li>
						<h3>Address</h3>
            			<div class="details"><?php echo $aadr['address'] ?></div>
            		</li>
            		<li>
            			<h3>Opening times</h3>
            			<div class="details"><?php echo get_field('opening_times') ?></div>
            		</li>
				</ul>
				<small>Page updated: <?php echo get_the_date( 'D M j Y' ); ?></small>

            </div>
        </div>
    </article>



<?php
endwhile;
endif;
get_footer();
?>