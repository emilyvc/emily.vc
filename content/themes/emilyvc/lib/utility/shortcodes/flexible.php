<?php
// Flexible iFrames (Google Maps.)
function wpst_shortcode_flex( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'link'   => '',
        'debug' => ''
    ), $atts ) );
    if ($debug == "true") {
        return '<pre><code class="html">[flexible link="https://www.youtube.com/embed/WdL_IsD646I"]</code></pre>';
    }
    $output_string = '<figure class="flexible"><iframe src="'. $link .'" style="border:0;" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></figure>';
    return $output_string;
}
add_shortcode('flexible', 'wpst_shortcode_flex');
