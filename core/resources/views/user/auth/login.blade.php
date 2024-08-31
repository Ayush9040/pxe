@extends('master.front')
@section('title')
    {{__('Login')}}
@endsection
@section('content')

    <!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--          <div class="col-lg-12">-->
<!--            <ul class="breadcrumbs">-->
<!--                <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>-->
<!--                <li class="separator"></li>-->
<!--                <li>{{__('Login/Register')}}</li>-->
<!--              </ul>-->
<!--          </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- Page Content-->


  <div class="container padding-bottom-3x mb-1 my-3">
  <div class="row">
    
      
      <div class="col-md-6">
            <form class="card" method="post" action="{{route('user.login.submit')}}">
                @csrf
              <div class="card-body ">
                <h4 class="margin-bottom-1x text-center uppercase">{{__('Login')}}</h4>

                <div class="form-group input-group">
                  <input class="form-control uppercase" type="email" name="login_email" placeholder="{{ __('Email') }}" value="{{old('login_email')}}"><span class="input-group-addon"><i class="icon-mail"></i></span>
                </div>
                @error('login_email')
                  <p class="text-danger uppercase">{{$message}}</p>
                  @enderror

                <div class="form-group input-group">
                  <input class="form-control uppercase" type="password" name="login_password" placeholder="{{ __('Password') }}" ><span class="input-group-addon"><i class="icon-lock"></i></span>
                </div>
                @error('login_password')
                    <p class="text-danger uppercase">{{$message}}</p>
                @enderror

                <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="remember_me">
                    <label class="custom-control-label uppercase" for="remember_me">{{__('Remember me')}}</label>
                  </div><a class="navi-link uppercase" href="{{route('user.forgot')}}">{{__('Forgot password?')}}</a>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary margin-bottom-none uppercase" type="submit"><span>{{ __('Login') }}</span></button>
                </div>
                 <div class="row">
                    <div class="col-lg-12 text-center mt-3">
                    @if($setting->facebook_check == 1)
                    <a class="facebook-btn mr-2 uppercase" href="{{route('social.provider','facebook')}}">{{ __('Facebook login') }}
                    </a>
                    @endif
                    @if($setting->google_check == 1)
                    <a class="google-btn uppercase" href="{{route('social.provider','google')}}"> {{ __('Google login') }}
                    </a>
                    @endif
                  </div>
                  </div>
              </div>
            </form>
         </div>
         <div class="col-md-6">
            <div class="card register-area">
                <div class="card-body ">
                    <h4 class="margin-bottom-1x text-center text-u uppercase">{{__('Register')}}</h4>
            <form class="row" action="{{route('user.register.submit')}}" method="POST">
                @csrf
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn" class="text-u uppercase">{{__('First Name')}}</label>
                  <input class="form-control w-100 uppercase" type="text" name="first_name" placeholder="{{__('First Name')}}" id="reg-fn" value="{{old('first_name')}}">
                @error('first_name')
                <p class="text-danger uppercase">{{$message}}</p>
                @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln" class="text-u uppercase">{{__('Last Name')}}</label>
                  <input class="form-control w-100 uppercase" type="text" name="last_name" placeholder="{{__('Last Name')}}" id="reg-ln" value="{{old('last_name')}}">
                  @error('last_name')
                <p class="text-danger uppercase">{{$message}}</p>
                @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email" class="text-u uppercase">{{__('E-mail Address')}}</label>
                  <input class="form-control w-100 uppercase" type="email" name="email" placeholder="{{__('E-mail Address')}}" id="reg-email" value="{{old('email')}}">
                  @error('email')
                  <p class="text-danger uppercase">{{$message}}</p>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone" class="text-u uppercase">{{__('Phone Number')}}</label>
                  <input class="form-control w-100 uppercase" name="phone" type="text" placeholder="{{__('Phone Number')}}" id="reg-phone" value="{{old('phone')}}">
                  @error('phone')
                  <p class="text-danger uppercase">{{$message}}</p>
                  @endif
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass" class="text-u uppercase">{{__('Password')}}</label>
                  <input class="form-control w-100 uppercase" type="password" name="password" placeholder="{{__('Password')}}" id="reg-pass">
                  @error('password')
                  <p class="text-danger uppercase">{{$message}}</p>
                  @endif
                </div>

              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm" class="text-u uppercase">{{__('Confirm Password')}}</label>
                  <input class="form-control w-100 uppercase" type="password" name="password_confirmation" placeholder="{{__('Confirm Password')}}" id="reg-pass-confirm">
                </div>
              </div>
              <!-- <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln" style="display:block;" class="text-u">{{__('Category')}}</label>
                  <input class="form-control" type="text" name="last_name" placeholder="{{__('Last Name')}}" id="reg-ln" value="{{old('last_name')}}">
                  <select name="membership" id="membership">
                    <option value="Prime">Prime</option>
                    <option value="Safari">Safari</option>
                    <option value="semi-safari">Semi Safari</option>
                    <option value="normal">Normal</option>
                    <option value=""></option>
                  </select>
                  @error('last_name')
                <p class="text-danger">{{$message}}</p>
                @endif
                </div>
              </div> -->

              <!-- @if ($setting->recaptcha == 1)
              <div class="col-lg-12 mb-4">
                  {!! NoCaptcha::renderJs() !!}
                  {!! NoCaptcha::display() !!}
                  @if ($errors->has('g-recaptcha-response'))
                  @php
                      $errmsg = $errors->first('g-recaptcha-response');
                  @endphp
                  <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                  @endif
              </div>
              @endif -->

              <div class="col-12 text-center">
                <button class="btn btn-primary margin-bottom-none uppercase" type="submit"><span>{{__('Register')}}</span></button>
              </div>
            </form>
                </div>
            </div>
          </div>
      </div> 
      
          
        </div>
  </div>
  <!-- Site Footer-->
@endsection
