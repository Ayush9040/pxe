@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Vault')}}
@endsection

@section('content')
    <!-- Page Title-->
    <!--<div class="page-title">-->
    <!--    <div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-12">-->
    <!--            <ul class="breadcrumbs">-->
    <!--                <li><a href="{{route('front.index')}}">{{ __('Home') }}</a> </li>-->
    <!--                <li class="separator"></li>-->
    <!--                <li>{{ __('vault') }}</li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Page Content-->
    <div class="row m-0 vault-title my-3">
        <div class="col-md-6 col-4">
            <h2 class="vault-title-left">BLOCK55</h2>
        </div>
        <div class="col-md-6 col-8">
            <h2 class="vault-title-right">VAULT</h2>
        </div>
    </div>
    <!-- <div class="b2b_title">
        <h2>BLOCK55  &nbsp; &nbsp; &nbsp; &nbsp; B2B TRADE INFORMATION</h2>
    </div>     -->
    <div class="container-fluid ">
        <div class="side-margin pb-5">
            <div class="row">
                <div class="col-md-8 pt-5 px-5">
                    <div class="">
                        <div>
                            <h4 class="vault_welcome uppercase">Login TO ACCESS VAULT</h4>
                        </div>
                        <div class="col-md-12 pt-5">
                            <div class="col-md-8">
                            <form action="{{route('user.login.submit')}}" class="input-group form-group" method="post">
                             @csrf
                                <div class="form-group">
                                    <label for="reg-email" class="text-u log-text-b2b">{{__('E-mail')}}</label>
                                    <input class="form-control w-100 border-0 uppercase" type="email" name="login_email" placeholder="" id="reg-email" value="{{old('email')}}">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="reg-pass" class="text-u log-text-b2b">{{__('ACCESS CODE')}}</label>
                                    <input class="form-control w-100 uppercase" type="password" name="login_password" placeholder="" id="reg-code">
                                    @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary margin-bottom-none b2b-log-btn" type="submit"><span>{{ __('Log in') }}</span></button>
                                </div>
</form>
                                <!--<div>-->
                                <!--    <h5 class="b2b-log-forgot">Forget Your Passoword ? Reset It <span style="color:#b9afa8">here</span></h5>-->
                                <!--</div>-->
                                <div class="pt-5">
                                    <div class="pb-3">
                                        <img src="{{asset('assets/images/star.png')}}" alt="">
                                    </div>
                                    <div class="pb-3">
                                        <img src="{{asset('assets/images/star.png')}}" alt="">
                                    </div>
                                    <div class="pb-3">
                                        <img src="{{asset('assets/images/star.png')}}" alt="">
                                    </div>
                                    <div class="pb-3">
                                        <img src="{{asset('assets/images/star.png')}}" alt="">
                                    </div>
                                    <div class="pb-3">
                                        <img src="{{asset('assets/images/star.png')}}" alt="">
                                    </div>
                                    <div class="pb-3">
                                        <img src="{{asset('assets/images/star.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-cent content-padd">
                        <img src="{{asset('assets/images/red_access_key.png')}}" alt="" >
                    </div>
                </div>
            </div>
            <div>
           
            <div class="row">
                
                <div class="col-md-9 ">
                    <div class="px-md-5 px-sm-3">
                        <h5 class="vault-general">KEY HOLDER VERIFICATION</h5>
                        <p class="vault-general-p pt-4">
                           IF YOU HAVE THE ACQUIRED 1 OF THE 100 BLOCK55 RED KEY MEMBER KEYS PLEASE SUBMIT THE REQUESTED INFORMATIONS BELOW TO ACTIVATE YOUR RED KEY ACCESS.
                        </p>  
                        <form action="{{route('front.vault.submit')}}" class="input-group form-group" method="post">
                             @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="reg-name" class="text-u log-text-b2b uppercase">{{__('Name')}}</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control w-100 border-0 uppercase" type="text" name="first_name" placeholder="" id="reg-name" value="{{old('name')}}">
                                        <!--@error('email')-->
                                        <!--<p class="text-danger">{{$message}}</p>-->
                                        <!--@endif-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="reg-username" class="text-u log-text-b2b uppercase">{{__('Discord username')}}</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control w-100 border-0 uppercase" type="text" name="last_name" placeholder="" id="reg-username" value="{{old('username')}}">
                                        <!--@error('email')-->
                                        <!--<p class="text-danger">{{$message}}</p>-->
                                        <!--@endif-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="reg-email" class="text-u log-text-b2b uppercase">{{__('E-mail')}}</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control w-100 border-0 uppercase" type="email" name="email" placeholder="" id="reg-email" value="{{old('email')}}">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="reg-red_key" class="text-u log-text-b2b uppercase">{{__('Red key')}}</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control w-100 border-0 uppercase" type="text" name="red_key" placeholder="" id="reg-red_key" value="{{old('red_key')}}">
                                        <!--@error('email')-->
                                        <!--<p class="text-danger">{{$message}}</p>-->
                                        <!--@endif-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="vault-only">ONLY VALID KEY HOLDERS WILL BE VERIFIED AND ACCEPTED</p>
                            <P class="vault-note">* PLEASE ALLOW UP TO 36 HOURS FOR VERIFICATION</P>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary margin-bottom-none vault-log-btn" type="submit"><span style="color:red !important;">{{ __('VERIFY ACCESS') }}</span></button>
                        </div> 
                        </form>                     
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            </div>

        </div>
    </div>
    <div class="container-fluid phase-margin">
        <div class="side-margin">
            <div class="row">
                <div class="col-md-6 col-6">
                    <h2 class="topic-left">BLOCK55</h2>
                </div>
                <div class="col-md-6 col-6">
                    <h2 class="topic-right">NEW ORDER</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid phase-margin">
        <div class="side-margin pt-5 pb-2">
            <h1 class="metro-topic">METROPOLIS UNDERGROUND CULTURE</h1>
        </div>
    </div>
@endsection