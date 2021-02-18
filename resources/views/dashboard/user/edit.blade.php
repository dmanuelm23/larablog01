@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <form action="{{route('user.update', $user->id)}}" method="POST">
            @method('PUT')
            @include('dashboard.user._form', ['pasw' => false])
        </form>
    </div>
@endsection