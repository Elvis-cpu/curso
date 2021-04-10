@extends('adminlte::page')

@section('title', 'administrador')

@section('content_header')
    @can('admin.tags.create')
         <a class="btn btn-success btn-md float-right" href="{{ route('admin.tags.create') }}">Nuevas etiquetas</a>
    @endcan
        
    <h1>Lista de etiquetas</h1>
@stop

@section('content')

        @if (session('info'))

            <div class="alert alert-danger">
                {{ session('info') }}
            </div>

        @endif

    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.edit', $tag) }} ">Editar</a>                               
                                @endcan

                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger  btn-sm">Eliminar</button>
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