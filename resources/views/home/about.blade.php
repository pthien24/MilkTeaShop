@extends('layouts.app')
@section('title', $viewdata['title'])
@section('subtitle', $viewdata['subtitle'])
@section('content')
<div class="heading">
   <h3>{{$viewdata['title']}}</h3>
   <p><a href="{{route('home.index')}}">home </a> <span> / {{$viewdata['subtitle']}}</span></p>
</div>
<section class="about">
   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Hello! Thank you for your interest in our store. Customer reviews are one of the important factors that help us improve the quality of our products and services.</p>
         <a href="{{route('product.index')}}" class="btn">our menu</a>
      </div>
   </div>
</section>
<section class="steps">
   <h1 class="title">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>select food</h3>
         <p>Diversity in choosing drinks and snacks in menu.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>30 minutes delivery</h3>
         <p>Fast delivery, professional team and always maintain the best quality to customers.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food!</h3>
         <p>If you need further assistance, please contact us anytime. Have a nice day!</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Bubble tea is a Taiwanese iced tea that has a layer of chewy tapioca balls that sit on the bottom.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Can't wait to enjoy your food again.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>The space is cool and clean, and the staff is friendly.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>The cakes at this shop are really delicious.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>The shop has a large parking lot and the security guard is enthusiastic to help customers.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>If the store has a promotion, how great it is.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

      </div>
      <div class="swiper-pagination"></div>

   </div>

</section>

@endsection
