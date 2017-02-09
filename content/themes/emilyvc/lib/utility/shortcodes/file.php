<?php

/**
 *******************************************************************************
 * Shortcode: File
 *******************************************************************************
 *
 * A customized panel which will show a file from the Media Library.
 *
 * $. Shortcode Declaration
 *
 */



/**
 * Shortcode Declaration
 ******************************************************************************/

function wpst_file_shortcode ( $atts, $content = null) {
    extract( shortcode_atts(
        array(
            'url'   => '',
            'title' => '',
            'description' => '',
            'debug' => '',
        ), $atts )
    );

     if ($debug) {
        return '<pre><code class="html">[file url="http://ntw.mixd.co.uk/content/uploads/2016/07/file-example.pdf" title="Test" description="a test description"]</code></pre>';
    }

    // If URL is present
    if($url):
        // File Type

        // File size
        $file_size = wpst_file_size_convert( wpst_get_file_size( $url ) );
    endif;

    // Format HTML
    if($url && $title):
        $output  = '<a href="' . $url . '" class="panel panel--small panel--blue panel--file panel--icon">';
        $output  .= '<i class="icon icon--medium icon--file"></i>';
        $output  .= '<h3>' . $title . ' ('.$file_size.')</h3>';
        if( $description ):
            $output  .= '<p class="zeta">' . $description . '</p>';
        endif;
       
        $output .= '</a>';
    endif;

    return $output;
}

add_shortcode( 'file', 'wpst_file_shortcode' );
