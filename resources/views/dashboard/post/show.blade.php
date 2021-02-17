@extends('dashboard.master')
@section('content')
    <div class="jumbotron">
        <div class="form-gorup">
            <label for="title">Título:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}" readonly>
        </div>
        <div class="form-gorup">
            <label for="url_clean">Url limpia:</label>
            <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{$post->url_clean}}" readonly>
        </div>
        <div class="form-gorup">
            <label for="content">Contenido:</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10" readonly>{{$post->content}}</textarea>
        </div>
    </div>
@endsection