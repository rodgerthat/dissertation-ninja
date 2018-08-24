<?php
/**
 * Created by PhpStorm.
 * User: goat
 * Date: 8/24/18
 * Time: 1:35 AM
 */


// Prevents all non-admin users from using the dashboard ( no wp-admin access )
add_action( ‘init’, ‘block_users_init’ );
function block_users_init() {
    if ( is_admin() && ! current_user_can( ‘administrator’ ) &&
        ! ( defined( ‘DOING_AJAX’ ) && DOING_AJAX ) ) {
        wp_redirect( home_url() );
        exit;
    }
}


// add custom stylesheets to the login page
function custom_login_styles() {
    echo '
        <!-- CSS -->
        <link rel="stylesheet" href="'. get_stylesheet_directory_uri() .'/css/app.css" />
        <link rel="stylesheet" href="'. get_stylesheet_directory_uri() .'/css/font-awesome.min.css" />
        <link rel="stylesheet" href="'. get_stylesheet_directory_uri() .'/css/lineicons.min.css" />
        <link rel="stylesheet" href="'. get_stylesheet_directory_uri() .'/css/lightcase.min.css" />
        <link rel="stylesheet" href="'. get_stylesheet_directory_uri() .'/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="'. get_stylesheet_directory_uri() .'/assets/revolution/css/settings.css" />
        <!-- END CSS -->
    ';
}
add_action('login_head', 'custom_login_styles');


// custom login logo url, changes the login logo url to the website address
function custom_login_logo_url() {
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'custom_login_logo_url');


// change the default login logo title
function custom_login_logo_url_title() {
    return 'Log In';
}
add_filter('login_headertitle', 'custom_login_logo_url_title');


// when a user logs in, redirect them to the video page
function admin_login_redirect( $redirect_to, $request, $user )
{
    global $user;
    if( isset( $user->roles ) && is_array( $user->roles ) ) {
        if( in_array( "administrator", $user->roles ) ) {
            return $redirect_to;
        } else {
            return home_url();
        }
    }
    else
    {
        return $redirect_to;
    }
}
add_filter("login_redirect", "admin_login_redirect", 10, 3);



// change the 'Lost your Password?' text on the login form
function change_lost_your_password ($text) {

    if ($text == 'Lost your password?'){
        $text = 'Forgot Your Password?';

    }
    return $text;
}
add_filter( 'gettext', 'change_lost_your_password' );


?>