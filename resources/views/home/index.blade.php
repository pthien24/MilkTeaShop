@extends('layouts.app')
@section('title', $viewdata['title'])
@section('content')
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>delicious pizza</h3>
               <a href="{{route('home.menu')}}" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="{{ asset("images/home-img-1.png")}}" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>double hamburger</h3>
               <a href="{{route('home.menu')}}" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="{{ asset("images/home-img-2.png")}}" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>roasted chicken</h3>
               <a href="{{route('home.menu')}}" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="{{ asset("images/home-img-3.png")}}" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category">

   <h1 class="title">food category</h1>

   <div class="box-container">

      <a href="category.html" class="box">
         <img src="{{ asset('images/cat-1.png')}}" alt="">
         <h3>fast food</h3>
      </a>

      <a href="category.html" class="box">
         <img src="{{ asset('images/cat-2.png')}}" alt="">
         <h3>main dishes</h3>
      </a>

      <a href="category.html" class="box">
         <img src="{{ asset('images/cat-3.png')}}" alt="">
         <h3>drinks</h3>
      </a>

      <a href="category.html" class="box">
         <img src="{{ asset('images/cat-4.png')}}" alt="">
         <h3>desserts</h3>
      </a>

   </div>

</section>
 {{-- <section class="products">

   <h1 class="title">latest dishes</h1>

   <div class="box-container">

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/pizza-1.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">delicious pizza 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/dish-1.png" alt="">
         <a href="category.html" class="cat">dishes</a>
         <div class="name">main dish 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/burger-1.png" alt="">
         <a href="category.html" class="cat">fast food</a>
         <div class="name">chezzy hamburger 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/dessert-1.png" alt="">
         <a href="category.html" class="cat">dessert</a>
         <div class="name">delicious dessert 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/drink-1.png" alt="">
         <a href="category.html" class="cat">drinks</a>
         <div class="name">fresh drink 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" >
         </div>
      </form>

      <form accept="" method="post" class="box">
         <a href="quick_view.html" class="fas fa-eye"></a>
         <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
         <img src="uploaded_img/dish-2.png" alt="">
         <a href="category.html" class="cat">dishes</a>
         <div class="name">main dish 02</div>
         <div class="flex">
            <div class="price"><span>$</span>3<span>/-</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1">
         </div>
      </form>

   </div>

   <div class="more-btn">
      <a href="#" class="btn">veiw all</a>
   </div>

</section> --}}
@endsection









