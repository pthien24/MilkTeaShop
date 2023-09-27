@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="heading">
    <h3>{{$viewData['title']}}</h3>
    <p><a href="{{route('home.index')}}">home </a> <span> / {{$viewData['subtitle']}}</span></p>
</div>
<section class="products">
    <h1 class="title">your cart</h1>
    @if (count($viewData["products"]) > 0)

    <div class="cart-total">
        <p>grand total : <span>${{$viewData['total']}}/-</span></p>
        <a href="{{ route('cart.checkout') }}" class="btn">checkout orders</a>
    </div>
    @endif
    <div class="box-container">
        @foreach ($viewData["products"] as $product)
        <div class="box">
            <a href="quick_view.html" class="fas fa-eye"></a>
            <a href="{{ route('cart.delete',$product->getId())}}" name="delete"><button class="fas fa-times" type="submit" onclick="return confirm('delete this item?')"></button></a>
            <img src="/storage/{{ $product->getImage() }}" alt="">
            <div class="name">{{ $product->getName() }}</div>
            <div class="flex">
                <div class="price"><span>$</span>{{ $product->getPrice() }}</div>
                <form method='POST' action="{{route('cart.update',$product->getId())}}">
                  @csrf
                  @method('PATCH')
                  <input type="number" name="new_quantity" class="qty" min="1" max="10" value="{{ session('products')[$product->getId()] }}">
                    <button type="submit" class="fas fa-edit"></button>
                </form>
            </div>
            <div class="sub-total">sub total : <span>${{$product->getPrice() * session('products')[$product->getId()]}}</span></div>
        </div>
        @endforeach
    </div>
    <div class="more-btn">
        <a href="{{ route('cart.delete',0)}}" class="delete-btn" onclick="return confirm('delete all from cart?');">delete all</a>
    </div>
</section>
@endsection
