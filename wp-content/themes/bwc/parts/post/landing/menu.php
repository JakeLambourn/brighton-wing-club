<!-- Sticky Menu -->
<ul class="filter-menu" style="display: none">
    <?php
    $args = array(  'show_option_all' => 'Most recent',
                    'title_li'        => '',
                    'exclude'         => 1, //Uncategorized
                    'hide_empty'      => 0);
    wp_list_categories($args);
    ?>
</ul>
