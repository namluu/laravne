@extends('admin.layout')

@section('title', 'Edit - ')

@section('content')

<h1>edit post</h1>
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

<form action="{{ url('admin/cms/posts/'. $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control col-md-6" id="name" value="{{ $post->name }}">
    </div>
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" name="alias" class="form-control col-md-6" id="alias" value="{{ $post->alias }}">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="enabled" id="postActive" value="1"
            {{ $post->enabled == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="postActive">
            Active
        </label>
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="radio" name="enabled" id="postInactive" value="0"
            {{ $post->enabled == 0 ? 'checked' : '' }}>
        <label class="form-check-label" for="postInactive">
            Inactive
        </label>
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control col-md-6" id="category_id">
            <option value="">Please select</option>
            <option value="1" selected>Category 1</option>
        </select>
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control col-md-12" rows="10">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>

@endsection
