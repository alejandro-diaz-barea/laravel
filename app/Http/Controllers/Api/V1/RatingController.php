<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $ratings = Rating::all();
        return response()->json(['ratings' => $ratings]);
    }

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Coloca aquí las reglas de validación para los datos de la calificación
        ]);

        // Crear una nueva calificación con los datos recibidos en la solicitud
        $rating = new Rating();
        // Llenar la calificación con los datos recibidos en la solicitud
        // $rating->campo = $request->input('campo');
        // Guardar la calificación en la base de datos
        $rating->save();

        return response()->json(['message' => 'Calificación creada exitosamente']);
    }

    public function show(Rating $rating)
    {
        return response()->json(['rating' => $rating]);
    }

    public function update(Request $request, Rating $rating)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Coloca aquí las reglas de validación para los datos de la calificación
        ]);

        // Actualizar los datos de la calificación con los recibidos en la solicitud
        // $rating->campo = $request->input('campo');
        // Guardar los cambios en la base de datos
        $rating->save();

        return response()->json(['message' => 'Calificación actualizada exitosamente']);
    }

    public function destroy(Rating $rating)
    {
        // Eliminar la calificación de la base de datos
        $rating->delete();

        return response()->json(['message' => 'Calificación eliminada exitosamente']);
    }
}
