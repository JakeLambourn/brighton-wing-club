<?php
/* Template Name: Home */
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

    <article id="main-body" class="container">
        <div class="row">
            <div class="col-12">
            	<h1><?php echo get_the_title() ?></h1>
				
				<div class="row">
            		<div class="large-10 large-offset-1 columns">
            			<?php echo the_content() ?>
            		</div>
            	</div>

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
            </div>
        </div>
    </article>

    

<?php
endwhile;
endif;
get_footer();
?>