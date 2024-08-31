
<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
<meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('B2b')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title-->
    <!--<div class="page-title">-->
    <!--    <div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-12">-->
    <!--            <ul class="breadcrumbs">-->
    <!--                <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a> </li>-->
    <!--                <li class="separator"></li>-->
    <!--                <li><?php echo e(__('B2b')); ?></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Page Content-->


    <!-- get ready slide -->

    <div class="slider-container">
      <!--<div class="text-slider">-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--  <div class="slide"><img src="<?php echo e(asset('assets/images/homebanner3.png')); ?>" alt=""></div>-->
      <!--</div>-->
      <div class="logos">
        <div class="logos-slide" >
        <img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">
        <img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">

        </div>
        <!--<div class="logos-slide">-->
        <!--<img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">-->
        <!--<img src="<?php echo e(asset('assets/images/marrkq1.png')); ?>" alt="">-->
       
        <!--</div>-->
    </div>
    </div>


    <!-- End of get slider -->

    <!-- banner slider -->


    <div class="slider-area-wrapper" style="margin-top:5px">
            <div class="px-3" >
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
                                    " style="background: url('<?php echo e(asset('assets/images/'. $slider->photo)); ?>')" >
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

        <!-- End banner slider -->


        <!-- login details of user -->

        <div class="login_b2b_dashboard"></div>

        <!-- End of login details -->

        <!-- login details of user -->

        <div class="b2b_inventory_list">
            <p><a href="">inventory with price list </a></p>
        </div>

        <!-- End of login details -->



        <!-- Exclusive bundle deals -->


        <div class="b2b_exclusive_deals">
            <p><a href="">exclusive bundle deals </a></p>
        </div>



        <!-- End of Exclusive bundle deals -->

        <!-- Shipping and logistics -->


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

        <div class="accordion b2b_accordian" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <span style="color: white;" class="b2b_shipping">shipping and logistics</span>
              <i class="bi bi-arrow-down-right arw"></i>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body uppercase">
                <a href="">Search</a>
                <a href="">Search</a>
                <a href="">Search</a>
                <a href="">Search</a>
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




        <!-- End of Shipping and logistics -->



        <!-- Customer Support -->


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

        <div class="accordion b2b_accordian" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <span style="color: white;" class="b2b_shipping">customer support</span>
              <i class="bi bi-arrow-down-right arw"></i>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body uppercase">
                <a href="">Search</a>
                <a href="">Search</a>
                <a href="">Search</a>
                <a href="">Search</a>
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




        <!-- End of Customer Support -->




         <!-- general terms and conditions -->


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

        <div class="accordion b2b_accordian" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <span style="color: white;" class="b2b_shipping">general terms and conditions</span>
              <i class="bi bi-arrow-down-right arw"></i>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body uppercase">
                <a href="">Search</a>
                <a href="">Search</a>
                <a href="">Search</a>
                <a href="">Search</a>
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




        <!-- End of general terms and conditions -->











    <!-- <div class="row m-0 my-3">
        <div class="col-md-6 col-4 ">
            <h2 class="b2b-new">NEW ORDER</h2>
        </div>
        <div class="col-md-6 col-8">
            <h2 class="b2b-metro">METROPOLIS UNDERGROUND CULTURE</h2>
        </div>
    </div>
    <div class="row m-0 b2b_title">
        <div class="col-md-6 col-4 ">
            <h2 class="vault-title-left">BLOCK55</h2>
        </div>
        <div class="col-md-6 col-8">
            <h2 class="" style="text-align:right">B2B TRADE INFORMATION</h2>
        </div>
    </div>
   
      
    <div class="container-fluid ">
        <div class="side-margin">
            <div class="row">
                <div class="col-md-8 pt-5 px-5">
                    <div class="content-padd">
                        <div>
                            <h4 class="b2b_welcome">WELCOME TO BLOCK55 WHOLESALE TRADE.</h4>
                            <h4 class="b2b_welcome">PLEASE LOG IN TO YOUR ACCOUNT TO ACCESS B2B CATALOG AND PLACE AN ORDER</h4>
                        </div>
                         <div class="col-md-12 pt-5">
                        
                            <div class="col-md-8">
                             <form action="<?php echo e(route('user.login.submit')); ?>" class="" method="post"><span class="input-group-btn">
                             <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="reg-email" class="text-u log-text-b2b"><?php echo e(__('E-mail')); ?></label>
                                    <input class="form-control w-100 border-0" type="email" name="email" placeholder="" id="reg-email" value="<?php echo e(old('email')); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="reg-pass" class="text-u log-text-b2b"><?php echo e(__('Password')); ?></label>
                                    <input class="form-control w-100" type="password" name="password" placeholder="" id="reg-pass">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary margin-bottom-none b2b-log-btn" type="submit"><span><?php echo e(__('submit')); ?></span></button>
                                </div> -->
                                <!--<div>-->
                                <!--    <h5 class="b2b-log-forgot">Forget Your Passoword ? Reset It <span style="color:#b9afa8">here</span></h5>-->
                                <!--</div>-->
                                <!-- </form>
                            </div> -->
                           
                            <!-- <div class="col-md-4"></div>
                        </div>
                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-cent content-padd">
                        <img src="<?php echo e(asset('assets/images/b2b.png')); ?>" alt="" style="display:none">
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-9 ">
                    <div class="px-md-5 px-sm-3">
                        <h5 class="b2b-general">GENERAL WHOLESALE TERMS AND INFORMATION :</h5>
                        <p class="b2b-general-p pt-4">
                            ALL GOODS YOU SEE ONLINE ARE AVAILABLE IN LARGE QUANTITES AND READY TO SHIP ALL OVER INDIA !</p>

                        <p class="b2b-general-p">WHOLESALE CATALOG WILL INCLUDE EXCLUSIVE DESIGNS WHICH WILL NOT BE SOLD ON OUR ONLINE RETAIL STORE.</p>

                        <p class="b2b-general-p">ALL ORDERS ARE SHIPPED FROM OUR WAREHOUSE IN SOUTH INDIA, TAMILNADU.</p>

                        <p class="b2b-general-p">THE MINIMUM ORDER QUANTITY IS 30,000 INR ( EXCLUDING GST AND SHIPPING )</p>

                        <p class="b2b-general-p">BLOCK55 RELEASES NEW COLLECTIONS EVERY MONTH </p>

                        <p class="b2b-general-p">TO BECOME OUR OFFICIAL RESELLER OR STOCKIST OR DISTRIBUTOR YOU HAVE TO BE A REGISTERED BUSINESS HOLDING A GST NUMBER </p> 

                        <p class="b2b-general-p">PURCHASE HASSLE FREE WITH OUR WEBSITE, ALL YOU NEED IS TO CHOOSE THE MERCHANDISE YOU WISH TO PURCHASE AND ADD IT TO YOUR CART AND CLICK BUY.</p>

                        <p class="b2b-general-p">KINDLY APPLY FOR YOUR WHOLESALE ACCOUNT, BY REGISTERING YOUR COMPANY DETAILS<span style="color:#ff0000"> <a type="button" style="color:#ff0000" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">HERE </a></span>. WE WILL REVISE YOUR APPLICATION AND GET BACK TO YOU WITHIN 7 WORKING DAYS. <br/>
                        </p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="py-5 px-4">
                    <p class="b2b-attent uppercase">Attention: The Prices you see online at www.block55.in are retail Prices For Retail customers.The Wholesale trade page with wholesale catalog is only accesible via approved Login</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid phase-margin">
        <div class="side-margin">
            <div class="row">
                <div class="col-md-6 col-6">
                    <h2 class="topic-left">BLOCK55</h2>
                </div>
                <div class="col-md-6 col-6">
                    <h2 class="topic-right">NEW ORDER</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid phase-margin">
        <div class="side-margin pt-5 pb-2">
            <h1 class="metro-topic">METROPOLIS UNDERGROUND CULTURE</h1>
        </div>
    </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/front/b2b_login.blade.php ENDPATH**/ ?>