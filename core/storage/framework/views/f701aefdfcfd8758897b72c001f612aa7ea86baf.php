<div class="col-xl-3 col-lg-4">
    <aside class="sidebar">
      <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->

      <!-- Items in Cart Widget-->
      <section class="card widget widget-featured-posts widget-featured-products p-4">
        <h3 class="widget-title"><?php echo e(__('Items In Your Cart')); ?></h3>
      
        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
        <div class="entry">
          <div class="entry-thumb"><a href="<?php echo e(route('front.product',$item['slug'])); ?>"><img src="<?php echo e(asset('assets/images/'.$item['photo'])); ?>" alt="Product"></a></div>
          <div class="entry-content">
            <h4 class="entry-title uppercase"><a href="<?php echo e(route('front.product',$item['slug'])); ?>">
                <?php echo e(strlen(strip_tags($item['name'])) > 45 ? substr(strip_tags($item['name']), 0, 45) . '...' : strip_tags($item['name'])); ?>


            </a></h4>
            <span class="entry-meta uppercase"><?php echo e($item['qty']); ?> x <?php echo e(PriceHelper::setCurrencyPrice($item['main_price'])); ?></span>
            <?php $__currentLoopData = $item['attribute']['option_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionkey => $option_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="entry-meta uppercase"><b><?php echo e($option_name); ?></b> 
            <!--: <?php echo e(PriceHelper::setCurrencySign()); ?><?php echo e($item['attribute']['option_price'][$optionkey]); ?>-->
            </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </section>


    </aside>
  </div>
<?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/includes/checkout_sitebar.blade.php ENDPATH**/ ?>