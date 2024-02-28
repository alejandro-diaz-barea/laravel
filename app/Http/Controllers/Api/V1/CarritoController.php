<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Carrito;
use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = Carrito::where('user_id', Auth::id())->first();
        return response()->json(['carrito' => $carrito]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'completed' => 'required|boolean',
        ]);

        // Verifica si el usuario ya tiene un carrito
        $existingCarrito = Carrito::where('user_id', Auth::id())->first();
        if ($existingCarrito) {
            return response()->json(['message' => 'El usuario ya tiene un carrito', 'id' => $existingCarrito->id], 200);
        }

        $carrito = new Carrito();
        $carrito->user_id = Auth::id(); // Establecer el user_id correctamente
        $carrito->completed = $request->input('completed');
        $carrito->save();

        return response()->json([$carrito]);
    }

    public function show(Carrito $carrito)
    {
        // Verifica que el carrito pertenezca al usuario autenticado
        if ($carrito->user_id !== Auth::id()) {
            return response()->json(['message' => 'No tienes permiso para ver este carrito'], 403);
        }

        return response()->json(['carrito' => $carrito]);
    }

    public function update(Request $request, Carrito $carrito)
    {
        $request->validate([
            'completed' => 'required|boolean',
        ]);

        // Verifica que el carrito pertenezca al usuario autenticado
        if ($carrito->user_id !== Auth::id()) {
            return response()->json(['message' => 'No tienes permiso para actualizar este carrito'], 403);
        }

        $carrito->completed = $request->input('completed');
        $carrito->save();

        return response()->json(['message' => 'Carrito actualizado exitosamente', 'carrito' => $carrito]);
    }

    public function destroy(Carrito $carrito)
    {
        // Verifica que el carrito pertenezca al usuario autenticado
        if ($carrito->user_id !== Auth::id()) {
            return response()->json(['message' => 'No tienes permiso para eliminar este carrito'], 403);
        }

        $carrito->delete();

        return response()->json(['message' => 'Carrito eliminado exitosamente']);
    }

    public function addComic(Request $request, $carrito_id, $comic_id)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1',
        ]);

        $carrito = Carrito::find($carrito_id);
        if (!$carrito) {
            return response()->json(['message' => 'Carrito no encontrado'], 404);
        }

        $comic = Comic::find($comic_id);
        if (!$comic) {
            return response()->json(['message' => 'Cómic no encontrado'], 404);
        }

        // Verifica que el carrito pertenezca al usuario autenticado
        if ($carrito->user_id !== Auth::id()) {
            return response()->json(['message' => 'No tienes permiso para añadir cómics a este carrito'], 403);
        }

        // Verifica si el cómic ya está en el carrito
        if ($carrito->comics()->where('comic_id', $comic->id)->exists()) {
            return response()->json(['message' => 'El cómic ya está en el carrito'], 400);
        }

        // Añade el cómic al carrito con la cantidad especificada
        $carrito->comics()->attach($comic->id, ['cantidad' => $request->input('cantidad')]);

        return response()->json(['message' => 'Cómic agregado al carrito exitosamente']);
    }

    public function updateComic(Request $request, $carrito_id, $comic_id)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1',
        ]);

        $carrito = Carrito::find($carrito_id);
        if (!$carrito) {
            return response()->json(['message' => 'Carrito no encontrado'], 404);
        }

        // Verifica que el carrito pertenezca al usuario autenticado
        if ($carrito->user_id !== Auth::id()) {
            return response()->json(['message' => 'No tienes permiso para actualizar cómics en este carrito'], 403);
        }

        // Actualiza la cantidad del cómic en el carrito
        $carrito->comics()->updateExistingPivot($comic_id, ['cantidad' => $request->input('cantidad')]);

        return response()->json(['message' => 'Cantidad del cómic en el carrito actualizada']);
    }

    public function removeComic($carrito_id, $comic_id)
    {
        $carrito = Carrito::find($carrito_id);
        if (!$carrito) {
            return response()->json(['message' => 'Carrito no encontrado'], 404);
        }

        // Verifica que el carrito pertenezca al usuario autenticado
        if ($carrito->user_id !== Auth::id()) {
            return response()->json(['message' => 'No tienes permiso para eliminar cómics de este carrito'], 403);
        }

        // Elimina el cómic del carrito
        $carrito->comics()->detach($comic_id);

        return response()->json(['message' => 'Cómic eliminado del carrito']);
    }

    public function getComicsInCart(Carrito $carrito)
    {
        // Verifica que el carrito pertenezca al usuario autenticado
        if ($carrito->user_id !== Auth::id()) {
            return response()->json(['message' => 'No tienes permiso para ver los cómics de este carrito'], 403);
        }

        $comics = $carrito->comics()

                    ->withPivot('cantidad') 
                    ->get();

        return response()->json(['comics' => $comics]);
    }


  
}
