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
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->enabled }}</td>
      <td>{{ $category->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
