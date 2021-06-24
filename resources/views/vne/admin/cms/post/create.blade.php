@extends('admin.layout')

@section('title', 'New - ')

@section('content')

<h1>new post</h1>
<div class="mb-4">
    <a href="{{ url('admin/cms/posts')}}" class="btn btn-primary">Back</a>
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

<form action="{{ url('admin/cms/posts') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control col-md-6" id="name">
    </div>
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" name="alias" class="form-control col-md-6" id="alias">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="enabled" id="categoryActive" value="1" checked>
        <label class="form-check-label" for="categoryActive">
            Active
        </label>
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="radio" name="enabled" id="categoryInactive" value="0">
        <label class="form-check-label" for="categoryInactive">
            Inactive
        </label>
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control col-md-6" id="category_id">
            <option value="">Please select</option>
            <option value="1">Category 1</option>
        </select>
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control col-md-12" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>

@endsection
