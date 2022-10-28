@extends('adminlte::page')
@section('title', 'Crear Cometario')
@section('content_header')
    <h1>Nuevo Cometario</h1>
    <small>welcome to new coment</small>
@stop
@section('content')
<h3>Nuevo Comenatrio</h3>
<form action="{{ asset('comentarios/') }}" method="post">
    @csrf
    <label for="">comentarios</label>
    <input type="text" name="descripcion">
    <button class="btn btn-primary">
        <i class="bi bi-arrow-bar-up"></i>
    </button>
</form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop