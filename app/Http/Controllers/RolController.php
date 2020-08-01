<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use App\Http\Requests\ValidacionRol;

class RolController extends Controller
{
    
    public function index()
    {
        $datas = Rol::orderBy('id')->get();
        return view("admin.rol.index",compact('datas'));

    }

    
    public function crear()
    {
       return view('admin.rol.crear');
    }

   
    public function guardar(ValidacionRol $request)
    {
       Rol::create($request->all());
       return redirect('admin/rol')->with('mensaje','Rol creado con exito');
    }

    
    public function editar($id)
    {
        $data = Rol::find($id); //Rol::findOrFail($id);

        
        return view('admin.rol.editar',compact('data'));
    }

    
    public function actualizar(Request $request, $id)
    {
        Rol::findOrFail($id)->update($request->all());
        return redirect('admin/rol')->with('mensaje','Rol actulizado con exito');

    }

    
    public function eliminar(Request $request, $id)
    {

        dd($id);

        if($request->ajax()){
            if(Rol::destroy($id)){
                return response()->json(['mensaje' => 'ok']);
            }else{
                return response()->json(['mensaje' => 'ng']);
            }
        }else{
            abort(404);
        }
    }
}
