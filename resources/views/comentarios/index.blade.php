@extends('adminlte::page')
@section('title', 'Comentario')
@section('content_header')
    <h1>Comentario</h1>
    <small>welcome to coments list</small>
@stop
@section('content')
<h3>Lista de comentarios</h3>
<table class="table">
    <thead>
        <tr>
            <th>Comentario</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comentarios as $comentario)
            <tr>
                <td>{{ $comentario->descripcion }}</td>
                <td><a href="{{ asset('comentarios/'.$comentario->id.'/edit') }}"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a></td>
                <td><a onclick="mostrar({{ $comentario->id }})"><button class="btn btn-danger"><i class="bi bi-trash3"></i></button></a>
                    <div id="{{ 'contenedor'.$comentario->id }}" style="display: none">
                        <form action="{{ asset('envios/'.$comentario->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" style="height: 30px; width:40px;" class="btn btn-warning">Si</button>
                        </form>
                        <a class="btn btn-warning" style="height: 30px; width:40px;" onclick="ocultar({{ $comentario->id }})">No</a>
                    </div>
                </td>
            </tr>
        @endforeach
        <a href="{{ asset('comentarios/create') }}"><i class="bi bi-chat-right-dots-fill"></i></a>
    </tbody>
</table>

<script>
    function mostrar(id){
        var contenedor = document.getElementById('contenedor'+id);
        contenedor.style.display='block';
    }

    function ocultar(id){
        var contenedor = document.getElementById('contenedor'+id);
        contenedor.style.display='none';
    }
</script>
@stop