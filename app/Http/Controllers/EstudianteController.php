<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos["estudiantes"] = Estudiante::paginate(5); 
        return view("estudiante.index", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("estudiante.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $campos = [
            "Nombre"=> "required|string|max:30",
            "ApellidoPaterno"=> "required|string|max:60",
            "ApellidoMaterno"=> "required|string|max:60",
            "Materia"=> "required|string|max:60",
            "Carrera"=> "required|string|max:60",
        ];

        $mensaje = ['required'=> "El :attribute es requerido"];

        $request->validate($campos, $mensaje);

        $datosEstudiante = request()->except("_token");
        Estudiante::create($datosEstudiante);
        // return response()->json($datosEstudiante); 
        return redirect("estudiantes");
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view("estudiante.edit", compact('estudiante') );
        //.compact($datosEstudiante) dedntro de view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
           $campos = [
            "Nombre"=> "required|string|max:30",
            "ApellidoPaterno"=> "required|string|max:60",
            "ApellidoMaterno"=> "required|string|max:60",
            "Materia"=> "required|string|max:60",
            "Carrera"=> "required|string|max:60",
        ];

        $mensaje = ['required'=> "El :attribute es requerido"];
        
        $request->validate($campos, $mensaje);
        $datosEstudiante = request()->except(['_token', '_method']);
        Estudiante::where('id','=', $id)->update($datosEstudiante);
        
     
        return redirect("estudiantes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Estudiante::destroy($id);
        return redirect("estudiantes");
    }
}
