@extends('adminlte::page')
@section('title','Lista de publicaciones')
@section('content_header')
<h1>Lista de Usuarios</h1>
@stop
@section('content')
<table>
    <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>DNI</th>
        <th>foto</th>
    </tr>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr></tr>
        <td>{{ $usuario->nombre }}</td>
        <td>{{ $usuario->apellido }}</td>
        <td>{{ $usuario->DNI }}</td>
        <td>{{ $usuario->foto }}</td>
        
        <td> <a href="{{ asset('usuarios/'.$usuario->id.'/edit')}}" class="btn btn-info">editar</a></td>
        <td>
            <a class="btn btn-danger" onclick="mostrar({{ $usuario->id }})">
            {{-- div de confirmacion --}}           Eliminar</a>

           <div id="{{ 'confirmar'.$usuario->id }}" style="display: none">
            <p>desea eliminar</p>
            <form action="{{ asset('usuarios/'.$usuario->id)}}" method="post">
                @csrf
                @method('delete')

                <button type="submit" class="btn btn-primary">SI</button>
                <a id="btnNO" class="btn btn-danger" onclick="ocultar({{ $usuario->id }})">NO </a>
            </form>
           </div>
           {{-- fin del div del confirmar --}}

        </td>

      @endforeach
    </tbody>
</table>
<script>
    alert('lista de usuarios')
</script>
@endsection