<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php if(url()->current() == route('front.index')): ?>
<title>Block55</title>
<?php else: ?>
<title>Block55 -<?php echo $__env->yieldContent('title'); ?></title>
<?php endif; ?>



<link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo.png')); ?>">


<?php echo $__env->yieldContent('meta'); ?>
<meta name="author" content="<?php echo e($setting->title); ?>">
<meta name="distribution" content="web">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">





<link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/plugins.min.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php echo $__env->yieldContent('styleplugins'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/styles.min.css')); ?>">

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>">
<!-- Color css -->
<link href="<?php echo e(asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color)); ?>" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
   
    .poppins-thin {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: normal;
}

    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-Black.ttf') format('ttf');
        font-style: normal;
        font-weight: 900;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-BlackItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 900;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-Bold.ttf') format('ttf');
        font-style: normal;
        font-weight: 700;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-BoldItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 700;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-ExtraBold.ttf') format('ttf');
        font-style: normal;
        font-weight: 800;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-ExtraBoldItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 800;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-ExtraLight.ttf') format('ttf');
        font-style: normal;
        font-weight: 200;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-ExtraLightItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 200;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-Italic.ttf') format('ttf');
        font-style: italic;
        font-weight: 400;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-Light.ttf') format('ttf');
        font-style: normal;
        font-weight: 300;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-LightItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 300;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-Medium.ttf') format('ttf');
        font-style: normal;
        font-weight: 500;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-MediumItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 400;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-Regular.ttf') format('ttf');
        font-style: normal;
        font-weight: 400;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-SemiBold.ttf') format('ttf');
        font-style: normal;
        font-weight: 600;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-SemiBoldItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 600;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-Thin.ttf') format('ttf');
        font-style: normal;
        font-weight: 100;
    }
    @font-face {
        font-family:'Poppins';
        src: url('/fonts/Poppins-ThinItalic.ttf') format('ttf');
        font-style: italic;
        font-weight: 100;
    }
   

    .slider {
        height: 250px;
        margin: auto;
        position:relative;
        width: 100%;
        display: grid;
        /* place-items: center; */
        overflow: hidden;
    }

    .text-u {
        text-transform: uppercase;
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
        padding-left: 5px !important;
        padding-right: 10px !important;
        padding-top: 23px !important;
    }

    .site-header .navbar {
        background-color: black;
        border-bottom: 2px solid #2c2c2c;
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
  font-family: "Poppins";
  font-size: 64px;
  letter-spacing: 3px;
  text-align: center;
  font-weight: 900;

}

.accordion-button {
    color: #959595 !important;
    font-size: 32px;
    font-weight: 800;
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





.site-header .site-menu>ul>li>a {
    font-family: 'Poppins';
    font-weight: 800 !important;
    margin-right: 25px;
    font-size: large;
}



.product-card .product-category>a {
    font-family: 'poppins';
    color: #a5a5a5;
}

.text-muted {
    /* font-family: AR; */
    color: #3f3f3f !important;
    font-size: 18px;
    padding-bottom: 20px;
    border-bottom: 3px dashed #2c2c2c;
}

.text-muted span {
    color: #b9afa8 !important;
    font-size: 16px;
}

.prod-text {
    color: #2c2c2c;
}

.prod-fix-text {
    border-bottom: 3px dashed #2c2c2c;
}

.blog-post .post-body>p {
    font-family: 'poppins';
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
    /* font-family: 'CONSOLA'; */
    color: #2c2c2c;
}

.product-card {
    background-color: #111111;
    border: 1px solid #2c2c2c;
    color: #2c2c2c;
    border-radius: 0px;
    padding:5px;
}

.details-page-top-right-content .price-area .main-price {
    font-family: 'Poppins';
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

.spe_edition {
    width: 100%;
    height: 70px !important;
    border-radius: 0;
    background: #3a3a3a !important;
}

.special_edt {
    color: #3f3f3f;
    font-size: 30px;
    font-weight: 400;
}

.fs-lg {
    font-size: 20px;
}

.size {
    background: #000 !important;
    border: 1px solid #b9afa8;
    text-align: left;
}

.product-gallery {
    background-color: #000 !important;
}

.details-page-top-right-content {
    background-color: #000;
}

.post-thumb {
    background-color: #2c2c2c;
}

.blog-post .post-body {
    background-color: #2c2c2c;
}

.fixing-btns {
    position: relative;
}

.fixing-btn {
    position: absolute;
    bottom: 0;
    width: 95%;
}

.product-card .product-price {
    font-family: 'Poppins';
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
    /* border-bottom: 2px solid #2c2c2c; */
    padding-bottom: 35px;
}

.vault span{
    color: red;
    font-weight: 800;
}

.carousel {
    margin-top: 0px;
}

.share-icons {
    display: flex;
    flex-direction: column;
    border-left: 2px solid #2c2c2c;
    overflow-y: hidden;
}

.product-card .product-thumb {
    border-radius: 0px;
    height: 280px;
    position: relative;
}

.product-card .product-thumb>img {
    height: 280px;
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
    border-top: 2px solid #2c2c2c;
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
    border-left: 2px solid #2c2c2c;
    border-right: 2px solid #2c2c2c;
}

.video-card {
    position: relative;
    width: 300px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s;
}

.thumbnail {
    width: 100%;
    height: auto;
}

.overlay {
    position: absolute;
    top: 50%;
    /* left: 50%; */
    bottom: 0;
    transform: translate(-50%, -50%);
    font-size: 3em;
    color: white;
    opacity: 0;
    transition: opacity 0.3s;
}

.video-card:hover {
    transform: scale(1.1);
}

.video-card:hover .overlay {
    opacity: 1;
}

.site-header .site-menu>ul>li>a:hover {
    color: #dc1f26 !important;
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
  font-family: 'Poppins';
  font-size: 13px;
  letter-spacing: 3px;
  text-align: center;
  font-weight: 900;
  
        

}


.slide {
    padding-bottom: 0px;
    height: 60px;
    display: flex;
    align-items: baseline;
}

.section-title h2 {
    font-size: 18px;
    font-weight: 700;
}

.carousel-inner {
  direction: ltr;
}

.newproduct-section .section-title h2 {
    display: block;
    margin-bottom: 20px;
    text-align: left;
    font-weight: 800;
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

.main-view {
    border-bottom: 2px solid #2c2c2c !important;
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

.blog_title {
    border-bottom: 2px solid #2c2c2c;
}

.blog_title h2 {
    text-align: left;
    padding-left: 24px;
    font-size: 60px;
    font-weight: 00 !important;
    letter-spacing: 0px !important;
    font-family: 'Poppins';
    font-weight: 500 !important;
    color: red;
}

/* Blog page css */

.title_container {
    display: flex;
    justify-content: space-between;
}

.main_title {
    display: flex;
    align-items: center;
    justify-content: center;
}

.main_title_desc {
    text-align: center;
}

.right_blog {
    border-right: 2px solid #2c2c2c;
    border-left: 2px solid #2c2c2c;
}

.left_blog {
    border-left: 2px solid #2c2c2c;
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
    border-right: 2px solid #2c2c2c;
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


   .btn.btn-primary {
    text-transform: uppercase;
   }

   /* .card {
            width: 200px;
            height: 300px;
            border: 1px solid #ccc;
            margin: 10px;
            position: relative;
        } */

        .thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .overlay a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        /* .product-thumb:hover {
            transform: scale(2);
        } */

        .product-thumb:hover .overlay {
            /* transform: scale(2); */
            opacity: 1;
        }

        video {
            width: 100%;
            height: 100%;
            /* object-fit: cover; */
            background: #000;
        }

        @media(max-width: 991px) {
            .site-header .site-branding {
                border-right: none;
            }

            .register_fixed  {
            color: yellow;
        }

        
        }

        @media(min-width: 769px) {
            .cat_slider {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .exclusive_container {
            padding-right: 1rem;
            padding-left: 1rem;
        }
        }

        @media(max-width: 768px) {
            .fixing-btn {
            position: static;
            width: 100%;
            padding-bottom: 0;
        }
        
        .big_btn {
            padding-left: 0;
            padding-right: 0;
        }

        .accordion-button {
            font-size: 15px;
            line-height: 1.5;
        }

        .deal-of-day-section .section-title {
            display: block;
            text-align: left;
        }

        .exclusive_container {
            padding-right: 0;
            padding-left: 0;
        }
        }

        .page-title {
    width: 100%;
    margin-bottom: 60px;
    padding: 3px 0;
    background-color: #000;
    border-top: 1px solid #e5e5e5;
    border-bottom: 1px solid #e5e5e5;
}

.breadcrumbs>li>a {
    transition: color .25s;
    color: #b9afa8;
    text-decoration: none;
}

    .icon_style {
        position: absolute;
        right: 5%;
        top: 40%;
    }

    .accordion-button::after {
        background-image: none !important;
    }

    .accordion-button {
        position: relative;
    }

    .arw {
        position: absolute;
        right: 20px;
        font-size: 20px;
    }

    .accordion-button span:hover {
        color: red;
    }

    @keyframes  move {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }

    .carousel-inner {
        /* padding: 0 0 20px 0; */
    }

    .carousel-item {
        
    
    }

    .logos {
        overflow: hidden;
        padding: 1px 0;
        background: #000;
        white-space: nowrap;
        border-bottom: 2px solid #2c2c2c;
    }

    .logos-slide {
        display: inline-block;
        animation: 20s move infinite linear;
    }

    .logos-slide span {
        margin: 0 50px;
        font-size: 65px;
    }

    .slider-container {
      overflow: hidden;
      margin-top: 5px;
      border-top: 2px solid #2c2c2c;
      border-bottom: 2px solid #2c2c2c;
    }

    .text-slider {
      display: flex;
      animation: slideAnimation 10s linear infinite; /* Adjust the duration as needed */
    }

    .slide {
      flex: 0 0 100%;
      padding: 20px 0;
      text-align: center;
      font-size: 65px;
      /* background-color: #f0f0f0; */
    }

    .logos-slide span {
        font-family: Poppins;
        font-weight: bold;
}

.site-header .site-menu>ul>li>a {
    /* font-family: Anton; */
}

/* .site-header .site-menu>ul>li>a {
    font-weight: 500;
    letter-spacing: normal;
    color: #b9afa8 !important;
    text-transform: uppercase;
} */

.footer-mail-list {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

  .about-sec {
    font-family: 'Poppins';
    font-size: 21px;
    font-weight: 400 !important;
    color:#3f3f3f;
  }

  .about-sec-title {
    font-family: 'Poppins';
    font-size: 64px;
    font-weight: 700 !important;
    color: #3F3F3F;
    text-align: left;
  }

  .about-red-title {
    text-align: left;
    font-size: 35px;
    color: #DC1F26 !important;
  }

  .cart-card {
    border-radius: 0px;
    background-color: #303030;
    color: #b9afa8;
  }

  .shopping-cart .product-item .product-title>a {
    transition: color .3s;
    color: #b9afa8;
    line-height: 1.5;
    /* text-decoration: none; */
}

.padding-bottom-3x {
    /* display: flex; */
    justify-content: space-between;
    align-items: flex-start;
}

#view_cart_load {
    /* width: 70%; */
}

.cart-main-right {
    width: 30%;
    margin-left: 25px;
    background-color: #303030;
}

.cart-main-right .card {
    border-radius: 0px;
    background-color: #303030;
    color: #b9afa8;
    
}

.cart-bottom-first {
    display: flex;
    justify-content: space-between;
}

.cart-card-sec {
    border-bottom: 1px dashed #b9afa8;
    margin-bottom: 15px;
}

.cart-main-right .card .card-body p {
    border-radius: 0px;
    background-color: #303030;
    color: #b9afa8;
}

.cart-grp .form-control {
    width: 100%;
    border-radius: 0px;
    background-color: #3F3F3F;
}

.cart-section {
    /* display: flex; */
}

#view_cart_load .card {
    border-radius: 0px;
    background-color: #303030; 
}

.remove-from-cart {
    color: #b9afa8 !important;
}

.product-quantity span {
    background-color: #303030; 
    border: 0px;
}

.shop-top-filter-wrapper {
    background-color: #303030; 
}

.quickFilter .quickFilter-title { 
    background-color: #484848;
    color: #b9afa8 !important;
}

.shop-sorting label {
    color: #b9afa8 !important;
}

.shop-sorting .form-control {
    background-color: #484848;
    color: #b9afa8 !important;
}

.shop-sorting span {
    color: #b9afa8 !important;
}

.widget.widget-categories {
    background-color: #303030;
}

.widget-categories .widget-title {
    color: #b9afa8 !important;
}

.widget-categories ul>li>a {
    color: #b9afa8 !important;
}

.widget-categories ul>li>a:hover {
    color: red !important;
} 

.price-range-slider .ui-range-values .ui-range-value-min {
    color: #b9afa8 !important;
}

.custom-control .custom-control-label {
    color: #b9afa8 !important;
}

.price-range-slider .ui-range-slider-footer>.column:last-child {
    color: #b9afa8 !important;
}

.p-title-main {
    color: #b9afa8 !important;
    font-size: 30px;
}

.details-page-top-right-content .p-title-main {
    color: #b9afa8 !important;
    font-size: 30px;
}

.price-area {
    margin-bottom: 8rem;
}

.details-page-top-right-content .p-title-main {
    line-height: 34px;
}

.prod-img-container {
    display: flex;
    margin-bottom: 20px;
}

.prod-img-container > img {
    margin-right: 7px;
}

.select-size {
    margin-top: 20px;
}

.shop-top-filter-wrapper {
    border-radius: 0px;
}

.card {
    background-color: #303030; 
    border-radius: 0px;
}

.ul-footer a li:hover {
    color: red !important;
}

.footer-mail-list a li:hover {
    color: red !important;
} 

.widget.widget-categories {
    border-radius: 0px !important;
}

.card-body h4 {
    color: #b9afa8;
}

.card-body h6 {
    color: #b9afa8;
}

.card h2 {
    color: #b9afa8;
}

.content-box-title {
    color: #b9afa8 !important;
}

.form-group label {
    color: #b9afa8;
}

.widget.widget-featured-posts .widget-title {
    color: #b9afa8;
}

.widget-featured-posts>.entry .entry-title>a, .widget-featured-products>.entry .entry-title>a  {
    color: #b9afa8;
}

.widget-featured-products>.entry .entry-meta {
    color: #b9afa8;
}

.form-control {
    background-color: #3F3F3F;
color: #b9afa8 !important;
    border-radius: 0px;
}

.steps .step {
    background-color: #3F3F3F;
    border-radius: 0px;
   
}

.steps .step h4 {
    color: #b9afa8;
}

.table tbody tr td {
    color: #b9afa8 !important;
    border: 2px solid #000 !important;
}

.list-unstyled li {
    color: #b9afa8 !important;
}

td {
    border: none !important;
}


.table tbody tr {
    border: none !important;
}

.slide {
    height: 135px;
}

.hero-slider {
    border-radius: 0px;
}

.btn.btn-primary {
    background-color: #3F3F3F !important;
    border-radius: 0px;  
    color: #b9afa8 !important;
}

.btn.btn-primary span {
    color: #b9afa8 !important;
}

.facebook-btn {
    background-color: #3F3F3F !important;
    color: #b9afa8 !important;
    border-radius: 0px;
}

.google-btn {
    background-color: #3F3F3F !important;
    color: #b9afa8 !important;
    border-radius: 0px;
}

#add_to_cart {
    background-color: red !important;
}

#size {
    background: black !important;
}

.footer-marq {
    overflow: hidden;
    padding: 10px 0;
    border-top: 2px solid #2c2c2c;
    margin-top: 20px;
}

.footer-marq .logos-slide {
    font-size: 55px;
    text-align: center;
    padding: 10px;
    padding-top: 0px;
    padding-bottom: 0px;
}



.footer-copyright {
    border-top: none;
}

.site-header .topbar {
    border-bottom: 2px solid #2c2c2c;
}

.site-footer {
    border-top: 2px solid #2c2c2c !important;
    /* border-bottom: 2px solid #2c2c2c !important; */
}

.user-info-wrapper {
    background-color: #3F3F3F ;
    color: #b9afa8 ;
    border-radius: 0px;
}

.user-data .h5 {
    color: #b9afa8 ;
}

.list-group .active {
    background-color: #3F3F3F ;
    color: #b9afa8 ;
    border-color: #3F3F3F;
    border-radius: 0px;
}

@media (min-width: 576px) {
    .modal-dialog {
    max-width: 1000px;
    margin: 1.75rem auto;
}

}
@media (max-width:500px){
    .slider-area-wrapper {
    margin-top: 0px;
}
.slider-container{
    margin-top: 10px;
}
}
.modal-container {
    display: flex;
}

.modal-header {
    background-color: black;
    border-radius: 0px;
    color: #b9afa8 ;
}

.modal-header h1 {
    color: #b9afa8;
}

.modal-content {
    background-color: black;
    border-radius: 0px;
    border-color: #2c2c2;
}

.card-body h4 {
    text-transform: uppercase;
}

.custom-control-label {
    text-transform: uppercase;
}

.navi-link {
    text-transform: uppercase;
}


a.list-group-item {
    background-color: #3F3F3F ;
    color: #b9afa8 ;
    border-radius: 0px;
    border-color: #3F3F3F;
}

    @keyframes  slideAnimation {
      0% {
        transform: translateX(-100%);
      }

      100% {
        transform: translateX(0%);
      }
    }
        

   /* .site-header .site-menu > ul > li.active > a:hover {
    color: black;
   } */

/* .owl-item {
    min-width: 320px !important;
} */

    Deals Of The Weekr .toolbar .toolbar-item>a>div i {
    color: black;
    }

.count_notf{
    padding:0px 6px;
    background: #fff;
    border-radius: 0px;
    color: #000;
}
.image-height{
    height:330px !important;
}
.image-height-img {
    height:330px !important;
}   
.size-selec-option{
    height:70px !important;
}
 .mobile-view{
        display:none;
    }
@media(max-width:500px){
  .image-height{
    height:180px !important;
}
.image-height-img {
    height:180px !important;
}    
.p-title-main {
    font-size: 20px;
}
.special_edt {
    font-size: 25px;
}
.details-page-top-right-content {
        margin-top: 5px;
    }
    .details-page-top-right-content {
    padding: 10px 10px 12px;
    }
    .size-selec-option{
    height:40px !important;
    }
    .spe_edition{
        height:50px !important;
    }
    .foot-sec1{
        text-align:center;
    }
    .footer-list{
        font-size:10px;
    }
    .footer-marq-img{
        padding-right:20px;
        padding-left:20px;
    }
    .logos-slide span{
        font-size:30px;
        margin: 0 10px;
    }
    .none{
       height: 70px;
        width: 100px;
        margin-right: 5px;
    }
    .none-skull{
        height: 70px;
        width: 100px;
        margin-right: 40px;
    }
    .none-skull2{
        height: 70px;
        width: 100px;
        margin-right: 10px;
    }
    .sptfl{
        display:flex !important;    
    }
    .product-card .product-thumb{
        height:175px;
    }
    .product-card .product-thumb>img{
        height:170px;
    }
    .contact-title{
        padding:10px;
    }
    .form-control{
        width:100%;
    }
    .img-cent{
        height:380px;
    }
    .blog_title h2{
        font-size:30px;
    }
    .des-view{
        display:none !important;
    }
    .mobile-view{
        display:block;
    }
    .quickFilter{
        padding-top:40px;
    }
}
.menu-box-even{
	padding:10px;
	background-color:#2c2c2c;
	margin-bottom:10px;
}
.menu-box-odd{
	padding:10px;
	background-color:#5c5c5c;
	margin-bottom:10px;
}
.menu-box-even a{
	color:#959595 !important;
	font-weight:800
}
.menu-box-odd a{
	color:#959595 !important;
	font-weight:800
}
.menu-box-even a i{
    float: right;
    padding-top: 8px;
}
.menu-box-odd a i{
    float: right;
    padding-top: 8px;
}
.menu-box-even-cat ul li{
	padding:10px;
	background-color:#2c2c2c;
	margin-bottom:10px;
}
.menu-box-even-cat ul li a{
	color:#959595 !important;
	font-weight:800
}
.uppercase{
    text-transform: uppercase !important;
}

.footer-mail:hover{
    color:#ff0000 !important;
}

.recommend{
    height:235px!important;
}
.recommend>img{
    height:230px!important;
}
@media (max-width:500px){
    .recommend{
    height:165px!important;
}
.recommend>img{
    height:160px!important;
}
}
.note-toolbar{
    display:none;
}
.quick_add_btn
{
    width:100%;
    padding:10px 0;
    font-weight:800 !important;
}
.margin-setts{
    margin-left:-1px;
}
.mt-40{
    margin-top:40px !important;
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
    
    <div class="topbar">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <!-- Logo-->
                        <div class="site-branding"><a class="site-logo align-self-center" href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/images/logofooter.png')); ?>" alt=""></a>
                        <!-- <div class="vertical"></div> -->
                    </div>
                    
                        

                        
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
                            <div class="t-h-dropdown" style="padding: 5px; border-right: 2px solid #2c2c2c;">
                                <div class="main-link">
                                    <!-- <i class="icon-user pr-2"></i>  -->
                                    <span class="text-label" style="padding: 5px;">MY ACCOUNT</span>
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
                            <div class="" style="padding: 5px; border-right: 2px solid #2c2c2c;">
                                <!--<span class="compare-icon">-->
                                    <!-- <i class="icon-heart"></i> -->
                             <!--</span> -->
                            <span class="text-label" style="padding: 5px;"><?php echo e(__('Wishlist')); ?></span>
                            <span class="count-label wishlist_count count_notf"><?php echo e(Auth::user()->wishlists->count()); ?></span>
                            </div>
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
                                 <!--<span class="cart-icon"><i class="icon-shopping-cart"></i> </span> -->
                                 
                            <span class="text-label" style="padding: 7px;"><?php echo e(__('Cart')); ?></span>
                            <span class="count-label cart_count count_notf" stlye="background-color:#d3020e !importamt"><?php echo e(Session::has('cart') ? count(Session::get('cart')) : '0'); ?> </span>
                            </div>
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
                                <!--<h4 style="font-weight:900"><?php echo e(__('Block55')); ?></h4>-->
                                <a class="site-logo align-self-center" href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/images/logofooter-black.png')); ?>" alt="" style="max-width:50%"></a>
                                <div class="toolbar-item visible-on-mobile mobile-menu-toggle mm-t-two">
                                    <a href="#">
                                        <div> <i class="icon-x"></i></div>
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation99">
                                  <span class="active uppercase" id="mmenu-tab" data-bs-toggle="tab" data-bs-target="#mmenu"  role="tab" aria-controls="mmenu" aria-selected="true"><?php echo e(__('Menu')); ?></span>
                                </li>
                                <li class="nav-item" role="presentation99">
                                  <span class="uppercase" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat"  role="tab" aria-controls="mcat" aria-selected="false"><?php echo e(__('Category')); ?></span>
                                </li>

                              </ul>
                              <div class="tab-content p-0" >
                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">
                                    <nav class="slideable-menu" style="background-color:#000">
                                        <ul>
                                            <li class="<?php echo e(request()->routeIs('front.index') ? 'active' : ''); ?> menu-box-odd uppercase" ><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?><i class="icon-chevron-right"></i></a></li>
                                            <?php if($setting->is_shop == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.catalog*')  ? 'active' : ''); ?> menu-box-even uppercase"><a href="<?php echo e(route('front.catalog')); ?>"><?php echo e(__('Shop')); ?><i class="icon-chevron-right"></i></a></li>
                                            <?php endif; ?>
                                            <!--<?php if($setting->is_campaign == 1): ?>-->
                                            <!--<li class="<?php echo e(request()->routeIs('front.campaign')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.campaign')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Campaign')); ?></a></li>-->
                                            <!--<?php endif; ?>-->
                                            <!-- <?php if($setting->is_brands == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.brand')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.brand')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Brand')); ?></a></li>
                                            <?php endif; ?> -->

                                            <?php if($setting->is_blog == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.blog*') ? 'active' : ''); ?>  menu-box-odd uppercase"><a href="<?php echo e(route('front.blog')); ?>"><?php echo e(__('Blog')); ?><i class="icon-chevron-right"></i></a></li>
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

                                        <!--    <?php if($setting->is_contact == 1): ?>-->
                                        <!--    <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Blog')); ?></a></li>-->
                                        <!--<?php endif; ?>-->

                                        <!--<?php if($setting->is_contact == 1): ?>-->
                                        <!--    <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('FAQ')); ?></a></li>-->
                                        <!--<?php endif; ?>-->

                                        <?php if($setting->is_contact == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?> menu-box-even uppercase"><a href="<?php echo e(route('front.contact')); ?>"><?php echo e(__('Contact')); ?><i class="icon-chevron-right"></i></a></li>
                                        <?php endif; ?>
                                        <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?> menu-box-odd uppercase"><a href="<?php echo e(route('front.vault')); ?>"><?php echo e(__('Vault')); ?><i class="icon-chevron-right"></i></a></li>
                                         <?php if(!Auth::user()): ?>
                                        <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?> menu-box-even uppercase"><a href="<?php echo e(route('user.login')); ?>"><?php echo e(__('Sign In')); ?><i class="icon-chevron-right"></i></a></li>
                                        <?php else: ?>
                                        <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?> menu-box-even uppercase"><a href="<?php echo e(route('user.dashboard')); ?>">MY ACCOUNT<i class="icon-chevron-right"></i></a></li>
                                        <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?> menu-box-odd uppercase"><a href="<?php echo e(route('user.logout')); ?>"><?php echo e(__('Logout')); ?><i class="icon-chevron-right"></i></a></li>
                                        <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">
                                    <nav class="slideable-menu menu-box-even-cat uppercase" style="background-color:#000">
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
    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> -->
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <!-- <div class="carousel-inner">
    <div class="carousel-item active"> -->
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <!-- <div class="carousel-caption d-block d-md-block"> -->
        <!-- <h5 class="d-block w-100">First slide label</h5> -->
        <!-- <p class="d-block w-100 strokeme">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p>
      </div>
    </div>
    <div class="carousel-item "> -->
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <!-- <div class="carousel-caption d-none d-md-block"> -->
        <!-- <h5 class="">Second slide label</h5> -->
        <!-- <p class="d-block w-100 strokeme">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p>
      </div>
    </div> -->
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="d-block w-100">Third slide label</h5>
        <p class="dis-offer d-block w-100 strokeme scrolling">WELCOME TO BLOCK55 SHOP LATEST RELEASES</p>
      </div>
    </div> -->
  <!-- </div> -->
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>

    <div class="logos" style="padding:0px 0px;">
        <div class="logos-slide" style="animation-direction: reverse;">
        <img src="<?php echo e(asset('assets/images/markq2.png')); ?>" alt=""  >
        <img src="<?php echo e(asset('assets/images/markq2.png')); ?>" alt="" >

        </div>
        <!-- <div class="logos-slide" style="animation-direction: reverse;">
        <img src="<?php echo e(asset('assets/images/markq2.png')); ?>" alt="" style="height:35px">
        <img src="<?php echo e(asset('assets/images/markq2.png')); ?>" alt="" style="height:35px">
       
        </div> -->
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
                   
                    <a href="<?php echo e(route('front.vault')); ?>"><span>VAULT</span></a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">B2B Form</h1>
        <button type="button" class="btn-close"  aria-label="Close"></button>
      </div>
      <div class="card register-area">
                <div class="card-body ">
            <form class="row" action="<?php echo e(route('front.b2b.submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn" class="text-u"><?php echo e(__('Name')); ?></label>
                  <input class="form-control w-100" type="text" name="first_name" placeholder="<?php echo e(__('Name')); ?>" id="first_name"  value="<?php echo e(old('first_name')); ?>">
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>
             
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-email" class="text-u"><?php echo e(__('Email')); ?></label>
                  <input class="form-control w-100" type="email" name="email" placeholder="<?php echo e(__('Email')); ?>" id="email" value="<?php echo e(old('email')); ?>">
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-phone" class="text-u"><?php echo e(__('Phone Number')); ?></label>
                  <input class="form-control w-100" name="phone" type="text" placeholder="<?php echo e(__('Phone Number')); ?>" id="reg-phone" value="<?php echo e(old('phone')); ?>">
                  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn" class="text-u"><?php echo e(__('Company Name')); ?></label>
                  <input class="form-control w-100" type="text" name="bill_company" placeholder="<?php echo e(__('Company Name')); ?>" id="bill_company" value="<?php echo e(old('bill_company')); ?>">
                <?php $__errorArgs = ['bill_company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn" class="text-u"><?php echo e(__(' Address1')); ?></label>
                  <input class="form-control w-100" type="text" name="bill_address1" placeholder="<?php echo e(__(' Address')); ?>" id="bill_address1" value="<?php echo e(old('bill_address1')); ?>">
                <?php $__errorArgs = ['bill_address1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn" class="text-u"><?php echo e(__(' address2')); ?></label>
                  <input class="form-control w-100" type="text" name="bill_address2" placeholder="<?php echo e(__(' Address')); ?>" id="bill_address2" value="<?php echo e(old('bill_address2')); ?>">
                <?php $__errorArgs = ['bill_address2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn" class="text-u"><?php echo e(__(' City')); ?></label>
                  <input class="form-control w-100" type="text" name="bill_city" placeholder="<?php echo e(__(' City')); ?>" id="bill_city" value="<?php echo e(old('bill_city')); ?>">
                <?php $__errorArgs = ['bill_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>

              

              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn" class="text-u"><?php echo e(__('GST Number')); ?></label>
                  <input class="form-control w-100" type="text" name="gst_number" placeholder="<?php echo e(__('GST Number')); ?>" id="gst_number" value="<?php echo e(old('gst_number')); ?>">
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
                <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-12">
              <div class="form-group">
                  <label for="reg-pass" class="text-u uppercase"><?php echo e(__('Password')); ?></label>
                  <input class="form-control w-100 uppercase" type="password" name="password" placeholder="<?php echo e(__('Password')); ?>" id="password">
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="text-danger uppercase"><?php echo e($message); ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-12">
              <div class="form-group">
                  <label for="reg-pass-confirm" class="text-u uppercase"><?php echo e(__('Confirm Password')); ?></label>
                  <input class="form-control w-100 uppercase" type="password" name="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>" id="reg-pass-confirm">
                </div>
              </div>
              
            
              

              <div class="col-12 text-center">
                <button class="btn btn-primary margin-bottom-none" type="submit"><span><?php echo e(__('Submit')); ?></span></button>
              </div>
            </form>

            <!-- <div class="img-container">
                <img src="<?php echo e(asset('assets/images/09XiSYNTH SOUL (2).png')); ?>" alt="">
            </div> -->
            </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
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
    <div class="padd-foot" >
      <div class="row" style="padding:0 15px"> 
        <div class="col-lg-6 col-md-6  col-sm-6">
          <!-- Contact Info-->
          <div class="widget widget-links widget-light-skin foot-sec1">
            <ul class="ul-footer">
              <a href="<?php echo e(route('front.catalog')); ?>"><li class="footer-two" style="color: #303030;">SHOP</li></a>
              <a href="<?php echo e(route('front.about')); ?>"><li class="footer-two" style="color: #303030;">ABOUT</li></a>
              <a href="<?php echo e(route('front.contact')); ?>"><li class="footer-two" style="color: #303030;">CONTACT</li></a>
              <a href="<?php echo e(route('front.faq')); ?>"><li class="footer-two" style="color: #303030;">FAQ</li></a>
              <!-- <a href="#" onclick="openPopup(event)"><li class="footer-two" style="color: #303030;">B2B</li></a> -->
              <!-- <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <li class="footer-two" style="color: #303030;">B2B</li>
                </a> -->
                <a href="<?php echo e(route('front.b2b')); ?>"><li class="footer-two" style="color: #303030;">B2B</li></a>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6  footer-logo">
                <!-- <img src="assets/images/logofooter.png" alt="loading"> -->
                <img src="<?php echo e(asset('assets/images/logofooter.png')); ?>" alt="loading">
          </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
          <!-- Customer Info-->
          <div class="card-footer-two">
            <p class="para-footer" style="color: #303030;">BE THE FIRST TO KNOW ABOUT NEW RELEASES,DISCOUNTS AND RESTORE</p>
            <div class="card-body-footer-two">
            <a class="announcement-banner" href="#announcement-modal">
                <span class="footer-mail" style="color: #303030;">ADMIN@BLOCK55.COM</span>
            </a>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                      <ul class="footer-mail-list" >
                       <a href="<?php echo e(route('front.page', ['slug' => 'refund-policy'])); ?>"> <li class="footer-list" style="color: #303030;">REFUND POLICY</li></a>
                       <a href="<?php echo e(route('front.page', ['slug' => 'shipping-policy'])); ?>"> <li class="footer-list" style="color: #303030;">SHIPPING POLICY</li></a>
                      <!-- </ul>
                      </div>
                      <div class="col-md-6 col-sm-6">
                    <ul class="footer-mail-list"> -->
                       <a href="<?php echo e(route('front.page', ['slug' => 'terms-and-service'])); ?>"> <li class="footer-list" style="color: #303030;">TERMS OF SERVICES</li></a>
                        <a href="<?php echo e(route('front.page', ['slug' => 'privacy-policy'])); ?>"><li class="footer-list" style="color: #303030;">PRIVACY POLICY</li></a>
                    </ul>
                </div>
                    </div>
                </div>

            </div>
            </div>

        </div>

      <!-- Copyright-->

      <div class="row">
        <img src="<?php echo e(asset('assets/images/footer_img .png')); ?>" alt="">
      </div>

      <div class="logos footer-marq">
        <div class="logos-slide ">
            <img src="<?php echo e(asset('assets/images/dots.png')); ?>" alt="" class="footer-marq-img none">
            <span>MADE FOR MODERN METROPOLIS</span>
            <img src="<?php echo e(asset('assets/images/skull.png')); ?>" alt="" class="footer-marq-img none-skull">

        </div>
       <div class="logos-slide">
            <img src="<?php echo e(asset('assets/images/dots.png')); ?>" alt="" class="footer-marq-img none">
            <span>MADE FOR MODERN METROPOLIS</span>
            <img src="<?php echo e(asset('assets/images/skull.png')); ?>" alt="" class="footer-marq-img none-skull2 ">

        </div>

        <!-- <div class="logos-slide">
        <img src="<?php echo e(asset('assets/images/dots.png')); ?>" alt="">
        MADE FOR MODERN METROPOLIS
        <img src="<?php echo e(asset('assets/images/skull.png')); ?>" alt="">
       
        </div> -->
    </div>


      <p class="footer-copyright uppercase" style="color: #a5a5a5;"> Block55 © All Rights Are Reserved. Crafted By <a href="https://eelontech.in/">Eelontech</a></p>
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
    function openPopup(event) {
        event.preventDefault();
        document.getElementById("b2bPopup").style.display = "block";
    }

    function closePopup(event) {
        event.preventDefault();
        document.getElementById("b2bPopup").style.display = "none";
    }

    function submitForm() {
        // Fetch form data
        let formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            // Add more fields as needed
        };

        // Submit form data via AJAX
        fetch('/b2b/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Form submitted successfully!');
                closePopup();
            } else {
                alert('Form submission failed!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again later.');
        });
    }

    // Close popup if clicked outside of it
    window.addEventListener('click', function(event) {
        let popup = document.getElementById("b2bPopup");
        if (event.target == popup) {
            closePopup(event);
        }
    });
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

//         $(document).ready(function(){
//         $('.customer-logos').slick({
//         slidesToShow: 6,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 1500,
//         arrows: false,
//         dots: false,
//         pauseOnHover: false,
//         responsive: [{
//             breakpoint: 768,
//             settings: {
//                 slidesToShow: 4
//             }
//         }, {
//             breakpoint: 520,
//             settings: {
//                 slidesToShow: 3
//             }
//         }]
//     });
// });
//<!-- image carousel -->

    </script>

<script>

document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.product-thumb');

            cards.forEach(card => {
                const video = card.querySelector('video');
                card.addEventListener('mouseenter', function () {
                    video.play();
                });
                card.addEventListener('mouseleave', function () {
                    video.pause();
                    video.currentTime = 0;
                });
            });
        });

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
<?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/master/front.blade.php ENDPATH**/ ?>