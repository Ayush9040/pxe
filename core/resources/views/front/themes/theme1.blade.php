@extends('master.front')
@section('meta')
    <meta name="keywords" content="{{ $setting->meta_keywords }}">
    <meta name="description" content="{{ $setting->meta_description }}">
@endsection

@section('content')

    @php
        function renderStarRating($rating, $maxRating = 5)
        {
            $fullStar = "<i class = 'far fa-star filled'></i>";
            $halfStar = "<i class = 'far fa-star-half filled'></i>";
            $emptyStar = "<i class = 'far fa-star'></i>";
            $rating = $rating <= $maxRating ? $rating : $maxRating;

            $fullStarCount = (int) $rating;
            $halfStarCount = ceil($rating) - $fullStarCount;
            $emptyStarCount = $maxRating - $fullStarCount - $halfStarCount;

            $html = str_repeat($fullStar, $fullStarCount);
            $html .= str_repeat($halfStar, $halfStarCount);
            $html .= str_repeat($emptyStar, $emptyStarCount);
            $html = $html;
            return $html;
        }
    @endphp


    @if ($setting->is_slider == 1)
        <div class="slider-area-wrapper">
            <div class="px-4">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Main Slider-->
                        <div class="hero-slider">
                            <div class="hero-slider-main owl-carousel dots-inside" >
                                @foreach ($sliders as $slider)
                                    <div class="item
                                    @if (DB::table('languages')->where('is_default',1)->first()->rtl == 1)
                                    d-flex justify-content-end
                                    @endif
                                    "
                                        style="background: url('{{ asset(`assets/images/` . $slider->photo) }}')">
                                        <div class="item-inner">
                                            <div class="from-bottom">
                                                @if ($slider->logo)
                                                    <img class="d-inline-block brand-logo"
                                                    src="{{ asset('assets/images/' . $slider->logo) }}"
                                                    alt="logo">
                                                @endif
                                                <!-- <div class="title text-body">{{ $slider->title }}</div>
                                                 <div class="subtitle text-body">{{ $slider->details }}</div> -->
                                            </div>
                                             <!-- <a class="btn btn-primary scale-up delay-1"
                                                href="{{ $slider->link }}" style="background:red !important"> <span>{{ __('Buy Now') }}</span>
                                            </a>  -->
                                        </div>
                                    </div>
                                @endforeach
                                <!-- <video height="500px" controls="controls">
                                    <source src="{{ asset('assets/videos/banner.mp4') }}" type="video/mp4" />
                                </video> -->
                            </div>
                        </div>
                    </div>
<!-- 
                    @if (isset($hero_banner))
                    <div class="col-lg-4 d-none d-lg-block">
                        <a href="{{$hero_banner['url1']}}" class="sright-image">
                            <img src="{{asset('assets/images/'.$hero_banner['img1'])}}" alt="">
                            <div class="inner-content">

                                @if (isset($hero_banner['subtitle1']))
                                  <p>{{$hero_banner['subtitle1']}}</p>
                                @endif

                                @if (isset($hero_banner['title1']))
                                <h4>{{$hero_banner['title1']}}</h4>
                                @endif
                            </div>
                        </a>
                        <a href="{{$hero_banner['url2']}}" class="sright-image mb-0">
                            <img src="{{asset('assets/images/'.$hero_banner['img2'])}}" alt="">
                            <div class="inner-content">
                                @if (isset($hero_banner['subtitle2']))
                                 <p>{{$hero_banner['subtitle2']}}</p>
                                @endif
                                @if (isset($hero_banner['title2']))
                                 <h4>{{$hero_banner['title2']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                    @endif -->

                </div>
            </div>
        </div>
    @endif

    <div id="myCarousel" class="carousel slide direction style-text-second" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <div class="carousel-caption d-block d-md-block">
        <!-- <h5 class="d-block w-100">First slide label</h5> -->
        <p class="d-block w-100 strokeme">SAVE 30% OFF ON YOUR FIRST ORDER WITH US</p>
      </div>
    </div>
    <div class="carousel-item">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5 class="">Second slide label</h5> -->
        <p class="d-block w-100 strokeme">SAVE 30% OFF ON YOUR FIRST ORDER WITH US</p>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="d-block w-100">Third slide label</h5>
        <p class="dis-offer d-block w-100 strokeme scrolling">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p>
      </div>
    </div> -->
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>



    <!-- <div class="card card-details mt-20" style="border-top: 1px solid #e5e5e5;">
  <div class="card-body">
    <p class="dis-offer strokeme">SAVE 30% OFF ON YOUR FIRST ORDER WITH US</p>
  </div>
</div> -->


    @if ($setting->campaign_status == 1)
        <div class="deal-of-day-section mt-50">
            <div class="px-4">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">{{ $setting->campaign_title }}</h2>
                            <div class="right-area">
                                    <div class="countdown countdown-alt"style="background-color:#d3020e !important" data-date-time="{{$setting->campaign_end_date}}"></div>
                                    <a class="right_link" href="{{route('front.campaign')}}">{{ __('View All') }} <i class="icon-chevron-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row g-3">

                    <div class="col-lg-12">
                    <div class="popular-category-slider owl-carousel campaign_items-slider">
                        @foreach ($allCat as $cat)

                        <div class="slider-item">
                            <div class="product-card">
                             <div class="product-thumb">
                                   
                                    <img class="lazy" data-src="{{asset('assets/images/'.$cat->photo)}}" alt="Product">
                                   
                                </div>
                                

                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

                </div>
            </div>
        </div>
    @endif


    


    <!-- @if ($setting->is_three_c_b_first == 1)
        <div class="bannner-section mt-60">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-4">
                        <a href="{{$banner_first['firsturl1']}}" class="genius-banner">
                            <img src="{{ asset('assets/images/'.$banner_first['img1']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_first['subtitle1']))
                                    <p>{{$banner_first['subtitle1']}}</p>
                                @endif
                                @if (isset($banner_first['title1']))
                                    <h4>{{$banner_first['title1']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{$banner_first['firsturl2']}}" class="genius-banner">
                            <img src="{{ asset('assets/images/'.$banner_first['img2']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_first['subtitle2']))
                                    <p>{{$banner_first['subtitle2']}}</p>
                                @endif
                                @if (isset($banner_first['title2']))
                                    <h4>{{$banner_first['title2']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{$banner_first['firsturl3']}}" class="genius-banner">
                            <img src="{{ asset('assets/images/'.$banner_first['img3']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_first['subtitle3']))
                                    <p>{{$banner_first['subtitle3']}} </p>
                                @endif
                                @if (isset($banner_first['title3']))
                                    <h4>{{$banner_first['title3']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif -->


    @if ($setting->is_popular_category == 1)
        <section class="newproduct-section popular-category-sec mt-50">
            <div class="px-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">{{ $popular_category_title }}</h2>
                        
                        </div>
                    </div>
                </div>
                <div class="popular_category_view d-none">
                    <img  src="{{asset('assets/images/ajax_loader.gif')}}" alt="">
                </div>
                <div class="row">
      <!-- Poduct Gallery-->
      <div class="col-xxl-5 col-lg-6 col-md-6">
        <div class="product-gallery">
            <!-- @if ($item->video)
            <div class="gallery-wrapper">
                <div class="gallery-item video-btn text-center">
                    <a href="{{ $item->video }}" title="Watch video"></a>
                </div>
            </div>
          @endif -->
          @if($item->is_stock())
          <span class="product-badge
          @if($item->is_type == 'feature')
          bg-warning
          @elseif($item->is_type == 'new')
          bg-success
          @elseif($item->is_type == 'top')
          bg-info
          @elseif($item->is_type == 'best')
          bg-dark
          @elseif($item->is_type == 'flash_deal')
            bg-success
          @endif
          ">{{  $item->is_type != 'undefine' ?  ucfirst(str_replace('_',' ',$item->is_type)) : ''   }}</span>

          @else
          <span class="product-badge bg-secondary border-default text-body
          ">{{__('out of stock')}}</span>
          @endif

          @if($item->previous_price && $item->previous_price !=0)
          <div class="product-badge bg-goldenrod  ppp-t"> -{{PriceHelper::DiscountPercentage($item)}}</div>
          @endif

          <div class="product-thumbnails insize">
            <div class="product-details-slider owl-carousel" >
            <div class="item"><img src="{{asset('assets/images/'.$item->photo)}}" alt="zoom"  /></div>
            <!-- @foreach ($galleries as $key => $gallery)
            <div class="item"><img src="{{asset('assets/images/'.$gallery->photo)}}" alt="zoom"  /></div>
            @endforeach -->
        </div>
      </div>
        </div>
      </div>

        
        <!-- Product Info-->
        <div class="col-xxl-7 col-lg-6 col-md-6">
            <div class="details-page-top-right-content d-flex">
                <div class="div w-100">
                    <input type="hidden" id="item_id" value="{{$item->id}}">
                    <input type="hidden" id="demo_price" value="{{PriceHelper::setConvertPrice($item->discount_price)}}">
                    <input type="hidden" value="{{PriceHelper::setCurrencySign()}}" id="set_currency">
                    <input type="hidden" value="{{PriceHelper::setCurrencyValue()}}" id="set_currency_val">
                    <input type="hidden" value="{{$setting->currency_direction}}" id="currency_direction">
                    <h4 class="mb-2 p-title-main">{{$item->name}}</h4>
                    <div class="mb-3">
                        <div class="rating-stars d-inline-block gmr-3">
                        {!!renderStarRating($item->reviews->avg('rating'))!!}
                        </div>
                        @if ($item->is_stock())
                            <span class="text-success  d-inline-block">{{__('In Stock')}}</span>
                        @else
                            <span class="text-danger  d-inline-block">{{__('Out of stock')}}</span>
                        @endif
                    </div>


                    @if($item->is_type == 'flash_deal')
                    @if (date('d-m-y') != \Carbon\Carbon::parse($item->date)->format('d-m-y'))
                    <div class="countdown countdown-alt mb-3" data-date-time="{{ $item->date }}">
                    </div>
                    @endif
                    @endif

                    <span class="h3 d-block price-area">
                    @if ($item->previous_price != 0)
                        <small class="d-inline-block"><del>{{PriceHelper::setPreviousPrice($item->previous_price)}}</del></small>
                    @endif
                    <span id="main_price" class="main-price">{{PriceHelper::grandCurrencyPrice($item)}}</span>
                    </span>

                    <p class="text-muted">{{$item->sort_details}} <a href="#details" class="scroll-to">{{__('Read more')}}</a></p>

                    <div class="row align-items-end pb-4">
                        <div class="col-sm-12">
                            @if ($item->item_type == 'normal')
                            <div class="qtySelector product-quantity">
                              <span class="decreaseQty subclick"><i class="fas fa-minus " style="padding-top: 10px;"></i></span>
                              <input type="text" class="qtyValue cart-amount" value="1">
                              <span class="increaseQty addclick"><i class="fas fa-plus" style="padding-top: 10px;"></i></span>
                                <input type="hidden" value="3333" id="current_stock">
                            </div>
                            @endif
                            <div class="p-action-button">
                              @if ($item->item_type != 'affiliate')
                                @if ($item->is_stock())
                                <button class="btn btn-primary m-0 a-t-c-mr" id="add_to_cart"><i class="icon-bag"></i><span>{{ __('Add to Cart') }}</span></button>
                                <button class="btn btn-primary m-0" id="but_to_cart"><i class="icon-bag"></i><span>{{ __('Buy Now') }}</span></button>
                                @else
                                    <button class="btn btn-primary m-0"><i class="icon-bag"></i><span>{{__('Out of stock')}}</span></button>
                                @endif
                              @else
                              <a href="{{$item->affiliate_link}}" target="_blank" class="btn btn-primary m-0"><span><i class="icon-bag"></i>{{ __('Buy Now') }}</span></a>
                              @endif

                            </div>

                        </div>
                    </div>

                    <div class="div">
                        <div class="t-c-b-area">
                            @if ($item->brand_id)
                            <div class="pt-1 mb-1"><span class="text-medium">{{__('Brand')}}:</span>
                                    <a href="{{route('front.catalog').'?brand='.$item->brand->slug}}">{{$item->brand->name}}</a>
                                </div>
                            @endif

                                <div class="pt-1 mb-1"><span class="text-medium">{{__('Categories')}}:</span>
                                    <a href="{{route('front.catalog').'?category='.$item->category->slug}}">{{$item->category->name}}</a>
                                        @if ($item->subcategory->name)
                                        /
                                        @endif
                                    <a href="{{route('front.catalog').'?subcategory='.$item->subcategory->slug}}">{{$item->subcategory->name}}</a>
                                        @if ($item->childcategory->name)
                                        /
                                        @endif
                                    <a href="{{route('front.catalog').'?childcategory='.$item->childcategory->slug}}">{{$item->childcategory->name}}</a>
                                </div>
                                <div class="pt-1 mb-1"><span class="text-medium">{{__('Tags')}}:</span>
                                    @if($item->tags)
                                    @foreach (explode(',',$item->tags) as $tag)
                                    @if ($loop->last)
                                    <a href="{{route('front.catalog').'?tag='.$tag}}">{{$tag}}</a>
                                    @else
                                    <a href="{{route('front.catalog').'?tag='.$tag}}">{{$tag}}</a>,
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                                <!-- @if ($item->item_type == 'normal')
                                <div class="pt-1 mb-4"><span class="text-medium">{{__('SKU')}}:</span> #{{$item->sku}}</div>
                                @endif -->
                        </div>

                        <div class="mt-4 p-d-f-area">
                            <div class="left">
                                <a class="btn btn-primary btn-sm wishlist_store wishlist_text" href="{{route('user.wishlist.store',$item->id)}}"><span><i class="icon-heart"></i></span>
                                @if (Auth::check() && App\Models\Wishlist::where('user_id',Auth::user()->id)->where('item_id',$item->id)->exists())
                                <span>{{__('Added To Wishlist')}}</span>
                                @else
                                <span class="wishlist1">{{__('Wishlist')}}</span>
                                <span class="wishlist2 d-none">{{__('Added To Wishlist')}}</span>
                                @endif
                                </a>
                                <button class="btn btn-primary btn-sm  product_compare" data-target="{{route('fornt.compare.product',$item->id)}}" ><span><i class="icon-repeat"></i>{{__('Compare')}}</span></button>
                            </div>

                            <div class="d-flex align-items-center">
                                <span class="text-muted mr-1">{{__('Share')}}: </span>
                                <div class="d-inline-block a2a_kit">
                                    <a class="facebook  a2a_button_facebook" href="">
                                        <span><i class="fab fa-facebook-f" style="padding-top: 10px;"></i></span>
                                    </a>
                                    <a class="twitter  a2a_button_twitter" href="">
                                        <span><i class="fab fa-twitter" style="padding-top: 10px;"></i></span>
                                    </a>
                                    <a class="linkedin  a2a_button_linkedin" href="">
                                        <span><i class="fab fa-linkedin-in" style="padding-top: 10px;"></i></span>
                                    </a>
                                    <a class="pinterest   a2a_button_pinterest" href="">
                                        <span><i class="fab fa-pinterest" style="padding-top: 10px;"></i></span>
                                    </a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            </div>
        </section>
    @endif

    <!-- @if ($setting->is_three_c_b_second == 1)
        <div class="bannner-section mt-60">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-4">
                        <a href="{{$banner_secend['url1']}}" class="genius-banner">
                            <img class="lazy" data-src="{{ asset('assets/images/'.$banner_secend['img1']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_secend['subtitle1']))
                                    <p>{{$banner_secend['subtitle1']}}</p>
                                @endif

                                @if (isset($banner_secend['title1']))
                                    <h4>{{$banner_secend['title1']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{$banner_secend['url2']}}" class="genius-banner">
                            <img class="lazy" data-src="{{ asset('assets/images/'.$banner_secend['img2']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_secend['subtitle2']))
                                    <p>{{$banner_secend['subtitle2']}}</p>
                                @endif

                                @if (isset($banner_secend['title2']))
                                    <h4> {{$banner_secend['title2']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{$banner_secend['url3']}}" class="genius-banner">
                            <img class="lazy" data-src="{{ asset('assets/images/'.$banner_secend['img3']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_secend['subtitle3']))
                                    <p>{{$banner_secend['subtitle3']}} </p>
                                @endif

                                @if (isset($banner_secend['title3']))
                                    <h4>{{$banner_secend['title3']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif -->

    <!-- @if ($setting->is_highlighted == 1)
        <section class="selected-product-section speacial-product-sec mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="links">
                                <a data-href="{{route('front.get.product','feature')}}" data-target="type_product_view" href="javascript:;" class="product_get active">{{__('Featured')}}</a>
                                <a data-href="{{route('front.get.product','best')}}" data-target="type_product_view" class="product_get" href="javascript:;">{{__('Best Seller')}}</a>
                                <a data-href="{{route('front.get.product','top')}}" data-target="type_product_view" class="product_get" href="javascript:;">{{__('Top Rated')}}</a>
                                <a data-href="{{route('front.get.product','new')}}" data-target="type_product_view" class="product_get" href="javascript:;">{{__('New Product')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="type_product_view d-none">
                        <img  src="{{asset('assets/images/ajax_loader.gif')}}" alt="">
                    </div>
                    <div class="col-lg-12" id="type_product_view">

                        <div class="features-slider  owl-carousel" >
                            @foreach ($products->orderBy('id','DESC')->get()  as $item)
                                @if ($item->is_type == 'feature')
                                    <div class="slider-item">
                                        <div class="product-card ">
                                            <div class="product-thumb">
                                                @if (!$item->is_stock())
                                                    <div class="product-badge bg-secondary border-default text-body
                                                    ">{{__('out of stock')}}</div>
                                                @endif
                                                @if($item->previous_price && $item->previous_price !=0)
                                                <div class="product-badge product-badge2 bg-info"> -{{PriceHelper::DiscountPercentage($item)}}</div>
                                                @endif
                                                <img class="lazy" data-src="{{asset('assets/images/'.$item->thumbnail)}}" alt="Product">
                                                <div class="product-button-group"><a class="product-button wishlist_store" href="{{route('user.wishlist.store',$item->id)}}" title="{{__('Wishlist')}}"><i class="icon-heart"></i></a>
                                                    <a data-target="{{route('fornt.compare.product',$item->id)}}" class="product-button product_compare" href="javascript:;" title="{{__('Compare')}}"><i class="icon-repeat"></i></a>
                                                    @include('includes.item_footer',['sitem' => $item])
                                                </div>
                                            </div>
                                            <div class="product-card-inner">
                                            <div class="product-card-body">
                                                <div class="product-category"><a href="{{route('front.catalog').'?category='.$item->category->slug}}">{{$item->category->name}}</a></div>
                                                <h3 class="product-title"><a href="{{route('front.product',$item->slug)}}">
                                                    {{ strlen(strip_tags($item->name)) > 35 ? substr(strip_tags($item->name), 0, 35) : strip_tags($item->name) }}
                                                </a></h3>
                                                <div class="rating-stars">
                                                    {!! renderStarRating($item->reviews->avg('rating')) !!}
                                                </div>
                                                <h4 class="product-price">
                                                @if ($item->previous_price != 0)
                                                <del>{{PriceHelper::setPreviousPrice($item->previous_price)}}</del>
                                                @endif
                                                {{PriceHelper::grandCurrencyPrice($item)}}
                                                </h4>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif -->

   

    <!-- @if ($extra_settings->is_t1_falsh == 1)
    <div class="flash-sell-new-section mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <h2 class="h3">{{ __('Flash Deal') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="flash-deal-slider owl-carousel" >
                            @foreach ($products->orderBy('id','DESC')->get()  as $item)
                            @if ($item->is_type == 'flash_deal' && $item->date != null)
                                <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                            @if (!$item->is_stock())
                                            <div class="product-badge bg-secondary border-default text-body
                                            ">{{__('out of stock')}}</div>
                                            @endif
                                            @if($item->previous_price && $item->previous_price !=0)
                                            <div class="product-badge product-badge2 bg-info"> -{{PriceHelper::DiscountPercentage($item)}}</div>
                                            @endif
                                            <img class="lazy" data-src="{{asset('assets/images/'.$item->thumbnail)}}" alt="Product">
                                            <div class="product-button-group"><a class="product-button wishlist_store" href="{{route('user.wishlist.store',$item->id)}}" title="{{__('Wishlist')}}"><i class="icon-heart"></i></a>
                                                <a data-target="{{route('fornt.compare.product',$item->id)}}" class="product-button product_compare" href="javascript:;" title="{{__('Compare')}}"><i class="icon-repeat"></i></a>
                                                @include('includes.item_footer',['sitem' => $item])
                                            </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="{{route('front.catalog').'?category='.$item->category->slug}}">{{$item->category->name}}</a></div>
                                                <h3 class="product-title"><a href="{{route('front.product',$item->slug)}}">
                                                    {{ strlen(strip_tags($item->name)) > 50 ? substr(strip_tags($item->name), 0, 50) : strip_tags($item->name) }}
                                                </a></h3>
                                                <div class="rating-stars">
                                                    {!! renderStarRating($item->reviews->avg('rating')) !!}
                                                </div>
                                                <h4 class="product-price">
                                                @if ($item->previous_price != 0)
                                                <del>{{PriceHelper::setPreviousPrice($item->previous_price)}}</del>
                                                @endif

                                                {{PriceHelper::grandCurrencyPrice($item)}}
                                                </h4>
                                                @if (date('d-m-y') != \Carbon\Carbon::parse($item->date)->format('d-m-y'))
                                                <div class="countdown countdown-alt mb-3" data-date-time="{{ $item->date }}">
                                                </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif -->

    <!-- @if ($setting->is_two_column_category == 1)
        <div class="flash-sell-area mt-50">
            <div class="container">
                <div class="row gx-3 justify-content-center">
                    @foreach ($two_column_categoriess as $two_column_key => $two_column_category)
                    <div class="col-xl-4 col-lg-6">
                        <div class="section-title">
                            <h2 class="h3">{{ $two_column_category['name']->name }}</h2>  
                        </div>
                        <div class="main-content">
                            <div class="newproduct-slider owl-carousel">
                                @foreach ($two_column_categoriess[$two_column_key]['items']->chunk(4) as $two_column_category_itemt)
                                    <div class="slider-item">
                                        @foreach ($two_column_category_itemt as $two_column_category_item)
                                        <div class="product-card p-col">
                                            <a class="product-thumb" href="{{route('front.product',$two_column_category_item->slug)}}">
                                                @if(!$two_column_category_item->is_stock())
                                                    <div class="product-badge bg-secondary border-default text-body
                                                    ">{{__('out of stock')}}</div>
                                                    @endif

                                                <img class="lazy" data-src="{{asset('assets/images/'.$two_column_category_item->thumbnail)}}" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="{{route('front.product',$two_column_category_item->slug)}}">
                                                    {{ strlen(strip_tags($two_column_category_item->name)) > 40 ? substr(strip_tags($two_column_category_item->name), 0, 40) : strip_tags($two_column_category_item->name) }}
                                                </a></h3>
                                                <div class="rating-stars">
                                                    {!! renderStarRating($two_column_category_item->reviews->avg('rating')) !!}
                                                </div>
                                                <h4 class="product-price">
                                                @if ($two_column_category_item->previous_price != 0)
                                                <del>{{PriceHelper::setPreviousPrice($two_column_category_item->previous_price)}}</del>
                                                @endif
                                                    {{PriceHelper::grandCurrencyPrice($two_column_category_item)}}
                                                </h4>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif -->
<!-- 
    @if ($setting->is_two_c_b == 1)
        <div class="bannner-section mt-50">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-6">
                        <a href="{{$banner_third['url1']}}" class="genius-banner">
                            <img class="lazy" data-src="{{ asset('assets/images/'.$banner_third['img1']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_third['subtitle1']))
                                    <p>{{$banner_third['subtitle1']}}</p>
                                @endif
                                @if (isset($banner_third['title1']))
                                    <h4>{{$banner_third['title1']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{$banner_third['url2']}}" class="genius-banner">
                            <img class="lazy" data-src="{{ asset('assets/images/'.$banner_third['img2']) }}" alt="">
                            <div class="inner-content">
                                @if (isset($banner_third['subtitle2']))
                                    <p>{{$banner_third['subtitle2']}} </p>
                                @endif
                                @if (isset($banner_third['title2']))
                                    <h4>{{$banner_third['title2']}}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif -->

    <!-- @if ($setting->is_featured_category == 1)
        <section class="selected-product-section featured_cat_sec sps-two mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">{{ $feature_category_title }}</h2>
                            <div class="links">
                                @foreach ($feature_categories as $key => $feature_category)
                                <a class="category_get {{$loop->first ? 'active' : ''}}" data-target="feature_category_view"  data-href="{{route('front.popular.category',[$feature_category->slug,'feature_category','normal'])}}" href="javascript:;" class="{{$loop->first ? 'active' : ''}}">{{$feature_category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature_category_view d-none">
                    <img  src="{{asset('assets/images/ajax_loader.gif')}}" alt="">
                </div>
                <div class="row g-3" id="feature_category_view">
                    @foreach ($feature_category_items as $feature_category_item)
                    <div class="col-gd">
                        <div class="product-card">
                            <div class="product-thumb" >

                                @if (!$feature_category_item->is_stock())
                                    <div class="product-badge bg-secondary border-default text-body
                                    ">{{__('out of stock')}}</div>
                                @endif
                                @if($feature_category_item->previous_price && $feature_category_item->previous_price !=0)
                                <div class="product-badge product-badge2 bg-info"> -{{PriceHelper::DiscountPercentage($feature_category_item)}}</div>
                                @endif
                                    <img class="lazy" data-src="{{asset('assets/images/'.$feature_category_item->thumbnail)}}" alt="Product">
                                    <div class="product-button-group"><a class="product-button wishlist_store" href="{{route('user.wishlist.store',$feature_category_item->id)}}" title="{{__('Wishlist')}}"><i class="icon-heart"></i></a>
                                        <a data-target="{{route('fornt.compare.product',$feature_category_item->id)}}" class="product-button product_compare" href="javascript:;" title="{{__('Compare')}}"><i class="icon-repeat"></i></a>

                                        @include('includes.item_footer',['sitem'=>$feature_category_item])

                                    </div>
                            </div>
                            <div class="product-card-body">
                                <div class="product-category"><a href="{{route('front.catalog').'?category='.$feature_category_item->category->slug}}">{{$feature_category_item->category->name}}</a></div>
                                <h3 class="product-title"><a href="{{route('front.product',$feature_category_item->slug)}}">
                                    {{ strlen(strip_tags($feature_category_item->name)) > 35 ? substr(strip_tags($feature_category_item->name), 0, 35) : strip_tags($feature_category_item->name) }}
                                </a></h3>
                                <div class="rating-stars">
                                <i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i>
                                </div>
                                <h4 class="product-price">
                                    @if ($feature_category_item->previous_price != 0)
                                    <del>{{PriceHelper::setPreviousPrice($feature_category_item->previous_price)}}</del>
                                    @endif
                                    {{PriceHelper::grandCurrencyPrice($feature_category_item)}}
                                    </h4>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif -->
 

    

    <!-- @if ($setting->is_blogs == 1)
        <div class="blog-section-h page_section mt-50 mb-30">
            <div class="px-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">{{ __('Our Blog') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="home-blog-slider owl-carousel">
                            @foreach ($posts as $post)
                                <div class="slider-item">
                                    <a href="{{route('front.blog.details',$post->slug)}}" class="blog-post">
                                        <div class="post-thumb">
                                            <img class="lazy" data-src="{{ asset('assets/images/' . json_decode($post->photo, true)[array_key_first(json_decode($post->photo, true))]) }}"
                                                alt="Blog Post">
                                            </div>
                                        <div class="post-body">

                                            <h3 class="post-title"> {{ strlen(strip_tags($post->title)) > 55 ? substr(strip_tags($post->title), 0, 55) : strip_tags($post->title) }}
                                            </h3>
                                            <ul class="post-meta">

                                                <li><i class="icon-user"></i>{{ __('Admin') }}</li>
                                                <li><i class="icon-clock"></i>{{ date('jS F, Y', strtotime($post->created_at)) }}</li>
                                            </ul>
                                            <p>{{ strlen(strip_tags($post->details)) > 120 ? substr(strip_tags($post->details), 0, 120) : strip_tags($post->details) }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif -->

    @if ($setting->campaign_status == 1)
        <div class="deal-of-day-section mt-50 mb-50">
            <div class="px-4">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">EXCLUSIVE DEALS</h2>
                        
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">{{ $setting->campaign_title }}</h2>
                            <div class="right-area">
                                    <div class="countdown countdown-alt"style="background-color:#d3020e !important" data-date-time="{{$setting->campaign_end_date}}"></div>
                                    <a class="right_link" href="{{route('front.campaign')}}">{{ __('View All') }} <i class="icon-chevron-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row g-3">

                    <div class="col-lg-12">
                    <div class="popular-category-slider owl-carousel campaign_items-slider">

                        <div class="">
                            <div class="product-card">
                             <div class="product-thumb">
                                   
                             <video  style="height:330px !important;" autoplay>
                                <source src="{{asset('assets/videos/banner.mp4')}}" type="video/mp4">
                            </video>
                                   
                                </div>
                                

                            </div>
                        
                    </div>

                    <div class="">
                            <div class="product-card">
                             <div class="product-thumb">
                                   
                             <video  style="height:330px !important;" autoplay>
                                <source src="{{asset('assets/videos/banner2.mp4')}}" type="video/mp4">
                            </video>
                                   
                                </div>
                                

                            </div>
                        
                    </div>

                    <div class="">
                            <div class="product-card">
                             <div class="product-thumb">
                                   
                             <video  style="height:330px !important;" autoplay>
                                <source src="{{asset('assets/videos/banner.mp4')}}" type="video/mp4">
                            </video>
                                   
                                </div>
                                

                            </div>
                        
                    </div>

                    <div class="">
                            <div class="product-card">
                             <div class="product-thumb">
                                   
                             <video  style="height:330px !important;" autoplay>
                                <source src="{{asset('assets/videos/banner2.mp4')}}" type="video/mp4">
                            </video>
                                   
                                </div>
                                

                            </div>
                        
                    </div>

                </div>

                </div>
            </div>
        </div>
    @endif


    

    <div class="site-footer mt-50 mb-30" style="border-top: 1px solid #e5e5e5; ">
    <div class="px-4">
      <div class="row"> 
        <div class="col-lg-6 col-md-6  col-sm-6">
          <!-- Contact Info-->
          <div class="widget widget-links widget-light-skin">
            <ul class="ul-footer">
              <li class="footer-two" style="font-size: 72px; color: #a5a5a5;">FAQ</li>
            </ul>
          </div>
        </div>

        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      HOW LONG WILL IT TAKE FOR MY ORDER TO SHIP
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      DO YOU SHIP INTERNATIONAL ?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      WHY IS MY PAYMENT NOT PROCESSING ?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>

        <!-- <div class="col-lg-6 col-md-6 col-sm-6  footer-logo">
                <img src="assets/images/logofooter.png" alt="loading">
          </div> -->
      </div>
      <!-- <div class="col-lg-8 col-md-8 col-sm-12 mx-auto" style="padding-bottom: 5rem;">

          <div class="card-footer-two">
            <p class="para-footer">BE THE FIRST TO KNOW ABOUT NEW RELEASES,DISCOUNTS AND RESTORE</p>
            <div class="card-body-footer-two">
                <span class="footer-mail">EMAIL@NEWLETTER.COM</span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                      <ul class="footer-mail-list">
                        <li class="footer-list">REFUND POLICY</li>
                        <li class="footer-list">SHIPPING POLICY</li>
                      </ul>
                      </div>
                      <div class="col-md-6 col-sm-6">
                    <ul class="footer-mail-list">
                        <li class="footer-list list-end">TERMS OF SERVICES</li>
                        <li class="footer-list list-end">PREVICY POLICY</li>
                    </ul>
                </div>
                    </div>
                </div>

            </div>
            </div>

        </div>

    
      <p class="footer-copyright"> Eelon Tech © All rights Are reserved. Crafted By Eelon Tech</p>
    </div> -->
    </div>



    

    <!-- @if ($setting->is_popular_brand == 1)
        <section class="brand-section mt-30 mb-60">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3">{{ __('Popular Brands') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider owl-carousel">
                            @foreach ($brands as $brand)
                            <div class="slider-item">
                                <a class="text-center" href="{{ route('front.catalog') . '?brand=' . $brand->slug }}">
                                    <img class="d-block hi-50 lazy"
                                    data-src="{{ asset('assets/images/' . $brand->photo) }}"
                                        alt="{{ $brand->name }}" title="{{ $brand->name }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif -->

    <!-- @if ($setting->is_popular_brand == 1)
        <section class="brand-section mt-30 mb-60">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3">{{ __('Our Clients') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider owl-carousel">
                            @foreach ($brands as $brand)
                            <div class="slider-item">
                                <a class="text-center our-client-crl" href="{{ route('front.catalog') . '?brand=' . $brand->slug }}">
                                    <img class="d-block hi-50 lazy"
                                    data-src="{{ asset('assets/images/' . $brand->photo) }}"
                                        alt="{{ $brand->name }}" title="{{ $brand->name }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif -->


    <!-- <section class="brand-section mt-30">
    <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3">{{ __('Our EMI Partners') }}</h2>
                        </div>
                    </div>
                </div>

    <div class="row slider">
    <div class="slide-track">
        <div class="slide">
            <img src="{{asset('assets/images/c1.jpg')}}" alt="">
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/c3.jpg')}}" alt="">
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/c6.png')}}" alt="">
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/c4.jpg')}}" alt="">
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/c5.jpg')}}" alt="">
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/c7.jpg')}}" alt="">
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/HDB logo.png')}}" alt="">
        </div> -->
        <!-- <div class="slide">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="">
        </div>
        <div class="slide">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="">
        </div> -->
    </div>
</div>
</div>
 </section>

 <!-- @if ($setting->is_service == 1)
        <section class="service-section">
            <div class="px-3">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="{{ asset('assets/images/'.$service->photo) }}" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">{{ $service->title }}</h6>
                                    <p class="text-sm text-muted mb-0">{{ $service->details }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
 -->



