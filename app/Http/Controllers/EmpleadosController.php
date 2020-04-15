<?php

namespace App\Http\Controllers;

use App\empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
   public function index()
    {
         $verempleados = Empleados::get();
                    echo json_encode($verempleados);
    }


    
    public function store(Request $request)
    {
             $empleado = new empleados();
            
                $empleado -> correo = $request->input('correo');
                $empleado -> pass = $request->input('pass');
                $empleado -> nombre = $request ->input('nombre');
                $empleado -> app = $request->input('app');
                $empleado -> apm = $request->input('apm');
                $empleado -> status = $request->input('status');
             


                $empleado -> save();

                echo json_encode($empleado);
    }


    
    public function update(Request $request, $empleados)
    {
                    $empleado = Empleados::find($empleados);
                    $empleado -> correo = $request->input('correo');
                    $empleado -> pass = $request->input('pass');
                    $empleado -> nombre = $request->input('nombre');
                    $empleado -> app = $request->input('app');
                    $empleado -> apm = $request->input('apm');
                   
                    $empleado -> status = $request->input('status');
                   

                    $empleado -> save();
                
            echo json_encode($empleado);
    }

   
    public function destroy($empleados)
    {
        $empleado = Empleados::find($empleados);
                    $empleado->delete();
    }
}
