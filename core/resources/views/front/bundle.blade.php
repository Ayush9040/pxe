@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Bundle')}}
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
<!--                <li>{{ __('Blog') }}</li>-->
<!--              </ul>-->
<!--          </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->


  <!-- Page Content-->

  <div class="slider-container">
      <!--<div class="text-slider">-->
      <!--  <div class="slide"><img src="{{ asset('assets/images/homebanner3.png') }}" alt=""></div>-->
      <!--  <div class="slide"><img src="{{ asset('assets/images/homebanner3.png') }}" alt=""></div>-->
      <!--  <div class="slide"><img src="{{ asset('assets/images/homebanner3.png') }}" alt=""></div>-->
      <!--</div>-->
      <div class="logos">
        <div class="logos-slide" >
        <img src="{{ asset('assets/images/get_ready.png') }}" alt="">
        <img src="{{ asset('assets/images/get_ready.png') }}" alt="">
        <img src="{{ asset('assets/images/get_ready.png') }}" alt="">

        </div>
        <!--<div class="logos-slide">-->
        <!--<img src="{{ asset('assets/images/marrkq1.png') }}" alt="">-->
        <!--<img src="{{ asset('assets/images/marrkq1.png') }}" alt="">-->
       
        <!--</div>-->
    </div>
    </div>
  

    <div class="bundle_container">
            <div class="bundle_desc_container">
                <p class="title_bundle">BUNDLE 1 : MX</p>
                <p class="bundle_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumy nibh euismod tincidunt ut laoreet 
dolore magna </p>
                <p class="bundle_price" style="color: #06FF00;">RS : 5300/- SAVE(RS.1200)</p>
                <!-- <button class="btn btn-primary m-0" id="but_to_cart" style="margin-top: 10px !important; margin-right: 10px !important; padding: 12px 24px; height: 50px; background-color: white !important; color: #06FF00 !important;"><i class="icon-bag"></i><span style="color: black !important;">{{ __('SHOP NOW') }}</span></button> -->
                <button class="btn btn-primary m-0" id="add_to_cart" style="margin-top: 10px !important; margin-right: 10px !important; padding: 12px 24px; height: 50px; background-color: white !important; color: #06FF00 !important;"><i class="icon-bag"></i><span class="fs-lg" style="color: black !important;">{{ __('SHOP NOW') }}</span></button>
            </div>

            <div class="bundle_img_container">
                <img src="{{asset('assets/images/bundle_1.jpg')}}" alt="">
            </div>

        </div>

        <div class="bundle_container">
            <div class="bundle_desc_container">
                <p class="title_bundle">BUNDLE 1 : MX</p>
                <p class="bundle_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumy nibh euismod tincidunt ut laoreet 
dolore magna </p>
                <p class="bundle_price" style="color: #06FF00;">RS : 5300/- SAVE(RS.1200)</p>
                <button class="btn btn-primary m-0" id="add_to_cart" style="margin-top: 10px !important; margin-right: 10px !important; padding: 12px 24px; height: 50px; background-color: white !important; color: #06FF00 !important;"><i class="icon-bag"></i><span class="fs-lg" style="color: black !important;">{{ __('SHOP NOW') }}</span></button>
            </div>

            <div class="bundle_img_container">
                <img src="{{asset('assets/images/bundle_1.jpg')}}" alt="">
            </div>

        </div>

        <div class="bundle_container">
            <div class="bundle_desc_container">
                <p class="title_bundle">BUNDLE 1 : MX</p>
                <p class="bundle_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumy nibh euismod tincidunt ut laoreet 
dolore magna </p>
                <p class="bundle_price" style="color: #06FF00;">RS : 5300/- SAVE(RS.1200)</p>
                <button class="btn btn-primary m-0" id="add_to_cart" style="margin-top: 10px !important; margin-right: 10px !important; padding: 12px 24px; height: 50px; background-color: white !important; color: #06FF00 !important;"><i class="icon-bag"></i><span class="fs-lg" style="color: black !important;">{{ __('SHOP NOW') }}</span></button>
            </div>

            <div class="bundle_img_container">
                <img src="{{asset('assets/images/bundle_1.jpg')}}" alt="">
            </div>

        </div>

        <div class="bundle_container">
            <div class="bundle_desc_container">
                <p class="title_bundle">BUNDLE 1 : MX</p>
                <p class="bundle_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumy nibh euismod tincidunt ut laoreet 
dolore magna </p>
                <p class="bundle_price" style="color: #06FF00;">RS : 5300/- SAVE(RS.1200)</p>
                <button class="btn btn-primary m-0" id="add_to_cart" style="margin-top: 10px !important; margin-right: 10px !important; padding: 12px 24px; height: 50px; background-color: white !important; color: #06FF00 !important;"><i class="icon-bag"></i><span class="fs-lg" style="color: black !important;">{{ __('SHOP NOW') }}</span></button>
            </div>

            <div class="bundle_img_container">
                <img src="{{asset('assets/images/bundle_1.jpg')}}" alt="">
            </div>

        </div>

        <div class="bundle_container">
            <div class="bundle_desc_container">
                <p class="title_bundle">BUNDLE 1 : MX</p>
                <p class="bundle_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumy nibh euismod tincidunt ut laoreet 
dolore magna </p>
                <p class="bundle_price" style="color: #06FF00;">RS : 5300/- SAVE(RS.1200)</p>
                <button class="btn btn-primary m-0" id="add_to_cart" style="margin-top: 10px !important; margin-right: 10px !important; padding: 12px 24px; height: 50px; background-color: white !important; color: #06FF00 !important;"><i class="icon-bag"></i><span class="fs-lg" style="color: black !important;">{{ __('SHOP NOW') }}</span></button>
            </div>

            <div class="bundle_img_container">
                <img src="{{asset('assets/images/bundle_1.jpg')}}" alt="">
            </div>

        </div>
 

 

  
</div>
 
@endsection
