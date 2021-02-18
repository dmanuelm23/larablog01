@extends('dashboard.master')
@section('content')
    <a href="{{route('user.create')}}" class="btn btn-primary mt-3 mb-3">Crear</a>
    <table class='table'>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>apellido</td>
                <td>Email</td> 
                <td>Rol</td> 
                <td>Creación</td>
                <td>Actualización</td> 
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->rol->key}}</td>
                    <td>{{$user->created_at->format('d-m-Y')}}</td>
                    <td>{{$user->updated_at->format('d-m-Y')}}</td>
                    <td>
                        <a href="{{route('user.show', $user->id)}}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary btn-sm">Actualizar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="{{$user->id}}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
    @include('dashboard.user.modals.modal_delete')
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
                modal.find('.modal-title').text('Se eliminara el usuario ' + id)
            })
        }
    </script>
@endsection