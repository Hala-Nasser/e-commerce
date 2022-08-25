<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hebtna</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/bootstrap.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/animate.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/hover.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/buttons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/nice-select.css')}}"/>
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/owl.transitions.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/style.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/responsive.css')}}"/>
    @yield('style')

</head>
<body>
<div id="page">
    <header>
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <p class="pull-left text-note"> Contact 12345 </p>

                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <a href="{{ URL('index') }}" class="logo" style="text-align: center"><span>H</span>ebtna</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="nav nav-pills nav-top navbar-right">
                            <li class="top-icon">
                                <a href="#" class="cd-signin"><i class="fa fa-user-o"></i></a>
                            </li>
                            <li class="top-icon">
                                <a href="{{URL('cart')}}"><i class="fa fa-shopping-cart"></i></a>
                            </li>


                        </ul>
                    </div>
                    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
                        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
                            <ul class="cd-switcher">
                                <li><a href="#0">Sign in</a></li>
                                <li><a href="#0">New account</a></li>
                            </ul>

                            <div id="cd-login"> <!-- log in form -->
                                <form class="cd-form">
                                    <h3 class="login-title"> LOG IN</h3>
                                    <p class="loginDesc"> Please fill in your basic info </p>
                                    <p class="fieldset">

                                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                                        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                                        <span class="cd-error-message">Error message here!</span>
                                    </p>

                                    <p class="fieldset">
                                        <label class="image-replace cd-password" for="signin-password">Password</label>
                                        <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                                        <a href="#0" class="hide-password">Hide</a>
                                        <span class="cd-error-message">Error message here!</span>
                                    </p>

                                    <p class="fieldset">
                                        <input type="checkbox" id="remember-me" checked>
                                        <label for="remember-me">Remember me</label>
                                    </p>

                                    <p class="fieldset">
                                        <input class="" type="submit" value="LOG IN ">
                                    </p>
                                </form>

                                <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
                                <!-- <a href="#0" class="cd-close-form">Close</a> -->
                            </div> <!-- cd-login -->

                            <div id="cd-signup"> <!-- sign up form -->
                                <form class="cd-form">
                                    <h3 class="login-title">SIGN UP </h3>
                                    <p class="loginDesc"> Create your account  </p>
                                    <p class="fieldset">
                                        <label class="image-replace cd-username" for="signup-username">Username</label>
                                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                                        <span class="cd-error-message">Error message here!</span>
                                    </p>

                                    <p class="fieldset">
                                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                                        <span class="cd-error-message">Error message here!</span>
                                    </p>

                                    <p class="fieldset">
                                        <label class="image-replace cd-password" for="signup-password">Password</label>
                                        <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                                        <a href="#0" class="hide-password">Hide</a>
                                        <span class="cd-error-message">Error message here!</span>
                                    </p>

                                    <p class="fieldset">
                                        <input type="checkbox" id="accept-terms">
                                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                                    </p>

                                    <p class="fieldset">
                                        <input class="has-padding" type="submit" value="SIGN UP">
                                    </p>
                                </form>

                                <!-- <a href="#0" class="cd-close-form">Close</a> -->
                            </div> <!-- cd-signup -->

                            <div id="cd-reset-password"> <!-- reset password form -->
                                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                                <form class="cd-form resetPass">
                                    <p class="fieldset">
                                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                        <span class="cd-error-message">Error message here!</span>
                                    </p>

                                    <p class="fieldset">
                                        <input class="full-width has-padding" type="submit" value="Reset password">
                                    </p>
                                </form>

                                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                            </div> <!-- cd-reset-password -->
                            <a href="#0" class="cd-close-form">Close</a>
                        </div> <!-- cd-user-modal-container -->
                    </div> <!-- cd-user-modal -->

                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="@if (\Request::url() == URL('index')) active @endif"><a href="{{ URL('index') }}">Home  <span class="sr-only">(current)</span></a></li>
                        <li class=" @if (\Request::url() == URL('about')) active @endif"><a href="{{ URL('about') }}">about</a></li>
                        {{-- <li><a href="designers.html">designers</a></li> --}}
                        <li class=" @if (\Request::url() == URL('products')) active @endif"><a href="{{ URL('products') }}">products</a></li>
                        <li class=" @if (\Request::url() == URL('contact')) active @endif"><a href="{{ URL('contact') }}">contact us </a></li>

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
