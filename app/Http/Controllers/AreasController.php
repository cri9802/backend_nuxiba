<?php

namespace App\Http\Controllers;
use App\Areas;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index()
    {
         $verareas = Areas::get();
                    echo json_encode($verareas);
    }
   
    public function store(Request $request)
    {
         $areas = new Areas();
            
                
                $areas -> nombre = $request ->input('nombre');
                
                
                $areas -> save();

                echo json_encode($areas);
    }

    public function update(Request $request, $areas)
    {
        $area = Areas::find($areas);
                    $area -> nombre = $request->input('nombre');
                    $area -> pasillo = $request->input('pasillo');                 
                   

                    $area -> save();
                
            echo json_encode($area);
    }

    
    public function destroy($areas)
    {
        $areas = Areas::find($areas);
                    $area->delete();
    }//
}
