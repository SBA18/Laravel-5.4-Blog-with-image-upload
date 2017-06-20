@extends('layouts.app')

@section('content')
@include('inc.jumbotron')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1>Blog Posts</h1>
           <hr>
           @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="well">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width:100%; height:200px;" src="/storage/images/cover_images/{{$post->cover_image}}" alt="{{$post->cover_image}}">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h3><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></h3>
                                <p class="blog-post-meta">Posted at : {{ $post->created_at }} | by : {{ $post->user->name}}</p>
                                <p>{!! str_limit($post->body, 250) !!} <a href="{{route('posts.show', $post->id)}}">>>Read more <<</a></p>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
                {{ $posts->links() }}
           @else
                <p><h2>No Posts Found !!!</h2></p>
                <p><h2><a href="/login">Login</a> or <a href="/signup">Singup</a> to create new Post ....</h2></p>
           @endif
        </div>
    </div>
{{-- @include('inc.footer') --}}
</div>
@endsection
