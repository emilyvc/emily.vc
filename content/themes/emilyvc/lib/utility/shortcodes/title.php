<?php
// Title of post/page Shortcode
// -------------------------------------------------------------
function wpst_shortcode_title( $atts, $content = null ) {
    global $post;
    if ($content == "debug") {
        $output_string = "<pre><code class='html'>&#91;title&#93;</code></pre>";
    }else{
        $output_string = get_the_title($post->ID);
    }
    return $output_string;
}
add_shortcode( 'title', 'wpst_shortcode_title' );
