@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>My Blog Posts</h1>
                    <br>
                    @if(count($posts) > 0)
                        <table class="table table-hover">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary">Edit Post</a></td>
                                    <td style="textalign:right">
                                        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Delete Post</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p><h3>Oooops ! You have no Posts yet !!! </h3></p>
                        <p><h3>To create your first Post go <a href="{{route('posts.create')}}">>> HERE << </a></h3></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
