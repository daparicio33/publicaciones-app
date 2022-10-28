@extends('adminlte::page')
@section('title','Lista de publicaciones')
@section('content_header')
<h1>Nuevo Usuario</h1>
@stop
@section('content')
<form action="{{ asset('usuarios') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="nombre">nombre</label>
                <input class="form-control" type="text" name="nombre">
                <label for="apellido">apellido</label>
                <input class="form-control" type="text" name="email">
                <label for="dni">DNI</label>
                <input class="form-control" type="text" name="dni">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</form>
@endsection
