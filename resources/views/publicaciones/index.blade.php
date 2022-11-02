@extends('adminlte::page')

@section('title','Lista de publicaciones')

@section('content_header')
    <h1>Lista de publicaciones</h1>
@stop

@section('content')

    <p>Aca la lista de publicaciones</p>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="responsive-table">
                    <table class="table">
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Fecha</th>
                            <th>Autor</th>
                        </tr>
                        @foreach ($publicaciones as $publicacione)
                            <tr>
                                <td>{{ $publicacione->titulo }}</td>
                                <td>{{ $publicacione->descripcion }}</td>
                                <td>{{ $publicacione->imagen }}</td>
                                <td>{{ $publicacione->fecha }}</td>
                                <td>{{ $publicacione->usuario->nombre }}</td>
                                <td>
                                    <a href="{{ asset('publicaciones/'.$publicacione->id.'/edit') }}" class="btn btn-outline-primary">Editar</a>
                                </td>
                                <td>
                                    <a onClick="mostrar({{ $publicacione->id }})" class="btn btn-outline-danger">Eliminar</a>
                                    <div id="contenedor{{ $publicacione->id }}" style="display: none" class="mt-2">
                                        <form action="{{ asset('publicaciones/'.$publicacione->id) }}" method="post" style="display: flex" >
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">Si</button>
                                            <a onclick="ocultar({{ $publicacione->id }})" class="btn btn-outline-primary mx-1">No</a>
                                        </form>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
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