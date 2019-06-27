@extends('layouts.app')

@section('content')

<div class="slick-home">
    @foreach ($posts as $post)
    <div>
        <div class="slick-item" style="background:url(/images/posts/{{ $post->photo['filename']}})">
        <a href="{{ url('/post/'.$post->id) }}" class="slick-wrapper">
            <div class="slick-content">
                <div class="wrapper">
                <div class="slick-movie">{{ $post->name }}</div>
                <div class="slick-category">{{ $post->category->name }}</div>
                <div class="slick-title">{{ $post->title }}</div>
                </div>
            </div>
        </a>
        </div>
    </div>
    @endforeach
</div>
{{-- slick slider logic --}}
{{-- https://kenwheeler.github.io/slick/ --}}
<script>
    $(document).ready(function(){
        $('.slick-home').slick({
            infinite:true,
            slidesToShow:4,
            slideToScroll:4,
            arrows:true
        });
    });
</script>
@endsection
