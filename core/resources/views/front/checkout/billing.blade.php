@extends('master.front')

@section('title')
    {{__('Billing')}}
@endsection

@section('content')
    <!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--      <div class="column">-->
<!--        <ul class="breadcrumbs">-->
<!--          <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>-->
<!--          <li class="separator"></li>-->
<!--          <li>{{__('Billing address')}}</li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

  <!-- Page Content-->
  <div class="px-3 padding-bottom-3x mb-1 checkut-page my-3">
    <!-- <div class="row"> -->
      <!-- Billing Adress-->
      <!-- <div class="">
        <div class="steps flex-sm-nowrap mb-5"><a class="step active" href="{{route('front.checkout.billing')}}">
          <h4 class="step-title uppercase">1. {{__('Billing Address')}}:</h4>
          </a><a class="step" href="javascript:;">
          <h4 class="step-title uppercase">2. {{__('Shipping Address')}}:</h4>
          </a><a class="step" href="{{route('front.checkout.payment')}}">
          <h4 class="step-title uppercase">3. {{__('Review and pay')}}</h4>
          </a>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="uppercase">{{__('Billing Address')}}</h6>

          <form id="checkoutBilling" action="{{route('front.checkout.store')}}" method="POST">
            @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-fn" class="uppercase">{{__('First Name')}}</label>
              <input class="form-control uppercase" name="bill_first_name" type="text" required id="checkout-fn" value="{{isset($user) ? $user->first_name : ''}}">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln" class="uppercase">{{__('Last Name')}}</label>
              <input class="form-control uppercase" name="bill_last_name" type="text" required id="checkout-ln" value="{{isset($user) ? $user->last_name : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout_email_billing" class="uppercase">{{__('E-mail Address')}}</label>
              <input class="form-control uppercase" name="bill_email"  type="email" required id="checkout_email_billing" value="{{isset($user) ? $user->email : ''}}">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-phone" class="uppercase">{{__('Phone Number')}}</label>
              <input class="form-control uppercase" name="bill_phone" type="text" id="checkout-phone" required value="{{isset($user) ? $user->phone : ''}}">
            </div>
          </div>
        </div>
        @if (PriceHelper::CheckDigital())
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="checkout-company" class="uppercase">{{__('Company')}}</label>
              <input class="form-control uppercase" name="bill_company" type="text" id="checkout-company" value="{{isset($user) ? $user->bill_company : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address1" class="uppercase">{{__('Address')}} 1</label>
              <input class="form-control uppercase" name="bill_address1" required type="text" id="checkout-address1" value="{{isset($user) ? $user->bill_address1 : ''}}">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address2" class="uppercase">{{__('Address')}} 2</label>
              <input class="form-control uppercase" name="bill_address2" type="text" id="checkout-address2" value="{{isset($user) ? $user->bill_address2 : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-zip" class="uppercase">{{__('Zip Code')}}</label>
              <input class="form-control uppercase" name="bill_zip" type="text" id="checkout-zip" value="{{isset($user) ? $user->bill_zip : ''}}">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-city" class="uppercase">{{__('City')}}</label>
              <input class="form-control uppercase" name="bill_city" type="text" required id="checkout-city" value="{{isset($user) ? $user->bill_city : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="checkout-country" class="uppercase">{{ __('Country') }}</label>
              <select class="form-control uppercase" required name="bill_country" id="billing-country">
                <option class="uppercase" selected>{{__('Choose Country')}}</option>
                @foreach (DB::table('countries')->get() as $country)
                      <option class="uppercase" value="{{$country->name}}" {{isset($user) && $user->bill_country == $country->name ? 'selected' :''}} >{{$country->name}}</option>
                  @endforeach
               </select>
            </div>
          </div>
        </div>
        @endif -->




        <!-- <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input uppercase" type="checkbox" id="same_address" name="same_ship_address" {{Session::has('shipping_address') ? 'checked' : ''}} >
            <label class="custom-control-label uppercase" for="same_address">{{__('Same as billing address')}}</label>
          </div>
        </div>

        @if ($setting->is_privacy_trams == 1)
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="trams__condition" >
            <label class="custom-control-label uppercase" for="trams__condition">This site is protected by reCAPTCHA and the <a href="{{$setting->policy_link}}" target="_blank">Privacy Policy</a> and <a href="{{$setting->terms_link}}" target="_blank">Terms of Service</a> apply.</label>
          </div>
        </div>
        @endif -->

        <!-- <div class="d-flex justify-content-between paddin-top-1x mt-4">
            <a class="btn btn-primary btn-sm uppercase" href="{{route('front.cart')}}"><span class="hidden-xs-down"><i class="icon-arrow-left"></i>{{__('Back To Cart')}}</span></a>
            @if ($setting->is_privacy_trams == 1)
            <button disabled id="continue__button" class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down uppercase">{{__('Continue')}}</span><i class="icon-arrow-right"></i></button>
            @else
            <button class="btn btn-primary btn-sm uppercase" type="submit"><span class="hidden-xs-down uppercase" >{{__('Continue')}}</span><i class="icon-arrow-right"></i></button>
            @endif
          </div> -->


          <div class="accordion accordion-flush acc-bill" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed button-billing-new first-bill-acc" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">ORDER SUMMARY</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;">{{__('2 ITEMS IN YOUR CART')}} </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body cart-body">
      @foreach ($cart as $key => $item)
                
                <div class="card mb-4 cart-card">
                  <div class="card-body d-flex align-items-center">
                    <!-- <tr> -->
                    <!-- <td> -->
                    <div class="product-item cart-item-new">
                        <a class="product-thumb uppercase cart-item-prod" href="{{route('front.product',$item['slug'])}}"><img src="{{asset('assets/images/'.$item['photo'])}}" alt="Product"></a>
                        <div class="product-info cart-info-new">
                          <h4 class="product-title cart-product-title uppercase"><a href="{{route('front.product',$item['slug'])}}">
                            {{ strlen(strip_tags($item['name'])) > 45 ? substr(strip_tags($item['name']), 0, 45) . '...' : strip_tags($item['name']) }}

                        </a></h4>

                          <!-- @foreach ($item['attribute']['option_name'] as $optionkey => $option_name)
                          <span><em>{{$item['attribute']['names'][$optionkey]}}:</em> {{$option_name}} ({{PriceHelper::setCurrencyPrice($item['attribute']['option_price'][$optionkey])}})</span>
                          @endforeach -->
                          <!-- <span>{{PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])}}</span> -->
                          <p class="cart-size"> SIZE - {{PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])}}</p>
                          <p class="cart-qty"> QUANTITY - {{$item['qty']}}</p>
                          <p class="cart-qty"> COLOURS - {{$item['qty']}}</p>

                          <p class="cart-new-total"><span>{{PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])}}/- ( INCLUDING DISCOUNTS )</span> </p>

                          
                      <div class="card-right d-flex align-items-center">
                      @if ($item['item_type'] != 'digital')
                        <!-- <div class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick uppercase" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="{{$item['qty']}}">
                        <span class="increaseQtycart cartaddclick uppercase" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
                      </div>  -->
                     @endif

                     <!-- <a class="remove-from-cart uppercase" href="{{route('front.cart.destroy',$key)}}" data-toggle="tooltip" title="Remove item" style="margin:0 2rem">REMOVE</a> -->


                      </div>


                        </div>
                      </div>




                    <!-- </td> -->
                    <!-- <td class="text-center text-lg">
                      {{PriceHelper::setCurrencyPrice($item['main_price'])}}
                    </td>

                    <td class="text-center">
                     @if ($item['item_type'] != 'digital')
                        <div class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="{{$item['qty']}}">
                        <span class="increaseQtycart cartaddclick" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
                      </div> 
                     @endif

                    </td>
                    <td class="text-center text-lg">
                      {{PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])}}
                    </td>

                    <td class="text-center"><a class="remove-from-cart" href="{{route('front.cart.destroy',$key)}}" data-toggle="tooltip" title="Remove item"><i class="icon-x"></i></a></td>
                  </tr> -->
                  </div>
                </div>
                @endforeach
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed button-billing-new" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">NAME</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;">{{__('RECIVIERS DETAILS')}} </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
    <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-fn" class="uppercase">{{__('First Name')}}</label>
              <input class="form-control uppercase" name="bill_first_name" type="text" required id="checkout-fn" value="{{isset($user) ? $user->first_name : ''}}">
            </div>
          </div>
          <!-- <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln" class="uppercase">{{__('Last Name')}}</label>
              <input class="form-control uppercase" name="bill_last_name" type="text" required id="checkout-ln" value="{{isset($user) ? $user->last_name : ''}}">
            </div>
          </div> -->
        </div>
        <div class="row">
    <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln" class="uppercase">{{__('Last Name')}}</label>
              <input class="form-control uppercase" name="bill_last_name" type="text" required id="checkout-ln" value="{{isset($user) ? $user->last_name : ''}}">
            </div>
          </div>
    </div>
    </div>
   
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed button-billing-new" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">PAYMENT METHOD</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;">{{__('CREDIT CARD')}} </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed button-billing-new" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">ADDRESS</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;">{{__('PREFERRED ADDRESS - HOME#1')}} </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    @if (PriceHelper::CheckDigital())
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-company" class="uppercase">{{__('Company')}}</label>
              <input class="form-control uppercase" name="bill_company" type="text" id="checkout-company" value="{{isset($user) ? $user->bill_company : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address1" class="uppercase">{{__('Address')}} 1</label>
              <input class="form-control uppercase" name="bill_address1" required type="text" id="checkout-address1" value="{{isset($user) ? $user->bill_address1 : ''}}">
            </div>
          </div>
          <!-- <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address2" class="uppercase">{{__('Address')}} 2</label>
              <input class="form-control uppercase" name="bill_address2" type="text" id="checkout-address2" value="{{isset($user) ? $user->bill_address2 : ''}}">
            </div>
          </div> -->
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address2" class="uppercase">{{__('Address')}} 2</label>
              <input class="form-control uppercase" name="bill_address2" type="text" id="checkout-address2" value="{{isset($user) ? $user->bill_address2 : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-zip" class="uppercase">{{__('Zip Code')}}</label>
              <input class="form-control uppercase" name="bill_zip" type="text" id="checkout-zip" value="{{isset($user) ? $user->bill_zip : ''}}">
            </div>
          </div>
          <!-- <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-city" class="uppercase">{{__('City')}}</label>
              <input class="form-control uppercase" name="bill_city" type="text" required id="checkout-city" value="{{isset($user) ? $user->bill_city : ''}}">
            </div>
          </div> -->
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-city" class="uppercase">{{__('City')}}</label>
              <input class="form-control uppercase" name="bill_city" type="text" required id="checkout-city" value="{{isset($user) ? $user->bill_city : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-country" class="uppercase">{{ __('Country') }}</label>
              <select class="form-control uppercase" required name="bill_country" id="billing-country">
                <option class="uppercase" selected>{{__('Choose Country')}}</option>
                @foreach (DB::table('countries')->get() as $country)
                      <option class="uppercase" value="{{$country->name}}" {{isset($user) && $user->bill_country == $country->name ? 'selected' :''}} >{{$country->name}}</option>
                  @endforeach
               </select>
            </div>
          </div>
        </div>
        @endif

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input uppercase" type="checkbox" id="same_address" name="same_ship_address" {{Session::has('shipping_address') ? 'checked' : ''}} >
            <label class="custom-control-label uppercase" for="same_address">{{__('Same as billing address')}}</label>
          </div>
        </div>

        @if ($setting->is_privacy_trams == 1)
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="trams__condition" >
            <label class="custom-control-label uppercase" for="trams__condition">This site is protected by reCAPTCHA and the <a href="{{$setting->policy_link}}" target="_blank">Privacy Policy</a> and <a href="{{$setting->terms_link}}" target="_blank">Terms of Service</a> apply.</label>
          </div>
        </div>
        @endif


    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed button-billing-new" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">PHONE NUMBER</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;">{{__('PREFERRED CONTACT DETAILS - HOME#1')}} </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout_email_billing" class="uppercase">{{__('E-mail Address')}}</label>
              <input class="form-control uppercase" name="bill_email"  type="email" required id="checkout_email_billing" value="{{isset($user) ? $user->email : ''}}">
            </div>
          </div>
          
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-phone" class="uppercase">{{__('Phone Number')}}</label>
              <input class="form-control uppercase" name="bill_phone" type="text" id="checkout-phone" required value="{{isset($user) ? $user->phone : ''}}">
            </div>
          </div>
        </div>
  </div>
</div>

<div class="d-flex justify-content-between paddin-top-1x mt-4 px-3">
            <!-- <a class="btn btn-primary btn-sm uppercase" href="{{route('front.cart')}}"><span class="hidden-xs-down"><i class="icon-arrow-left"></i>{{__('Back To Cart')}}</span></a> -->
            @if ($setting->is_privacy_trams == 1)
            <button disabled id="continue__button" class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down uppercase" style="color: #000 !important; font-size: 22px;">{{__('PROCEED TO NEXT STEP')}}</span></button>
            @else
            <button class="btn btn-primary btn-sm uppercase" type="submit"><span class="hidden-xs-down uppercase" style="color: #000 !important; font-size: 22px;">{{__('PROCEED TO NEXT STEP')}}</span></button>
            @endif
          </div>

          
        </form>
            </div>
        </div>
      </div>
      <!-- Sidebar -->
       
    </div>
  </div>
@endsection
