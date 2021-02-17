@extends('dashboard.master')
@section('content')
    <a href="{{route('post.create')}}" class="btn btn-primary mt-3 mb-3">Crear</a>
    <table class='table'>
        <thead>
            <tr>
                <td>Id</td>
                <td>Título</td>
                <td>Posteado</td>
                <td>Creación</td>
                <td>Actualización</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->posted}}</td>
                    <td>{{$post->created_at->format('d-m-Y')}}</td>
                    <td>{{$post->updated_at->format('d-m-Y')}}</td>
                    <td>
                        <a href="{{route('post.show', $post->id)}}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary btn-sm">Actualizar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="{{$post->id}}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
    @include('dashboard.post.modals.modal_delete')
@endsection
@section('scripts')
    <script>
        window.onload = function(){
            $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) 
                var id = button.data('id')
                var action = $("#formDelete").attr('data-action').slice(0,-1);
                $("#formDelete").attr('action', action + id);
                var modal = $(this)
                modal.find('.modal-title').text('Se eliminara el POST ' + id)
            })
        }
    </script>
@endsection