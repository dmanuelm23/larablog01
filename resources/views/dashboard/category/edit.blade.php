@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <form action="{{route('category.update', $category->id)}}" method="POST">
            @method('PUT')
            @include('dashboard.category._form')
        </form>
    </div>
@endsection