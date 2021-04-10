@extends('adminlte::page')

@section('title', 'administrador')

@section('content_header')
    <a class="btn btn-success btn-md float-right" href="{{ route('admin.posts.create') }}">Nuevos Posts</a>
    <h1>mostras lista de posts</h1>
@stop

@section('content')
@if (session('info'))

    <div class="alert alert-danger">
        {{ session('info') }}
    </div>
     
 @endif
@livewire('admin.posts-index')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop