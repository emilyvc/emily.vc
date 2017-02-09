<?php
// panel
// -------------------------------------------------------------
function wpst_shortcode_panel( $atts, $content = null ) {
    extract( shortcode_atts(
        array(
            'type' => '',
            'debug' => ''
        ), $atts )
    );
    if ($debug) {
        return '<pre><code class="html">[panel type="green"]&lt;h3>This is a heading&lt;/h3>&lt;p>Lorem ipsum dolor sit amet, &lt;a href="#">consectetur&lt;/a> adipiscing elit.&lt;/p>[/panel]</code></pre>';
    }
    $css = "panel--blue";
    if($type):
        switch($type):
            case 'green':
                $css = "panel--green";
                break;
            case 'blue':
                $css = "panel--blue";
                break;
            case 'purple':
                $css = "panel--purple";
                break;
            case 'orange':
                $css = "panel--orange";
            break;
            case 'pink':
                $css = "panel--pink";
            break;
        endswitch;
    endif;
    $output_string = '<div class="u-push-top u-push-bottom | panel ' . $css . '">' . $content . '</div>';
    return $output_string;
}
add_shortcode( 'panel', 'wpst_shortcode_panel' );
