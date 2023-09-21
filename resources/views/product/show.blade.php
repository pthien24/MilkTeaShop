@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<section class="contact">

   <div class="row">

      <div class="image">
            <img src="/storage/{{$viewData['product']->getImage()}}" alt="">
        </div>

      <form action="" method="post">
         <input disabled type="text" name="name" value='Name : {{$viewData['product']->getName()}}' class="box">
         <input disabled type="text" name="name" value='price : {{$viewData['product']->getPrice()}}' class="box">
         <input disabled type="text" name="name" value='Categories : {{$viewData['product']->getNameCategory()}}' class="box">
         <input disabled type="text" name="name" value='description : {{$viewData['product']->getName()}}' class="box">

         <input type="button" value="add to card" class="btn" name="send">
      </form>

   </div>
</section>
<section class="about">
    <div class="row">
        <div class="image">
            <img src="/storage/{{$viewData['product']->getImage()}}" alt="">
        </div>
        <div class="content">
            <p><span>Name:</span>{{$viewData['product']->getName()}}</p>
            <p><span>price: </span> {{$viewData['product']->getPrice()}}</p>
            <p><span>Categories: </span> {{$viewData['product']->getNameCategory()}}</p>
            <p><span>description</span> {{$viewData['product']->getDescription()}}</p>
        </div>

    </div>
</section>
{{-- <div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3></h3>
                    <p class="single-product-pricing"><span>Per Kg</span> $50</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sint dignissimos, rem commodi cum voluptatem quae reprehenderit repudiandae ea tempora incidunt ipsa, quisquam animi perferendis eos eum modi! Tempora, earum.</p>
                    <div class="single-product-form">
                        <form action="index.html">
                            <input type="number" placeholder="0">
                        </form>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        <p><strong>Categories: </strong>Fruits, Organic</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
