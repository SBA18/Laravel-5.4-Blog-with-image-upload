@extends('layouts.app')

@section('content')
@include('inc.jumbotron')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            @include('inc.marketing')
        </div>
    </div>
     @include('inc.footer')
</div>

@endsection
