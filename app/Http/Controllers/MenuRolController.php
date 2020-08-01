<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuRolController extends Controller
{
    
    public function index()
    {
        $rols = Rol::orderBy('id')->pluck('nombre','id')->toArray();
    }
 
    public function guardar(Request $request)
    {
        
    }


   
}
