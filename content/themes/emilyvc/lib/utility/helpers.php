<?php

/**
 *******************************************************************************
 * Helpers
 *******************************************************************************
 *
 * Helper functions which makes life easier and remove any unnecessary
 * repetition.
 *
 * $. Conditionals
 *
 */



/**
 * Conditionals
 ******************************************************************************/

// Conditionals here


/**
 * Other
 ******************************************************************************/

/**
 * Get a post's excerpt by its ID
 *
 * @param  int     $id  The ID of the post
 * @return string       The post's excerpt
 */
function ra_get_excerpt_by_id ( $id ) {

    // Get current post
    $page = get_post($id);

    // Get it's excerpt
    $excerpt = $page->post_excerpt;

    // Return the excerpt
    return $excerpt;
}

function ra_term_links( $post_id, $taxonomy, $wrap = true ){
    $terms = wp_get_object_terms($post_id, $taxonomy);
    $str_output = '';

    if(!is_wp_error($terms) && $terms ):
        if ($wrap) {
            $str_output .= '<ul class="list list--unset list--inline list--box">';
        }
        
        foreach($terms as $term):
            if ($wrap) {
                $str_output .= '<li class="zeta">';
            }

            $url = get_term_link($term , $taxonomy);
            $str_output .= '<a href="'.$url.'">'.$term->name.'</a>';

            if ($wrap) {
                $str_output .= '</li>';
            }

        endforeach;

        if ($wrap) {
           $str_output .= '</ul>';
        }

    endif;

    return $str_output;

}


/**
 * Prepare an array count of dates published, multi-dimensional of year then month, with count
 */
function ra_get_post_type_archive_list($post_type = 'post', $order = 'ASC') {
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'order' => $order
    );

    $all_posts = new WP_Query( $args );
    $archive = [];

    if ( $all_posts->have_posts() ) :
        while ( $all_posts->have_posts() ) : $all_posts->the_post();
            $year = get_the_date('Y');
            $month = get_the_date('m');
            $archive[$year][$month] = $archive[$year][$month] + 1;

        endwhile;
    endif; wp_reset_query();

    return $archive;
}

/**
 * Prepare an array count of dates published, multi-dimensional of year then month, with count
 */
function ra_get_archive_accordion($post_type = 'post', $order = 'ASC') {
    $archive = ra_get_post_type_archive_list($post_type, $order);
    $news_url = get_the_permalink(53);

    $str_output = '';

    if( !empty($archive) ):
        $str_output .= '<ul class="list list--unset list--accordian | sidebar__list">';
        foreach($archive as $key => $year):
            $year_num = $key;
            $str_output .= '<li class=""><a href="#" class="sidebar__list--accordian list__major">'.$key.'</a>';

                $str_output .= '<ul class="list__sub">';
                foreach($year as $key => $month):
                    $dateObj   = DateTime::createFromFormat('m', $key);
                    $monthname = $dateObj->format('F');
                    $url = $news_url.$year_num.'/'.$key.'/';

                    $str_output .= '<li class=""><a href="'.$url.'" class="sidebar__list--arrow">'.$monthname.'</a></li>';
                endforeach;
                $str_output .= '</ul>';
            $str_output .= '</li>';
        endforeach;
        $str_output .= '</ul>';
    endif;

    return $str_output;
}

/**
 * Prepare an archive list from the given post type
 */
function ra_get_post_type_archive($post_type) {

    $slug = $post_type;

    $page_link = get_page_by_path($slug, 'page');
    $page_link = get_permalink($page_link->ID);

    if ( !$post_type ) {
        return false;
    }

    $args = [
        "post_type" => $post_type,
        "post_status" => "publish",
        "posts_per_page" => -1,
        'order' => 'DESC',
        'orderby' => 'meta_value_num',
    ];

    $posts = get_posts($args);

    $dates = [];

    foreach( $posts as $i ) {

        if ( !get_field('date', $i->ID) ) {
            $date = new DateTime($i->post_date);
        }else{
            $date = get_field('date', $i->ID);
            $date = new DateTime(str_replace("/","-",$date));
        }

        $month = $date->format('m');
        $year = $date->format('Y');

        $label = $date->format('F Y');

        $dates[$label] = $page_link . "?filter_month=" . $month . "&filter_year=" . $year;
    }

    return $dates;
}
