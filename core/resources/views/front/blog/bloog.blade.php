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
  <div class="blog_title my-3">
    <h2>BLOCK55 JOURNAL</h2>
    <!-- <a href="{{ route('front.bloog', ['month' => $currentMonth - 1, 'year' => $currentYear]) }}">Previous Month</a>
    <a href="{{ route('front.bloog', ['month' => $currentMonth + 1, 'year' => $currentYear]) }}">Next Month</a> -->
  </div>
 <div class="container-fluid d-flex">
    <div class="col-lg-8 left_blog">
    <div class="row p-lg-4">
    <div class="col-lg-12">
      <div class="title_container">
        <p class="uppercase">{{$title1}}</p>
        <p class="uppercase">3/11/24</p>
      </div>

      <div class="first_sec_container">
        <img src="{{asset('assets/images/'.$photo1)}}" alt="">

        <p class="uppercase"> {{$details1}}</p>
      </div>
      </div>
  </div>

    <div class="row bottom_blog">
        <div class="col-lg-12 d-flex">
        <div class="col-lg-6 bottom_first_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase">title</p>
        <p class="uppercase">3/11/24</p>
      </div>

      <div class="first_sec_container">
        <img src="{{asset('assets/images/09XiSYNTH SOUL (2).png')}}" alt="">

        <p class="uppercase">Lorem111 ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos
        </p>
      </div>
        </div>


        <div class="col-lg-6 bottom_second_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase">title</p>
        <p class="uppercase">3/11/24</p>
      </div>

      <div class="first_sec_container">
        <img src="{{asset('assets/images/09XiSYNTH SOUL (2).png')}}" alt="">

        <p class="uppercase">11111Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
          Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos</p>
      </div>
        </div>


        </div>
      </div>


    </div>

    <div class="right_blog">
      <div class="row">
        <div class="col-lg-12 p-4">
        <div class="title_container">
        <p class="uppercase">{{$title2}}</p>
        <p class="uppercase">3/11/24</p>
      </div>

      <div class="first_sec_container">
        <img src="{{asset('assets/images/'.$photo2)}}" alt="">

        <p class="uppercase">{{$details2}}</p>
      </div>
        </div>
      </div>

      <div class="row main_title">
        <div class="col-lg-12 p-4">
        <div class="title_container">
        <p class="uppercase">title</p>
        <p class="uppercase">3/11/24</p>
      </div>

          <p class="main_title_desc uppercase">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
      </div>

      <div class="row bottom_blog">
        <div class="col-lg-12 d-flex">
        <div class="col-lg-6 bottom_first_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase">title</p>
        <p class="uppercase">3/11/24</p>
      </div>

      <div class="first_sec_container">
        <img src="{{asset('assets/images/09XiSYNTH SOUL (2).png')}}" alt="">

        <p class="uppercase">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
        </p>
      </div>
        </div>


        <div class="col-lg-6 bottom_second_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase">title</p>
        <p class="uppercase">3/11/24</p>
      </div>

      <div class="first_sec_container">
        <img src="{{asset('assets/images/09XiSYNTH SOUL (2).png')}}" alt="">

        <p class="uppercase">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>
      </div>
        </div>


        </div>


    </div>
   
 </div>
@endsection
