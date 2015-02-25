<?php

// Remove auto <p> and <br /> tags in shortcodes
// -------------------------------------------------------------
function my_clean_shortcodes( $content ){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );
    $content = strtr( $content, $array );
    return $content;
}

add_filter( 'the_content', 'my_clean_shortcodes' );


// Flexible iFrames (Youtube, Vimeo, Google Maps, etc.) 
function shortcode_flex( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'link'   => ''
    ), $atts ) );
    
    $output_string = '<figure class="flexible"><iframe src="'. $link .'" style="border:0;" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></figure>';
    
    return $output_string;
}
add_shortcode('flexible', 'shortcode_flex');


// Flexible iFrames (Youtube, Vimeo, Google Maps, etc.) 
function shortcode_enquiry( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'type' => ''
    ), $atts ) );
    
    $output_string  = '<div class="box box--small box--enquiry">';
    $output_string .= 'Interested in this '. $type .'? <br> Call Sam on <strong>0033 686 021 805</strong> or ';
    $output_string .= '<a href="/contact" class="btn btn--primary btn--small">Enquire now <span class="icon--arrow-right"></span></a>';
    $output_string .= '</div>';
    
    return $output_string;
}
add_shortcode('enquiry', 'shortcode_enquiry');

// Email Shortcode 
// -------------------------------------------------------------
function shortcode_email( $atts, $content = null ) {
    $output_string = get_field('email_address', 'options');
    return $output_string;
}
add_shortcode( 'email', 'shortcode_email' );


// Phone Number Shortcode 
// -------------------------------------------------------------
function shortcode_telephone( $atts, $content = null ) {
    $output_string = get_field('phone_number', 'options');
    return $output_string;
}
add_shortcode( 'telephone', 'shortcode_telephone' );


// Facebook Shortcode 
// -------------------------------------------------------------
function shortcode_facebook( $atts, $content = null ) {
    $output_string = '<a href="http://facebook.com/'. get_field('facebook', 'options') .'">Facebook</a>';
    return $output_string;
}
add_shortcode( 'facebook', 'shortcode_facebook' );


// Twitter Shortcode 
// -------------------------------------------------------------
function shortcode_twitter( $atts, $content = null ) {
    $output_string = '<a href="http://twitter.com/'. get_field('twitter', 'options') .'">Twitter</a>';
    return $output_string;
}
add_shortcode( 'twitter', 'shortcode_twitter' );


// Pinterest Shortcode 
// -------------------------------------------------------------
function shortcode_pinterest( $atts, $content = null ) {
    $output_string = '<a href="http://pinterest.com/'. get_field('pinterest', 'options') .'">Pinterest</a>';
    return $output_string;
}
add_shortcode( 'pinterest', 'shortcode_pinterest' );


// Instagram Shortcode 
// -------------------------------------------------------------
function shortcode_instagram( $atts, $content = null ) {
    $output_string = '<a href="http://instagram.com/'. get_field('instagram', 'options') .'">Instagram</a>';
    return $output_string;
}
add_shortcode( 'instagram', 'shortcode_instagram' );