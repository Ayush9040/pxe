
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
    </div> -->
   
      
    <div class="px-2 ">
        <div class="">
            <div class="row">
                <div class="col-md-8 pt-5 px-5">
                    <div class="">
                        <div>
                            <h3 class="b2b_welcome">WELCOME TO PXE WHOLESALE TRADE.</h3>
                            <h3 class="b2b_welcome">PLEASE LOG IN TO YOUR ACCOUNT TO ACCESS B2B CATALOG AND PLACE AN ORDER</h3>
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
                                <div class="text-center ">
                                    <button class="btn btn-primary margin-bottom-none b2b-log-btn mb-4" type="submit" style="color: #06FF00 !important;font-size: 19px;"><span style="color: #06FF00 !important;"><?php echo e(__('submit')); ?></span></button>
                                </div>
                                <!--<div>-->
                                <!--    <h5 class="b2b-log-forgot">Forget Your Passoword ? Reset It <span style="color:#b9afa8">here</span></h5>-->
                                <!--</div>-->
                                </form>
                            </div>
                           
                            <div class="col-md-4"></div>
                        </div>
                   
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="img-cent content-padd">
                        <img src="<?php echo e(asset('assets/images/b2b.png')); ?>" alt="" style="display:none">
                    </div>
                </div> -->
            </div>
            <div class="row mt-30">
                <div class="col-md-9 ">
                    <div class="px-md-5 px-sm-3">
                        <!-- <h5 class="b2b-general">GENERAL WHOLESALE TERMS AND INFORMATION :</h5>
                        <p class="b2b-general-p pt-4">
                            ALL GOODS YOU SEE ONLINE ARE AVAILABLE IN LARGE QUANTITES AND READY TO SHIP ALL OVER INDIA !</p>

                        <p class="b2b-general-p">WHOLESALE CATALOG WILL INCLUDE EXCLUSIVE DESIGNS WHICH WILL NOT BE SOLD ON OUR ONLINE RETAIL STORE.</p>

                        <p class="b2b-general-p">ALL ORDERS ARE SHIPPED FROM OUR WAREHOUSE IN SOUTH INDIA, TAMILNADU.</p>

                        <p class="b2b-general-p">THE MINIMUM ORDER QUANTITY IS 30,000 INR ( EXCLUDING GST AND SHIPPING )</p>

                        <p class="b2b-general-p">BLOCK55 RELEASES NEW COLLECTIONS EVERY MONTH </p>

                        <p class="b2b-general-p">TO BECOME OUR OFFICIAL RESELLER OR STOCKIST OR DISTRIBUTOR YOU HAVE TO BE A REGISTERED BUSINESS HOLDING A GST NUMBER </p> 

                        <p class="b2b-general-p">PURCHASE HASSLE FREE WITH OUR WEBSITE, ALL YOU NEED IS TO CHOOSE THE MERCHANDISE YOU WISH TO PURCHASE AND ADD IT TO YOUR CART AND CLICK BUY.</p> -->

                        <p class="b2b-general-p">KINDLY APPLY FOR YOUR WHOLESALE ACCOUNT, BY REGISTERING YOUR COMPANY DETAILS<span style="color:#ff0000"> <a type="button" style="color:#ff0000" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">HERE </a></span>. WE WILL REVISE YOUR APPLICATION AND GET BACK TO YOU WITHIN 7 WORKING DAYS. <br/>
                        </p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- <div class="row">
                <div class="py-5 px-4">
                    <p class="b2b-attent uppercase">Attention: The Prices you see online at www.block55.in are retail Prices For Retail customers.The Wholesale trade page with wholesale catalog is only accesible via approved Login</p>
                </div>
            </div>  -->
        </div>
    </div>
    <!-- <div class="container-fluid phase-margin">
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
    </div> -->
    <!-- <div class="container-fluid phase-margin">
        <div class="side-margin pt-5 pb-2">
            <h1 class="metro-topic">METROPOLIS UNDERGROUND CULTURE</h1>
        </div>
    </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/front/b2b.blade.php ENDPATH**/ ?>