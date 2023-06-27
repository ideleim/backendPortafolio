<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function consultarDatos()
    {
        $datos = Formulario::all();

        return response()->json($datos);
    }

    public function consultarDato($id)
    {
        $datos = Formulario::find($id);

        if(!$datos){
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($datos);
    }

    public function guardarDatos(Request $request)
    {
        $datos = $request->all();

        $nuevoDato = Formulario::create($datos);

        return response()->json($nuevoDato, 201);
    }

    public function actualizarDato(Request $request, $id)
    {
        $datos = Formulario::find($id);

        if(!$datos){
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        $datos->fill($request->all());
        $datos->save();

        return response()->json(['message' => 'Registro actualizado correctamente', 'data' => $datos]);
    }

    public function eliminarDato($id)
    {
        $dato = Formulario::find($id);

        if(!$dato){
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        $dato->delete();

        return response()->json(['message' => 'Registro eliminado correctamente']);
    }
}
