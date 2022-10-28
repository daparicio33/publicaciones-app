@extends('layouts.base')
@section('cuerpo')
<h1>Nuevo Usuario</h1>
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
