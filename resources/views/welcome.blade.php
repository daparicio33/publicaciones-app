@extends('adminlte::page')

@section('title', 'Publicaciones')

@section('content_header')
    <h1>Publicaciones del Sistema</h1>
@stop

@section('content')
    <p>Aca ponemos las publicaciones del sistema.</p>
    {{-- inicio de la publicacion --}}
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" class="img-fluid rounded mx-auto d-block" alt="...">
          </div>
          <div class="col-md-9">
            <div class="card-header">
                <h5 class="card-title">Publicacion 1</h5>
            </div>
            <div class="card-body">
              
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Nombre de Autor</small></p>
                <h6>Comentarios</h6>
                <div class="card">
                    <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">05-08-2022</h6>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">05-08-2022</h6>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
                <h6>Nuevo Comentario</h6>
                <div class="card">
                    <div class="card-body">
                        <textarea name="" id="" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-file-export"></i> Enviar
                        </button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    {{-- fin de publicacion --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop