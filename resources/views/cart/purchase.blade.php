@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="heading">
    <h3>{{$viewData['title']}}</h3>
    <p><a href="{{route('home.index')}}">home </a> <span> / {{$viewData['subtitle']}}</span></p>
</div>
<section>
    <div class="card">
        <div class="card-header">
            Purchase Completed
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Congratulations, purchase completed. Order number is <b>#{{ $viewData["order"]->getId() }}</b>
            </div>
        </div>
    </div>
</section>
@endsection
