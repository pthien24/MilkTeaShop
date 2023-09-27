@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="heading">
    <h3>{{$viewData['title']}}</h3>
    <p><a href="{{route('home.index')}}">home </a> <span> / {{$viewData['subtitle']}}</span></p>
</div>
<section class="orders">
    <h1 class="title">placed orders</h1>
    <div class="box-container">
        @forelse ($viewData["orders"] as $order)
        <div class="box">
            <p> placed on : <span>{{ $order->getCreatedAt() }}2</span> </p>
            <p> name : <span>{{$viewData['users']->getName()}}</span> </p>
            <p> number : <span>{{$viewData['users']->getPhone()}}</span> </p>
            <p> email : <span>{{$viewData['users']->getEmail()}}</span> </p>
            <p> address : <span>{{$order->getDeliveryAddress()}}</span> </p>
            <p> your orders : <span>@foreach ($order->getItems() as $item) {{ $item->getProduct()->getName() }}
                    ({{ $item->getQuantity() }}) -
                    @endforeach
                </span> </p>
            <p> total price : <span>${{ $order->getTotal() }}/-</span> </p>
            <p> payment status : <span>{{ $order->getOrderStatus() }}</span> </p>
        </div>
        @empty
        <div class="alert alert-danger" role="alert">
            Seems to be that you have not purchased anything in our store =(.
        </div>
        @endforelse
    </div>
</section>
@endsection
