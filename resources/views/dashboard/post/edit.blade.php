@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <form action="{{route('post.update', $post->id)}}" method="POST">
            @method('PUT')
            @include('dashboard.post._form')
        </form>
    </div>
@endsection