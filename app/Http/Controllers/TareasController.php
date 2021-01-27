<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    public function index(){
        //$tareas = Tareas::all();
        //$tareas = Tareas::find();
        $tareas = Tareas::
                where('done',1)
                ->get();
        
        return response()->json($tareas,200);
    }
}
