<?php
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

    <article id="main-body" class="container">
        <div class="row">
            <div class="col-12">				
				<div class="row">
            		<div class="large-10 large-offset-1 columns">
            			<h1><?php echo get_the_title() ?></h1>
            			
            			<?php echo the_content() ?>
            		</div>
            	</div>
                
                <?php
                    if(get_field('related_page_links')):

                    	echo '<div class="row">
            					<div class="large-12 columns">';
                        
	                                // Repeater List
	                                $repeater = get_field('related_page_links'); 
	                                $x = 0;   
	                                foreach($repeater as $item) {
	                                    if( $x==0 ) {
	                                        echo '<div class="row related_page_links">
	                                                <a href="'.$item['page'].'" class="large-6 small-6 columns">';
	                                    } else {
	                                        echo '<a href="'.$item['page'].'" class="large-6  small-6 columns">';
	                                    }
	                                    
	                                        echo '<div class="content-wrapper">
	                                                <img src="'.$item['bg_image'].'" />
	                                                <h3>'.$item['title_if_different_from_page_title'].'</h3>';
	                                            echo '<div>'.$item['excerpt'].'</div>
	                                                <div class="button">Read more</button>
	                                            </div>';
	                                    
	                                    if( $x==1 ) {
	                                        echo '</div></a></div>';
	                                        $x = 0;
	                                    } else {
	                                        echo '</div></a>';
	                                        $x++;
	                                    }
	                                    
	                                }

		                    echo '</div>
		                    </div>';
                         
                     endif;
                ?>
                    
            </div>
        </div>
    </article> 


<?php
endwhile;
endif;
get_footer();
?>