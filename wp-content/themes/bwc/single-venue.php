<?php
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

    <article id="main-body" class="container" data-lat="<?php echo get_field('') ?>" data-lng="<?php echo get_field('') ?>">
        <div class="row">
            <div class="large-9 columns">
				<div class="row">
            		<div class="large-12 columns">
            			<?php echo the_content() ?>
            		</div>
            	</div>

            	<div class="bwcReview">
            		<span class="quote-before">&ldquo;</span>
            		<span class="quote-after">&rdquo;</span>
            		<ul>
            			<li>
            				<div>A great wing, tasty juicy and the right amount of spice</div>
							<div class="src">@Dean Hodges</div>
            			</li>
            		</ul>
            	</div>
            	<a href="/" class="button primary bwcReadmore">Read more reviews</a>

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
            <div class="large-3 columns venue-details">				
				<ul>
					<li class="externalLinks">
						<a href="<?php echo get_field('website') ?>" target="blank"><i class="fa fa-globe" ></i>Website</a><br />
						<a href="<?php echo get_field('website') ?>" target="blank"><i class="fa fa-cutlery" ></i>Menu</a>
					</li>
					<li>
            			<h3>Google Rating</h3>
            			<div class="star-ratings-sprite"><span style="width:52%" class="star-ratings-sprite-rating"></span></div>
            		</li>
					<li>
						<h3>Address</h3>
            			<div class="details"><?php echo get_field('address') ?></div>
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