@extends('master.front')
@section('title')
    {{__('Address')}}
@endsection
@section('content')

    <!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <ul class="breadcrumbs">-->
<!--                    <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>-->
<!--                    <li class="separator"></li>-->
<!--                    <li>{{__('Shipping - Billing Address')}}</li>-->
<!--                 </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- </div>-->
 <!-- Page Content-->
 <div class="container padding-bottom-3x mb-1 my-3">
    <div class="row">
       @include('includes.user_sitebar')
       <div class="col-lg-8">
          <div class="card">
              <div class="card-body">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <h5 style="color:#aeaeae;" class="uppercase">{{__('Billing Address')}}</h5>
                <form id="billingForm" class="row" action="{{route('user.billing.submit')}}" method="POST">
                  @csrf
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-address1" class="uppercase">{{__('Address 1')}} *</label>
                         <input class="form-control uppercase" type="text" name="bill_address1" id="billing-address1" value="{{$user->bill_address1}}">
                      @error('bill_address1')
                      <p class="text-danger uppercase">{{$message}}</p>
                      @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-address2" class="uppercase">{{__('Address 2')}}</label>
                         <input class="form-control uppercase" type="text" name="bill_address2" value="{{$user->bill_address2}}" id="billing-address2">
                         @error('bill_address2')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-zip" class="uppercase">{{__('Zip Code')}}</label>
                         <input class="form-control uppercase" type="text" name="bill_zip" id="billing-zip" value="{{$user->bill_zip}}">
                         @error('bill_zip')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-company" class="uppercase">{{__('City')}} *</label>
                         <input class="form-control uppercase" type="text" name="bill_city" id="billing-city" value="{{$user->bill_city}}">
                         @error('bill_city')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-company" class="uppercase">{{__('Company')}}</label>
                         <input class="form-control uppercase" type="text" name="bill_company" id="billing-company" value="{{$user->bill_company}}">
                         @error('bill_company')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-country" class="uppercase">{{__('Country')}}</label>
                         <select class="form-control uppercase" name="bill_country" id="billing-country">
                          <option class="uppercase" selected>{{__('Choose Country')}}</option>
                          @foreach (DB::table('countries')->get() as $country)
                          <option class="uppercase" value="{{$country->name}}" {{$user->bill_country == $country->name ? 'selected' :''}} >{{$country->name}}</option>
                          @endforeach
                         </select>
                     @error('bill_country')
                      <p class="text-danger uppercase">{{$message}}</p>
                      @endif
                      </div>
                   </div>
                   <div class="col-12 ">
                      <div class="text-right">
                         <button class="btn btn-primary margin-bottom-none uppercase btn-sm" type="submit"><span>{{__('Update Address')}}</span></button>
                      </div>
                   </div>
                </form>
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <br>
                <h5 style="color:#aeaeae;" class="uppercase">{{__('Shipping Address')}}</h5>
                <form id="shippingForm" class="row " action="{{route('user.shipping.submit')}}" method="POST">
                  @csrf
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-address1" class="uppercase">{{__('Address 1')}} *</label>
                         <input class="form-control uppercase" name="ship_address1" value="{{$user->ship_address1}}" type="text" id="shipping-address1">
                         @error('ship_address1')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-address2" class="uppercase">{{__('Address 2')}} </label>
                         <input class="form-control uppercase" value="{{$user->ship_address2}}" name="ship_address2" type="text" id="shipping-address2">
                         @error('ship_address2')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-zip" class="uppercase">{{__('Zip Code')}}</label>
                         <input class="form-control uppercase" type="text" value="{{$user->ship_zip}}" name="ship_zip" id="shipping-zip">
                         @error('ship_zip')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-company" class="uppercase">{{__('City')}} *</label>
                         <input class="form-control uppercase" type="text" name="ship_city" id="shippingcity" value="{{$user->ship_city}}">
                         @error('ship_city')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-company" class="uppercase">{{__('Company')}}</label>
                         <input class="form-control uppercase" type="text" name="ship_company" id="shipping-company" value="{{$user->ship_company}}">
                         @error('ship_company')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                        </div>
                   </div>
                   @if (DB::table('states')->count() > 0)
                   <div class="col-md-6">
                     <div class="form-group">
                        <label for="state_id" class="uppercase"> {{__('State')}} <small>({{__('include tax')}})</small> </label>
                        <select class="form-control uppercase" name="state_id" id="state_id">
                         <option  class="uppercase" value="" selected>{{__('Select Shipping State')}}</option>
                         @foreach (DB::table('states')->whereStatus(1)->get() as $state)
                         <option  class="uppercase" value="{{$state->id}}" {{$user->state_id == $state->id ? 'selected' :''}} >{{$state->name}}</option>
                         @endforeach
                        </select>
                    @error('state_id')
                     <p class="text-danger uppercase">{{$message}}</p>
                     @endif
                     </div>
                  </div>
                   @endif
             
                   <div class="{{DB::table('states')->count() > 0  ? 'col-md-12' : 'col-md-6'}} ">
                      <div class="form-group">
                         <label for="shipping-country" class="uppercase">{{__('Country')}}</label>
                         <select class="form-control" name="ship_country" id="shipping-country">
                            <option class="uppercase">{{__('Choose Country')}}</option>
                            @foreach (DB::table('countries')->get() as $country)
                            <option class="uppercase" value="{{$country->name}}" {{$user->ship_country == $country->name ? 'selected' :''}} >{{$country->name}}</option>
                            @endforeach
                         </select>
                         @error('ship_country')
                         <p class="text-danger uppercase">{{$message}}</p>
                         @endif
                      </div>
                   </div>
                   <div class="col-12 ">
                      <div class="text-right">
                         <button class="btn btn-primary margin-bottom-none btn-sm uppercase" type="submit"><span>{{__('Update Address')}}</span></button>
                      </div>
                   </div>
                </form>
              </div>
          </div>
       </div>
    </div>
 </div>
@endsection
