<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Validator;

class EstudianteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiante = Estudiante::all();
        if($estudiante->isEmpty()){
            return response()->json(["mensaje"=> "Lista de Estudiantes Vacia","status"=> 200 ]);
        }
        return response()->json($estudiante, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(),[
            'Nombre'=>'required|string|max:30',
            'ApellidoPaterno'=>'required|string|max:60',
            'ApellidoMaterno'=>'required|string|max:60',
            'Materia'=>'required|string|max:60',
            'Carrera'=>'required|string|max:60',
        ]); 
        if($validador->fails()){
            return response()->json(
                ["mensaje"=> "Error en la Validacion de Datos", 
                "errors"=> $validador->errors(),
                "status"=> 400]
            );
        }
        $estudiante = Estudiante::create($request->all());
        return response()->json(["Estudiante"=> $estudiante, "mensaje"=> "Se registro correctamente"],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estudianteFound = Estudiante::findOrFail($id);

        if(!$estudianteFound){
            return response()->json(["mensaje"=> "Estudiante No Encontrado"]);
        }

        return response()->json(["Estudiante"=> $estudianteFound, "status"=> 200]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::find($id);
        if(!$estudiante){
            return response()->json(["mensaje"=> "Estudiante No Encontrado"],400);
        }

        $validador = Validator::make($request->all(),[
            'Nombre'=>'required|string|max:30',
            'ApellidoPaterno'=>'required|string|max:60',
            'ApellidoMaterno'=>'required|string|max:60',
            'Materia'=>'required|string|max:60',
            'Carrera'=>'required|string|max:60',
        ]); 

        if($validador->fails()){
            return response()->json(["mensaje"=> "Estudiante No Encontrado"],422);
        }

        $estudiante->update($request->all());

        return response()->json([
            "mensaje" => "Estudiante actualizado correctamente",
            "data" => $estudiante
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        if(!$estudiante){
            return response()->json(["mensaje"=> "Estudiante No Encontrado", "status"=> 404]);
        }
        $estudiante->destroy($id);
        return response()->json(["mensaje"=> "Estudiante Eliminado","status"=>200]);
    }
}
