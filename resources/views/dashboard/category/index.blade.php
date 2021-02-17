@extends('dashboard.master')
@section('content')
    <a href="{{route('category.create')}}" class="btn btn-primary mt-3 mb-3">Crear</a>
    <table class='table'>
        <thead>
            <tr>
                <td>Id</td>
                <td>Título</td>
                <td>Creación</td>
                <td>Actualización</td> 
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->created_at->format('d-m-Y')}}</td>
                    <td>{{$category->updated_at->format('d-m-Y')}}</td>
                    <td>
                        <a href="{{route('category.show', $category->id)}}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary btn-sm">Actualizar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="{{$category->id}}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
    @include('dashboard.category.modals.modal_delete')
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
                modal.find('.modal-title').text('Se eliminara la categoria ' + id)
            })
        }
    </script>
@endsection