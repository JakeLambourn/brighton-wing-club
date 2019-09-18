<?php
/* Template Name: About */
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

    <article id="main-body" class="container">
        <div class="row">
            <div class="col-12">
            	<h1><?php echo get_the_title() ?></h1>
				
				<div class="row">
            		<div class="large-8 large-offset-2 columns">
            			<?php echo the_content() ?>
            		</div>
            	</div>

            	<div class="row">
            		<div class="large-8 large-offset-2 columns">
            			<?php
		                    if(get_field('employees')):
		                    	
		                    	// Repeater List
		                    	$repeater = get_field('employees'); 
		                    	$x = 0;   
	                        	foreach($repeater as $item) {
	                        		if( $x==0 ) {
	                        			echo '<div class="row employee">
	                        					<div class="large-6 small-12 columns">';
	                        		} else {
	                        			echo '<div class="large-6  small-12 columns">';
	                        		}
	                        		
		                        		echo '<img src="'.$item['image'].'" alt="'.$item['name'].'" />';
		                        		echo '<h3>'.$item['name'].'</h3>';
		                        		echo '<div>'.$item['bio'].'</div>';
		                        	
		                        	if( $x==1 ) {
		                        		echo '</div></div>';
		                        		$x = 0;
		                        	} else {
		                        		echo '</div>';
		                        		$x++;
		                        	}
		                        	
	                        	}
		                         
	                         endif;
	                    ?>
            		</div>
            	</div>
            </div>
        </div>
    </article>

    

<?php
endwhile;
endif;
get_footer();
?>