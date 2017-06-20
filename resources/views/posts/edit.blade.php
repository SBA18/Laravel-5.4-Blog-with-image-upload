@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
           <h1>Edit Post</h1>
           <br/>

           <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="title" class="form-control" name="title" id="title" value="{!! $post->title !!}" required>
                </div>
                <div class="form-group">
                    <label for="body">Post description</label>
                    <textarea class="form-control" name="body" id="article-ckeditor" cols="30" rows="10" required>{!! $post->body !!}</textarea>
                </div>
                 <div class="form-group">
                    <label for="cover_image">File input</label>
                    <input type="file" id="cover_image" name="cover_image">
                    <p class="help-block">Post cover image here.</p>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
{{-- @include('inc.footer') --}}
</div>
@endsection