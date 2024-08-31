@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Contact')}}
@endsection

@section('content')
    <!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--          <div class="col-lg-12">-->
<!--            <ul class="breadcrumbs">-->
<!--                <li><a href="{{route('front.index')}}">{{ __('Home') }}</a> </li>-->
<!--                <li class="separator"></li>-->
<!--                <li>{{ __('Contact Us') }}</li>-->
<!--              </ul>-->
<!--          </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- Page Content-->
  <div class="container padding-bottom-3x mb-1 contact-page my-3">


    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-5 order-lg-1 order-md-2 order-sm-2">

        <!-- Widget Contacts-->
        <!--<section class="widget widget-featured-posts card rounded p-4 ">-->
        <!--  <h3 class="widget-title padding-bottom-1x">{{__('Working Days')}}</h3>-->
        <!--  <ul class="list-unstyled text-sm">-->
        <!--    <li><span class="text-muted">{{__('Monday-Friday')}}: <span>{{$setting->friday_start}} - {{$setting->friday_end}}</span></span></li>-->
        <!--    <li><span class="text-muted">{{__('Saturday')}}: <span>{{$setting->satureday_start}} - {{$setting->satureday_end}}</span></span></li>-->
        <!--  </ul>-->
          
        <!--</section>-->
        <!-- Widget Address-->
        <section class="widget widget-featured-posts card rounded p-4">
          <h3 class="widget-title padding-bottom-1x uppercase">{{__('Store address')}}</h3>
          <p style="color:#b9afa8" class="uppercase">{{__('Our address information')}}</p>
          <ul class="list-icon margin-bottom-1x">
            <li> <i class="icon-map-pin text-muted "></i><span class="text-muted uppercase"><span>&nbsp;{{$setting->footer_address}}</span></span></li>
            <li> <i class="icon-phone text-muted"></i><span class="text-muted uppercase"><span>&nbsp;{{$setting->footer_phone}}</span></span></li>
          </ul>

          @php
          $links = json_decode($setting->social_link,true)['links'];
          $icons = json_decode($setting->social_link,true)['icons'];

          @endphp

          <div>
            @foreach ($links as $link_key => $link)
            <a class="social-button shape-circle sb-facebook uppercase" href="{{$link}}" data-toggle="tooltip" data-placement="top"><i class="{{$icons[$link_key]}}"></i></a>
            @endforeach
          </div>
        </section>
      </div>

      <div class="col-lg-8 col-md-7 col-sm-7 order-lg-2 order-md-1 order-sm-1">
        <div class="contact-form-box card">

            <h2 class="h4 content-box-title contact-title uppercase">{{ __('Tell Us Your Message :') }}</h2>
            <form class="row mt-2" method="Post" action="{{route('front.contact.submit')}}">
                @csrf
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first-name" class="uppercase">{{__('First Name')}}</label>
                    <input class="form-control form-control-rounded uppercase" name="first_name" type="text" id="first-name" placeholder="" >
                    @error('first_name')
                    <p class="text-danger uppercase">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last-name" class="uppercase">{{__('Last Name')}}</label>
                    <input class="form-control form-control-rounded uppercase" name="last_name" type="text" id="last-name" placeholder="" >
                    @error('last_name')
                    <p class="text-danger uppercase">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="contact-email" class="uppercase">{{__('E-mail')}}</label>
                    <input class="form-control form-control-rounded uppercase" type="email" name="email" id="contact-email" placeholder="" >
                    @error('email')
                    <p class="text-danger uppercase">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="contact-tel" class="uppercase">{{__('Phone')}}</label>
                    <input class="form-control form-control-rounded uppercase" type="text" name="phone" id="contact-tel" placeholder="" >
                    @error('phone')
                    <p class="text-danger uppercase">{{$message}}</p>
                    @enderror
                  </div>
                </div>

                <div class="col-12  ">
                  <div class="form-group">
                    <label for="message-text" class="uppercase">{{__('Message')}}</label>
                    <textarea class="form-control form-control-rounded uppercase" rows="9" name="message" id="message-text" placeholder=""></textarea>
                    @error('message')
                    <p class="text-danger uppercase">{{$message}}</p>
                    @enderror
                  </div>
                </div>
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


                <div class="col-12 text-right">
                    <!-- Show toastr after succesfull submit -->
                  <button class="btn btn-primary uppercase" type="submit"><span>{{ __('Send message') }}</span></button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
@endsection
