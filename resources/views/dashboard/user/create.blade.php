@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <form action="{{route('user.store')}}" method="post">
            @include('dashboard.user._form', ['pasw' => true])
        </form>
    </div>
@endsection