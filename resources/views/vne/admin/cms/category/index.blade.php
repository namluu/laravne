@extends('admin.layout')

@section('title', 'Category - ')

@section('content')

    <h1>category</h1>
    <div class="mb-4">
        <a href="{{ url('admin/cms/categories/create')}}" class="btn btn-primary">Add Category</a>
    </div>
    <table class="table">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Enable</th>
            <th scope="col">Menu</th>
            <th scope="col">Sort</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->enabled }}</td>
                <td>{{ $category->is_menu }}</td>
                <td>{{ $category->sort_menu }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <a href="{{ url('admin/cms/categories/'. $category->id . '/edit') }}" class="btn btn-primary btn-sm float-left mr-2">Edit</a>
                    <form class="form-inline" action="{{ url('admin/cms/categories/'. $category->id)}}" method="post">
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
