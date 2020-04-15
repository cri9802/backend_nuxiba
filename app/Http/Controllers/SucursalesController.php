<?php

namespace App\Http\Controllers;

use App\sucursales;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{
     public function index()
    {
         $versucursales = Sucursales::get();
                    echo json_encode($versucursales);
    }
   
    public function store(Request $request)
    {
         $sucursales = new Sucursales();
            
                
                $sucursales -> nombre = $request ->input('nombre');
                $sucursales -> calle = $request->input('calle');
                $sucursales -> numint = $request->input('numint');
                $sucursales -> numext = $request->input('numext');
                $sucursales -> municipio = $request->input('municipio');
                $sucursales -> estado = $request->input('estado');
                $sucursales -> cp = $request->input('cp');
                
             


                $sucursales -> save();

                echo json_encode($sucursales);
    }

    
   
    public function update(Request $request, $sucursales)
    {
        $sucursal = Sucursales::find($sucursales);
                    $sucursal -> nombre = $request->input('nombre');
                    $sucursal -> calle = $request->input('calle');
                    $sucursal -> numint = $request->input('numint');
                    $sucursal -> numext = $request->input('numext');
                    $sucursal -> municipio = $request->input('municipio');
                    $sucursal -> estado = $request->input('estado');
                    $sucursal -> cp = $request->input('cp');
                    
                   

                    $sucursal -> save();
                
            echo json_encode($sucursal);
    }

    
    public function destroy($sucursales)
    {
        $sucursal = Sucursales::find($sucursales);
                    $sucursal->delete();
    }
}
