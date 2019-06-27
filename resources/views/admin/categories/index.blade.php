@extends('layouts.admin')

@section('content')

<div class="col-sm-11">
    @component('admin.includes.title')
    Categories
    @endcomponent

    <div class="row">
        <div class="col-sm-4">
            <table class="table table-striped admin_users_table">
                <thead>
                    <tr>Id</tr>
                    <tr>Category Name</tr>
                </thead>
                <tbody>
                    @if ($categories)
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>
                            <a href="{{ url('admin/categories/'.$category->id.'/edit')}}">
                                {{ $category->name }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <div class="col-sm-5">
            <form action="/admin/categories" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Category</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter a category">
                </div>

                <button type="submit" class="btn btn-primary">Add Category</button>

            </form>
        </div>
    </div>
</div>

@endsection
