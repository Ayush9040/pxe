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
  <div class="container padding-bottom-3x mb-1 checkut-page my-3">
    <div class="row">
      <!-- Billing Adress-->
      <div class="col-xl-9 col-lg-8">
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

        <div class="d-flex justify-content-between paddin-top-1x mt-4">
            <a class="btn btn-primary btn-sm uppercase" href="<?php echo e(route('front.cart')); ?>"><span class="hidden-xs-down"><i class="icon-arrow-left"></i><?php echo e(__('Back To Cart')); ?></span></a>
            <?php if($setting->is_privacy_trams == 1): ?>
            <button disabled id="continue__button" class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down uppercase"><?php echo e(__('Continue')); ?></span><i class="icon-arrow-right"></i></button>
            <?php else: ?>
            <button class="btn btn-primary btn-sm uppercase" type="submit"><span class="hidden-xs-down uppercase" ><?php echo e(__('Continue')); ?></span><i class="icon-arrow-right"></i></button>
            <?php endif; ?>
          </div>
        </form>
            </div>
        </div>
      </div>
      <!-- Sidebar          -->
      <?php echo $__env->make('includes.checkout_sitebar',$cart, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/front/checkout/billing.blade.php ENDPATH**/ ?>