<?php $__env->startSection('meta'); ?>
    <meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
    <meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php
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
    ?>


    <?php if($setting->is_slider == 1): ?>
        <!-- <div id="cursor">
            <p style="margin-bottom: 0px;">SHOP NOW!!</p>
        </div> -->
        <div class="slider-area-wrapper" style="margin-top:0px">
            <div class="slider-area_container" >
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Main Slider-->
                        <div class="hero-slider">
                            <div class="hero-slider-main owl-carousel dots-inside " >
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item margin-setts
                                    <?php if(DB::table('languages')->where('is_default',1)->first()->rtl == 1): ?>
                                    d-flex justify-content-end
                                    <?php endif; ?>
                                    " style="background: url('<?php echo e(asset('assets/images/'. $slider->photo)); ?>'); width: 100%" >
                                        <div class="item-inner">
                                    
                                            <div class="from-bottom">
                                                
                                            </div>
                                             
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    <?php endif; ?>

  
  
<div class="slider-container">
      <!--<div class="text-slider">-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--</div>-->
      <div class="logos">
        <div class="logos-slide" >
        <img src="<?php echo e(asset('assets/images/get_ready.png')); ?>" alt="">
        <img src="<?php echo e(asset('assets/images/get_ready.png')); ?>" alt="">
        <img src="<?php echo e(asset('assets/images/get_ready.png')); ?>" alt="">

        </div>
        <!--<div class="logos-slide">-->
        <!--<img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">-->
        <!--<img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">-->
       
        <!--</div>-->
    </div>
    </div>


    <!-- <?php if($setting->campaign_status == 1): ?>
        <div class="deal-of-day-section mt-40">
            <div class="cat_slider">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3" style="color:red;padding:0px;padding-left:5px">Category </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-3">

                    <div class="col-lg-12">
                    <div class="popular-category-slider owl-carousel campaign_items-slider">
                        <?php $__currentLoopData = $allCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="slider-item">
                            <div class="product-card">
                             <div class="product-thumb image-height" >
                                <a href="<?php echo e(route('front.catalog').'?category='.$cat->slug); ?>">  
                                    <img class="lazy image-height-img" data-src="<?php echo e(asset('assets/images/'.$cat->photo)); ?>" alt="Product">
                                </a> 
                                </div>
                                

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>

                </div>
            </div>
        </div>
    <?php endif; ?> -->




    <!-- Trailer Section -->

    <div class=" trailer_sec">
    

    <!-- blog section -->

    <div class="blog_sec">
        <p class="blog_title">BLOG</p>
    <h1><?php echo e($title1); ?></h1>
    <p class="home_blog-desc"><?php echo e($details1); ?></p>
    <footer><?php echo e($date1); ?></footer>

    </div>


    <!-- blog section ends -->


    <!-- product info second sec -->

    <?php if($setting->is_popular_category == 1): ?>
        <section class="newproduct-section popular-category-sec">
            <div class="mid_product">
                
                <div class="popular_category_view d-none">
                    <img  src="<?php echo e(asset('assets/images/ajax_loader.gif')); ?>" alt="">
                </div>

                <div class="info_bar-Product d-flex">
                <ul class="attribute_options">
                <?php $__currentLoopData = $getting_attr_options_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                   
                        
                            <li class="sizes_sty"><?php echo e($attribute['name']); ?></li>
                        
                    
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <p id="main_price" class="main-price" style="text-align: center; color: #b9afa8; font-size: 20px; text-align: center; color: #b9afa8; font-size: 12px; margin-top: 5px;
                color: white; margin-bottom: 5px;"><?php echo e(PriceHelper::grandCurrencyPrice($item)); ?></p>
                <button class="btn btn-primary m-0 " id="but_to_cart" style="margin-top: 10px !important; padding: 12px; height: 50px; background-color: #535353 !important; color: #06FF00 !important; width: 50%; display: flex; align-items: center; justify-content: center;"><i class="icon-bag"></i><span style="color: #06FF00 !important;"><?php echo e(__('Buy Now')); ?></span></button>
                </div>



                <div class="">
      <!-- Poduct Gallery-->
      <div class="">
        <div class="product-gallery">
          

          <div class="product-thumbnails insize">
            <!-- <div class="product-details-slider owl-carousel" > -->
            <div class="item"><img src="<?php echo e(asset('assets/images/'.$item->photo)); ?>" alt="zoom"  />
            <!-- <h4 class="mb-2 p-title-main text-u" style="text-align: left; color: #b9afa8;"><?php echo e($item->name); ?></h4> -->
            <!-- <p class="special_edt" style="text-align: left;">SPECIAL EDITION</p> -->
            <!-- <p id="main_price" class="main-price" style="text-align: left; color: #b9afa8; font-size: 20px;"><?php echo e(PriceHelper::grandCurrencyPrice($item)); ?></p> -->
        </div>
            
          
        <!-- </div> -->
      </div>
        </div>
      </div>

        
        <!-- Product Info-->
        <div class="col-xxl-7 col-lg-6 col-md-6 fixing-btns d-none">
            <div class="details-page-top-right-content d-flex">
                <div class="div w-100">
                    <input type="hidden" id="item_id" value="<?php echo e($item->id); ?>">
                    <input type="hidden" id="demo_price" value="<?php echo e(PriceHelper::setConvertPrice($item->discount_price)); ?>">
                    <input type="hidden" value="<?php echo e(PriceHelper::setCurrencySign()); ?>" id="set_currency">
                    <input type="hidden" value="<?php echo e(PriceHelper::setCurrencyValue()); ?>" id="set_currency_val">
                    <input type="hidden" value="<?php echo e($setting->currency_direction); ?>" id="currency_direction">
                  

                    

                    <div class="prod-fix-text">
                      





<?php if($item->hypayarn): ?>

                      <!-- <div class="prod-img-container">
                        <img src="<?php echo e(asset('assets/images/Hypoyann.png')); ?>" alt="">
                        <img src="<?php echo e(asset('assets/images/ultimate print.png')); ?>" alt="">
                        <img src="<?php echo e(asset('assets/images/Premium Fit.png')); ?>" alt="">
                      
                        <img src="<?php echo e(asset('assets/images/Oversized.png')); ?>" alt="">
                      </div> -->
<?php endif; ?>
                    </div>

                    <div class="row align-items-end pb-4 fixing-btn">
                        <div class="col-sm-12 big_btn">
                            

      </div>
                             <div class="col-12 mb-3">
                          
                             <?php $__currentLoopData = $attrubutes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attrubutes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <?php if($attrubutes->options->count() != 0): ?>
                            <!-- <div class="col-sm-12">
                                <div class="form-group">
                                <label for="<?php echo e($attrubutes->name); ?>" class="color" style="font-size:25px"><?php echo e($attrubutes->name); ?></label>
                                <select class="form-control attribute_option color spe_edition size size-selec-option"  id="<?php echo e($attrubutes->name); ?>" >
                                    <?php $__currentLoopData = $attrubutes->options->where('stock','!=','0'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option->name); ?>" data-type="<?php echo e($attrubutes->id); ?>" data-href="<?php echo e($option->id); ?>" data-target="<?php echo e(PriceHelper::setConvertPrice($option->price)); ?>"><?php echo e($option->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                </div>
                            </div> -->
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                             </div> 
                            <div class="p-action-button">
                              <?php if($item->item_type != 'affiliate'): ?>
                                <?php if($item->is_stock()): ?>
                                <!-- <button class="btn btn-primary m-0 a-t-c-mr spe_edition" id="add_to_cart"><i class="icon-bag"></i><span class="fs-lg"><?php echo e(__('Add to Cart')); ?></span></button>
                                <button class="btn btn-primary m-0" id="but_to_cart"><i class="icon-bag"></i><span><?php echo e(__('Buy Now')); ?></span></button> -->
                                <?php else: ?>
                                    <button class="btn btn-primary m-0"><i class="icon-bag"></i><span><?php echo e(__('Out of stock')); ?></span></button>
                                <?php endif; ?>
                              <?php else: ?>
                              <a href="<?php echo e($item->affiliate_link); ?>" target="_blank" class="btn btn-primary m-0"><span><i class="icon-bag"></i><?php echo e(__('Buy Now')); ?></span></a>
                              <?php endif; ?>

                            </div>

                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
        </div>

        <!-- image section starts -->

    <div class="image_sec_trailer">
        <div class="one">
        <img src="<?php echo e(asset('assets/images/'.$trailerArray[0]['photo'])); ?>" alt="">
        
        </div>
       <div class="two">
       <!-- <img src="<?php echo e(asset('assets/images/'.$trailerArray[0]['photo'])); ?>" class="two" alt=""> -->
       </div>
        <div class="three">
        <!-- <img src="<?php echo e(asset('assets/images/'.$trailerArray[0]['photo'])); ?>" class="" alt=""> -->
        </div>
        <div class="four">
        <!-- <img src="<?php echo e(asset('assets/images/'.$trailerArray[0]['photo'])); ?>" class="" alt=""> -->
        </div>
    </div>


    <!-- image section ends -->
            </div>

            
        </section>
    <?php endif; ?>


    <!-- sec section ends -->


    


    </div>

    







    <!-- Trailer section ends -->


   

    





    <div class="slider-container static_banner">
      <!--<div class="text-slider">-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--</div>-->
      <div class="logos py-0">
        <div class="" >
        <img src="<?php echo e(asset('assets/images/catch_up.png')); ?>" style="width: 100%;" alt="">
        <!-- <img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt=""> -->

        </div>
        <!--<div class="logos-slide">-->
        <!--<img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">-->
        <!--<img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">-->
       
        <!--</div>-->
    </div>
    </div>

    <?php if($setting->campaign_status == 1): ?>
        <div class="deal-of-day-section">
            <div class="cat_slider">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3" style="color:red;padding:0px;padding-left:5px">Category </h2>
                        </div>
                    </div>
                </div> -->
                <div class="container__categories">

                <div class="product-card first_first_cat">
                             <div class="product-thumb image-height" >
                                <a href="<?php echo e(route('front.catalog').'?category='.$cat->slug); ?>">  
                                    
                                <img class="lazy image-height-img" data-src="<?php echo e(asset('assets/images/'.$premiumCategories[0]['photo'])); ?>" alt="Product">
                                </a> 
                                </div>
                                <div class="category_title">
                                <span><?php echo e($premiumCategories[0]['name']); ?></span>
                                    </div>

                            </div>



                            <div class="product-card first_sec_cat" style="">
                             <div class="product-thumb image-height" >
                                <a href="<?php echo e(route('front.catalog').'?category='.$cat->slug); ?>">  
                                <img class="lazy image-height-img" data-src="<?php echo e(asset('assets/images/'.$premiumCategories[1]['photo'])); ?>" alt="Product">
                                </a> 
                                </div>

                                <div class="category_title">
                                <span><?php echo e($premiumCategories[1]['name']); ?></span>
                                    </div>
                                

                            </div>



                            <div class="product-card first_third_cat">
                             <div class="product-thumb image-height" >
                                <a href="<?php echo e(route('front.catalog').'?category='.$cat->slug); ?>">  
                                <img class="lazy image-height-img" data-src="<?php echo e(asset('assets/images/'.$premiumCategories[2]['photo'])); ?>" alt="Product">
                                </a> 
                                </div>

                                <div class="category_title">
                                <span><?php echo e($premiumCategories[2]['name']); ?></span>
                                    </div>
                                

                            </div>

                </div>
            </div>
        </div>
    <?php endif; ?>

       
    <!-- 2nd row of category -->

        
    <?php if($setting->campaign_status == 1): ?>
        <div class="deal-of-day-section">
            <div class="cat_slider">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3" style="color:red;padding:0px;padding-left:5px">Category </h2>
                        </div>
                    </div>
                </div> -->
                <div class="container__categories container__categories_2">

                <div class="product-card sec_first_cat bot">
                             <div class="product-thumb image-height" >
                                <a href="<?php echo e(route('front.catalog').'?category='.$cat->slug); ?>">  
                                   
                                <img class="lazy image-height-img" data-src="<?php echo e(asset('assets/images/'.$premiumCategories[3]['photo'])); ?>" alt="Product">
                                </a> 
                                </div>
                                <div class="category_title">
                                <span><?php echo e($premiumCategories[3]['name']); ?></span>
                                    </div>

                            </div>



                            <div class="product-card sec_sec_cat bot" style="">
                             <div class="product-thumb image-height" >
                                <a href="<?php echo e(route('front.catalog').'?category='.$cat->slug); ?>">  
                                <img class="lazy image-height-img" data-src="<?php echo e(asset('assets/images/'.$premiumCategories[4]['photo'])); ?>" alt="Product">
                                </a> 
                                </div>

                                <div class="category_title">
                                <span><?php echo e($premiumCategories[4]['name']); ?></span>
                                    </div>
                                

                            </div>



                            <div class="product-card sec_third_cat bot">
                             <div class="product-thumb image-height" >
                                <a href="<?php echo e(route('front.catalog').'?category='.$cat->slug); ?>">  
                                <img class="lazy image-height-img" data-src="<?php echo e(asset('assets/images/'.$premiumCategories[5]['photo'])); ?>" alt="Product">
                                </a> 
                                </div>

                                <div class="category_title">
                                <span><?php echo e($premiumCategories[5]['name']); ?></span>
                                    </div>
                                

                            </div>

                </div>
            </div>
        </div>
    <?php endif; ?>
  

    
<!-- 
    <?php if($setting->campaign_status == 1): ?>
        <div class="deal-of-day-section mt-40 mb-20" >
            <div class="exclusive_container">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3" style="color:red;padding:0px">EXCLUSIVE DEALS</h2>
                        
                        </div>
                    </div>
                </div>
                
                <div class="row g-3">

                    <div class="col-lg-12">
                    <div class="popular-category-slider owl-carousel campaign_items-slider">
                    <?php $__currentLoopData = $exclusivedeal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exclusive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="" style="position: relative;">
                            <div class="product-card">
                             <div class="product-thumb ">
                             <img src="<?php echo e(asset('assets/images/'.$exclusive->image)); ?>" alt="Product" >
                                <div class="overlay">
                                <video  style="height:330px !important;" autoplay loop muted playsinline controlslist="nodownload" oncontextmenu="return false;">
                                    <source src="<?php echo e(asset('assets/videos/'.$exclusive->video)); ?>" type="video/mp4">
                                </video>
                                </div>
                                   
                                </div>
                                

                            </div>                        
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   

                </div>
            </div>
        </div>
    <?php endif; ?> -->


    

    <div class="" style=" ">
    <div class="">
      <div class="row help_sec"> 
        <!-- <div class="col-lg-6 col-md-6  col-sm-6">
          <div class="widget widget-links widget-light-skin">
            <ul class="ul-footer">
              <li class="footer-two" style="font-size: 72px; color: red;padding:0px">FAQ</li>
            </ul>
          </div>
        </div> -->

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <span style="color: white;">HELP</span>
              <i class="bi bi-arrow-down-right arw"></i>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body uppercase">
                <a href="">Search</a>
                <a href="">Returns</a>
                <a href="">Genral Information</a>
                <a href="">Store Policies</a>
              </div>
            </div>
          </div>
          <!-- <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span>DO YOU SHIP INTERNATIONAL ?</span>
              <i class="bi bi-arrow-down-right arw"></i>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body uppercase">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <span> WHY IS MY PAYMENT NOT PROCESSING ?</span>
              <i class="bi bi-arrow-down-right arw"></i>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body uppercase">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div> -->
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



    

    <!-- <?php if($setting->is_popular_brand == 1): ?>
        <section class="brand-section mt-30 mb-60">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e(__('Popular Brands')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider owl-carousel">
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item">
                                <a class="text-center" href="<?php echo e(route('front.catalog') . '?brand=' . $brand->slug); ?>">
                                    <img class="d-block hi-50 lazy"
                                    data-src="<?php echo e(asset('assets/images/' . $brand->photo)); ?>"
                                        alt="<?php echo e($brand->name); ?>" title="<?php echo e($brand->name); ?>">
                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?> -->

    <!-- <?php if($setting->is_popular_brand == 1): ?>
        <section class="brand-section mt-30 mb-60">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e(__('Our Clients')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider owl-carousel">
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item">
                                <a class="text-center our-client-crl" href="<?php echo e(route('front.catalog') . '?brand=' . $brand->slug); ?>">
                                    <img class="d-block hi-50 lazy"
                                    data-src="<?php echo e(asset('assets/images/' . $brand->photo)); ?>"
                                        alt="<?php echo e($brand->name); ?>" title="<?php echo e($brand->name); ?>">
                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?> -->


    <!-- <section class="brand-section mt-30">
    <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3"><?php echo e(__('Our EMI Partners')); ?></h2>
                        </div>
                    </div>
                </div>

    <div class="row slider">
    <div class="slide-track">
        <div class="slide">
            <img src="<?php echo e(asset('assets/images/c1.jpg')); ?>" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo e(asset('assets/images/c3.jpg')); ?>" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo e(asset('assets/images/c6.png')); ?>" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo e(asset('assets/images/c4.jpg')); ?>" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo e(asset('assets/images/c5.jpg')); ?>" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo e(asset('assets/images/c7.jpg')); ?>" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo e(asset('assets/images/HDB logo.png')); ?>" alt="">
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

 <!-- <?php if($setting->is_service == 1): ?>
        <section class="service-section">
            <div class="px-3">
                <div class="row">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="<?php echo e(asset('assets/images/'.$service->photo)); ?>" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2"><?php echo e($service->title); ?></h6>
                                    <p class="text-sm text-muted mb-0"><?php echo e($service->details); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
   




<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/front/themes/theme1.blade.php ENDPATH**/ ?>