@extends('layouts.app')

@section('content')
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
 {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
 @csrf
</form>
@endsection





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

          <link href="{{asset('jquery.js')}}" rel="stylesheet">
          <link href="{{asset('bootstrap.min.js')}}" rel="stylesheet">

          <script src="{{asset('jquery.js')}}"></script>
          <script src="{{asset('slick.min.js')}}"></script>
          <script src="{{asset('bootstrap.min.js')}}"></script>
          <script src="{{asset('script.js')}}"></script>

          


          <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
          <link href="{{asset('icofont.min.css')}}" rel="stylesheet">
          <link href="{{asset('rtl.css" rel=')}}"stylesheet">
          <link href="{{asset('slick.css')}}" rel="stylesheet">
          <link href="{{asset('slick-theme.css')}}" rel="stylesheet">
          <link href="{{asset('style.css')}}" rel="stylesheet">




        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }



            .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;        height: 148px;  padding:10px}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
        </style>
    </head>
    <body id="top">

      <!--=====================================
             NAVBAR PART START
             =======================================-->
         
                                                 
   <header>
 

       <nav class="navbar navbar-expand-lg " style="    background: #42155c;
       font-size: 14px;
       padding: 10px 0px;
       box-shadow: 0 1px 2px rgb(0 0 0 / 5%);
       color: #fff;">
         <div class="container-fluid">


           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-5 ps-5" >
               <li class="nav-item pe-5 ps-5">
                 <a class="nav-link active" aria-current="page" href="#">
                  <select  aria-label="Default select example" style="    width: 100px; height: 26px;">
                     <option selected>Arabic</option>
         
                    </select>
         
                 </a>
               </li>
             
             </ul>
             {{-- <form class="d-flex" role="search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
             </form> --}}
             <ul class="d-flex ps-5 pe-5">
               <li class="list-inline-item ps-5 pe-5"><i class="icofont-location-pin mr-2"></i>الرياض , جدة </li>
               <li class="list-inline-item ps-5 pe-5" ><a style="color: white" href="mailto:info@musanedunited.sa"><i class="icofont-support-faq mr-2"></i>info@musanedunited.sa</a></li>
               
            </ul>
           </div>
         </div>
       </nav>
       
       <nav class="navbar navbar-expand-lg navigation" id="navbar">
          <div class="container">
             <a class="navbar-brand" href="https://musanedunited.sa">
                <img src="https://musanedunited.sa/uploads/logo.png" alt="" class="img-fluid">
             </a>
                
    
             <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
             </button>
    
             <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                   <li  class="nav-item">
       <a  class="nav-link"  href="https://musanedunited.sa"  target="_self" >الصفحة الرئيسية</a>
    </li>
    
     
       
    <li  class="nav-item">
       <a  class="nav-link"  href="https://musanedunited.sa/page/mn-nhn"  target="_self" >من نحن</a>
    </li>
    
     
       
    <li  class="nav-item">
       <a  class="nav-link"  href="https://musanedunited.sa/priceing"  target="_self" >الاسعار</a>
    </li>
    
     
       
    <li  class="nav-item">
       <a  class="nav-link"  href="https://musanedunited.sa/service"  target="_self" >خدماتنا</a>
    </li>
    
     
       
    <li  class="nav-item">
       <a  class="nav-link"  href="https://musanedunited.sa/contact"  target="_self" >تواصل معنا</a>
    </li>
    
     
       
    <li  class="nav-item">
       <a  class="nav-link"  href="https://musanedunited.sa/login"  target="_self" >تسجيل الدخول</a>
    </li>
    
                 
                </ul>
             </div>
            
          </div>
       </nav>
    </header>
    
    <!--=====================================
    NAVBAR PART END
    =======================================-->
    
       
    <!-- Slider Start -->
    <section class="banner" style="background-image: url('https://musanedunited.sa/uploads/1/2023/01/1673343189.webp');">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xl-7">
            <div class="block">
              <span class="text-uppercase text-sm letter-spacing ">اهداف المنصة</span>
              <h1 class="mb-3 mt-3">نساندك للوصول الى مشروعك بكل سهولة</h1>
              
              <p class="mb-4 pr-5">نوفر مجموعة من الحلول التى تساعدك على اتمام مشروعك وادارته الكترونيا عن طريق منصة مساند المتحدة بكل سهولة</p>
              <div class="btn-container ">
                <a href="#pricing" class="btn btn-main-2 btn-icon btn-round-full">سجل الان <i class="icofont-simple-right ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="feature-block d-lg-flex">
              <div class="feature-item mb-5 mb-lg-0">
                <div class="feature-icon mb-4">
                  <i class="icofont-cloud-upload"></i>
                </div>
                
                <h4 class="mb-3">لوحة تحكم سهلة ومتكاملة مع مدير اعمال متخصص لكل مجموعة</h4>
                <p class="mb-4">تعلمنا من خبرتنا كثرة المميزات قد تعيق اعمالك اليومية , لذا طورنا لوحة تحكم سهلة وبسيطة , لتقوم باتمام اعمالك اليومية , بسهولة وسرعة بدون الحاجة للتعامل مع نظام معقد.</p>
                            <a href="https://musanedunited.sa/priceing" class="btn btn-main btn-round-full">سجل الان</a>
                          </div>
            
              <div class="feature-item mb-5 mb-lg-0">
                <div class="feature-icon mb-4">
                  <i class="icofont-shopping-cart"></i>
                </div>
                
                <h4 class="mb-3">اكثر من 400 موظف خدمة عملاء  على مدار الساعة من الأحد إلى الخميس</h4>
                <p class="mb-4">اكثر من 35000 الف منتج من الأسواق العالمية 
    اكثر من 680 علامة تجارية فاخرة
    منصة مساند المتحدة 
    نساندك لحياة أفضل
    انشأ متجرك الالكترونى وبادر بجنى الارباح
    مدير اعمال متخصص لكل مجموعة</p>
                            <a href="https://musanedunited.sa/register" class="btn btn-main btn-round-full">ابدأ الان</a>
                          </div>
            
              <div class="feature-item mb-5 mb-lg-0">
                <div class="feature-icon mb-4">
                  <i class="icofont-rocket-alt-2"></i>
                </div>
                
                <h4 class="mb-3">مسرعة أعمال منصة مساند المتحدة</h4>
                <p class="mb-4">لتكون المسرعة الاولى الكترونيا , حيث تهدف الى تسريع الى عجلة تنمية للمنشأت الصغيرة والمتوسطة عبر تطبيق افضل المعايير المحلية والعالمية .
    وتوفير البرامج التدريبية والجلسات الاستشارية والارشادية اضافة الى الفرص الاستثمارية المتاحة للمشتركين</p>
                            <a href="https://musanedunited.sa/register" class="btn btn-main btn-round-full">سجل الان</a>
                          </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="section about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-sm-6">
            <div class="about-img">
    
              <img src="e.jpg" alt="" class="img-fluid">
              <img src="f.jpg" alt="" class="img-fluid mt-4">
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="about-img mt-4 mt-lg-0">
              <img src="bit.jpeg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-content pl-4 mt-4 mt-lg-0">
              <h2 class="title-color">بوابتك الالكترونية نحو تحقيق مشروعك</h2>
              <p class="mt-4 mb-5">قمنا فى منصة مساند المتحدة بتطوير بنية تحتيه مبتكرة لتكون نقطة وصول واحدة لجميع ماتحتاج دعنا نساعدك لتحقيق مشروعك</p>
                        <a href="#service" class="btn btn-main-2 btn-round-full btn-icon">خدماتنا<i class="icofont-simple-right ml-3"></i></a>
                      </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="cta-section ">
      <div class="container">
        <div class="cta position-relative">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-users"></i>
                <p>عملاء14763</p>
              </div>
            </div>
            <!--<div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-star"></i>
                <span class="h3">800</span>+
                <p>مراجعات</p>
              </div>
            </div>-->
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-world"></i>
                           
    
       <p>  مستهدف تمويل 3000 مشروع سنوي عن طريق الجهات المالية المعتمدة</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-ui-user-group"></i>
                        
    
                <p>المبيعات السنوية المستهدفة لعام 2023 
    2 مليار ريال +</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section service gray-bg" id="service">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center">
            <div class="section-title">
              <h2>عن المنصة</h2>
              
            </div>
          </div>
        </div>
        <div class="row">
                 <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                 <img  src="https://musanedunited.sa/uploads/1/2023/01/1673435947.png" height="80">
                <h4 class="mt-3 mb-3">كل اعمالك على منصة واحدة</h4>
              </div>
              <div class="content">
                <p class="mb-4">نعمل دائما لتوفير منصة واحدة تشمل جميع اعمالك يتم من خلالها متابعة مشروعاتك من خلال شاشة خاصة بك من جميع انحاء العالم والاطلاع على الدخل اليومى</p>
              </div>
            </div>
          </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                 <img  src="https://musanedunited.sa/uploads/1/2023/01/1673393677.jpg" height="80">
                <h4 class="mt-3 mb-3">الاهتمام بالمطورين</h4>
              </div>
              <div class="content">
                <p class="mb-4">نؤمن فى منصة مساند المتحدة بأن اهم عوامل الجودة هى البساطة حيث يعمل فريق التطوير لدينا على مواكبة اهم التطورات والتحديثات فى القطاع التكنولوجى</p>
              </div>
            </div>
          </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                 <img  src="https://musanedunited.sa/uploads/1/2023/01/1673343716.jpg" height="80">
                <h4 class="mt-3 mb-3">مساند  لرحلة تجارة الكترونية أسهل</h4>
              </div>
              <div class="content">
                <p class="mb-4">فرصتك الان اشترك متبقي 19 يوم
    دخل شهري إضافي يصل إلى 6000 ريال. 
    سواء كنت موظف أو طالب 
    لا تشيل هم الخبرة والادارة خلها علينا</p>
              </div>
            </div>
          </div>
           
        </div>
      </div>
    </section>
    
    <section class="section appoinment">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 ">
            <div class="section-title text-center">
              <h2>معرض الصور</h2>
          
            </div>
            <section class="" id="gallery">
              <div class="container">
                <div class="row">
                  {{-- <div class="col-lg-12">
                    <div class="portfolio__slide gallery_part">
                                         <a href="https://saka-cart.&quot;mussanad.ofertasbooking.com&quot;/">
                        <div class="port__card">
                          <div class="portfolio__img">
                            <img src="https://musanedunited.sa/uploads/admin/1/2021/03/1615211329.webp"   alt="">
                          </div>                                
                        </div>
                      </a>
                                         <a href="https://bazar.&quot;mussanad.ofertasbooking.com&quot;/">
                        <div class="port__card">
                          <div class="portfolio__img">
                            <img src="https://musanedunited.sa/uploads/admin/1/2021/03/1615211297.webp"   alt="">
                          </div>                                
                        </div>
                      </a>
                                         <a href="https://bigbag.&quot;mussanad.ofertasbooking.com&quot;">
                        <div class="port__card">
                          <div class="portfolio__img">
                            <img src="https://musanedunited.sa/uploads/admin/1/2021/03/1615211275.webp"   alt="">
                          </div>                                
                        </div>
                      </a>
                                         <a href="http://arafa-cart.&quot;mussanad.ofertasbooking.com&quot;">
                        <div class="port__card">
                          <div class="portfolio__img">
                            <img src="https://musanedunited.sa/uploads/admin/1/2021/03/1615208210.webp"   alt="">
                          </div>                                
                        </div>
                      </a>
                                       </div>
                  </div> --}}
                  <div class="col-lg-3">
                     <div class="port__card">
                        <div class="portfolio__img">
                          <img src="23 Best Mobile App Landing Page Template Designs (2022).png"   alt="">
                        </div>                                
                      </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="port__card">
                        <div class="portfolio__img">
                          <img src="54 Inspiring Landing Page Design Ideas.png"   alt="">
                        </div>                                
                      </div>

                  </div>
                  <div class="col-lg-3">
                     <div class="port__card">
                        <div class="portfolio__img">
                          <img src="Hotel Finder Landing Page - Full preview.jpg"   alt="">
                        </div>                                
                      </div>

                  </div>
                  <div class="col-lg-3">
                     <div class="port__card">
                        <div class="portfolio__img">
                          <img src="Why Doesn’t Your Website Stand Out_.png"   alt="">
                        </div>                                
                      </div>

                  </div>
                </div>
              </div>
            </section>
          </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="section gray-bg" id="pricing">
       <div class="container">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-7">
                   <div class="section-title text-center">
                      <h2>اسعار باقات المتاجر الالكترونية</h2>
                  
                      <p>الاسعار تشمل الاشتراك الشهرى فى باقة المتجر اﻻلكترونى</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END -->
          <div class="row text-center align-items-end plan_list">
             <!-- Pricing Table-->
              <div class="col-lg-4 mb-5 mb-lg-0   priceing ">
               <div class="bg-white p-5 rounded-lg   ">
               <h1 class="h6 text-uppercase font-weight-bold mb-4">الخطة الاساسية</h1>
               <h2 class="h1 font-weight-bold">332.00ريال</h2>
                  <span class="font-weight-bold"> سنويا </span>
              <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
             <li class="mb-3">
                عدد المنتجات <b>100</b>
             </li>
             <li class="mb-3">
                 مساحة التخزين <b>50MB</b>
             </li>
              <li class="mb-3">
                استخدام النطاق الفرعى الخاص بكم 
             </li>
      
             
             
             <li class="mb-3">
               تعدد اللغات
             </li>
             <li class="mb-3">
               معالجة الصور
             </li>
          </ul>
         
           <p> السعر 289 بالإضافة إلى 15% الضريبة</p>
          <a  style="background: #42155c" href="https://musanedunited.sa/merchant/register/1" class="btn site_color text-white btn-block p-2 shadow rounded-pill">سجل الان</a>
         
         </div>
        </div>
             <!-- END -->
          </div>
       </div>
    </section>
 
    
    <section class="section clients gray-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="section-title text-center">
              <h2>خدمة موثوقة</h2>
             
            </div>
          </div>
        </div>
      </div>
    
      <div class="container">

         <div class="row">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  <div class="MultiCarousel-inner">
                      <div class="item">
                          <div class="pad15">
                             <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="go_arch - Architecture PSD Template.jpg" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Hotel Finder Landing Page - Full preview.jpg"  alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="go_arch - Architecture PSD Template.jpg" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="go_arch - Architecture PSD Template.jpg" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                            <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                             <img src="go_arch - Architecture PSD Template.png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                            <img src="go_arch - Architecture PSD Template.png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                      <div class="item">
                          <div class="pad15">
                           <img src="Why Doesn’t Your Website Stand Out_ (1).png" alt="">
                          </div>
                      </div>
                  </div>
                  <button class="btn  leftLst"><</button>
                  <button class="btn  rightLst">></button>
              </div>
         </div>
        {{-- <div class="row clients-logo">


                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433911.png" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433891.png" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433835.jpg" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433814.png" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433792.jpg" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433760.png" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433717.jpg" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433696.jpg" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
                <div class="col-lg-2">
            <div class="client-thumb">
             <a href="#" target="_blank"> <img src="https://musanedunited.sa/uploads/1/2023/01/1673433666.png" height="50" alt="" class="img-fluid"></a>
            </div>
          </div>
              </div>
        </div> --}}
    </section>
    
    
    
    <!--=====================================
    FOOTER PART START
    =======================================-->
    
    <footer class="footer section ">
       <div class="container">
          <div class="row">
             <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                   <div class="logo mb-4">
                    
                       <a href="https://musanedunited.sa"><img  class="img-fluid" src="https://musanedunited.sa/uploads/logo.png" alt="mussanad" ></a>
                   </div>
                                                 <p>{الرقم الضريبى: 103220002499355 </br> السجل التجارى 4030494161 </br> ترخيص منشأتى 525 </br> منصة مساند المتحدة مسجلة براءة اختراع فى الهيئة السعودية للملكية الفكرية}</p>
    
                   <ul class="list-inline footer-socials mt-4">
                                        <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                                                           <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                                                          <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                                                           <li class="list-inline-item"><a href="#"><i class="icofont-instagram"></i></a></li>
                                                          <li class="list-inline-item"><a href="#"><i class="icofont-youtube"></i></a></li>
                                     </ul>
                               </div>
             </div>
    
             <div class="col-lg-2 col-md-6 col-sm-6">
               
                <div class="widget mb-5 mb-lg-0">
       <h4 class="text-capitalize mb-3">روابط مفيدة</h4>
    
    
       <ul class="list-unstyled footer-menu lh-35">
           
          <li><a  class="active"  href="https://musanedunited.sa"  target="_self" >الأكاديمية</a></li>
           
          <li><a  href="https://musanedunited.sa/contact"  target="_self" >مساعدة</a></li>
           
          <li><a  href="https://musanedunited.sa/contact"  target="_self" >تواصل اجتماعي</a></li>
           
          <li><a  href="https://musanedunited.sa/contact"  target="_self" >أدوات</a></li>
             </ul>
    </div>
    
             </div>
    
             <div class="col-lg-2 col-md-6 col-sm-6">
                 <div class="widget mb-5 mb-lg-0">
       <h4 class="text-capitalize mb-3">معلومات</h4>
   
    
       <ul class="list-unstyled footer-menu lh-35">
           
          <li><a  href="#about_us"  target="_self" >معلومات عنا</a></li>
           
          <li><a  href="https://musanedunited.sa/contact"  target="_self" >برنامج الشركاء</a></li>
           
          <li><a  href="#priceing"  target="_self" >التسعير</a></li>
           
          <li><a  href="https://musanedunited.sa/contact"  target="_self" >بوابة الدفع</a></li>
             </ul>
    </div>
    
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="widget mb-5 mb-lg-0">
       <h4 class="text-capitalize mb-3">سياسات</h4>
  
    
       <ul class="list-unstyled footer-menu lh-35">
           
          <li><a  href="https://musanedunited.sa/page/terms-and-condition"  target="_self" >سياسات</a></li>
           
          <li><a  href="https://musanedunited.sa/page/terms-and-condition"  target="_self" >سياسة الخدمة</a></li>
           
          <li><a  href="https://musanedunited.sa/page/terms-and-condition"  target="_self" >سياسة الاسترجاع</a></li>
             </ul>
    </div>
    
             </div>
    
             
          </div>
          
         
             <div class="row">
                <div class="col-lg-4">
                   <a class="backtop js-scroll-trigger" href="#top">
                      <i class="icofont-long-arrow-up"></i>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </footer>
    
    
    
   
  <script>
   $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
   
   </script>                
   </body>
</html>
