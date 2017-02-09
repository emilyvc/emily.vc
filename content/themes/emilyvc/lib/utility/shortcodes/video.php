<?php
// Video Shortcode
// -------------------------------------------------------------
function wpst_shortcode_video( $atts, $content = null ) {
    // extract and set defaults
    extract( shortcode_atts( array(
        'url' => '',
        'autoplay' => 'false',
        'related' => 'no',
        'debug' => ''
    ), $atts ) );
    $play = '';
    $image = '';
    if ($debug == 'true') {
        return '<pre><code class="html">[video url="https://www.youtube.com/watch?v=WdL_IsD646I" autoplay="false"]</code></pre>';
    }else{
        // Vimeo
        if(preg_match('/vimeo.com/', $url)):
            $type = 'vimeo';
            $id = explode('vimeo.com/', $url);
            $id = $id[1];
        endif;
        // YouTube
        if( preg_match('/youtube.com/', $url) || preg_match('/youtu.be/', $url) ):
            $type = 'youtube';
            // Regular URL
            if(preg_match('/youtube.com\/watch/', $url) ):
                $id = explode('v=', $url);
                $id = $id[1];
            endif;
            // Short URL (.be)
            if(preg_match('/youtu.be/', $url)):
                $id = explode('.be/', $url);
                $id = $id[1];
            endif;
            // Embed URL
            if(preg_match('/youtube.com\/embed/', $url) ):
                $id = explode('/embed/', $url);
                $id = $id[1];
            endif;
        endif;
        if($type == 'youtube'):
            switch($autoplay):
                case 'true':
                    $play = '?autoplay=1';
                break;
                case 'check':
                    if($_GET['autoplay'] == 'true'):
                        $play = '?autoplay=1';
                    endif;
                break;
            endswitch;

            if( $related == 'yes' ):
                if($autoplay == 'false'):
                    $rel = '?rel=1';
                else:
                    $rel = '&rel=1';
                endif;
            else:
                if($autoplay == 'false'):
                    $rel = '?rel=0';
                else:
                    $rel = '&rel=0';
                endif;
            endif;

            if($image == 'true'):
                $output_string = '<img src="http://img.youtube.com/vi/'.$id.'/0.jpg" alt="" />';
            else:
                $output_string = '<figure class="flexible flexible--video"><iframe src="//www.youtube.com/embed/'.$id.''.$play.$rel.'" frameborder="0" id="video"></iframe></figure>';
            endif;
        elseif($type == 'vimeo'):
            switch($autoplay):
                case 'true':
                    $play = '&autoplay=1';
                break;
                case 'check':
                    if($_GET['autoplay'] == 'true'):
                        $play = '&autoplay=1';
                    endif;
                break;
            endswitch;
            $output_string = '<figure class="flexible"><iframe src="//player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0'.$play.'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe></figure>';
        endif;
    }
    return $output_string;
}
add_shortcode( 'video', 'wpst_shortcode_video' );
