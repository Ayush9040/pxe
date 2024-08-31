@extends('master.front')
@section('title')
    {{__('Dashboard')}}
@endsection
@section('content')

<!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <ul class="breadcrumbs">-->
<!--                    <li><a href="{{__('front.index')}}">{{__('Home')}}</a> </li>-->
<!--                    <li class="separator"></li>-->
<!--                    <li>{{__('Tickets')}} </li>-->
<!--                  </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- Page Content-->
  <div class="container padding-bottom-3x mb-1 my-3">
  <div class="row">
         @include('includes.user_sitebar')
          <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <div class="mb-3">
                <div class="card">
                    <div class="card-body d-flex flex-row justify-content-between align-items-center">
                        <h5 class="mb-0 uppercase">{{ __('New Ticket') }}</h5>
                        <a href="{{ route('user.ticket') }}" class="btn btn-primary btn-sm m-0 uppercase"><span>{{__('Back')}}</span></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('user.ticket.store')}}" method="post" enctype="multipart/form-data" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="website" class="uppercase">{{__('Subject')}} *</label>
                                <input type="text" class="form-control rounded-0 uppercase" id="subject" name="subject" value="{{old('subject')}}" placeholder="{{__('Subject')}}">
                                @error('subject')
                                    <p class="text-danger uppercase">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <label for="inputMessage" class="uppercase">{{__('Message')}} *</label>
                                <textarea name="message" class="form-control uppercase" rows="6"></textarea>
                                @error('message')
                                    <p class="text-danger uppercase">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <label for="inputAttachments " class="font-weight-bold uppercase">{{__('Attachment')}}</label>
                                <div class="form-group custom-file">
                                    <input type="file" name="file" id="customFile" class="custom-file-input">
                                    <label class="custom-file-label uppercase" for="customFileuppercase">{{__('Choose file')}}</label>
                                    <label class="custom-file-label uppercase" for="customFile">{{__('Choose file')}}</label>
                                   @error('file')
                                   <p class="text-danger uppercase">{{$message}}</p>
                                   @enderror

                                </div>
                                <div id="fileUploadsContainer"></div>
                                <p class="my-2 ticket-attachments-message text-muted uppercase">
                                    {{__('Allowed File Extension: .zip')}}</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-primary btn-sm uppercase" type="submit"><span>{{__('Submit')}}</span></button>
                        </div>
                    </form>
                </div>
            </div>

          </div>
        </div>
  </div>
@endsection
