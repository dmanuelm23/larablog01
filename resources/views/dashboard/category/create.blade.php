@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <form action="{{route('category.store')}}" method="post">
            @include('dashboard.category._form')
        </form>
    </div>
@endsection