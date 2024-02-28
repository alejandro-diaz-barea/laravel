<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $ratings = Rating::all();
        return response()->json(['ratings' => $ratings]);
    }

    public function store(Request $request)
{
    // Validar los datos de entrada
    $validatedData = $request->validate([
        'rating' => 'required|integer',
        'comic_id' => 'required|exists:comics,id',
    ]);

    // Crear la calificación en la base de datos
    $rating = new Rating();
    $rating->rating = $validatedData['rating'];
    $rating->comic_id = $validatedData['comic_id'];
    $rating->save();

    return response()->json(['message' => 'Calificación almacenada correctamente'], 201);
}


    public function show(Rating $rating)
    {
        return response()->json(['rating' => $rating]);
    }

    public function update(Request $request, Rating $rating)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Actualizar los datos de la calificación con los recibidos en la solicitud
        $rating->rating = $request->input('rating');
        
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
