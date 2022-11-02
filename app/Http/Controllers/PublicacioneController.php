<?php

namespace App\Http\Controllers;

use App\Models\Publicacione;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicacioneController extends Controller
{
    //
    public function index(){
        $publicaciones = Publicacione::all();
        return view('publicaciones.index', compact('publicaciones'));
    }
    public function create(){
        $usuarios = Usuario::all();
        return view('publicaciones.create', compact('usuarios'));
    }
    public function store(Request $request){
        $publicacione =  new Publicacione();
        $publicacione->titulo = $request->titulo;
        $publicacione->descripcion =$request->descripcion;
        $publicacione->imagen =$request->imagen;
        $publicacione->fecha =$request->fecha;
        $publicacione->usuario_id =$request->usuario_id;
        $publicacione->save();
        return Redirect::to('publicaciones');
    }
    public function edit($id){
        $usuarios = Usuario::all();
        $publicacione=Publicacione::findOrfail($id);
        return view('publicaciones.edit', compact('publicacione', 'usuarios'));
    }
    public function update($id, Request $request){
        $publicacione= Publicacione::findOrfail($id);
        $publicacione->titulo = $request->titulo;
        $publicacione->descripcion =$request->descripcion;
        $publicacione->imagen =$request->imagen;
        $publicacione->fecha =$request->fecha;
        $publicacione->usuario_id =$request->usuario_id;
        $publicacione->update();
        return Redirect::to('publicaciones');
    }
    public function delete($id){
        $publicacione =Publicacione::findOrfail($id);
        $publicacione->delete();
        return Redirect::to('publicaciones');
    }
}
