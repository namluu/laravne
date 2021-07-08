@extends('admin.layout')

@section('title', 'User - ')

@section('content')

    <h1>user</h1>
    <div class="mb-4">
        <a href="{{ url('admin/user/users/create')}}" class="btn btn-primary">Add User</a>
    </div>
    <table class="table">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <a href="{{ url('admin/user/users/'. $user->id . '/edit') }}" class="btn btn-primary btn-sm float-left mr-2">Edit</a>
                    <form class="form-inline" action="{{ url('admin/user/users/'. $user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return !!confirm('Delete this item?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
