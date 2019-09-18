<?php
/**
 * Twenty Thirteen functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage PebbleDesigns
 * @since Twenty Thirteen 1.0
 */

/*
 * Set up the content width value based on the theme's design.
 *
 * @see twentythirteen_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 604;

/**
 * Twenty Thirteen setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Thirteen supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Thirteen 1.0
 */
function pd_setup() {

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'recipe'
	// ) );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menu( 'header_secondary', __( 'Header Secondary', 'twentythirteen' ) );

	//register_nav_menu( 'main', __( 'main', 'twentythirteen' ) );

	register_nav_menu( 'Top Menu', __( 'top_menu', 'twentythirteen' ) );

	register_nav_menu( 'Footer', __( 'footer_links', 'twentythirteen' ) );
	
	register_nav_menu( 'Mobile Menu', __( 'mobile_menu', 'twentythirteen' ) );

	



	

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	 add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 604, 270, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'pd_setup' );

/**
 * Return the Google font stylesheet URL, if available.
 *
 *
 * @since Twenty Thirteen 1.0
 *
 * @return string Font stylesheet or empty string if disabled.
 */


/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Thirteen 1.0
 */
 
 
 
function twentysixteen_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		

	wp_enqueue_script( 'jqueryVal', 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js', array( 'jquery' ), '2014-03-18', true );

	//wp_enqueue_script( 'jqueryCycle', 'http://malsup.github.io/jquery.cycle2.js', array( 'jquery' ), '2016-11-10', true );

	wp_enqueue_script( 'theme_functions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2016-11-10', true );
	

	wp_enqueue_script( 'google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAshSxoJvt4w0W3gk0UzsT1EIcTs9g6-Jw&callback=initMap', array('jquery'), '2019-11-10', true );

		
	// Loads our main stylesheet.
	wp_enqueue_style( 'wc-main-style', get_template_directory_uri() . '/styles/css/mains.css', array(), '2013-07-18' );  

	// Loads the Internet Explorer specific stylesheet.
	//wp_enqueue_style( 'wc-ie', get_template_directory_uri() . '/css/ie.css', array( 'ie-style' ), '2013-07-18' );
	//wp_style_add_data( 'wc-ie', 'conditional', 'lt IE 11' );

}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts_styles' );


// function load_fonts() {
//     wp_register_style('customFonts', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
//     wp_enqueue_style( 'customFonts');
// }
// add_action('wp_print_styles', 'load_fonts');




/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
/*
function get_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = bloginfo( 'description' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title " . "-" . " $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title  . "-" .  " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'get_wp_title', 10, 2 );
*/

/**
 * Register two widget areas.
 *
 * @since Twenty Thirteen 1.0
 */


/**
 * Exceprt custom length
 */

/*
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 )
*/;


function excerpt($limit, $content = FALSE) {
      
      // Check if content is being thread through
      if($content == FALSE) {
      	$excerpt = explode(' ', get_the_excerpt(), $limit);
      } else {
      	$excerpt = explode(' ', $content, $limit);
      }

      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

// e.g. echo excerpt(25);



/**
 * Exceprt custom readmore
 */
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_action( 'init', 'wpse6098_init', 100 ); // 100 so the post type has been registered
function wpse6098_init()
{
    register_taxonomy_for_object_type( 'category', 'news' );
}


// Hide certain pages from Search
// function mySearchFilter($query) {
//     if ($query->is_search) {
//         $excludeId = array(184, 177, 186, 40);
//         $query->set('post__not_in', $excludeId);
//     }
//     return $query;
// }
// add_filter('pre_get_posts','mySearchFilter');


function showCategories($postid) {
	
				$categories = get_the_category($postid);
				$separator = ' ';
				$output = '';
				if($categories){
					foreach($categories as $category) {
						$output .= '<span>'.$category->cat_name.'</span>'.$separator;
					}
				return trim($output, $separator);
				}				
}
function showTags($postid, $separator_before = false, $separator_after = false) {
	
		$tags = get_the_tags($postid);

		// Check if separator is specified
		if($separator_before == false) {
			$separator_before = '<span>';
		} else {
			$separator_before = $separator_before;
		}

		// Check if separator is specified
		if($separator_after == false) {
			$separator_after = '</span>';
		} else {
			$separator_after = $separator_after;
		}
		
		$output = '';
		if($tags){
			foreach($tags as $tag) {
				$output .= $separator_before . $tag->name . $separator_after;
			}
		return trim($output);
		}				
}

remove_action('wp_head', 'wp_generator');

function current_url() {
	// Protocol
	$url = ( array_key_exists('HTTPS', $_SERVER) ) ? 'https://' : 'http://';
	$url .= $_SERVER['SERVER_NAME'];
	// Port
	$url .= ( '80' == $_SERVER['SERVER_PORT'] ) ? '' : ':' . $_SERVER['SERVER_PORT'];
	$url .= $_SERVER['REQUEST_URI'];

	return trailingslashit( $url );
}




/* THIS GETS THE LARGE IMAGE FOR LIGHTBOX, NOT ORIGINAL VERSION */
function oikos_get_attachment_link_filter( $content, $post_id, $size, $permalink ) {
 
    // Only do this if we're getting the file URL
    if (! $permalink) {
        // This returns an array of (url, width, height)
        $image = wp_get_attachment_image_src( $post_id, 'large' );
        $new_content = preg_replace('/href=\'(.*?)\'/', 'href=\'' . $image[0] . '\'', $content );
        return $new_content;
    } else {
        return $content;
    }
}
add_filter('wp_get_attachment_link', 'oikos_get_attachment_link_filter', 10, 4);



function get_child_pages_by_parent_id($pageId,$limit)
{
    // needed to use $post
    global $post;
    // used to store the result
    $pages = array();

    // What to select
    $args = array(
        'post_type' => 'page',
        'post_parent' => $pageId,
        'posts_per_page' => $limit,
        'post__not_in' => array('162')
    );
    $the_query = new WP_Query( $args );

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $pages[] = $post;
    }
    wp_reset_postdata();
    
    foreach($pages as $value){ ?>

		<div class="equalheight">
			<?php 
				if ( has_post_thumbnail($value->ID)) {
			      	echo '<a href="' . get_permalink( $value->ID ) . '" title="' . esc_attr( $value->post_title ) . '">';
			      	echo get_the_post_thumbnail($value->ID, 'thumbnail');
			      } else {
			      	echo '<a href="' . get_permalink( $value->ID ) . '" title="' . esc_attr( $value->post_title ) . '">';
			      	echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" class="attachment-thumbnail wp-post-image" alt="enableImagetest10">';
			      }
			    echo '</a>';
			    ?>

				<h3>
					<strong><?php echo $value->post_title ?></strong>
				</h3>
				<div class="excerpt">
					<?php echo strip_shortcodes(wp_trim_words( $value->post_content, 20)); ?>
				</div>
				<a href="<?php echo get_permalink( $value->ID ) ?>" class="readmore">ORDER</a>
		</div>

	<?php } 
}




function wpb_list_child_pages($limit = '4') { 

global $post;

$args = array(
'post_parent'   => $post->ID,
 'post_type'      => 'page',
 'numberposts'	=> $limit,
 'depth'			=> 0,
 'sort_order'	=> 'DESC',
 'sort_column'	=> 'menu_order',
 'exclude'		=> $post->ID
 );

 $pages = get_page_children( $post->ID  );

$output = '';
$x = 0;

foreach($pages as $value){ ?>

	<div class="equalheight">
		<?php 
			if ( has_post_thumbnail($value->ID)) {
		      	echo '<a href="' . get_permalink( $value->ID ) . '" title="' . esc_attr( $value->post_title ) . '">';
		      	echo get_the_post_thumbnail($value->ID, 'thumbnail');
		      } else {
		      	echo '<a href="' . get_permalink( $value->ID ) . '" title="' . esc_attr( $value->post_title ) . '">';
		      	echo '<img src="'.get_template_directory_uri().'/images/noimage.jpg" class="attachment-thumbnail wp-post-image" alt="enableImagetest10">';
		      }
		    echo '</a>';
		    ?>

			<h3>
				<strong><?php echo $value->post_title ?></strong>
			</h3>
			<div class="excerpt">
				<?php echo wp_trim_words( $value->post_content, 20); ?>
			</div>
			<a href="<?php echo get_permalink( $value->ID ) ?>" class="readmore">Read More</a>
	</div>

<?php } 

return $output;
}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');


					
					function wpb_list_child_posts() { 

						global $post;
						
						if ( $post->post_parent ) {
							$the_id = $post->post_parent;
						} else {
							$the_id = $post->ID;
						}
						
						$args = array(
						'post_type'		=> 'survival_kit',
						'post_parent'   => $the_id,
						'numberposts'	=> '4',
						'depth'			=> 1,
						'sort_order'	=> 'DESC',
						'sort_column'	=> 'menu_order',
						'exclude'		=> $post->ID
						);
						
						$pages = get_children( $args );
						
						$output = '';
						$x = 0;
						
						foreach($pages as $value){
						
							if($x == 0) {
								$output .= '<li class="four columns alpha">';
							} elseif($x == 3) {
								$output .= '<li class="four columns omega">';
							} else {
								$output .= '<li class="four columns">';
							}
						
								if ( has_post_thumbnail($value->ID) ) {
						              $output .= get_the_post_thumbnail($value->ID, 'thumbnail');
						        } else {
						            $output .= "No Image";
						        }
						        $output .=  '<h3><a href="'. $value->post_name . '">' . $value->post_title . '</a></h3>';
						        //$output .= excerpt(20);
								$output .= "<a href='" . $value->post_name . "' >Read more</a>";
								$output .= "</li>";
								$x++; 
								if($x==4) {
									$x=0;
								}
						} 
						
						return $output;
						}


	//===========================================
	// GET Custom Category Taxonomy

	function customCategory($postType, $taxonomy, $showcount = true, $echo = true) {
			
			//$screen = get_current_screen();
		    global $wp_query;
		    
	        return wp_dropdown_categories( array(
	            //'show_option_all' => 'Show All',
	            'show_option_none' => __( 'Select a category' ),
	            'class' => 'filtercategory',
	            'taxonomy' => $taxonomy,
	            'name' => 'post_category',
	            'orderby' => 'name',
				'order' => 'ASC',
	            //'selected' => ( isset( $wp_query->query['movie_reviews_movie_genre'] ) ? $wp_query->query['movie_reviews_movie_genre'] : '' ),
	            'hierarchical' => true,
	            'depth' => 3,
	            'show_count' => $showcount,
	            'hide_empty' => true,
	            'echo'       => $echo
	        ) );
	}
	// e.g. customCategory('news-reviews', 'categories');
	
	
	//===========================================
	// GET ALL posts from a custom taxonomy selected	

	function getPostsFromTaxonomy($postType, $taxonomy, $option = array() ) {	
		
		global $post;
		
		$myposts = get_posts(array(
		    //'showposts' => -1,
		    'numberposts'	=> '10',
		    'post_type' => $postType,
		    'exclude'		=> $post->ID,
		    'tax_query' => array(
		        array(
		        'taxonomy' => $taxonomy,
		        'field' => 'slug',
		        'terms' => $option
		    ))
		));
		 
		return $myposts;
			
	}
	// e.g. getPostsFromTaxonomy('dechoxers', 'post type', array('confessions') );



// Do not wrap <p> tags around images
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


function get_my_children() {
	// GET SECTION (TOP LINE) TITLE
    // This is the top-parent item. So when you are in the children it would always pull the highest parent
    // =================================

    global $post;

    $children = get_pages('child_of='.$post->ID);

    $ancs = get_ancestors($post->ID,'page');

    //var
    $grandTitle = array();
    $grandID = "";

    if( count( $ancs ) > 0 ) {
        
        //echo end(get_page( $ancs )->post_title);

        
        foreach( $ancs as $anc ) {
            $grandTitle[] = get_page( $anc )->post_title;
            $grandID[] = get_page( $anc )->ID;
        }
        echo '<h2>'.end($grandTitle).'</h2>';
        $grandID = end($grandID);

        
    // IF TOP, THEN SHOW GET PAGE TITLE
    // =================================
    } elseif( count( $children ) > 0 ) {
        echo '<h2>'.get_the_title().'</h2>';
    } 

    //PAGE ID
                                $pageID = $post->ID;

                                if( $grandID == "" ) {
                                    $grandID = $post->ID;
                                } else {
                                    $grandID = $grandID;
                                }

                                $my_wp_query = new WP_Query();

                                $args = array(
                                 'parent' => $grandID,
                                 'post_type'    => 'page',
                                 'numberposts'  => 10,
                                 'depth'    => 1,
                                 'sort_order'   => 'DESC',
                                 'sort_column'  => 'menu_order',
                                 //'exclude'  => $pageID
                                );


                            $pch = get_pages($args);
                            
                            if( count($pch) > 0 ) {

                                echo '<ul class="leftMenu menu">';
                        
                                foreach($pch as $value){
                                    echo '<li class="';
                                        if( $pageID == $value->ID) { echo 'current_menu_item'; }
                                    echo '" >';
                        
                                    echo '<a href="'. get_the_permalink($value->ID) .'">'. get_the_title($value->ID) . '</a>';
                        
                                        $args2 = array(
                                             'parent' => $value->ID,
                                             'post_type'    => 'page',
                                             'numberposts'  => 10,
                                             'depth'    => 1,
                                             'sort_order'   => 'DESC',
                                             'sort_column'  => 'menu_order',
                                             //'exclude'  => $pageID
                                        );
                                        $pch2 = get_pages($args2);
                        
                                        if($pch2 > 0) {
                                            echo '<ul class="submenuitem">';
                                                foreach($pch2 as $value2){
                                                    echo '<li class="';
                                                        if( $pageID == $value2->ID) { echo 'current_menu_item'; }
                                                    echo '" >';
                                                        echo '<a href="'. get_the_permalink($value2->ID) .'">'. get_the_title($value2->ID) . '</a>';
                                                    echo '</li>';
                                                }
                                            echo '</ul>';
                                        }
                        
                                    echo '</li>';
                                }
                        
                                echo '</ul>';
                            
                            }


} // end

		//===========================
		// Get related content

		function get_related_content() {
			if( have_rows('related_page_content') ): ?>
		          
		                <ul class="leftMenu menu">

		                    <?php $post_objects = get_field('related_page_content'); ?>
		                    <?php foreach( $post_objects as $post_object): ?>
		                        <li>
		                            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
		                        </li>
		                    <?php endforeach; ?>

		                </ul>

		    <?php endif; ?>  
		<?php } 


			// LOAD POST HEADER IMAGE
			function get_post_header($postID) {
			
					//Featured Image
                    if ( has_post_thumbnail($postID)) 
                    {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
                        echo '<div class="postImage" style="background-image: url(\''. $image[0] .'\') " >';
                        echo '</div>';

                    } else {
                        echo '<div class="postImage" style="background-image: url(\''.get_home_url() .'/wp-content/uploads/2015/03/pagetitleimage.jpg\')" >';
                    	echo '</div>';
                    }

			}

			
			// GET MENU TITLE
			function get_menu_title($menu_location) {

	            $menu_locations = get_nav_menu_locations();
	            $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
	            $menu_name = (isset($menu_object->name) ? $menu_object->name : '');

	            return esc_html($menu_name);

        	}



//===========================
// ADD MENU CLASS TO CUSTOM POST TYPE PARENT

function add_current_nav_class($classes, $item) {

    // Getting the current post details
    global $post;

    // Get post ID, if nothing found set to NULL
    $id = ( isset( $post->ID ) ? get_the_ID() : NULL );

    // Checking if post ID exist...
    if (isset( $id )){
        
        // Getting the post type of the current post
        $current_post_type = get_post_type_object(get_post_type($post->ID));
        $current_post_type_slug = $current_post_type->rewrite['slug'];          

        // Getting the URL of the menu item
        $menu_slug = strtolower(trim($item->url));

        // If the menu item URL contains the current post types slug add the current-menu-item class
        if (strpos( $menu_slug, $current_post_type_slug ) !== false) {
           $classes[] = 'current-menu-item';
        } 
    }
    // Return the corrected set of classes to be added to the menu item
    return $classes;
}

// Mark (highlight) custom post type parent as active item in Wordpress Navigation
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );







function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    //'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}


	//----------------------------------------------------------------------------------//	
	//                               DISABLE WORDPRESS EMOJIS
	//----------------------------------------------------------------------------------//
	function disable_wp_emojicons() {

	  // all actions related to emojis
	  remove_action( 'admin_print_styles', 'print_emoji_styles' );
	  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	  remove_action( 'wp_print_styles', 'print_emoji_styles' );
	  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	}
	add_action( 'init', 'disable_wp_emojicons' );


// function sample_admin_notice__error() { 
// 	$class = 'notice notice-error';
// 	$message = __( 'Wordpress SEO - When UPDATING plugin please re-configure line 286 of frontend/class-opengraph.php. This is because we needed to remove OG:URL on the congrats page.', 'sample-text-domain' );

// 	printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
// }
// add_action( 'admin_notices', 'sample_admin_notice__error' ); 


function cf7_add_post_id(){
 
    return print_r($_SERVER, true);
}
 
add_shortcode('CF7_ADD_POST_ID', 'cf7_add_post_id');

/* ACF MAPS API */
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyDZZ9mEb4QbziPLV2miOEtqWt8-YcqeATQ';	
	return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


/* CF7 Dynamic Fields */
/* USAGE: [getEmail_from_customfield] */
function get_attributes( $atts ) {

	if( get_field('email') == "" ) {
		// Use global email address
		return get_field('contact_form_email_address', 'option');
	} else {
		return get_field('email');
	}

	

}
add_shortcode( 'getEmail_from_customfield', 'get_attributes' );




  /**
   Get all tags from a custom post type
   */
function post_type_tags( $post_type = '' ) {
    global $wpdb;

    if ( empty( $post_type ) ) {
        $post_type = get_post_type();
    }

    return $wpdb->get_results( $wpdb->prepare( "
        SELECT COUNT( DISTINCT tr.object_id ) 
            AS count, tt.taxonomy, tt.description, tt.term_taxonomy_id, t.name, t.slug, t.term_id 
        FROM {$wpdb->posts} p 
        INNER JOIN {$wpdb->term_relationships} tr 
            ON p.ID=tr.object_id 
        INNER JOIN {$wpdb->term_taxonomy} tt 
            ON tt.term_taxonomy_id=tr.term_taxonomy_id 
        INNER JOIN {$wpdb->terms} t 
            ON t.term_id=tt.term_taxonomy_id 
        WHERE p.post_type=%s 
            AND tt.taxonomy='post_tag' 
        GROUP BY tt.term_taxonomy_id 
        ORDER BY count DESC
    ", $post_type ) );
}



function my_acf_save_post( $post_id ) {

	//var_dump($_POST);
	//echo $_POST['acf']['field_5d80a31a65fa3'];
	//exit();

	if( $_POST['post_type'] == 'venue' ) {

		$url = 'https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyAshSxoJvt4w0W3gk0UzsT1EIcTs9g6-Jw&place_id='.$_POST['acf']['field_5d80a31a65fa3'].'&fields=opening_hours/weekday_text,rating,user_ratings_total,website,formatted_address,geometry';
	        
	    $ch = curl_init();

	    curl_setopt($ch, CURLOPT_URL, $url ); //Url together with parameters
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
	    //curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    
	    $result = curl_exec($ch);
	    curl_close($ch);

		$r = json_decode($result);

		// Address
		update_field( 'field_5d80ad49d4d46', array("address"=>$r->result->formatted_address,"lat"=>$r->result->geometry->location->lat,"lng"=>$r->result->geometry->location->lng), $post_id );

		// Google Rating
		update_field( 'field_5d80b80f68699', $r->result->rating, $post_id );

		// Opening Hours

		$times = "";
		foreach( $r->result->opening_hours->weekday_text as $time ) {
			$times .= $time.'<br />';
		}
		update_field( 'field_5d80b8b16869a', $times, $post_id );


		// Website
		update_field( 'field_5d80b8c36869b', $r->result->website, $post_id );
		
		// Geo - Lat
		//update_field( 'field_5d80e717a979b', $r->result->geometry->location->lat, $post_id );
		
		// Geo - Lng
		//update_field( 'field_5d80e71ca979c', $r->result->geometry->location->lng, $post_id );

		//var_dump($_POST);
		//echo $r->result->rating;
		//exit();

	}

}

add_action('acf/save_post', 'my_acf_save_post', 14);


add_filter( 'comments_open', 'my_comments_open', 10, 2 );

function my_comments_open( $open, $post_id ) {

  $post = get_post( $post_id );

  if ( 'venue' == $post->post_type )
      $open = true;

  return $open;
}


function crunchify_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','crunchify_disable_comment_url');





