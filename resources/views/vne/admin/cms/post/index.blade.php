@extends('admin.layout')

@section('title', 'Post - ')

@section('content')

    <h1>post</h1>

    <table class="table">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Enable</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->name }}</td>
                <td>{{ $post->enabled }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <a href="{{ url('admin/cms/posts/edit', $post->id) }}" class="btn btn-primary btn-sm float-left mr-2">Edit</a>
                    <form class="form-inline" action="{{ url('admin/cms/posts/destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
