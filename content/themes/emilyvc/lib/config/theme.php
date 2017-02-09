<?php

/**
 *******************************************************************************
 * Theme
 *******************************************************************************
 *
 * This file is used to create a baseline for the front-end of the site.
 *
 * $. Remove unnecessary meta/link tags
 * $. Remove & disable JSON API
 * $. Remove oembed scripts
 * $. Queue jQuery correctly
 * $. Update image sizes
 * $. Update functions to HTML5
 * $. Gravity forms
 *
 */



/**
 * $. Remove unnecessary meta/link tags
 ******************************************************************************/

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );



/**
 * $. Remove & disable JSON API
 ******************************************************************************/

function wpst_remove_json_api () {

    /**
     * Remove API scripts from header/footer
     */

    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
    add_filter( 'embed_oembed_discover', '__return_false' );

    /**
     * Disable API from working all together
     */

    add_filter('json_enabled', '__return_false');
    add_filter('rest_enabled', '__return_false');
    add_filter('json_jsonp_enabled', '__return_false');
    add_filter('rest_jsonp_enabled', '__return_false');

    // Remove pingback
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
    remove_action( 'template_redirect', 'rest_output_link_header', 11 );
}

add_action( 'init', 'wpst_remove_json_api' );

/**
 * Remove pingback headers
 */
function wpst_unset_wp_pingback($headers) {
    unset($headers['X-Pingback']);
    return $headers;
}

add_filter( 'wp_headers', 'wpst_unset_wp_pingback' );



/**
 * $. Remove oembed scripts from frontend
 ******************************************************************************/

function wpst_deregister_oembed() {
    wp_deregister_script( 'wp-embed' );
}

add_action( 'wp_footer', 'wpst_deregister_oembed' );



/**
 * $. Queue jQuery correctly
 ******************************************************************************/

function wpst_requeue_jquery () {
    $js_head = get_stylesheet_directory_uri() . '/assets/dist/js/head.min.js';
    $js_main = get_stylesheet_directory_uri() . '/assets/dist/js/main.min.js';

    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', $js_head, '', '', false );
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'js-main', $js_main, '', '', true );
    wp_enqueue_script( 'js-main' );
}

if ( !is_admin() ) {
    add_action( 'wp_enqueue_scripts', 'wpst_requeue_jquery', 11 );
}



/**
 * $. Update image sizes
 ******************************************************************************/

if ( get_option("medium_crop") === false ) {
    add_option("medium_crop", "1");
} else {
    update_option("medium_crop", "1");
}

if ( get_option("large_crop") === false ) {
    add_option("large_crop", "1");
} else {
    update_option("large_crop", "1");
}

/**
 * This is an example on how to create a new image size. Please look at
 * https://developer.wordpress.org/reference/functions/add_image_size/ for more info.
 */

add_image_size('banner', 1530, 539, true);
add_image_size('box', 400, 400, true);
add_image_size('post', 270, 185, true);
add_image_size('featured', 1233, 370, true);
add_image_size('news-post', 530, 325, true);




/**
 * $. Update functions to HTML5
 ******************************************************************************/

add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery']);



/**
 * Get Filesize
 ******************************************************************************/

function wpst_get_file_size($file) {
    $file_info = array_change_key_case(get_headers($file, TRUE));

    return $file_info['content-length'];
}



/**
 *  Turn filesize into readable format
******************************************************************************/

function wpst_file_size_convert($bytes) {
    $bytes = floatval($bytes);
    $arBytes = array(
        0 => array(
            "UNIT" => "TB",
            "VALUE" => pow(1024, 4)
            ),
        1 => array(
            "UNIT" => "GB",
            "VALUE" => pow(1024, 3)
            ),
        2 => array(
            "UNIT" => "Mb",
            "VALUE" => pow(1024, 2)
            ),
        3 => array(
            "UNIT" => "kB",
            "VALUE" => 1024
            ),
        4 => array(
            "UNIT" => "B",
            "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem) {
        if($bytes >= $arItem["VALUE"]) {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 0)))."".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}
