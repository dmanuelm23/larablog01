@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <form action="{{route('post.store')}}" method="post">
            @include('dashboard.post._form')
        </form>
    </div>
@endsection