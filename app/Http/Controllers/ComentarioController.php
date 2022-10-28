<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class ComentarioController extends Controller
{
    //
    public function index(){
        $comentarios=Comentario::all();
        return view('comentario.index', compact('clientes'));
    }

    public function create(){
        return view('comentario.create');
    }

    public function store(Request $request){
        $comentario = new Comentario();
        $comentario->descripcion=$request->descripcion;
        $comentario->save();
        Return Redirect::to('comentario');
        $comentario->save();
        Return Redirect::to('comentario');
    }

    public function edit($id){
        $comentario = Comentario::findOrFail($id);
        return view('comentario.edit', compact('comenrario'));
        }
    public function update($id, Request $request){
        $comentario = Comentario::finOrFail($id);
        $comentario->descripcion=$request->descripcion;
        $comentario->update();
        Return Redirect::to('comentario');
    }
    public function delete($id){
        $comentario = Comentario::finOrFail($id);
        $comentario->delete();
        return Redirect::to('comentario');
    }
}
