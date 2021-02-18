@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <form action="{{route('post.update', $post->id)}}" method="POST">
            @method('PUT')
            @include('dashboard.post._form')
        </form>
    <br>
        <form action="{{route('post.image', $post)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-6">
                    <input type="submit" value="Subir imagen" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection