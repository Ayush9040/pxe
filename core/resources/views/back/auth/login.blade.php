@extends('master.back-login')
@section('title')
    {{__('Login')}}
@endsection

@section('content')

        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn" style="padding: 30px 25px;">
               
               <div class="d-flex justify-content-center" style="margin-bottom: 1rem;">
               <img src="{{asset('assets/images/logofooter.png')}}" style="width:100px; height: 50px;" alt="">
               </div>
               <h3 class="text-center">{{ __('Sign In To Admin') }}</h3>
                <div class="login-form" style="padding-top: 15px;">

                    <form action="{{ route('back.login.submit') }}" method="POST">

                        @csrf

                        @include('alerts.alerts')

                        <div class="form-group form-floating-label">
                            <input id="username" name="login_email" type="email" class="form-control input-border-bottom" value="{{ old('login_email') }}">
                            <label for="username" class="placeholder">{{ __('Email Address') }}</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="login_password" type="password" class="form-control input-border-bottom">
                            <label for="password" class="placeholder">{{ __('Password') }}</label>
                            
                        </div>

                        <div class="row justify-content-center form-sub m-0">
                            <a href="{{ route('back.forgot') }}" class="link float-right ">{{ __('Forget Password ?') }}</a>
                        </div>

                        <div class="form-action mb-3">
                            <button type="submit" class="btn btn-secondary btn-danger btn-login">{{ __('Sign In') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

@endsection
