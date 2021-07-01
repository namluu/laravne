@extends('admin.layout')

@section('title', 'Menu - ')

@section('content')

    <div class="mb-4">
        <a href="{{ url('admin/cms/categories')}}" class="btn btn-primary">Back</a>
    </div>

    <h1>Category: {{ $category->name }}</h1>
    <p>Name: {{ $category->name }}</p>
    <p>Alias: {{ $category->alias }}</p>
    <p>Active: {{ $category->enabled == 1 ? 'Yes' : 'No' }}</p>
    <p>Menu: {{ $category->is_menu == 1 ? 'Yes' : 'No' }}</p>
    <p>Sort: {{ $category->sort_menu }}</p>

    <div>
        <a href="{{ url('admin/cms/categories/'. $category->id.'/edit') }}" class="btn btn-primary btn-sm float-left mr-2">Edit</a>
        <form class="form-inline" action="{{ url('admin/cms/categories/'. $category->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit" onclick="return !!confirm('Delete this item?');">Delete</button>
        </form>
    </div>

@endsection
