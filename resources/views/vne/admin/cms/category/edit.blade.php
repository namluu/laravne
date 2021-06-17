@extends('admin.layout')

@section('title', 'Edit - ')

@section('content')

<h1>edit category</h1>
<div class="mb-4">
    <a href="{{ url('admin/cms/categories')}}" class="btn btn-primary">Back</a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url('admin/cms/categories/'. $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control col-md-6" id="name" value="{{ $category->name }}">
    </div>
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" name="alias" class="form-control col-md-6" id="alias" value="{{ $category->alias }}">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="enabled" id="categoryActive" value="1"
            {{ $category->enabled == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="categoryActive">
            Active
        </label>
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="radio" name="enabled" id="categoryInactive" value="0"
            {{ $category->enabled == 0 ? 'checked' : '' }}>
        <label class="form-check-label" for="categoryInactive">
            Inactive
        </label>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>

@endsection
