@extends('layouts.master')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Create category
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('admin.category.update',['id' => $viewData['category']->getId()])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" id="title" value="{{ $viewData['category']->getname() }}" name="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description" class="form-control" required="">{{ $viewData['category']->getDescription() }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
