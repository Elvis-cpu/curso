@extends('adminlte::page')

@section('title', 'administrador')

@section('content_header')
    @can('admin.roles.create')
        <a class="btn btn-success btn-md float-right" href="{{ route('admin.roles.create') }}">Agregar rol</a>
    @endcan
    
    <h1>Lista de Roles</h1>
@stop

@section('content')

    @if (session('info'))

        <div class="alert alert-danger">
            {{ session('info') }}
        </div>
        
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">
                                @can('admin.roles.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }} ">Editar</a>                               
                                @endcan
                                    </td>
                            <td width="10px">
                                @can('admin.roles.destroy')                                
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop