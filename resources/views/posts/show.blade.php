@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{route('posts.index')}}">Blog</a></li>
    <li class="active">{{$post->title}}</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-md-8">
           <div class="well">
                <h1>{{ $post->title }}</h1>
                <img style="width:100%" src="/storage/images/cover_images/{{$post->cover_image}}" alt="{{$post->cover_image}}">
                <br><br>
                <p class="blog-post-meta">Posted at : {{ $post->created_at }} | by : {{ $post->user->name}}</p>
                <p>{!! $post->body !!}</p>
           </div>
        </div>
        @if(!Auth::guest())
            @if ($post->user_id === Auth::user()->id)
            <div class="col-md-4">
                <div class="well">
                    <h1>Options</h1>
                    <hr>
                    <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary">Edit Post</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="POST" class="pull-right">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete Post</button>
                    </form> 
                </div>
            </div>
            @endif
        @endif
    </div>
{{-- @include('inc.footer') --}}
</div>
@endsection
