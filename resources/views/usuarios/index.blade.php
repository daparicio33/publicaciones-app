@extends('adminlte::page')
@section('title','Lista de publicaciones')
@section('content_header')
<h1>Lista de Usuarios</h1>
@stop
@section('content')
<table class="table">
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>DNI</th>
    </tr>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->DNI }}</td>
            <td> 
                <a href="{{ asset('usuarios/'.$usuario->id.'/edit')}}" class="btn btn-info">
                    editar
                </a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="mostrar({{ $usuario->id }})">
                    Eliminar
                </a>
            <div id="{{ 'confirmar'.$usuario->id }}" style="display: none">
                <p>desea eliminar</p>
                <form action="{{ asset('usuarios/'.$usuario->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">SI</button>
                    <a id="btnNO" class="btn btn-danger" onclick="ocultar({{ $usuario->id }})">NO </a>
                </form>
            </div>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
<script>
    
</script>
@endsection