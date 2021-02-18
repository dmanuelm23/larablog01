@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <div class="form-gorup">
            <label for="name">Nombre:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" readonly>
        </div>
        <div class="form-gorup">
            <label for="last_name">Apellido:</label>
            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" readonly>
        </div>
        <div class="form-gorup">
            <label for="email">Correo electrónico:</label>
            <input class="form-control" type="text" name="email" id="email" value="{{ $user->email }}" readonly>
        </div>
    </div>
@endsection