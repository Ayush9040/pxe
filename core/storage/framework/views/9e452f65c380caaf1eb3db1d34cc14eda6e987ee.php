
<?php
    $cart = Session::has('cart') ? Session::get('cart') : [];
    $total =0;
    $option_price = 0;
    $cartTotal = 0;
?>

<div class="card mt-4 mb-4">
      <div class="card-body">
        <div class="shopping-cart-footer">
            

            <!-- <div class="text-right text-lg column <?php echo e(Session::has('coupon') ? '' : 'd-none'); ?>"><span class="text-muted"><?php echo e(__('Discount')); ?> (<?php echo e(Session::has('coupon') ? Session::get('coupon')['code']['title'] : ''); ?>) : </span><span class="text-gray-dark"><?php echo e(PriceHelper::setCurrencyPrice(Session::has('coupon') ? Session::get('coupon')['discount'] : 0)); ?></span></div> -->

            <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#959595 !important"><?php echo e(__('Your cart has 3 times')); ?> </span>
            <!-- <span class="text-gray-dark"><?php echo e(PriceHelper::setCurrencyPrice($cartTotal - (Session::has('coupon') ? Session::get('coupon')['discount'] : 0))); ?></span> -->
          </div>

            <div class="column">
                <form class="coupon-form" method="post" id="coupon_form" action="<?php echo e(route('front.promo.submit')); ?>">
                <?php echo csrf_field(); ?>
                <input class="form-control form-control-sm" name="code" type="text" placeholder="<?php echo e(__('Coupon code')); ?>" style="background-color: #3F3F3F; border-radius: 0px;" required>
                <button class="btn btn-primary btn-sm uppercase" style="background-color: #3F3F3F !important;     border-radius: 0px; color: #b9afa8;" type="submit">
                <span style="color: #b9afa8 !important;" class="uppercase"><?php echo e(__('Apply Coupon')); ?></span></button>
                </form>
            </div>


        </div>
        <!-- <div class="shopping-cart-footer">
            <div class="column"><a class="btn btn-primary " href="<?php echo e(route('front.catalog')); ?>"><span><i class="icon-arrow-left"></i> <?php echo e(__('Back to Shopping')); ?></span></a></div>
            <div class="column"><a class="btn btn-primary" href="<?php echo e(route('front.checkout.billing')); ?>"><span><?php echo e(__('Checkout')); ?></span></a></div>
        </div> -->
      </div>
  </div>

  <!-- <div class="">
    <div class="">
        <div class="table-responsive shopping-cart">
            <table class="table table-bordered"> -->

              <!-- <thead>
                <tr>
                  <th><?php echo e(__('Product Name')); ?></th>
                  <th><?php echo e(__('Product Price')); ?></th>
                  <th class="text-center"><?php echo e(__('Quantity')); ?></th>
                  <th class="text-center"><?php echo e(__('Subtotal')); ?></th>
                  <th class="text-center"><a class="btn btn-sm btn-primary" href="<?php echo e(route('front.cart.clear')); ?>"><span><?php echo e(__('Clear Cart')); ?></span></a></th>
                </tr>
              </thead> -->

              <!-- <tbody id="cart_view_load" data-target="<?php echo e(route('cart.get.load')); ?>">

                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php

                    $cartTotal +=  ($item['main_price'] + $total + $item['attribute_price']) * $item['qty'];
                ?>
                <div class="card mb-4 cart-card">
                  <div class="card-body d-flex align-items-center"> -->
                    <!-- <tr> -->
                    <!-- <td> -->
                    <!-- <div class="product-item">
                        <a class="product-thumb uppercase" href="<?php echo e(route('front.product',$item['slug'])); ?>"><img src="<?php echo e(asset('assets/images/'.$item['photo'])); ?>" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title uppercase"><a href="<?php echo e(route('front.product',$item['slug'])); ?>">
                            <?php echo e(strlen(strip_tags($item['name'])) > 45 ? substr(strip_tags($item['name']), 0, 45) . '...' : strip_tags($item['name'])); ?>


                        </a></h4> -->

                          <!-- <?php $__currentLoopData = $item['attribute']['option_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionkey => $option_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <span><em><?php echo e($item['attribute']['names'][$optionkey]); ?>:</em> <?php echo e($option_name); ?> (<?php echo e(PriceHelper::setCurrencyPrice($item['attribute']['option_price'][$optionkey])); ?>)</span>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                          <!-- <span><?php echo e(PriceHelper::setCurrencyPrice($item['main_price'] * $item['qty'])); ?></span>
                        </div>
                      </div>


                      <div class="card-right d-flex align-items-center">
                      <?php if($item['item_type'] != 'digital'): ?>
                        <div class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick uppercase" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="<?php echo e($item['qty']); ?>">
                        <span class="increaseQtycart cartaddclick uppercase" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
                      </div> 
                     <?php endif; ?>

                     <a class="remove-from-cart uppercase" href="<?php echo e(route('front.cart.destroy',$key)); ?>" data-toggle="tooltip" title="Remove item" style="margin:0 2rem">REMOVE</a>


                      </div> -->




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
                  <!-- </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table> -->

            <!-- <div class="column" style="background-color: #303030;">
              <a class="btn btn-primary d-flex justify-content-between rounded-none uppercase" style="border-radius: 0px; background-color: #3F3F3F !important;" href="<?php echo e(route('front.checkout.billing')); ?>">
                <span style="color: #b9afa8 !important;"></span>
                <span style="color: #b9afa8 !important; margin:0 1rem"><?php echo e(__('Checkout')); ?></span>
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
        <div class="text-right column text-lg"><span class="text-muted uppercase" style="color:#000 !important;margin-left: 4px; font-size: 22px;"><?php echo e(__('2 ITEMS IN YOUR CART')); ?> </span>
            <!-- <span class="text-gray-dark"><?php echo e(PriceHelper::setCurrencyPrice($cartTotal - (Session::has('coupon') ? Session::get('coupon')['discount'] : 0))); ?></span> -->
          </div>
        </div>
        <div class="cart-total-new">
        <?php echo e($cartTotal); ?>

        </div>
      
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body cart-body">
        
      <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php

                    $cartTotal +=  ($item['main_price'] + $total + $item['attribute_price']) * $item['qty'];
                ?>
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
                          <p class="cart-qty"> QUANTITY - <span class="qtySelector product-quantity">
                        <span class="decreaseQtycart cartsubclick uppercase" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-minus"></i></span>
                        <input type="text" disabled class="qtyValue cartcart-amount" value="<?php echo e($item['qty']); ?>">
                        <span class="increaseQtycart cartaddclick uppercase" data-id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::GetItemId($key)); ?>"><i class="fas fa-plus"></i></span>
                          <input type="hidden" value="3333" id="current_stock">
</span></p>
                          <p class="cart-qty"> COLOURS - OFF WHITE</p>

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


    <div class="column cart-place-order-new" style="background-color: #303030;">
              <a class="btn btn-primary d-flex justify-content-between rounded-none uppercase" style="border-radius: 0px;" href="<?php echo e(route('front.checkout.billing')); ?>">
                <span style="color: #b9afa8 !important;"></span>
                <p style=" margin:0 1rem"><?php echo e(__('CHECKOUT')); ?></p>
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
              <label for="checkout-fn"><?php echo e(__('NAME ON CARD')); ?></label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="<?php echo e(isset($user) ? $user->first_name : ''); ?>">
            </div>
          </div>

          <div class="col-lg-12 w-100 cart-grp">
            <div class="form-group">
              <label for="checkout-fn"><?php echo e(__('CARD DETAILS')); ?></label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="<?php echo e(isset($user) ? $user->first_name : ''); ?>">
            </div>
          </div>

          <div class="row">

          <div class="col-lg-6 cart-grp">
            <div class="form-group">
              <label for="checkout-fn"><?php echo e(__('EXPIRY DATE')); ?></label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="<?php echo e(isset($user) ? $user->first_name : ''); ?>">
            </div>
          </div>

          <div class="col-lg-6 cart-grp">
            <div class="form-group">
              <label for="checkout-fn"><?php echo e(__('CVV')); ?></label>
              <input class="form-control" name="bill_first_name" type="text" required id="checkout-fn" value="<?php echo e(isset($user) ? $user->first_name : ''); ?>">
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
              <a class="btn btn-primary d-flex justify-content-between rounded-none" style="border-radius: 0px; background-color: #3F3F3F !important;" href="<?php echo e(route('front.checkout.billing')); ?>">
                <span style="color: #b9afa8 !important;">$.1500</span>
                <span style="color: #b9afa8 !important;"><?php echo e(__('Checkout')); ?></span>
              </a>
            </div>


          </div>
    </div>
  </div>
</div> -->


  



<?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/includes/cart.blade.php ENDPATH**/ ?>