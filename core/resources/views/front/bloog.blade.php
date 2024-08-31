@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Blog')}}
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
  <div class="blog_title">
    <h2>PXE BLOGS SECTION</h2>
    <!-- <a href="{{ route('front.bloog', ['month' => $currentMonth - 1, 'year' => $currentYear]) }}">Previous Month</a>
    <a href="{{ route('front.bloog', ['month' => $currentMonth + 1, 'year' => $currentYear]) }}">Next Month</a> -->
  </div>
  <div class="d-flex des-view px-4 border-bot">
    <div class="left-right-border">
      <div class="row p-lg-3">
          <div class="col-lg-12">
            <div class="title_container">
              <p class="uppercase">{{$title1}}</p>
              <p>{{$date1}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo1)}}" alt="">
      
              <p class="uppercase pt-3">{{$details1}}</p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container-fluid d-flex des-view border-bot">
    <div class="left-right-border">
      <div class="row">
        <div class="col-lg-6 border-rig">
          <div class="col-lg-12 pad_blog">
            <div class="">
              <p class="uppercase m-0">{{$title2}}</p>
              <p>{{$date2}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo2)}}" alt="">
              <p class="uppercase pt-3">{{$details2}}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 left_blog">
          <div class="col-lg-12 pad_blog">
            <div class="">
              <p class="uppercase m-0">{{$title3}}</p>
              <p>{{$date3}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo3)}}" alt="">
              <p class="uppercase pt-3">{{$details3}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid d-flex des-view border-bot">
    <div class="left-right-border">
      <div class="row">
        <div class="col-lg-6 border-rig">
          <div class="col-lg-12 pad_blog">
            <div class="">
              <p class="uppercase m-0">{{$title4}}</p>
              <p>{{$date4}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo4)}}" alt="">
              <p class="uppercase pt-3">{{$details4}}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 left_blog">
          <div class="col-lg-12 pad_blog">
            <div class="">
              <p class="uppercase m-0">{{$title6}}</p>
              <p>{{$date6}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo6)}}" alt="">
              <p class="uppercase pt-3">{{$details6}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container-fluid d-flex des-view">
    <div class="left-right-border">
      <div class="row p-3">
        <div class="col-lg-6">
          <div class="col-lg-12">
            <div class="">
              <p class="uppercase m-0">{{$title4}}</p>
              <p>{{$date4}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo4)}}" alt="">
              <p class="uppercase pt-3">{{$details4}}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 left_blog">
          <div class="col-lg-12">
            <div class="">
              <p class="uppercase m-0">{{$title5}}</p>
              <p>{{$date5}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo5)}}" alt="">
              <p class="uppercase pt-3">{{$details5}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div class="container-fluid d-flex des-view">
    <div class="left-right-border" style="border-bottom:0">
      <div class="row p-3">
        <div class="col-lg-6">
          <div class="col-lg-12">
            <div class="">
              <p class="uppercase m-0">{{$title6}}</p>
              <p>{{$date6}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo6)}}" alt="">
              <p class="uppercase pt-3">{{$details6}}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 left_blog">
          <div class="col-lg-12">
            <div class="">
              <p class="uppercase m-0">{{$title7}}</p>
              <p>{{$date7}}</p>
            </div>
      
            <div class="first_sec_container">
              <img src="{{asset('assets/images/'.$photo7)}}" alt="">
              <p class="uppercase pt-3">{{$details7}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  
</div>
  <div class="container-fluid mobile-view" >
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase">{{$title1}}</p>
          <p>{{$date1}}</p>
        </div>

        <div class="first_sec_container">
          <img src="{{asset('assets/images/'.$photo1)}}" alt="">

          <p>{{$details1}}</p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p>{{$title2}}</p>
          <p>{{$date2}}</p>
        </div>

        <div class="first_sec_container">
          <img src="{{asset('assets/images/'.$photo2)}}" alt="">

          <p>{{$details2}}</p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase">{{$title3}}</p>
          <p>{{$date3}}</p>
        </div>

        <div class="first_sec_container">
          <img src="{{asset('assets/images/'.$photo3)}}" alt="">

          <p>{{$details3}}</p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase">{{$title4}}</p>
          <p>{{$date4}}</p>
        </div>

        <div class="first_sec_container">
          <img src="{{asset('assets/images/'.$photo4)}}" alt="">

          <p>{{$details4}}</p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase">{{$title5}}</p>
          <p>{{$date5}}</p>
        </div>

        <div class="first_sec_container">
          <img src="{{asset('assets/images/'.$photo5)}}" alt="">

          <p>{{$details5}}</p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase">{{$title6}}</p>
          <p>{{$date6}}</p>
        </div>

        <div class="first_sec_container">
          <img src="{{asset('assets/images/'.$photo6)}}" alt="">

          <p>{{$details6}}</p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase">{{$title7}}</p>
          <p>{{$date7}}</p>
        </div>

        <div class="first_sec_container">
          <img src="{{asset('assets/images/'.$photo7)}}" alt="">

          <p>{{$details7}}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
