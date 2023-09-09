@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Create category
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Laravel 8 - Add Blog Post Form Example
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('admin.category.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" id="title"  value="{{ $viewData['category']->getname() }}" name="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description"   class="form-control" required="">{{ $viewData['category']->getDescription() }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
