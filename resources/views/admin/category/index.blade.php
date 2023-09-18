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
                        <input type="text" id="title" name="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Manage category
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">description</th>
                        <th scope="col">Delete</th>
                        <th scope="col">edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData["Category"] as $category)
                    <tr>
                        <td>{{ $category->getId() }}</td>
                        <td>{{ $category->getName() }}</td>
                        <td>{{ $category->getDescription() }}</td>
                        <td>
                            <form action="{{ route('admin.category.delete', $category) }} " method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="bi-trash">delete</i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.category.edit', ['id'=> $category->getId()])}}">
                                <i class="bi-pencil">edit</i>
                            </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
