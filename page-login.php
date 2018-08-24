<?php
/**
 * Template Name: Login Page
 *
 * @package WordPress
 * @subpackage Dissertation_Ninja
 * @since Dissertation Ninja 1.0
 */
get_header(); ?>

<!-- PRELOADER -->
<div id="preloader"></div>

<!-- MAIN CONTAINER -->
<div class="main-container">


    <!-- HEADER -->
    <header class="white-bg text-black">
        <div class="row">
            <div class="logo">
                <a href=""><img class="large-logo" src="assets/images/dn-logo.png" width="110" alt="Logo"> <img src="assets/images/dn-logo-sm.png" class="small-logo" width="90" alt="Logo"> </a>
            </div>
            <div class="menu-tint menu-trigger pushmenu"></div>
            <div class="menu">
                <div id="nav" class="pushmenu">
                    <ul class="collapse">
                        <li> <a href="index.html" data-offset="45" data-smooth-scroll>Return To</a></li>

                    </ul>
                    <ul>
                        <li> <a href="dnvideos.html"><i class="fa fa-user"></i> Log Out</a>

                        </li>
                    </ul>





                </div>
                <div id="menu-trigger" class="menu-trigger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- SEARCH OVERLAY -->
        <div class="search-overlay">
            <a href="#" class="close-search"></a>
            <form action="search.html" method="get">
                <input type="text" class="form-search" value="" placeholder="Type here to search...">
                <h5>Press enter to start</h5>
            </form>
        </div>
        <!-- END SEARCH OVERLAY -->
    </header>
    <!-- END HEADER -->

    <!-- INNER CONTAINER -->
    <div class="inner-container">
        <!-- SECTION -->
        <section class="full-height parallax" data-overlay="6" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="assets/images/slider3.png" alt="">
            <div class="v-middle">
                <div class="row">
                    <div class="large-12 columns text-center mb50">
                        <h3 class="reveal-from-bottom">Log In</h3>
                    </div>
                    <!-- Original HTML Form -->
                    <div class="login-box reveal-from-bottom">
                        <form role="form" class="login-box-form">
                            <div class="large-12 columns">
                                <a href="#" class="button facebook white"><i class="fa fa-facebook" aria-hidden="true"></i> Login with facebook</a>
                                <a href="#" class="button google-plus white"><i class="fa fa-google-plus" aria-hidden="true"></i> Login with google</a>
                            </div>
                            <div class="large-12 columns">
                                <div class="divider"><span>or</span></div>
                            </div>
                            <div class="large-12 columns">
                                <input type="text" class="form-control" id="name" placeholder="Username*">
                            </div>
                            <div class="large-12 columns">
                                <input type="email" class="form-control" id="email" placeholder="Email*">
                            </div>
                            <div class="medium-6 columns mb0 small-mb30">
                                <input type="checkbox" id="checkbox1" />
                                <label for="checkbox1" class="checkbox">Remember Me</label>
                            </div>
                            <div class="medium-6 columns mb0">
                                <button type="submit" id="form-submit" class="submit filled">Login</button>
                            </div>
                            <div class="medium-12 columns text-center">
                                <div class="divider"></div>
                                <a href="page_signup.html" class="sign-up reveal-from-bottom">Don't have an account? Sign up</a>
                            </div>
                        </form>
                    </div>
                    <!-- WP Login Form -->
                    <div class="login-box reveal-from-bottom">
                        <?php
                            // wp_login_form args
                            $args = array(
                                'echo'           => true,
                                'remember'       => true,
                                'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                                'form_id'        => 'loginform',
                                'id_username'    => 'user_login',
                                'id_password'    => 'user_pass',
                                'id_remember'    => 'rememberme',
                                'id_submit'      => 'form-submit',
                                'label_username' => __( 'Email Address' ),
                                'label_password' => __( 'Password' ),
                                'label_remember' => __( 'Remember Me' ),
                                'label_log_in'   => __( 'Login' ),
                                'value_username' => '',
                                'value_remember' => false
                            );
                            wp_login_form($args);
                        ?>
                    </div>
                    <script>
                        /*
                        var loginSubmitButton = document.getElementById("form-submit").classList;
                        loginSubmitButton.add("submit");
                        loginSubmitButton.add("filled");
                        loginSubmitButton.remove("button");
                        loginSubmitButton.remove("button-primary");
                        */
                    </script>
                    <div class="large-12 columns text-center">
                        <a href="page_forgot_password.html" class="forgot-pass reveal-from-bottom">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION -->
    </div>
    <!-- END INNER CONTAINER -->
<?php get_footer(); ?>
