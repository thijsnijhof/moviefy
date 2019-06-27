@extends('layouts.admin')

@section('content')

<div class="col-sm-5">
    @component('admin.includes.title')
    Edit Category
    @endcomponent

    <form action="/admin/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Category</label>
            <input type="text" name="name" class="form-control" placeholder="Enter a category"
                value={{ $category->name }}>
        </div>

        <button type="submit" class="btn btn-primary">Edit Category</button>

    </form>
</div>

@endsection
