@extends('adminlte::page')
@section('title','Lista de publicaciones')
@section('content_header')
<h1>Nuevo Usuario</h1>
@stop
@section('content')
<form action="{{ asset('usuarios') }}" method="post">
    @csrf
    <label for="nombre">nombre</label>
    <input type="text" name="nombre">

    <label for="apellido">apellido</label>
    <input type="text" name="apellido">

    <label for="dni">DNI</label>
    <input type="text" name="dni">

    <label for="foto">foto</label>
    <input type="text" name="foto">

    <button type="submit">Enviar</button>
</form>
@endsection
