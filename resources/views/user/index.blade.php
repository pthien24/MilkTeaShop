@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="heading">
    <h3>{{$viewData['title']}}</h3>
    <p><a href="{{route('home.index')}}">home </a> <span> / {{$viewData['subtitle']}}</span></p>
</div>
<section class="user-details">
    <div class="user">
        <img src="images/user-icon.png" alt="">
        <p><i class="fas fa-user"></i> <span>{{$viewData['user']->getName()}}</span></p>
        <p><i class="fas fa-phone"></i> <span>{{$viewData['user']->getPhone()}}</span></p>
        <p><i class="fas fa-envelope"></i> <span>{{$viewData['user']->getEmail()}}</span></p>
        <a href="update_profile.html" class="btn">update profile</a>
        <p class="address"><i class="fas fa-map-marker-alt"></i> <span>{{$viewData['user']->getAddress()}}</span></p>
        <a href="update_address.html" class="btn">update address</a>
    </div>
</section>
@endsection
