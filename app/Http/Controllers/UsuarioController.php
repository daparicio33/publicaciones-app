<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    //

    public function index(){
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $usuario = new Usuario;
        $usuario->nombre=$request->nombre;
        $usuario->email=$request->email;
        $usuario->dni=$request->dni;
        $usuario->save();
        return Redirect::to('usuarios');
    }

    public function edit($id){
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update($id, Request $request){
        $usuario = Usuario::findOrFail($id);
        $usuario->nombre=$request->nombre;
        $usuario->email=$request->email;
        $usuario->dni=$request->dni;
        $usuario->update();
        return Redirect::to('usuarios');
    }

    public function delete($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return Redirect::to('usuarios');
    }
}
