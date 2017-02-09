<?php
// Buttons
function wpst_shortcode_btns( $atts, $content = null ) {
    

    // Get shortcode attributes
    extract( shortcode_atts( array(
        'link' => '',
        'type' => '',
        'debug' => '',
    ), $atts ) );
    if ($debug == 'true') {
        return '<pre><code class="html">[button link="mailto:support@mixd.co.uk" type="alternate"]Email the Mixd support team[/button]</code></pre>';
    }
    // Define default button classes
    $classes = 'btn  btn--cms btn--large btn--icon';
    switch($type):
        case 'blue':
        default:
            $classes .= " btn--primary";
            break;
        case 'alternate':
            $classes .= " btn--secondary";
            break;
    endswitch;

    $output_string = '<a class=" ' . $classes . '">' . $content . '<span class="icon icon--medium icon--arrow-right"></span></a>';
    return $output_string;
   
}
add_shortcode('button', 'wpst_shortcode_btns');
