@extends('adminlte::page')
@section('title', 'Editar Cometario')
@section('content_header')
    <h1>Ediatr Cometario</h1>
    <small>welcome to edit coment</small>
@stop
@section('content')
<h3>Edita Comenatrio</h3>
    <form action="{{ asset('comentarios/'.$comentario->id) }}" method="post">
        @csrf
        @method('put')
        <label for="">Comentario</label>
        <input type="text" name="fecha" value="{{ $comentario->descripcion }}">
        <button class="btn btn-success">
            <i class="bi bi-arrow-bar-up"></i>
        </button>
    </form>
    <button type="submit"><i class="bi bi-box-arrow-in-up"></i></button>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop