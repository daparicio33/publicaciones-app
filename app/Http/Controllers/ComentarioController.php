<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacione;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class ComentarioController extends Controller
{
    //
    public function index(){
        $comentarios=Comentario::all();
        return view('comentarios.index', compact('comentarios'));
    }

    public function create(){
        $publicaciones=Publicacione::all();
        return view('comentarios.create', compact('publicaciones'));
    }

    public function store(Request $request){
        $comentario = new Comentario();
        $comentario->descripcion=$request->descripcion;
        $comentario->publicacione_id=$request->publicacione_id;
        $comentario->save();
        return Redirect::to('comentarios');
    }

    public function edit($id){
        $comentario = Comentario::findOrFail($id);
        return view('comentarios.edit', compact('comentarios'));
        }
    public function update($id, Request $request){
        $comentario = Comentario::finOrFail($id);
        $comentario->descripcion=$request->descripcion;
        $comentario->update();
        return Redirect::to('comentarios');
    }
    public function delete($id){
        $comentario = Comentario::finOrFail($id);
        $comentario->delete();
        return Redirect::to('comentarios');
    }
}
