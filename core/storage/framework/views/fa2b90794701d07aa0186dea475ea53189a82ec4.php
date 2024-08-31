
<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
<meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Blog')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--          <div class="col-lg-12">-->
<!--            <ul class="breadcrumbs">-->
<!--                <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a> </li>-->
<!--                <li class="separator"></li>-->
<!--                <li><?php echo e(__('Blog')); ?></li>-->
<!--              </ul>-->
<!--          </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- Page Content-->
  <div class="blog_title my-3">
    <h2>BLOCK55 JOURNAL</h2>
    <!-- <a href="<?php echo e(route('front.bloog', ['month' => $currentMonth - 1, 'year' => $currentYear])); ?>">Previous Month</a>
    <a href="<?php echo e(route('front.bloog', ['month' => $currentMonth + 1, 'year' => $currentYear])); ?>">Next Month</a> -->
  </div>
  <div class="container-fluid d-flex des-view">
    <div class="col-lg-8 left_blog">
    <div class="row p-lg-4">
    <div class="col-lg-12">
      <div class="title_container">
        <p class="uppercase"><?php echo e($title1); ?></p>
        <p><?php echo e($date1); ?></p>
      </div>

      <div class="first_sec_container">
        <img src="<?php echo e(asset('assets/images/'.$photo1)); ?>" alt="">

        <p><?php echo e($details1); ?></p>
      </div>
      </div>
  </div>

    <div class="row bottom_blog">
        <div class="col-lg-12 d-flex">
        <div class="col-lg-6 bottom_first_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase"><?php echo e($title3); ?></p>
        <p><?php echo e($date3); ?></p>
      </div>

      <div class="first_sec_container">
      <img src="<?php echo e(asset('assets/images/'.$photo3)); ?>" alt="">

        <p><?php echo e($details3); ?></p>
      </div>
        </div>


        <div class="col-lg-6 bottom_second_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase"><?php echo e($title4); ?></p>
        <p><?php echo e($date4); ?></p>
      </div>

      <div class="first_sec_container">
      <img src="<?php echo e(asset('assets/images/'.$photo4)); ?>" alt="">

        <p><?php echo e($details4); ?></p>
      </div>
        </div>


        </div>
      </div>


    </div>

    <div class="right_blog">
      <div class="row">
        <div class="col-lg-12 p-4">
        <div class="title_container">
        <p class="uppercase"><?php echo e($title2); ?></p>
        <p><?php echo e($date2); ?></p>
      </div>

      <div class="first_sec_container">
        <img src="<?php echo e(asset('assets/images/'.$photo2)); ?>" alt="">

        <p><?php echo e($details2); ?></p>
      </div>
        </div>
      </div>

      <div class="row main_title">
        <div class="col-lg-12 p-4">
        <div class="title_container">
        <p class="uppercase"><?php echo e($title5); ?></p>
        <p><?php echo e($date5); ?></p>
      </div>

          <p class="main_title_desc"><?php echo e($details5); ?></p>
           <img src="<?php echo e(asset('assets/images/'.$photo5)); ?>" alt="">
        </div>
      </div>

      <div class="row bottom_blog">
        <div class="col-lg-12 d-flex">
        <div class="col-lg-6 bottom_first_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase"><?php echo e($title6); ?></p>
        <p><?php echo e($date6); ?></p>
      </div>

      <div class="first_sec_container">
      <img src="<?php echo e(asset('assets/images/'.$photo6)); ?>" alt="">

        <p><?php echo e($details6); ?>

        </p>
      </div>
        </div>


        <div class="col-lg-6 bottom_second_blog p-lg-4">
        <div class="title_container">
        <p class="uppercase"><?php echo e($title7); ?></p>
        <p><?php echo e($date7); ?></p>
      </div>

      <div class="first_sec_container">
      <img src="<?php echo e(asset('assets/images/'.$photo7)); ?>" alt="">

        <p><?php echo e($details7); ?></p>
      </div>
        </div>


        </div>


    </div>
   
 </div>
</div>
  <div class="container-fluid mobile-view" >
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase"><?php echo e($title1); ?></p>
          <p><?php echo e($date1); ?></p>
        </div>

        <div class="first_sec_container">
          <img src="<?php echo e(asset('assets/images/'.$photo1)); ?>" alt="">

          <p><?php echo e($details1); ?></p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p><?php echo e($title2); ?></p>
          <p><?php echo e($date2); ?></p>
        </div>

        <div class="first_sec_container">
          <img src="<?php echo e(asset('assets/images/'.$photo2)); ?>" alt="">

          <p><?php echo e($details2); ?></p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase"><?php echo e($title3); ?></p>
          <p><?php echo e($date3); ?></p>
        </div>

        <div class="first_sec_container">
          <img src="<?php echo e(asset('assets/images/'.$photo3)); ?>" alt="">

          <p><?php echo e($details3); ?></p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase"><?php echo e($title4); ?></p>
          <p><?php echo e($date4); ?></p>
        </div>

        <div class="first_sec_container">
          <img src="<?php echo e(asset('assets/images/'.$photo4)); ?>" alt="">

          <p><?php echo e($details4); ?></p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase"><?php echo e($title5); ?></p>
          <p><?php echo e($date5); ?></p>
        </div>

        <div class="first_sec_container">
          <img src="<?php echo e(asset('assets/images/'.$photo5)); ?>" alt="">

          <p><?php echo e($details5); ?></p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase"><?php echo e($title6); ?></p>
          <p><?php echo e($date6); ?></p>
        </div>

        <div class="first_sec_container">
          <img src="<?php echo e(asset('assets/images/'.$photo6)); ?>" alt="">

          <p><?php echo e($details6); ?></p>
        </div>
      </div>
    </div>
    <div class="row p-lg-4">
      <div class="col-lg-12">
        <div class="title_container">
          <p class="uppercase"><?php echo e($title7); ?></p>
          <p><?php echo e($date7); ?></p>
        </div>

        <div class="first_sec_container">
          <img src="<?php echo e(asset('assets/images/'.$photo7)); ?>" alt="">

          <p><?php echo e($details7); ?></p>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/front/bloog.blade.php ENDPATH**/ ?>