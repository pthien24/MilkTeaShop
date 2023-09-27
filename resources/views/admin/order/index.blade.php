@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        Manage category
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">order ID</th>
                    <th scope="col">user id</th>
                    <th scope="col">ordered date</th>
                    <th scope="col">status</th>
                    <th scope="col">total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["orders"] as $order)
                <tr>
                    <td>{{ $order->getId() }}</td>
                    <td>{{ $order->getNameUser() }}</td>
                    <td>{{ $order->getCreatedAt() }}</td>
                    <td>
                        <form action="{{route('admin.order.editStatus',$order->getId())}}" method="post">
                            @csrf
                            @method('PUT')
                            <select name="status" id="status" class="box" required>
                                <option value="0" selected>{{ $order->getOrderStatus() }}</option>
                                <option value="1">pending</option>
                                <option value="2">progress</option>
                                <option value="3">complete</option>
                            </select>
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>{{ $order->getTotal() }}</td>
                    {{-- <td>
                        <form action="{{ route('admin.order.delete', $order) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi-trash">delete</i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.order.edit', ['id'=> $category->getId()])}}">
                            <i class="bi-pencil">edit</i>
                        </a>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
