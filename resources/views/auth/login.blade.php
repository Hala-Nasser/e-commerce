@extends('layouts.app')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <div class="login-logo">
                <a href="{{ route('admin.home') }}">
                    {{ trans('panel.site_title') }}
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                    {{ trans('global.login') }}
                </p>

                @if(session()->has('message'))
                    <p class="alert alert-info">
                        {{ session()->get('message') }}
                    </p>
                @endif

                <form id="SubmitLoginForm">
                    @csrf

                    <div class="form-group">
                        <input id="signinEmail" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required
                               autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}"
                               name="email" value="{{ old('email', null) }}">
                        <span class="text-danger" id="emailErrorMsg"></span>
                        {{--                    @if($errors->has('email'))--}}
                        {{--                        <div class="invalid-feedback">--}}
                        {{--                            {{ $errors->first('email') }}--}}
                        {{--                        </div>--}}
                        {{--                    @endif--}}
                    </div>

                    <div class="form-group">
                        <input id="signinPassword" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required placeholder="{{ trans('global.login_password') }}">
                        <span class="text-danger" id="passwordErrorMsg"></span>
                        {{--                    @if($errors->has('password'))--}}
                        {{--                        <div class="invalid-feedback">--}}
                        {{--                            {{ $errors->first('password') }}--}}
                        {{--                        </div>--}}
                        {{--                    @endif--}}
                    </div>

                    <div class="form-group">
                        <span class="text-danger" id="responseErrorMsg"></span>
                    </div>


                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">{{ trans('global.remember_me') }}</label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ trans('global.login') }}
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                @if(Route::has('password.request'))
                    <p class="mb-1">
                        <a href="{{ route('password.request') }}">
                            {{ trans('global.forgot_password') }}
                        </a>
                    </p>
                @endif
                <p class="mb-1">

                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    {{--<script type="text/javascript" src="{{asset('web/js/jquery-3.2.1.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('web/js/loginModal.js')}}"></script>
@endsection
