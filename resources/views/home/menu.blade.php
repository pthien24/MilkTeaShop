@extends('layouts.app')
@section('title', $viewdata['title'])
@section('subtitle', $viewdata['subtitle'])
@section('content')
<div class="heading">
    <h3>{{$viewdata['title']}}</h3>
    <p><a href="{{route('home.index')}}">home </a> <span> / {{$viewdata['subtitle']}}</span></p>
 </div>


<section class="products">

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
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
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
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
       </form>
 
       <form accept="" method="post" class="box">
          <a href="quick_view.html" class="fas fa-eye"></a>
          <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
          <img src="uploaded_img/burger-2.png" alt="">
          <a href="category.html" class="cat">fast food</a>
          <div class="name">chezzy hamburger 02</div>
          <div class="flex">
             <div class="price"><span>$</span>3<span>/-</span></div>
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
       </form>
 
       <form accept="" method="post" class="box">
          <a href="quick_view.html" class="fas fa-eye"></a>
          <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
          <img src="uploaded_img/pizza-2.png" alt="">
          <a href="category.html" class="cat">fast food</a>
          <div class="name">delicious pizza 02</div>
          <div class="flex">
             <div class="price"><span>$</span>3<span>/-</span></div>
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
       </form>
 
       <form accept="" method="post" class="box">
          <a href="quick_view.html" class="fas fa-eye"></a>
          <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
          <img src="uploaded_img/dessert-2.png" alt="">
          <a href="category.html" class="cat">dessert</a>
          <div class="name">delicious dessert 02</div  >
          <div class="flex">
             <div class="price"><span>$</span>3<span>/-</span></div>
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
       </form>
 
    </div>
 
 </section>
 @endsection
 