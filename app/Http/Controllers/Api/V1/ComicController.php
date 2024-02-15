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
            'stock' => 'required',
            'numero_de_comic' => 'required',
            'escritores' => 'required',
            'dibujante' => 'required',
            'description' => 'required',
            'price' => 'required',
            'imagen_url' => 'required|url',
        ]);

        // Crear un nuevo cómic con los datos recibidos en la solicitud
        $comic = new Comic();
        $comic->stock = $request->input('stock');
        $comic->numero_de_comic = $request->input('numero_de_comic');
        $comic->escritores = $request->input('escritores');
        $comic->dibujante = $request->input('dibujante');
        $comic->description = $request->input('description');
        $comic->price = $request->input('price');
        $comic->imagen_url = $request->input('imagen_url');

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
            'stock' => 'required',
            'numero_de_comic' => 'required',
            'escritores' => 'required',
            'dibujante' => 'required',
            'description' => 'required',
            'price' => 'required',
            'imagen_url' => 'required|url',
        ]);

        // Actualizar los datos del cómic con los recibidos en la solicitud
        $comic->stock = $request->input('stock');
        $comic->numero_de_comic = $request->input('numero_de_comic');
        $comic->escritores = $request->input('escritores');
        $comic->dibujante = $request->input('dibujante');
        $comic->description = $request->input('description');
        $comic->price = $request->input('price');
        $comic->imagen_url = $request->input('imagen_url');

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
