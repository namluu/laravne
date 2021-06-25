@extends('admin.layout')

@section('title', 'New - ')

@section('content')

<h1>new category</h1>
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

<form action="{{ url('admin/cms/categories') }}" method="POST">
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
    <div class="form-check">
        <input class="form-check-input" type="radio" name="is_menu" id="menuActive" value="1">
        <label class="form-check-label" for="menuActive">
            Menu
        </label>
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="radio" name="is_menu" id="menuInactive" value="0" checked>
        <label class="form-check-label" for="menuInactive">
            Non menu
        </label>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>

@endsection
