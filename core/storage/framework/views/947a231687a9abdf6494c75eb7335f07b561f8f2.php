<?php $__env->startSection('title'); ?>
    <?php echo e(__('Billing')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--      <div class="column">-->
<!--        <ul class="breadcrumbs">-->
<!--          <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a> </li>-->
<!--          <li class="separator"></li>-->
<!--          <li><?php echo e(__('Billing address')); ?></li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

  <!-- Page Content-->
  <div class="px-3 padding-bottom-3x mb-1 checkut-page my-3">
    <!-- <div class="row"> -->
      <!-- Billing Adress-->
      <!-- <div class="">
        <div class="steps flex-sm-nowrap mb-5"><a class="step active" href="<?php echo e(route('front.checkout.billing')); ?>">
          <h4 class="step-title uppercase">1. <?php echo e(__('Billing Address')); ?>:</h4>
          </a><a class="step" href="javascript:;">
          <h4 class="step-title uppercase">2. <?php echo e(__('Shipping Address')); ?>:</h4>
          </a><a class="step" href="<?php echo e(route('front.checkout.payment')); ?>">
          <h4 class="step-title uppercase">3. <?php echo e(__('Review and pay')); ?></h4>
          </a>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="uppercase"><?php echo e(__('Billing Address')); ?></h6>

          <form id="checkoutBilling" action="<?php echo e(route('front.checkout.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-fn" class="uppercase"><?php echo e(__('First Name')); ?></label>
              <input class="form-control uppercase" name="bill_first_name" type="text" required id="checkout-fn" value="<?php echo e(isset($user) ? $user->first_name : ''); ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln" class="uppercase"><?php echo e(__('Last Name')); ?></label>
              <input class="form-control uppercase" name="bill_last_name" type="text" required id="checkout-ln" value="<?php echo e(isset($user) ? $user->last_name : ''); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout_email_billing" class="uppercase"><?php echo e(__('E-mail Address')); ?></label>
              <input class="form-control uppercase" name="bill_email"  type="email" required id="checkout_email_billing" value="<?php echo e(isset($user) ? $user->email : ''); ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-phone" class="uppercase"><?php echo e(__('Phone Number')); ?></label>
              <input class="form-control uppercase" name="bill_phone" type="text" id="checkout-phone" required value="<?php echo e(isset($user) ? $user->phone : ''); ?>">
            </div>
          </div>
        </div>
        <?php if(PriceHelper::CheckDigital()): ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="checkout-company" class="uppercase"><?php echo e(__('Company')); ?></label>
              <input class="form-control uppercase" name="bill_company" type="text" id="checkout-company" value="<?php echo e(isset($user) ? $user->bill_company : ''); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address1" class="uppercase"><?php echo e(__('Address')); ?> 1</label>
              <input class="form-control uppercase" name="bill_address1" required type="text" id="checkout-address1" value="<?php echo e(isset($user) ? $user->bill_address1 : ''); ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address2" class="uppercase"><?php echo e(__('Address')); ?> 2</label>
              <input class="form-control uppercase" name="bill_address2" type="text" id="checkout-address2" value="<?php echo e(isset($user) ? $user->bill_address2 : ''); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-zip" class="uppercase"><?php echo e(__('Zip Code')); ?></label>
              <input class="form-control uppercase" name="bill_zip" type="text" id="checkout-zip" value="<?php echo e(isset($user) ? $user->bill_zip : ''); ?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-city" class="uppercase"><?php echo e(__('City')); ?></label>
              <input class="form-control uppercase" name="bill_city" type="text" required id="checkout-city" value="<?php echo e(isset($user) ? $user->bill_city : ''); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="checkout-country" class="uppercase"><?php echo e(__('Country')); ?></label>
              <select class="form-control uppercase" required name="bill_country" id="billing-country">
                <option class="uppercase" selected><?php echo e(__('Choose Country')); ?></option>
                <?php $__currentLoopData = DB::table('countries')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option class="uppercase" value="<?php echo e($country->name); ?>" <?php echo e(isset($user) && $user->bill_country == $country->name ? 'selected' :''); ?> ><?php echo e($country->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
            </div>
          </div>
        </div>
        <?php endif; ?> -->




        <!-- <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input uppercase" type="checkbox" id="same_address" name="same_ship_address" <?php echo e(Session::has('shipping_address') ? 'checked' : ''); ?> >
            <label class="custom-control-label uppercase" for="same_address"><?php echo e(__('Same as billing address')); ?></label>
          </div>
        </div>

        <?php if($setting->is_privacy_trams == 1): ?>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="trams__condition" >
            <label class="custom-control-label uppercase" for="trams__condition">This site is protected by reCAPTCHA and the <a href="<?php echo e($setting->policy_link); ?>" target="_blank">Privacy Policy</a> and <a href="<?php echo e($setting->terms_link); ?>" target="_blank">Terms of Service</a> apply.</label>
          </div>
        </div>
        <?php endif; ?> -->

        <!-- <div class="d-flex justify-content-between paddin-top-1x mt-4">
            <a class="btn btn-primary btn-sm uppercase" href="<?php echo e(route('front.cart')); ?>"><span class="hidden-xs-down"><i class="icon-arrow-left"></i><?php echo e(__('Back To Cart')); ?></span></a>
            <?php if($setting->is_privacy_trams == 1): ?>
            <button disabled id="continue__button" class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down uppercase"><?php echo e(__('Continue')); ?></span><i class="icon-arrow-right"></i></button>
            <?php else: ?>
            <button class="btn btn-primary btn-sm uppercase" type="submit"><span class="hidden-xs-down uppercase" ><?php echo e(__('Continue')); ?></span><i class="icon-arrow-right"></i></button>
            <?php endif; ?>
          </div> -->


          <div class="accordion accordion-flush acc-bill" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed button-billing-new first-bill-acc" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">ORDER SUMMARY</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;"><?php echo e(__('2 ITEMS IN YOUR CART')); ?> </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body cart-body">
      <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="card mb-4 cart-card">
                  <div class="card-body d-flex align-items-center">
                    <!-- <tr> -->
                    <!-- <td> -->
                    <div class="product-item cart-item-new">
                        <a class="product-thumb uppercase cart-item-prod" href="<?php echo e(route('front.product',$item['slug'])); ?>"><img src="<?php echo e(asset('assets/images/'.$item['photo'])); ?>" alt="Product"></a>
                        <div class="product-info cart-info-new">
                          <h4 class="product-title cart-product-title uppercase"><a href="<?php echo e(route('front.product',$item['slug'])); ?>">
                            <?php echo e(strlen(strip_tags($item['name'])) > 45 ? substr(strip_tags($item['name']), 0, 45) . '...' : strip_tags($item['name'])); ?>


                        </a></h4>

                          <!-- <?php $__currentLoopData = $item['attribute']['option_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionkey => $option_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <span><em><?php echo e($item['attribute']['names'][$optionkey]); ?>:</em> <?php echo e($option_name); ?> (<?php echo e(PriceHelper::setCurrencyPrice($item['attribute']['option_price'][$optionkey])); ?>)</span>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                          <!-- <span><?php echo e(PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])); ?></span> -->
                          <p class="cart-size"> SIZE - <?php echo e(PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])); ?></p>
                          <p class="cart-qty"> QUANTITY - <?php echo e($item['qty']); ?></p>
                          <p class="cart-qty"> COLOURS - <?php echo e($item['qty']); ?></p>

                          <p class="cart-new-total"><span><?php echo e(PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])); ?>/- ( INCLUDING DISCOUNTS )</span> </p>

                          
                      <div class="card-right d-flex align-items-center">
                      <?php if($item['item_type'] != 'digital'): ?>
                        <!-- <div class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick uppercase" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="<?php echo e($item['qty']); ?>">
                        <span class="increaseQtycart cartaddclick uppercase" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
                      </div>  -->
                     <?php endif; ?>

                     <!-- <a class="remove-from-cart uppercase" href="<?php echo e(route('front.cart.destroy',$key)); ?>" data-toggle="tooltip" title="Remove item" style="margin:0 2rem">REMOVE</a> -->


                      </div>


                        </div>
                      </div>




                    <!-- </td> -->
                    <!-- <td class="text-center text-lg">
                      <?php echo e(PriceHelper::setCurrencyPrice($item['main_price'])); ?>

                    </td>

                    <td class="text-center">
                     <?php if($item['item_type'] != 'digital'): ?>
                        <div class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="<?php echo e($item['qty']); ?>">
                        <span class="increaseQtycart cartaddclick" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
                      </div> 
                     <?php endif; ?>

                    </td>
                    <td class="text-center text-lg">
                      <?php echo e(PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])); ?>

                    </td>

                    <td class="text-center"><a class="remove-from-cart" href="<?php echo e(route('front.cart.destroy',$key)); ?>" data-toggle="tooltip" title="Remove item"><i class="icon-x"></i></a></td>
                  </tr> -->
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed button-billing-new" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">NAME</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;"><?php echo e(__('RECIVIERS DETAILS')); ?> </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
    <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-fn" class="uppercase"><?php echo e(__('First Name')); ?></label>
              <input class="form-control uppercase" name="bill_first_name" type="text" required id="checkout-fn" value="<?php echo e(isset($user) ? $user->first_name : ''); ?>">
            </div>
          </div>
          <!-- <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln" class="uppercase"><?php echo e(__('Last Name')); ?></label>
              <input class="form-control uppercase" name="bill_last_name" type="text" required id="checkout-ln" value="<?php echo e(isset($user) ? $user->last_name : ''); ?>">
            </div>
          </div> -->
        </div>
        <div class="row">
    <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln" class="uppercase"><?php echo e(__('Last Name')); ?></label>
              <input class="form-control uppercase" name="bill_last_name" type="text" required id="checkout-ln" value="<?php echo e(isset($user) ? $user->last_name : ''); ?>">
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
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;"><?php echo e(__('CREDIT CARD')); ?> </span>
           
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
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;"><?php echo e(__('PREFERRED ADDRESS - HOME#1')); ?> </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <?php if(PriceHelper::CheckDigital()): ?>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-company" class="uppercase"><?php echo e(__('Company')); ?></label>
              <input class="form-control uppercase" name="bill_company" type="text" id="checkout-company" value="<?php echo e(isset($user) ? $user->bill_company : ''); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address1" class="uppercase"><?php echo e(__('Address')); ?> 1</label>
              <input class="form-control uppercase" name="bill_address1" required type="text" id="checkout-address1" value="<?php echo e(isset($user) ? $user->bill_address1 : ''); ?>">
            </div>
          </div>
          <!-- <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address2" class="uppercase"><?php echo e(__('Address')); ?> 2</label>
              <input class="form-control uppercase" name="bill_address2" type="text" id="checkout-address2" value="<?php echo e(isset($user) ? $user->bill_address2 : ''); ?>">
            </div>
          </div> -->
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address2" class="uppercase"><?php echo e(__('Address')); ?> 2</label>
              <input class="form-control uppercase" name="bill_address2" type="text" id="checkout-address2" value="<?php echo e(isset($user) ? $user->bill_address2 : ''); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-zip" class="uppercase"><?php echo e(__('Zip Code')); ?></label>
              <input class="form-control uppercase" name="bill_zip" type="text" id="checkout-zip" value="<?php echo e(isset($user) ? $user->bill_zip : ''); ?>">
            </div>
          </div>
          <!-- <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-city" class="uppercase"><?php echo e(__('City')); ?></label>
              <input class="form-control uppercase" name="bill_city" type="text" required id="checkout-city" value="<?php echo e(isset($user) ? $user->bill_city : ''); ?>">
            </div>
          </div> -->
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-city" class="uppercase"><?php echo e(__('City')); ?></label>
              <input class="form-control uppercase" name="bill_city" type="text" required id="checkout-city" value="<?php echo e(isset($user) ? $user->bill_city : ''); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-country" class="uppercase"><?php echo e(__('Country')); ?></label>
              <select class="form-control uppercase" required name="bill_country" id="billing-country">
                <option class="uppercase" selected><?php echo e(__('Choose Country')); ?></option>
                <?php $__currentLoopData = DB::table('countries')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option class="uppercase" value="<?php echo e($country->name); ?>" <?php echo e(isset($user) && $user->bill_country == $country->name ? 'selected' :''); ?> ><?php echo e($country->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input uppercase" type="checkbox" id="same_address" name="same_ship_address" <?php echo e(Session::has('shipping_address') ? 'checked' : ''); ?> >
            <label class="custom-control-label uppercase" for="same_address"><?php echo e(__('Same as billing address')); ?></label>
          </div>
        </div>

        <?php if($setting->is_privacy_trams == 1): ?>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="trams__condition" >
            <label class="custom-control-label uppercase" for="trams__condition">This site is protected by reCAPTCHA and the <a href="<?php echo e($setting->policy_link); ?>" target="_blank">Privacy Policy</a> and <a href="<?php echo e($setting->terms_link); ?>" target="_blank">Terms of Service</a> apply.</label>
          </div>
        </div>
        <?php endif; ?>


    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed button-billing-new" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <div class="order-summary">
        <span style="color: #fff !important; margin-bottom: 5px;">PHONE NUMBER</span>
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#fff !important;margin-left: 0px; margin-top: 5px; font-size: 14px;"><?php echo e(__('PREFERRED CONTACT DETAILS - HOME#1')); ?> </span>
           
          </div>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse name-bill" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout_email_billing" class="uppercase"><?php echo e(__('E-mail Address')); ?></label>
              <input class="form-control uppercase" name="bill_email"  type="email" required id="checkout_email_billing" value="<?php echo e(isset($user) ? $user->email : ''); ?>">
            </div>
          </div>
          
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-phone" class="uppercase"><?php echo e(__('Phone Number')); ?></label>
              <input class="form-control uppercase" name="bill_phone" type="text" id="checkout-phone" required value="<?php echo e(isset($user) ? $user->phone : ''); ?>">
            </div>
          </div>
        </div>
  </div>
</div>

<div class="d-flex justify-content-between paddin-top-1x mt-4 px-3">
            <!-- <a class="btn btn-primary btn-sm uppercase" href="<?php echo e(route('front.cart')); ?>"><span class="hidden-xs-down"><i class="icon-arrow-left"></i><?php echo e(__('Back To Cart')); ?></span></a> -->
            <?php if($setting->is_privacy_trams == 1): ?>
            <button disabled id="continue__button" class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down uppercase" style="color: #000 !important; font-size: 22px;"><?php echo e(__('PROCEED TO NEXT STEP')); ?></span></button>
            <?php else: ?>
            <button class="btn btn-primary btn-sm uppercase" type="submit"><span class="hidden-xs-down uppercase" style="color: #000 !important; font-size: 22px;"><?php echo e(__('PROCEED TO NEXT STEP')); ?></span></button>
            <?php endif; ?>
          </div>

          
        </form>
            </div>
        </div>
      </div>
      <!-- Sidebar -->
       
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/front/checkout/billing.blade.php ENDPATH**/ ?>