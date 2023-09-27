@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="heading">
    <h3>{{$viewData['title']}}</h3>
    <p><a href="{{route('home.index')}}">home </a> <span> / {{$viewData['subtitle']}}</span></p>
</div>
  <section class="checkout">

      <h1 class="title">order summary</h1>

      <form action="{{route('cart.purchase')}}" method="POST">
        @csrf
         <div class="cart-items">
            <h3>cart items</h3>
            @foreach ($viewData["products"] as $product)
            <p><span class="name">{{$product->getName()}}</span><span class="price">${{ $product->getPrice() }}</span></p>
            @endforeach
            <p class="grand-total"><span class="name">grand total :</span> <span class="price">${{$viewData["total"]}}</span></p>
            <a href="{{route('cart.index')}}" class="btn">view cart</a>
         </div>
         <div class="user-info">
            <h3>your info</h3>
            <p><i class="fas fa-user"></i> <span>{{$viewData["user"]->getName()}}</span></p>
            <p><i class="fas fa-phone"></i> <span>{{$viewData["user"]->getPhone()}}</span></p>
            <p><i class="fas fa-envelope"></i> <span>{{$viewData["user"]->getEmail()}}</span></p>
            <h3>delivery address</h3>
            <p class="address"><i class="fas fa-map-marker-alt"></i> <span>{{$viewData["user"]->getAddress()}}</span></p>
            {{-- <select name="method" class="box" required>
               <option value="" disabled selected>select payment method</option>
               <option value="cash on delivery">cash on delivery</option>
               <option value="credit card">credit card</option>
               <option value="paytm">paytm</option>
               <option value="paypal">paypal</option>
            </select> --}}
         </div>
         <input type="submit" value="place order" name="order" class="btn order-btn">
      </form>

   </section>

@endsection
