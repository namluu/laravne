@extends('admin.layout')

@section('title', 'New - ')

@section('content')

<h1>new user</h1>
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
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control col-md-6" id="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control col-md-6" id="password">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>

@endsection
