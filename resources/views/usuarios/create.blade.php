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
                <label for="nombre"><i class="fas fa-list-ul"></i> Nombre</label>
                <input class="form-control" type="text" name="nombre">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email">
                <label for="dni">DNI</label>
                <input class="form-control" type="text" name="dni">
                <button class="btn btn-primary mt-2" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</form>
@endsection
