<?php

//Hide the admin bar. It annoys me.
add_filter('show_admin_bar', '__return_false');


/**
 * Process the content to automatically add anchors based on h2 titles
 * @author Mike Collins
 */

add_filter( 'the_content', 'auto_add_anchor_links' );

function auto_add_anchor_links($content) {

    $auto_anchors = get_field('auto_anchors');

    if ($auto_anchors) {

        //first lets add id's to each of the headings
        $content = preg_replace_callback('/(\<h[1-6](.*?))\>(.*)(<\/h[1-6]>)/i', function ($matches) {
            if (!stripos($matches[0], 'id=')) :
                $matches[0] = $matches[1] . $matches[2] . ' id="' . sanitize_title($matches[3]) . '">' . $matches[3] . $matches[4];
            endif;
            return $matches[0];
        }, $content);

        //Now lets go ahead and create the jump menu
        $tagname = 'h2';
        $jumpto = '';

        $d = new DOMDocument();
        $d->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $h2_items = array();
        foreach ($d->getElementsByTagName($tagname) as $item) {

            $h2_items[] = array('id' => sanitize_title($item->textContent),
                'text' => $item->textContent);
        }


        if (sizeof($h2_items) > 1) {
            $jumpto = '<ul class="anchorlist">';

            foreach ($h2_items as $h2)
                $jumpto .= '<li><a href="#' . $h2['id'] . '">' . $h2['text'] . '</a></li>';

            $jumpto .= '</ul>';
        }


        return $jumpto . $content;
    } else {
        return $content;
    }
}

/**
 *
 * Titles throughout the site consist of a title, some text and an optional subtitle.
 * Simple function to ouput this to keep the template files a bit tidier.
 *
 * @param $title
 * @param $content
 * @param string $subtitle
 */

function bm_title($title, $content,$subtitle = '') {

    if ($subtitle == ''): ?>
        <h2 class="overline"><?php echo $title; ?></h2>
<?php
    else:
?>
        <p class="overline"><?php echo $subtitle; ?></p>
        <h2><?php echo $title; ?></h2>
<?php
    endif;
    echo '<div class="title-content">'.$content.'</div>';
}

//As requested by Dean
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Custom compare function. Used by usort() on product template page. To order sections.
 */

function sort_product_sections($a,$b) {
    if ($a['sort'] == $b['sort']) {
        return 0;
    }
    return ($a['sort'] < $b['sort']) ? -1 : 1;
}


/**
 * Returns a custom tag list (must be used inside the loop)
 * @return string
 */
function post_category_list($include_links = false,$include_hashtags = false) {
    $output = '';
    $count  = 0;

    $categories = get_the_category();

    if (is_array($categories)) {
        foreach ($categories as $category) {
            if ($category->term_id != TERM_ID_UNCATEGORISED) {

                $category_name = $category->name;
                if ($include_hashtags) $category_name = '#' . $category_name;

                if ($count > 0) $output .= ', ';
                if ($include_links)
                    $output .= '<a href="'. get_category_link( $category->term_id ) . '">'.$category_name.'</a>';
                else
                    $output .= $category->name;
                $count++;
            }
        }
    }

    return $output;
}

/**
 * Same as the above function but works outside the loop.
 * Less bells and whistles though
 * @param $post_id
 * @return string
 */
function post_category_outside_loop($post_id) {
    $cats = wp_get_post_categories($post_id);
    $output = '';
    $count  = 0;

    foreach ( $cats as $category ) {
        $category_name = get_cat_name($category);

        if ($count > 0) $output .= ', ';
        $output .= $category_name;
        $count++;
    }

    return $output;
}