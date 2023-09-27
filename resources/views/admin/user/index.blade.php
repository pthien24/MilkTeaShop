@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        Manage user
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col"> ID</th>
                    <th scope="col">username</th>
                    <th scope="col">phone</th>
                    <th scope="col">address</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["users"] as $user)
                <tr>
                    <td>{{ $user->getId() }}</td>
                    <td>{{ $user->getName() }}</td>
                    <td>{{ $user->getPhone() }}</td>
                    <td>{{ $user->getAddress() }}</td>
                    <td>{{ $user->getEmail() }}</td>
                    <td>
                        <form action="{{route ('admin.order.editRole',$user->getId())}}" method="post">
                            @csrf
                            @method('PUT')
                            <select name="role" id="role" class="box" required>
                                <option value="{{ $user->getRole() }}" selected>{{ $user->getRole() }}</option>
                                <option value="admin">admin</option>
                                <option value="client">client</option>
                            </select>
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.user.delete', $user) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </form>
                    </td>

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
