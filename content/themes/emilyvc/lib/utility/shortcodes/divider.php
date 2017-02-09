<?php
// Calendar 
// -------------------------------------------------------------
function wpst_shortcode_divider( $atts, $content = null) {

    extract( shortcode_atts(
        array(
            'debug' => '',
        ), $atts )
    );

    if ($debug) {
        return '<pre><code class="html">[divider]2017[/divider]</code></pre>';
    }

    $output_string = '<span class="divider"> ' . $content . '</span>';
    return $output_string;
}

add_shortcode( 'divider', 'wpst_shortcode_divider' );
