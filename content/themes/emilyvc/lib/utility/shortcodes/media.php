<?php
// Media
// -------------------------------------------------------------
function wpst_shortcode_media( $atts, $content = null) {

    extract( shortcode_atts(
        array(
            'align' => 'left',
            'debug' => '',
            'image' => '',
            'link' => false
        ), $atts )
    );

    if ($debug) {
        return '<pre><code class="html">[media align="left" image="http://placehold.it/100"]&lt;h3>This is a heading&lt;/h3>&lt;p>Lorem ipsum dolor sit amet, &lt;a href="#">consectetur&lt;/a> adipiscing elit.&lt;/p>[/media]</code></pre>';
    }

    $img = "<img src='" . $image . "' class='media__img'>";

    if ( $link ) {
        $img = "<a href='" . $link . "'>" . $img . "</a>";
    }


    if($align):
        switch($align):
            case 'left':
                $css = "";
            break;
            case 'right':
                $css = "media--flipped";
            break;
        endswitch;
    endif;

    $output_string = '<div class="media media--shortcode ' . $css . '">' . $img . '<div class="media__body">' . $content . '</div></div>';
    return $output_string;
}
add_shortcode( 'media', 'wpst_shortcode_media' );
