
@php
    $cart = Session::has('cart') ? Session::get('cart') : [];
    $total =0;
    $option_price = 0;
    $cartTotal = 0;
@endphp

<div class="card mt-4 mb-4">
      <div class="card-body">
        <div class="shopping-cart-footer">
            

            <!-- <div class="text-right text-lg column {{Session::has('coupon') ? '' : 'd-none'}}"><span class="text-muted">{{__('Discount')}} ({{Session::has('coupon') ? Session::get('coupon')['code']['title'] : ''}}) : </span><span class="text-gray-dark">{{PriceHelper::setCurrencyPrice(Session::has('coupon') ? Session::get('coupon')['discount'] : 0)}}</span></div> -->

            <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#959595 !important">{{__('Your cart has 3 times')}} </span>
            <!-- <span class="text-gray-dark">{{PriceHelper::setCurrencyPrice($cartTotal - (Session::has('coupon') ? Session::get('coupon')['discount'] : 0))}}</span> -->
          </div>

            <div class="column">
                <form class="coupon-form" method="post" id="coupon_form" action="{{route('front.promo.submit')}}">
                @csrf
                <input class="form-control form-control-sm" name="code" type="text" placeholder="{{__('Coupon code')}}" style="background-color: #3F3F3F; border-radius: 0px;" required>
                <button class="btn btn-primary btn-sm uppercase" style="background-color: #3F3F3F !important;     border-radius: 0px; color: #b9afa8;" type="submit">
                <span style="color: #b9afa8 !important;" class="uppercase">{{__('Apply Coupon')}}</span></button>
                </form>
            </div>


        </div>
        <!-- <div class="shopping-cart-footer">
            <div class="column"><a class="btn btn-primary " href="{{route('front.catalog')}}"><span><i class="icon-arrow-left"></i> {{__('Back to Shopping')}}</span></a></div>
            <div class="column"><a class="btn btn-primary" href="{{route('front.checkout.billing')}}"><span>{{__('Checkout')}}</span></a></div>
        </div> -->
      </div>
  </div>

  <!-- <div class="">
    <div class="">
        <div class="table-responsive shopping-cart">
            <table class="table table-bordered"> -->

              <!-- <thead>
                <tr>
                  <th>{{__('Product Name')}}</th>
                  <th>{{__('Product Price')}}</th>
                  <th class="text-center">{{__('Quantity')}}</th>
                  <th class="text-center">{{__('Subtotal')}}</th>
                  <th class="text-center"><a class="btn btn-sm btn-primary" href="{{route('front.cart.clear')}}"><span>{{__('Clear Cart')}}</span></a></th>
                </tr>
              </thead> -->

              <!-- <tbody id="cart_view_load" data-target="{{route('cart.get.load')}}">

                @foreach ($cart as $key => $item)
                @php

                    $cartTotal +=  ($item['main_price'] + $total + $item['attribute_price']) * $item['qty'];
                @endphp
                <div class="card mb-4 cart-card">
                  <div class="card-body d-flex align-items-center"> -->
                    <!-- <tr> -->
                    <!-- <td> -->
                    <!-- <div class="product-item">
                        <a class="product-thumb uppercase" href="{{route('front.product',$item['slug'])}}"><img src="{{asset('assets/images/'.$item['photo'])}}" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title uppercase"><a href="{{route('front.product',$item['slug'])}}">
                            {{ strlen(strip_tags($item['name'])) > 45 ? substr(strip_tags($item['name']), 0, 45) . '...' : strip_tags($item['name']) }}

                        </a></h4> -->

                          <!-- @foreach ($item['attribute']['option_name'] as $optionkey => $option_name)
                          <span><em>{{$item['attribute']['names'][$optionkey]}}:</em> {{$option_name}} ({{PriceHelper::setCurrencyPrice($item['attribute']['option_price'][$optionkey])}})</span>
                          @endforeach -->
                          <!-- <span>{{PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])}}</span>
                        </div>
                      </div>


                      <div class="card-right d-flex align-items-center">
                      @if ($item['item_type'] != 'digital')
                        <div class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick uppercase" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="{{$item['qty']}}">
                        <span class="increaseQtycart cartaddclick uppercase" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
                      </div> 
                     @endif

                     <a class="remove-from-cart uppercase" href="{{route('front.cart.destroy',$key)}}" data-toggle="tooltip" title="Remove item" style="margin:0 2rem">REMOVE</a>


                      </div> -->




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
                  <!-- </div>
                </div>
                @endforeach

              </tbody>
            </table> -->

            <!-- <div class="column" style="background-color: #303030;">
              <a class="btn btn-primary d-flex justify-content-between rounded-none uppercase" style="border-radius: 0px; background-color: #3F3F3F !important;" href="{{route('front.checkout.billing')}}">
                <span style="color: #b9afa8 !important;"></span>
                <span style="color: #b9afa8 !important; margin:0 1rem">{{__('Checkout')}}</span>
              </a>
            </div>
          </div>
          
    </div>
</div>

  </div> -->



<div class="accordion acc-cart" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button cart-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">

        <div class="order-summary">
        ORDER SUMMARY
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#000 !important;margin-left: 4px; font-size: 22px;">{{__('2 ITEMS IN YOUR CART')}} </span>
            <!-- <span class="text-gray-dark">{{PriceHelper::setCurrencyPrice($cartTotal - (Session::has('coupon') ? Session::get('coupon')['discount'] : 0))}}</span> -->
          </div>
        </div>
        <div class="cart-total-new">
        {{$cartTotal }}
        </div>
      
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body cart-body">
        
      @foreach ($cart as $key => $item)
                @php

                    $cartTotal +=  ($item['main_price'] + $total + $item['attribute_price']) * $item['qty'];
                @endphp
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
                          <p class="cart-qty"> QUANTITY - <span class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick uppercase" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="{{$item['qty']}}">
                        <span class="increaseQtycart cartaddclick uppercase" data-id="{{$key}}" data-target="{{PriceHelper::GetItemId($key)}}"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
</span></p>
                          <p class="cart-qty"> COLOURS - OFF WHITE</p>

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


    <div class="column cart-place-order-new" style="background-color: #303030;">
              <a class="btn btn-primary d-flex justify-content-between rounded-none uppercase" style="border-radius: 0px;" href="{{route('front.checkout.billing')}}">
                <span style="color: #b9afa8 !important;"></span>
                <p style=" margin:0 1rem">{{__('CHECKOUT')}}</p>
              </a>
            </div>
  </div>
  
  
</div>





<!-- <div class="cart-main-right mt-4">
  <div class="card">
    <div class="card-body">
      <div class="cart-card-sec">
          <p>CARD DETAILS</p>


          <div class="col-lg-12 w-100 cart-grp">
            <div class="form-group">
              <label for="checkout-fn">{{__('NAME ON CARD')}}</label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="{{isset($user) ? $user->first_name : ''}}">
            </div>
          </div>

          <div class="col-lg-12 w-100 cart-grp">
            <div class="form-group">
              <label for="checkout-fn">{{__('CARD DETAILS')}}</label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="{{isset($user) ? $user->first_name : ''}}">
            </div>
          </div>

          <div class="row">

          <div class="col-lg-6 cart-grp">
            <div class="form-group">
              <label for="checkout-fn">{{__('EXPIRY DATE')}}</label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="{{isset($user) ? $user->first_name : ''}}">
            </div>
          </div>

          <div class="col-lg-6 cart-grp">
            <div class="form-group">
              <label for="checkout-fn">{{__('CVV')}}</label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="{{isset($user) ? $user->first_name : ''}}">
            </div>
          </div>

          </div>

          
         

      </div>

      <div class="cart-rght-bottom">
            <div class="cart-bottom-first">
              <p>SUBTOTAL</p>
              <p>$15</p>
            </div>

            <div class="cart-bottom-first">
              <p>Shipping</p>
              <p>$15</p>
            </div>

            <div class="cart-bottom-first">
              <p>TOTAL</p>
              <p>$15</p>
            </div>

            <div class="column" style="background-color: #303030;">
              <a class="btn btn-primary d-flex justify-content-between rounded-none" style="border-radius: 0px; background-color: #3F3F3F !important;" href="{{route('front.checkout.billing')}}">
                <span style="color: #b9afa8 !important;">$.1500</span>
                <span style="color: #b9afa8 !important;">{{__('Checkout')}}</span>
              </a>
            </div>


          </div>
    </div>
  </div>
</div> -->


  



