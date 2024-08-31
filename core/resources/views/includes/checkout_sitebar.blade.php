<div class="col-xl-3 col-lg-4">
    <aside class="sidebar">
      <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->

      <!-- Items in Cart Widget-->
      <section class="card widget widget-featured-posts widget-featured-products p-4">
        <h3 class="widget-title">{{__('Items In Your Cart')}}</h3>
      
        @foreach ($cart as $key => $item)
     
        <div class="entry">
          <div class="entry-thumb"><a href="{{route('front.product',$item['slug'])}}"><img src="{{asset('assets/images/'.$item['photo'])}}" alt="Product"></a></div>
          <div class="entry-content">
            <h4 class="entry-title uppercase"><a href="{{route('front.product',$item['slug'])}}">
                {{ strlen(strip_tags($item['name'])) > 45 ? substr(strip_tags($item['name']), 0, 45) . '...' : strip_tags($item['name']) }}

            </a></h4>
            <span class="entry-meta uppercase">{{$item['qty']}} x {{PriceHelper::setCurrencyPrice($item['main_price'])}}</span>
            @foreach ($item['attribute']['option_name'] as $optionkey => $option_name)
            <span class="entry-meta uppercase"><b>{{$option_name}}</b> 
            <!--: {{PriceHelper::setCurrencySign()}}{{$item['attribute']['option_price'][$optionkey]}}-->
            </span>
            @endforeach
         </div>
        </div>
        @endforeach

      </section>


    </aside>
  </div>
