@extends('admin.layout')

@section('title', 'Post - ')

@section('content')

    <div class="mb-4">
        <a href="{{ url('admin/cms/posts')}}" class="btn btn-primary">Back</a>
    </div>

    <h1>Post: {{ $post->name }}</h1>
    <p>Name: {{ $post->name }}</p>
    <p>Alias: {{ $post->alias }}</p>
    <p>Category: {{ $post->category->name }}</p>
    <p>Active: {{ $post->enabled == 1 ? 'Yes' : 'No' }}</p>

    <div>
        <a href="{{ url('admin/cms/posts/'. $post->id.'/edit') }}" class="btn btn-primary btn-sm float-left mr-2">Edit</a>
        <form class="form-inline" action="{{ url('admin/cms/posts/'. $post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit" onclick="return !!confirm('Delete this item?');">Delete</button>
        </form>
    </div>

@endsection
