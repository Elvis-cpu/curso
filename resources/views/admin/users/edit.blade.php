@extends('adminlte::page')

@section('title', 'administrador')

@section('content_header')
    <h1>Editar usuarios</h1>
@stop

@section('content')

        @if (session('info'))
            <div class="alert alert-success">
                {{ session('info') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <p class="h5">Nombre:</p>
                <p class="form-control">{{ $user->name }}</p>

                <h2 class="h5">Listado de roles</h2>
                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}


                @include('admin/users/partials/form')

                {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}

                {!! Form::close() !!}
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop