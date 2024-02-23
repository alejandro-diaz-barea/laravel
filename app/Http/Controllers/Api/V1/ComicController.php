<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $comics = Comic::all();
        return response()->json(['comics' => $comics]);
    }

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            'title' => 'required',
            'stock' => 'required',
            'comic_number' => 'required',
            'writers' => 'required',
            'artist' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_url' => 'required|url',
        ]);

        // Crear un nuevo cómic con los datos recibidos en la solicitud
        $comic = new Comic();
        $comic->title = $request->input('title');
        $comic->stock = $request->input('stock');
        $comic->comic_number = $request->input('comic_number');
        $comic->writers = $request->input('writers');
        $comic->artist = $request->input('artist');
        $comic->description = $request->input('description');
        $comic->price = $request->input('price');
        $comic->image_url = $request->input('image_url');

        // Guardar el cómic en la base de datos
        $comic->save();

        return response()->json(['message' => 'Cómic creado exitosamente']);
    }

    public function show(Comic $comic)
    {
        return response()->json(['comic' => $comic]);
    }

    public function update(Request $request, Comic $comic)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            'title' => 'required',
            'stock' => 'required',
            'comic_number' => 'required',
            'writers' => 'required',
            'artist' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_url' => 'required|url',
        ]);

        // Actualizar los datos del cómic con los recibidos en la solicitud
        $comic->title = $request->input('title');
        $comic->stock = $request->input('stock');
        $comic->comic_number = $request->input('comic_number');
        $comic->writers = $request->input('writers');
        $comic->artist = $request->input('artist');
        $comic->description = $request->input('description');
        $comic->price = $request->input('price');
        $comic->image_url = $request->input('image_url');

        // Guardar los cambios en la base de datos
        $comic->save();

        return response()->json(['message' => 'Cómic actualizado exitosamente']);
    }

    public function destroy(Comic $comic)
    {
        // Eliminar el cómic de la base de datos
        $comic->delete();

        return response()->json(['message' => 'Cómic eliminado exitosamente']);
    }
}
