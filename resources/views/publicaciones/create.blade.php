@extends('adminlte::page')

@section('title', 'Nueva Publicación')

@section('content_header')
    <h1>Añadir nueva publicación</h1>
@stop

@section('content')
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-2">
            <img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" class="img-fluid rounded mx-auto d-block" alt="...">
        </div>
        <div class="col-md-10">
            <form action="{{ asset('publicaciones') }}" method="post">
                @csrf
                <label for="">Título</label>
                <input type="text" name="titulo" class="form-control">
                <label for="">Descripción</label>
                <input type="text" name="descripcion"class="form-control">
                <label for="">Imagen</label>
                <input type="text" name="imagen"class="form-control">
                <label for="">Fecha</label>
                <input type="date" name="fecha"class="form-control">
                <label for="">Comentario</label>
                <input type="text" name="comentario"class="form-control">
                <label for="">Nombre de usuario</label>   
                <select name="usuario_id" class="form-control">
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-secondary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop