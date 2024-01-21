<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php if(url()->current() == route('front.index')): ?>
<title>Eelon Tech</title>
<?php else: ?>
<title>Eelon Tech -<?php echo $__env->yieldContent('title'); ?></title>
<?php endif; ?>

<!-- image carousel -->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- image carousel -->

<!-- SEO Meta Tags-->
<?php echo $__env->yieldContent('meta'); ?>
<meta name="author" content="<?php echo e($setting->title); ?>">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/plugins.min.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php echo $__env->yieldContent('styleplugins'); ?>

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/styles.min.css')); ?>">

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>">
<!-- Color css -->
<link href="<?php echo e(asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color)); ?>" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

<!-- Modernizr-->
<script src="<?php echo e(asset('assets/front/js/modernizr.min.js')); ?>"></script>

<?php if(DB::table('languages')->where('is_default',1)->first()->rtl == 1): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl.css')); ?>">
<?php endif; ?>
<style>
    <?php echo e($setting->custom_css); ?>

</style>

<?php if($setting->is_google_adsense == '1'): ?>
    <?php echo $setting->google_adsense; ?>

<?php endif; ?>



<?php if($setting->is_google_analytics == '1'): ?>
    <?php echo $setting->google_analytics; ?>

<?php endif; ?>



<?php if($setting->is_facebook_pixel == '1'): ?>
    <?php echo $setting->facebook_pixel; ?>

<?php endif; ?>


<style>
    .slider {
        height: 250px;
        margin: auto;
        position:relative;
        width: 100%;
        display: grid;
        /* place-items: center; */
        overflow: hidden;
    }
    .slide-track {
        display: flex;
        width: calc(250px * 8);
        animation: scroll 15s linear infinite;
    }
    .slide {
        height: 150px;
        width: 184px;
        display: flex;
        align-items: center;
        padding: 5px;
    }

    .slide img {
        width: 100%;
        height: 100%;
        border-radius: 15px;
    }

    @keyframes  scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-250px * 5));
        }
    }

    /* .product-card {
        background-color: #e5e5e5;
        border: 1px solid #e5e5e5;
    } */

    .main-view h2{
    margin: 0;
    color: #b9afa8;
    text-transform: none;
}

    @media(max-width: 768px) {
        .slide-track {
        display: flex;
        width: calc(250px * 8);
        /* animation: scroll 15s linear infinite; */
    }
    }

    .site-branding {
        padding-left: 12px !important;
    }

    .site-header .navbar {
        background-color: black;
        border-bottom: 1px solid #e5e5e5;
    }

    .card-details {
        background-color: black;
        color: #e5e5e5;
        border-bottom: 1px solid #e5e5e5;
        border-radius: 0px;
    }

    .vertical {
    border-left: 1px solid #e5e5e5;
    height: 76px;
    position: absolute;
    left: 13%;
    background-color: red;
    margin-left: -3px;
    top: 0;
}

.vertical2 {
    border-left: 1px solid #e5e5e5;
    height: 76px;
    position: absolute;
    right: 16.7%;
    /* background-color: red; */
    margin-left: -3px;
    top: 0;
}


.vertical3 {
    border-left: 1px solid #e5e5e5;
    height: 76px;
    position: absolute;
    right: 20%;
    /* background-color: red; */
    margin-left: -3px;
    top: 0;
}

.vertical4 {
    border-left: 1px solid #e5e5e5;
    height: 47px;
    position: absolute;
    right: 11.5%;
    /* background-color: red; */
    margin-left: -3px;
}

.text-label {
    color: #b9afa8;
}

.vertical5 {
    border-left: 1px solid #e5e5e5;
    height: 46px;
    position: absolute;
    right: 5%;
    /* background-color: red; */
    bottom: 194px;
    margin-left: -3px;
}
    .strokeme {
  color: #2c2c2c;
  /* background-color: white; */
  /* text-shadow: -1px -1px 0 #e5e5e5, 1px -1px 0 #e5e5e5, -1px 1px 0 #e5e5e5, 1px 1px 0 #e5e5e5; */
  font-family: 'Anton', sans-serif;
  font-size: 64px;
  letter-spacing: 3px;
  text-align: center;
  font-weight: 900;

}

.accordion-button {
    color: #b9afa8 !important;
    font-size: 32px;
}

.accordion-item {
    background-color: black;
}

.site-header .site-menu>ul>li>a {
    font-weight: 800;
    color: #b9afa8 !important;
}

.navbar-stuck .topbar {
    background-color: black;
    /* border-bottom: 1px solid black; */
}

.topbar > div {
    overflow-x: hidden;
}

.upper {
    text-transform: uppercase;
}



.t-h-dropdown {
    margin-right: 0px;
}



@keyframes  scroller {
    0% {
        /* left: 0; */
        background-color: red;
    }
    50% {
        /* left: 50%; */
        background-color: green;
    }
    100% {
        left: 100%;
    }
}

.scrolling {
    animation: scroller 3s infinite;
}



}

.site-header .site-menu>ul>li>a {
    font-family: 'Anton', sans-serif;
    margin-right: 25px;
    font-size: large;
}

* {
    font-family: 'Anton', sans-serif;
    letter-spacing: 0.5px;
    /* text-transform: uppercase; */
    z-index: 0;
}

.product-card .product-category>a {
    font-family: 'CONSOLA';
    color: #a5a5a5;
}

.text-muted {
    font-family: 'CONSOLA';
    color: #a5a5a5 !important;
}

.blog-post .post-body>p {
    font-family: 'CONSOLA';
}

.text-medium  {
    color: #a5a5a5 !important;
}

.post-title {
    color: #a5a5a5;
}

.accordion-item:first-of-type .accordion-button {
    background-color: #2c2c2c;
}

.accordion-button:not(.collapsed) {
    background-color: #2c2c2c;
}

.accordion-item:last-of-type .accordion-button.collapsed  {
    background-color: #2c2c2c;
}

.accordion-button {
    background-color: #5c5c5c;
}

.post-meta>li {
    color: #a5a5a5;
}

.accordion-body {
    font-family: 'CONSOLA';
    color: gray;
}

.product-card {
    background-color: #2c2c2c;
    border: 1px solid #2c2c2c;
    color: #2c2c2c;
    border-radius: 0px;
}

.details-page-top-right-content .price-area .main-price {
    font-family: 'CONSOLA';
}

.main-view h2 {
    text-transform: uppercase;
}

.text-success {
    color: #dc1f26 !important;
}

.details-page-top-right-content .p-title-main {
    color: #b9afa8;
}

.product-card .product-title>a {
    color: #a5a5a5;
}

.product-gallery {
    background-color: #2c2c2c !important;
}

.details-page-top-right-content {
    background-color: #2c2c2c;
}

.post-thumb {
    background-color: #2c2c2c;
}

.blog-post .post-body {
    background-color: #2c2c2c;
}

.product-card .product-price {
    font-family: 'CONSOLA';
    /* letter-spacing:1px; */
}

#preloader {
    background-color: black;
}

.carousel{
  margin-top: 50px;
}
.carousel-inner{
  height: 100px;
}
.carousel-caption{
  color: #fff;
  top: 50%;
}

.slide{ 
    width: auto;
    height: auto;
    background-color: black;
    border-bottom: 1px solid #e5e5e5;
    padding-bottom: 35px;
}

.vault span{
    color: red;
}

.carousel {
    margin-top: 0px;
}

.share-icons {
    display: flex;
    flex-direction: column;
    border-left: 1px solid #e5e5e5;
    overflow-y: hidden;
}

.product-card .product-thumb {
    border-radius: 0px;
    height: 330px;
}

.product-card .product-thumb>img {
    height: 330px;
}

.carousel-caption {
    position: static;
}

.style-text-second {
    border-top: 1px solid #e5e5e5;
    margin-top: 50px;
}

.desktop-menu {
    display: flex;
    /* margin: 10px; */
    align-items: flex-end;
    /* margin-bottom: 10px; */
    border-top: 1px solid #e5e5e5;
}


/* .desktop-menu > div {
    padding-right: 15px;
    padding-left: 15px;
} */

.icons-grp {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom:12px;
}

.icons-grp > a {
    margin: 3px;
    color: #e5e5e5;
}

/* .desktop-menu > div > div {
    margin-bottom: 5px;
} */

.widget-title {
    text-transform: uppercase;
}

.breadcrumbs>li {
    /* display: inline-block;
    padding: 5px 0;
    color: #888;
    font-size: 13px;
    cursor: default;
    vertical-align: middle; */
    text-transform: uppercase;
}

.ver-whishlist {
    border-left: 1px solid #e5e5e5;
    border-right: 1px solid #e5e5e5;
}

@media(max-width: 1100px) {
    .share-icons {
        display:none;
    }
}

@media(max-width: 768px) {
    .vertical {
        display: none;
}

.vertical2 {
    display: none;
}


.vertical3 {
    display: none;
}

.vertical4 {
    display: none;
}

.vertical5 {
    display: none;
}



.strokeme {
  color: #2c2c2c !important;
  /* background-color: white; */
  /* text-shadow: -1px -1px 0 #e5e5e5, 1px -1px 0 #e5e5e5, -1px 1px 0 #e5e5e5, 1px 1px 0 #e5e5e5; */
  font-family: 'Anton', sans-serif;
  font-size: 20px;
  letter-spacing: 3px;
  text-align: center;
  font-weight: 900;
  
        

}


.slide {
    padding-bottom: 0px;
}

.section-title h2 {
    font-size: 14px;
}

.carousel-inner {
  direction: ltr;
}

.newproduct-section .section-title h2 {
    display: block;
    margin-bottom: 20px;
    text-align: left;
}

.details-page-top-right-content .p-title-main {
    font-size: 14px;
    line-height: 30px;
}

.carousel-inner {
  direction: ltr;
}
}

.color {
    color: #e5e5e5;
}

.section-title h2 {
    font-size: 16px;
}

.widget-order-summary .table td {
    /* padding: 6px 0;
    border: 0; */
    padding: 5px !important;
}

.newproduct-section .section-title h2 {
    display: block;
    margin-bottom: 20px;
    text-align: left;
}

.section-title h2::before {
    position: absolute;
    content: '';
    height: 2px;
    width: 100%;
    bottom: -2px;
    left: 0;
    background: #377dff;
    display: none;
}

.main-view .section-title {
    border-bottom: 0;
}

.details-page-top-right-content .p-title-main {
    font-size: 14px;
    line-height: 30px;
}

.text-label {
    color: #b9afa8;
    text-transform: uppercase;
}

.site-header .site-menu>ul>li>a {
    font-weight: 800;
    color: #b9afa8 !important;
    text-transform: uppercase;
}

@keyframes  leftToRight {
    from {
      transform: 0%;
    }
    to {
      transform: translateX(100%);
    }
  }

  /* .carousel-item {
    animation: leftToRight 1s ease-in-out;
  } */


  .site-header .site-branding {
    border-right: 1px solid #e5e5e5;
    margin-left: 10px;
  }

  .site-header .site-branding a{
    padding-right: 5px;
   }

   .register-area select {
    width: 66%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #e5e5e5;
    background: white;
   }




/* .owl-item {
    min-width: 320px !important;
} */

    Deals Of The Weekr .toolbar .toolbar-item>a>div i {
    color: black;
    }

    

</style>

</head>

<body class="
<?php if($setting->theme == 'theme1'): ?>
body_theme1
<?php elseif($setting->theme == 'theme2'): ?>
body_theme2
<?php elseif($setting->theme == 'theme3'): ?>
body_theme3
<?php elseif($setting->theme == 'theme4'): ?>
body_theme4
<?php endif; ?>
">

<?php if($setting->is_loader == 1): ?>
<div id="preloader">
    <img src="<?php echo e(asset('assets/images/'.$setting->loader)); ?>" alt="<?php echo e(__('Loading...')); ?>">
    <!-- <img src="<?php echo e(asset('assets/images/logofooter.png')); ?>" alt=""> -->
</div>
<?php endif; ?>



<!-- Header-->
<header class="site-header navbar-sticky">
    <!-- <div class="menu-top-area">
        <div class="px-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="t-m-s-a">
                        <a class="track-order-link" href="<?php echo e(route('front.order.track')); ?>"><i class="icon-map-pin"></i><?php echo e(__('Track Order')); ?></a>
                        <a class="track-order-link compare-mobile d-lg-none" href="<?php echo e(route('fornt.compare.index')); ?>"><?php echo e(__('Compare')); ?></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right-area">

                        <a class="track-order-link wishlist-mobile d-inline-block d-lg-none" href="<?php echo e(route('user.wishlist.index')); ?>"><i class="icon-heart"></i><?php echo e(__('Wishlist')); ?></a>
                         -->
                        <!-- <div class="t-h-dropdown ">
                            <a class="main-link" href="#"><?php echo e(__('Currency')); ?><i class="icon-chevron-down"></i></a>
                            <div class="t-h-dropdown-menu">
                                <?php $__currentLoopData = DB::table('currencies')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="<?php echo e(Session::get('currency') == $currency->id ? 'active' : ($currency->is_default == 1 && !Session::has('currency') ? 'active' : '')); ?>" href="<?php echo e(route('front.currency.setup',$currency->id)); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e($currency->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div> -->

                        <!-- <div class="login-register ">
                            <?php if(!Auth::user()): ?>
                            <a class="track-order-link mr-0" href="<?php echo e(route('user.login')); ?>">
                            <?php echo e(__('Login/Register')); ?>

                            </a>
                            <?php else: ?>
                            <div class="t-h-dropdown">
                                <div class="main-link">
                                    <i class="icon-user pr-2"></i> <span class="text-label"><?php echo e(Auth::user()->first_name); ?></span>
                                </div>
                                <div class="t-h-dropdown-menu">
                                    <a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Dashboard')); ?></a>
                                    <a href="<?php echo e(route('user.logout')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Logout')); ?></a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
  <!-- Topbar-->
    <div class="topbar">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <!-- Logo-->
                        <div class="site-branding"><a class="site-logo align-self-center" href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/images/logofooter.png')); ?>" alt=""></a>
                        <!-- <div class="vertical"></div> -->
                    </div>
                    
                        

                        <!-- Search / Categories-->
                        <!-- <div class="search-box-wrap d-none d-lg-block d-flex">
                        <div class="search-box-inner align-self-center">
                            <div class="search-box d-flex">
                                <select name="category" id="category_select" class="categoris" style="height:46px">
									<option value=""><?php echo e(__('All')); ?></option>
                                    <?php $__currentLoopData = DB::table('categories')->whereStatus(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
                                <form class="input-group" id="header_search_form" action="<?php echo e(route('front.catalog')); ?>" method="get">
                                    <input type="hidden" name="category" value="" id="search__category">
                                    <span class="input-group-btn">
                                    <button type="submit"><i class="icon-search"></i></button>
                                    </span>
                                    <input class="form-control" type="text" data-target="<?php echo e(route('front.search.suggest')); ?>" id="__product__search" name="search" placeholder="<?php echo e(__('Search by product name')); ?>">
                                    <div class="serch-result d-none">
                                       
                                    </div>
                                </form>
                            </div>
                        </div> -->
                            <!-- <span class="d-block d-lg-none close-m-serch"><i class="icon-x"></i></span>
                        </div> -->
                        <!-- Toolbar-->
                        <div class="toolbar d-flex">

                        <div class="toolbar-item close-m-serch visible-on-mobile"><a href="#">
                            <div>
                                <i class="icon-search"></i>
                            </div>
                            </a>
                        </div>
                        <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
                            <div><i class="icon-menu"></i><span class="text-label"><?php echo e(__('Menu')); ?></span></div>
                            </a>
                        </div>

                        
                            </a>
                        </div>
                       
                        <div class="share-icons">

                        <div class="icons-grp">
                        <a class="facebook  a2a_button_facebook" href="/#facebook" target="_blank" rel="nofollow noopener">
                                        <span style="padding: 1rem;"><i class="fab fa-facebook-f" style="padding-top: 10px;"></i></span>
                                    </a>
                                    <a class="facebook  a2a_button_facebook" href="/#facebook" target="_blank" rel="nofollow noopener">
                                        <span style="padding: 1rem;"><i class="fa-brands fa-x-twitter" style="padding-top: 10px;"></i></span>
                                    </a>
                                    <a class="facebook  a2a_button_facebook" href="/#facebook" target="_blank" rel="nofollow noopener">
                                        <span style="padding: 1rem;"><i class="fa-brands fa-instagram" style="padding-top: 10px;"></i></span>
                                    </a>
                                    <a class="facebook  a2a_button_facebook" href="/#facebook" target="_blank" rel="nofollow noopener">
                                        <span style="padding: 1rem;"><i class="fab fa-linkedin-in" style="padding-top: 10px;"></i></span>
                                    </a>
                                    
                        </div>
                        <div class="desktop-menu">
                       <div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('user.login')); ?>">
                        <!-- <div class="vertical2"></div> -->
                            <!-- <div><span class="compare-icon"><i class="icon-user"></i><br> -->
                            <!-- <span class="count-label compare_count" style="background-color:#d3020e !important"><?php echo e(Session::has('compare') ? count(Session::get('compare')) : '0'); ?></span></span> -->
                            <!-- <span class="text-label" style="font-size:13px;"><?php echo e(__('Sign In')); ?></span> -->
                            <?php if(!Auth::user()): ?>
                            <a class="track-order-link mr-0" href="<?php echo e(route('user.login')); ?>" style="margin: 5px";>
                            <!-- <i class="icon-user"></i> -->
                            <span class="text-label" style="font-size:13px; padding: 10px;"><?php echo e(__('Sign In')); ?></span> 
                            </a>
                            <?php else: ?>
                            <div class="t-h-dropdown" style="padding: 5px; border-right: 1px solid #e5e5e5;">
                                <div class="main-link">
                                    <!-- <i class="icon-user pr-2"></i>  -->
                                    <span class="text-label" style="padding: 5px;"><?php echo e(Auth::user()->first_name); ?></span>
                                </div>
                                <div class="t-h-dropdown-menu">
                                    <a href="<?php echo e(route('user.dashboard')); ?>">
                                        <!-- <i class="icon-chevron-right pr-2"></i> -->
                                        <?php echo e(__('Dashboard')); ?></a>
                                    <a href="<?php echo e(route('user.logout')); ?>">
                                        <!-- <i class="icon-chevron-right pr-2"></i> -->
                                        <?php echo e(__('Logout')); ?></a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                       <?php if(Auth::check()): ?>
                        <div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('user.wishlist.index')); ?>">
                        <!-- <div class="vertical3"></div> -->
                            <div class="" style="padding: 5px; border-right: 1px solid #e5e5e5;">
                                <span class="compare-icon">
                                    <!-- <i class="icon-heart"></i> -->
                            <!-- <span class="count-label wishlist_count"><?php echo e(Auth::user()->wishlists->count()); ?></span></span> -->
                            <span class="text-label" style="padding: 5px;"><?php echo e(__('Wishlist')); ?></span></div>
                            </a>
                        </div>
                        <?php else: ?>
                        <div class="toolbar-item hidden-on-mobile ver-whishlist"><a href="<?php echo e(route('user.wishlist.index')); ?>">
                        <!-- <div class="vertical4"></div> -->
                          <div class="mt-2" style="margin: 3px";>
                            <!-- <span class="compare-icon">
                            <i class="icon-heart"></i></span> -->
                            <span class="text-label" style="padding: 9px;"><?php echo e(__('Wishlist')); ?></span></div>
                          </a>
                      </div>
                        <?php endif; ?>
                        <div class="toolbar-item"><a href="<?php echo e(route('front.cart')); ?>">
                        <!-- <div class="vertical5"></div> -->
                            <div style="padding: 4px;">
                                <!-- <span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count"stlye="background-color:#d3020e !importamt"><?php echo e(Session::has('cart') ? count(Session::get('cart')) : '0'); ?> </span></span> -->
                            <span class="text-label" style="padding: 7px;"><?php echo e(__('Cart')); ?></span></div>
                            </a>
                            <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="<?php echo e(route('front.header.cart')); ?>">
                            <?php echo $__env->make('includes.header_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        </div>
                        </div>

                        <!-- Mobile Menu-->
                        <div class="mobile-menu">
                            <!-- Slideable (Mobile) Menu-->
                            <div class="mm-heading-area">
                                <h4><?php echo e(__('Navigation')); ?></h4>
                                <div class="toolbar-item visible-on-mobile mobile-menu-toggle mm-t-two">
                                    <a href="#">
                                        <div> <i class="icon-x"></i></div>
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation99">
                                  <span class="active" id="mmenu-tab" data-bs-toggle="tab" data-bs-target="#mmenu"  role="tab" aria-controls="mmenu" aria-selected="true"><?php echo e(__('Menu')); ?></span>
                                </li>
                                <li class="nav-item" role="presentation99">
                                  <span class="" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat"  role="tab" aria-controls="mcat" aria-selected="false"><?php echo e(__('Category')); ?></span>
                                </li>

                              </ul>
                              <div class="tab-content p-0" >
                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">
                                    <nav class="slideable-menu">
                                        <ul>
                                            <li class="<?php echo e(request()->routeIs('front.index') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.index')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Home')); ?></a></li>
                                            <?php if($setting->is_shop == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.catalog*')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.catalog')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Shop')); ?></a></li>
                                            <?php endif; ?>
                                            <?php if($setting->is_campaign == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.campaign')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.campaign')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Campaign')); ?></a></li>
                                            <?php endif; ?>
                                            <!-- <?php if($setting->is_brands == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.brand')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.brand')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Brand')); ?></a></li>
                                            <?php endif; ?> -->

                                            <?php if($setting->is_blog == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.blog*') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.blog')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Blog')); ?></a></li>
                                            <?php endif; ?>
                                            <!-- <li class="t-h-dropdown">
                                                <a class="" href="#"><i class="icon-chevron-right"></i><?php echo e(__('Pages')); ?> <i class="icon-chevron-down"></i></a>
                                                <div class="t-h-dropdown-menu">
                                                    <?php if($setting->is_faq == 1): ?>
                                                    <a class="<?php echo e(request()->routeIs('front.faq*') ? 'active' : ''); ?>" href="<?php echo e(route('front.faq')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Faq')); ?></a>
                                                    <?php endif; ?>
                                                    <?php $__currentLoopData = DB::table('pages')->wherePos(0)->orwhere('pos',2)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a class="<?php echo e(request()->url() == route('front.page',$page->slug) ? 'active' : ''); ?> " href="<?php echo e(route('front.page',$page->slug)); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e($page->title); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </li> -->

                                            <?php if($setting->is_contact == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Blog')); ?></a></li>
                                        <?php endif; ?>

                                        <?php if($setting->is_contact == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('FAQ')); ?></a></li>
                                        <?php endif; ?>

                                        <?php if($setting->is_contact == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Contact')); ?></a></li>
                                        <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">
                                    <nav class="slideable-menu">
                                        <?php echo $__env->make('includes.mobile-category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    </nav>
                                </div>
                              </div>
                        </div>
                    </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
        <p class="d-block w-100 strokeme">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p>
      </div>
    </div>
    <div class="carousel-item ">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5 class="">Second slide label</h5> -->
        <p class="d-block w-100 strokeme">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p>
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


    <!-- <div class="card card-details">
  <div class="card-body"> -->
    <!-- <p style="font-size:55px;color:#e5e5e5;text-align:center; font-weight:900" class="dis-offer">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p> -->

    <!-- <p class="dis-offer strokeme scrolling">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p>
  </div>
</div> -->


  <!-- Navbar-->
  <div class="navbar">
        <div class="px-4">
            <div class="row g-3 w-100">
                <!-- <div class="col-lg-3">
                    <?php echo $__env->make('includes.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div> -->
                <div class="col-lg-9 d-flex justify-content-between">
                    <div class="nav-inner">
                        <nav class="site-menu">
                            <ul>
                                <li class="<?php echo e(request()->routeIs('front.index') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                                <?php if($setting->is_shop == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.catalog*')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.catalog')); ?>"><?php echo e(__('Shop')); ?></a></li>
                                <?php endif; ?>
                                <!-- <?php if($setting->is_faq == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.blog*') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.form')); ?>"><?php echo e(__('Franchise')); ?></a></li>
                                <?php endif; ?> -->
                                <!-- <?php if($setting->is_campaign == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.campaign')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.campaign')); ?>"><?php echo e(__('Campaign')); ?></a></li>
                                <?php endif; ?> -->
                                <!-- <?php if($setting->is_brands == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.brand')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.brand')); ?>"><?php echo e(__('Brand')); ?></a></li>
                                <?php endif; ?> -->
                                <?php if($setting->is_blog == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.blog*') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.blog')); ?>"><?php echo e(__('Blog')); ?></a></li>
                                <?php endif; ?>

                                

                                <!-- <li class="t-h-dropdown">
                                    <a class="main-link" href="#"><?php echo e(__('Pages')); ?> <i class="icon-chevron-down"></i></a>
                                    <div class="t-h-dropdown-menu">
                                        <?php if($setting->is_faq == 1): ?>
                                        <a class="<?php echo e(request()->routeIs('front.faq*') ? 'active' : ''); ?>" href="<?php echo e(route('front.faq')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Faq')); ?></a>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = DB::table('pages')->wherePos(0)->orwhere('pos',2)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="<?php echo e(request()->url() == route('front.page',$page->slug) ? 'active' : ''); ?> " href="<?php echo e(route('front.page',$page->slug)); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e($page->title); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                                        <!-- <?php if($setting->is_faq == 1): ?>
                                        <a class="<?php echo e(request()->routeIs('front.form*') ? 'active' : ''); ?>" href="<?php echo e(route('front.form')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Franchise Form')); ?></a>
                                        <?php endif; ?> -->
                                    <!-- </div>
                                </li> -->

                              <?php if($setting->is_contact == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><?php echo e(__('Contact')); ?></a></li>
                              <?php endif; ?>
                            </ul>
                        </nav>

                    </div>


                

                    
                    <?php
                        $free_shipping = DB::table('shipping_services')->whereStatus(1)->whereIsCondition(1)->first()
                    ?>

                </div>

            </div>
        </div>
        <div class="px-4 vault">
                    <a href="#"><span>VAULT</span></a>
                </div>
    </div>

</header>
<!-- Page Content-->
    <div class="main-view">
<?php echo $__env->yieldContent('content'); ?>

<!--    announcement banner section start   -->
<a class="announcement-banner" href="#announcement-modal"></a>
<div id="announcement-modal" class="mfp-hide white-popup">
    <?php if($setting->announcement_type == 'newletter'): ?>
        <div class="announcement-with-content">
            <div class="left-area">
                <img src="<?php echo e(asset('assets/images/'.$setting->announcement)); ?>" alt="">
            </div>
            <div class="right-area">
                <h3 class=""><?php echo e($setting->announcement_title); ?></h3>
                <p><?php echo e($setting->announcement_details); ?></p>
                <form class="subscriber-form" action="<?php echo e(route('front.subscriber.submit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input class="form-control" type="email" name="email" placeholder="<?php echo e(__('Your e-mail')); ?>">
                        <span class="input-group-addon"><i class="icon-mail"></i></span> </div>
                    <div aria-hidden="true">
                        <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                    </div>

                    <button class="btn btn-primary btn-block mt-2" style="backgrount-color:red !important"  type="submit">
                        <span><?php echo e(__('Subscribe')); ?></span>
                    </button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <a href="<?php echo e($setting->announcement_link); ?>">
            <img src="<?php echo e(asset('assets/images/'.$setting->announcement)); ?>" alt="">
        </a>
    <?php endif; ?>
</div>


<!-- image carousel -->

<!-- <div class="container mt-30 mb-60"> -->
  <!-- <div class="row">
    <div class="col-lg-12">
        <div class="section-title">
            <h2 class="h3">
                Our Clients
            </h2>
        </div>
    </div>
  </div> -->
   <!-- <section class="customer-logos slider row g-3">
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div> -->
   
<!-- </section> -->

    <!-- <div class="carousel">
        <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 1" class="carousel-img">
        <img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg" alt="Image 2" class="carousel-img">
        <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 3" class="carousel-img">
        <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 3" class="carousel-img">
        <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 3" class="carousel-img">
        <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 3" class="carousel-img">
        <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 3" class="carousel-img">
        <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 3" class="carousel-img">
    </div> -->

    <!-- <div class="carousel">
        <div class="slider">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 1" class="carousel-img">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 2" class="carousel-img">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 3" class="carousel-img">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 4" class="carousel-img">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 5" class="carousel-img">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 6" class="carousel-img">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 7" class="carousel-img">
            <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" alt="Image 8" class="carousel-img">
        </div>
    </div> -->

<!-- </div> -->





    


</div>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

<!-- image carousel -->


<!--    announcement banner section end   -->


<!-- footer two -->
<footer class="site-footer">
    <div class="px-4">
      <div class="row"> 
        <div class="col-lg-6 col-md-6  col-sm-6">
          <!-- Contact Info-->
          <div class="widget widget-links widget-light-skin">
            <ul class="ul-footer">
              <li class="footer-two" style="color: #a5a5a5;">SHOP</li>
              <li class="footer-two" style="color: #a5a5a5;">ABOUT</li>
              <li class="footer-two" style="color: #a5a5a5;">CONTACT</li>
              <li class="footer-two" style="color: #a5a5a5;">FAQ</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6  footer-logo">
                <img src="assets/images/logofooter.png" alt="loading">
          </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 mx-auto" style="padding-bottom: 5rem;">
          <!-- Customer Info-->
          <div class="card-footer-two">
            <p class="para-footer" style="color: #a5a5a5;">BE THE FIRST TO KNOW ABOUT NEW RELEASES,DISCOUNTS AND RESTORE</p>
            <div class="card-body-footer-two">
                <span class="footer-mail" style="color: #a5a5a5;">ADMIN@BLOCK55.COM</span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                      <ul class="footer-mail-list">
                        <li class="footer-list" style="color: #a5a5a5;">REFUND POLICY</li>
                        <li class="footer-list" style="color: #a5a5a5;">SHIPPING POLICY</li>
                      </ul>
                      </div>
                      <div class="col-md-6 col-sm-6">
                    <ul class="footer-mail-list">
                        <li class="footer-list list-end" style="color: #a5a5a5;">TERMS OF SERVICES</li>
                        <li class="footer-list list-end" style="color: #a5a5a5;">PRIVACY POLICY</li>
                    </ul>
                </div>
                    </div>
                </div>

            </div>
            </div>

        </div>

      <!-- Copyright-->
      <p class="footer-copyright" style="color: #a5a5a5;"> Block55 © All Rights Are Reserved. Crafted By Eelontech</p>
    </div>
</footer>

<!-- footer two -->


<!-- Site Footer-->


<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-chevron-up"></i>
</a>
<!-- Backdrop-->
<div class="site-backdrop"></div>

<!-- Cookie alert dialog  -->
<?php if($setting->is_cookie == 1): ?>
<?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<!-- Cookie alert dialog  -->


<?php
    $mainbs = [];
    $mainbs['is_announcement'] = $setting->is_announcement;
    $mainbs['announcement_delay'] = $setting->announcement_delay;
    $mainbs['overlay'] = $setting->overlay;
    $mainbs = json_encode($mainbs);
?>

<script>
    var mainbs = <?php echo $mainbs; ?>;
    var decimal_separator = '<?php echo $setting->decimal_separator; ?>';
    var thousand_separator = '<?php echo $setting->thousand_separator; ?>';

//     document.addEventListener("DOMContentLoaded", function() {
//     const images = document.querySelectorAll(".carousel-img");
//     let currentImageIndex = 0;

//     function showImage(index) {
//         images[currentImageIndex].style.opacity = 0;
//         images[index].style.opacity = 1;
//         currentImageIndex = index;
//     }

//     function nextImage() {
//         const nextIndex = (currentImageIndex + 1) % images.length;
//         showImage(nextIndex);
//     }


//     showImage(currentImageIndex);


//     setInterval(nextImage, 2000);
// });

// document.addEventListener("DOMContentLoaded", function() {
//     const slider = document.querySelector(".slider");
//     const images = document.querySelectorAll(".carousel-img");
//     let currentIndex = 0;

//     function updateSliderPosition() {
//         const position = -currentIndex * 400; // Adjust 400 to the width of a single image
//         slider.style.transform = `translateX(${position}px)`;
//     }

//     function nextImage() {
//         currentIndex = (currentIndex + 1) % (images.length / 4); // Assuming 4 images are displayed at once
//         updateSliderPosition();
//     }

//     // Change the image every 2 seconds
//     setInterval(nextImage, 2000);
// });


</script>

<script>
    let language = {
        Days : '<?php echo e(__('Days')); ?>',
        Hrs : '<?php echo e(__('Hrs')); ?>',
        Min : '<?php echo e(__('Min')); ?>',
        Sec : '<?php echo e(__('Sec')); ?>',
    }

</script>



<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/plugins.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/scripts.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.plugin.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/myscript.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>

<?php if($setting->is_facebook_messenger	== '1'): ?>
 <?php echo $setting->facebook_messenger; ?>

<?php endif; ?>



<script type="text/javascript">
    let mainurl = '<?php echo e(route('front.index')); ?>';

    let view_extra_index = 0;
      // Notifications
      function SuccessNotification(title){
            $.notify({
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-check-circle'
                },{
                element: 'body',
                position: null,
                type: "success",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }

        function DangerNotification(title){
            $.notify({
                // options
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-exclamation-triangle'
                },{
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }
        // Notifications Ends
        

//<!-- image carousel -->

        $(document).ready(function(){
        $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
//<!-- image carousel -->

    </script>

<script>

$(document).ready(function() {
        $('.view-details-btn').on('click', function() {
            var productId = $(this).data('product-id');
            // var detailsContainer = $('.product-details-container[data-product-id="'+productId+'"]');

            $.ajax({
            url: '/jkkmecom/product/' + productId,
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // console.log("Success:", response);
                // $('body').append(response.html);
                // var $html = $(response);
                // console.log($html); 
                // $('#htmlResponseContainer pre').html(response.html);
                $('#htmlResponseContainer pre').html(response.html);
                // Check if the expected data is present in the response
                // if (response.hasOwnProperty('name') && response.hasOwnProperty('description')) {
                    // Handle the response data here
                //     console.log('Product Name:', response.name);
                //     console.log('Product Description:', response.description);
                // } else {
                //     console.log('Unexpected response format:', response);
                // }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Error:", textStatus, errorThrown);
                console.log("Response:", jqXHR.responseText);
            }
        });
        });
    });

//     $('#myCarousel').on('click', '.carousel-control-next', function() {
//     $('#myCarousel').carousel('next');
//   });

  $('#myCarousel').on('slid.bs.carousel', function() {
    $('#myCarousel').carousel('cycle');
  });


</script>

    <?php if(Session::has('error')): ?>
    <script>
      $(document).ready(function(){
        DangerNotification('<?php echo e(Session::get('error')); ?>')
      })

    </script>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
    <script>
      $(document).ready(function(){
        SuccessNotification('<?php echo e(Session::get('success')); ?>');
      })

    </script>
    <?php endif; ?>

</body>
</html>
<?php /**PATH /home/raj/Desktop/dev/php/jkkmecom/core/resources/views/master/front.blade.php ENDPATH**/ ?>