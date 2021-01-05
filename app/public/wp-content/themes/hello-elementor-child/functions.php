<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION



//applying the js file to the child theme
function child_files () {
    wp_enqueue_script( 'custom-js', get_theme_file_uri('/js/custom.js'), array( 'jquery' ), '1.0', true );

    wp_localize_script('custom-js', 'insuranceData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
      ));
}

add_action('wp_enqueue_scripts', 'child_files');



//register acf fields to api 
function acf_to_rest_api($response, $account, $request) {
    if (!function_exists('get_fields')) return $response;

    if (isset($account)) {
        $acf = get_fields($account->id);
        $response->data['acf'] = $acf;
    }
    return $response;
}
add_filter('rest_prepare_account', 'acf_to_rest_api', 10, 3);