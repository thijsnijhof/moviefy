@extends('layouts.admin')

@section('content')



@component('admin.includes.title')
Site Information
@endcomponent


@if(Session::has('flash_admin'))
<div class="flash_message">
    {{ Session('flash_admin') }}
</div>
@endif

<div class="row">
    <div class="col-sm-5">
        <form action="/admin/site/{{ $site->id }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $site->address }}">
            </div>


            <div class="form-group">
                    <label for="b_hours">Address</label>
                <input type="text" class="form-control" name="b_hours" value="{{ $site->b_hours }}">
                </div>


            <div class="form-group">
                    <label for="phone">Address</label>
                <input type="text" class="form-control" name="phone" value="{{ $site->phone }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit Information</button>
        </form>
    </div>
</div>

@endsection
