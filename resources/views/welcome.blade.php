@extends('adminlte::page')

@section('title', 'Publicaciones')

@section('content_header')
    <h1>Publicaciones del Sistema</h1>
@stop

@section('content')
    <p>Aca ponemos las publicaciones del sistema.</p>
    {{-- inicio de la publicacion --}}
    @foreach ($publicaciones as $publicacione)
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" class="img-fluid rounded mx-auto d-block" alt="...">
          </div>
          <div class="col-md-9">
            <div class="card-header">
                <h5 class="card-title">{{ $publicacione->titulo }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">
                    {{ $publicacione->descripcion }}
                </p>
                <p class="card-text"><small class="text-muted">{{ $publicacione->usuario->nombre }}</small></p>
                
                <h6>Comentarios</h6>
                @foreach ($publicacione->comentarios as $comentario)
                    <div class="card">
                        <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $comentario->fecha }}</h6>
                        <small>Calificacion {{ $comentario->calificacion }}</small>
                        <p class="card-text">
                            {{ $comentario->comentario }}
                        </p>
                        </div>
                    </div>
                @endforeach
                <h6>Nuevo Comentario</h6>
                <form action="{{ asset('comentarios/') }}" method="post">
                    @csrf
                    <input type="hidden" name="publicacione_id" value="{{ $publicacione->id }}">
                    <div class="card">
                        <div class="card-body">
                            <textarea name="comentario" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-file-export"></i> Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    @endforeach
    
    {{-- fin de publicacion --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop