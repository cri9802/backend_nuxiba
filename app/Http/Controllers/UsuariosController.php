<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
         $verusuarios = Usuarios::get();
                    echo json_encode($verusuarios);
    }
    
    public function store(Request $request)
    {
         $usuarios = new Usuarios();
            
                
                
                $usuarios -> correo = $request->input('correo');
                $usuarios -> pass = $request->input('pass');
                $usuarios -> tipo = $request->input('tipo');
                $usuarios -> save();

                echo json_encode($usuarios);
    }

    public function update(Request $request, $usuarios)
    {
            $usuario = Usuarios::find($usuarios);
                    
                    $usuario -> correo = $request->input('correo');
                    $usuario -> pass = $request->input('pass');
                    $usuario -> tipo = $request->input('tipo');
                    
                   

                    $usuario -> save();
                
            echo json_encode($usuario);
    }

    public function destroy($usuarios)
    {
        $usuario = Usuarios::find($usuarios);
                    $usuario->delete();
    }
}
