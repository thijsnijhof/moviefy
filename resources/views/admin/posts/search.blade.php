@extends('layouts.admin')

@section('content')

@component('admin.includes.title')
Reviews list
@endcomponent

@if(Session::has('flash_admin'))
<div class="flash_message">
    {{ Session('flash_admin') }}
</div>
@endif

@include('admin.includes.searchForm')

<a href="{{ url('/admin/posts') }}">See all posts</a>

@if ($posts)
<div class="count">We found <strong>{{ count($posts) }}</strong></div>
    @include('admin.includes.postList')

@else
    <div>Sorry, no reviews found!</div>
@endif


@endsection
