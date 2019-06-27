@extends('layouts.admin')

@section('content')

<div class="col-sm-11">

    @component('admin.includes.title')
    Add Review
    @endcomponent

    <form action="/admin/posts" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="file">Movie Picture</label>
                    <div>
                        <img src="{{ url('/images/no_movie_ph.png') }}" id="profile-img-tag" width="295px">
                    </div>
                    <input type="file" name="file" id="profile-img">
                </div>
            </div>

            <div class="col-sm-9">
                <div class="form-group">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter a title">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" class="form-control">
                            <option disabled selected>Select a category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="review">Review</label>
                        <textarea name="review" class="form-control" id="article-ckeditor" cols="30"
                            rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Review</button>
                </div>
                @component('admin.includes.formErrors')
                @endcomponent
            </div>
        </div>







    </form>
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
    };

    CKEDITOR.replace( 'article-ckeditor', options );

    function readURL(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function(e){
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    // select profile img
    // whenever change, call readURL taking the input
    // replacing src with the url to display the image
    $('#profile-img').change(function(){
            readURL(this);
        });
</script>

@endsection
