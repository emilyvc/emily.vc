<?php

// Return the root parent ID of a given post
// -------------------------------------------------------------
function get_root_parent_id( $post_id = null ) {
    if ( ! $post_id ) {
        global $post;
        $post_id = $post->ID;
    }
    global $wpdb;
    $parent = $wpdb->get_var( "SELECT post_parent FROM $wpdb->posts WHERE post_type='page' AND post_status='publish' AND ID = '$post_id'" );
    if ( $parent == 0 ) return $post_id;
    else return get_root_parent_id( $parent );
}