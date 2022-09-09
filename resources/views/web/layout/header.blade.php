<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hebtna</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            @if (Auth::user())
                                <li class="top-icon">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li class="top-icon">
                                    <a href="#" class="cd-signin"><i class="fa fa-user-o"></i></a>
                                </li>
                            @endif
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
                                <form id="SubmitLoginForm" class="cd-form">
                                    @csrf
                                    <h3 class="login-title"> LOG IN</h3>
                                    <p class="loginDesc"> Please fill in your basic info </p>
                                    <p class="fieldset">
                                        <label class="image-replace cd-email" for="signinEmail">E-mail</label>
                                        <input class="full-width has-padding has-border" name="email" id="signinEmail"
                                               type="email" placeholder="E-mail">
                                        <span class="text-danger" id="emailErrorMsg"></span>
                                    </p>

                                    <p class="fieldset">
                                        <label class="image-replace cd-password" for="signinPassword">Password</label>
                                        <input class="full-width has-padding has-border" name="password"
                                               id="signinPassword" type="password" placeholder="Password">
                                        <a href="#0" class="hide-password">Hide</a>
                                        <span class="text-danger" id="passwordErrorMsg"></span>
                                    </p>

                                    <p class="fieldset">
                                    <span class="text-danger" id="responseErrorMsg"></span>
                                    </p>

                                    <button type="submit" class="btn btn-primary">login</button>
                                </form>

                                @if(Route::has('password.request'))
                                    <p class="cd-form-bottom-message"><a
                                            href="{{ route('password.request') }}">{{ trans('global.forgot_password') }}</a>
                                    </p>
                                @endif
                            </div> <!-- cd-login -->

                            <div id="cd-signup"> <!-- sign up form -->
                                <form class="cd-form" id="SubmitRegisterForm">
                                    @csrf
                                    <h3 class="login-title">SIGN UP </h3>
                                    <p class="loginDesc"> Create your account </p>
                                    <p class="fieldset">
                                        <label class="image-replace cd-username" for="signup-username">Username</label>
                                        <input class="full-width has-padding has-border" id="signupUsername"
                                               type="text" placeholder="Username" name="name">
                                        <span class="text-danger" id="usernameErrorMsg"></span>
                                    </p>

                                    <p class="fieldset">
                                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                                        <input class="full-width has-padding has-border" id="signupEmail" type="email"
                                               placeholder="E-mail" name="email">
                                        <span class="text-danger" id="signupEmailErrorMsg"></span>
                                    </p>

                                    <p class="fieldset">
                                        <label class="image-replace cd-password" for="signup-password">Password</label>
                                        <input class="full-width has-padding has-border" id="signupPassword"
                                               type="password" placeholder="Password" name="password">
                                        <a href="#0" class="hide-password">Hide</a>
                                        <span class="text-danger" id="signupPasswordErrorMsg"></span>
                                    </p>

                                    <p class="fieldset">
                                        <input type="checkbox" id="accept-terms">
                                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                                    </p>

                                    <p class="fieldset">
                                        <span class="text-danger" id="signupResponseErrorMsg"></span>
                                    </p>

                                    <p class="fieldset">
                                        <input class="has-padding" type="submit" value="SIGN UP" id="submitBtn" disabled="disabled">
                                    </p>
                                </form>

                                <!-- <a href="#0" class="cd-close-form">Close</a> -->
                            </div> <!-- cd-signup -->

                            <div id="cd-reset-password"> <!-- reset password form -->
                                <p class="cd-form-message">Lost your password? Please enter your email address. You will
                                    receive a link to create a new password.</p>

                                <form class="cd-form resetPass">
                                    <p class="fieldset">
                                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                                        <input class="full-width has-padding has-border" id="reset-email" type="email"
                                               placeholder="E-mail">
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="@if (\Request::url() == URL('index')) active @endif"><a href="{{ URL('index') }}">Home
                                <span class="sr-only">(current)</span></a></li>
                        <li class=" @if (\Request::url() == URL('about')) active @endif"><a href="{{ URL('about') }}">about</a>
                        </li>
                        {{-- <li><a href="designers.html">designers</a></li> --}}
                        <li class=" @if (\Request::url() == URL('products')) active @endif"><a
                                href="{{ URL('products') }}">products</a></li>
                        <li class=" @if (\Request::url() == URL('contact')) active @endif"><a
                                href="{{ URL('contact') }}">contact us </a></li>

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
