<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarritoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $carritos = Carrito::all();
        return response()->json(['carritos' => $carritos]);
    }

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Aquí coloca las reglas de validación para los datos del carrito
        ]);

        // Crear un nuevo carrito con los datos recibidos en la solicitud
        $carrito = new Carrito();
        // Llenar el carrito con los datos recibidos en la solicitud
        // $carrito->campo = $request->input('campo');
        // Guardar el carrito en la base de datos
        $carrito->save();

        return response()->json(['message' => 'Carrito creado exitosamente']);
    }

    public function show(Carrito $carrito)
    {
        return response()->json(['carrito' => $carrito]);
    }

    public function update(Request $request, Carrito $carrito)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Aquí coloca las reglas de validación para los datos del carrito
        ]);

        // Actualizar los datos del carrito con los recibidos en la solicitud
        // $carrito->campo = $request->input('campo');
        // Guardar los cambios en la base de datos
        $carrito->save();

        return response()->json(['message' => 'Carrito actualizado exitosamente']);
    }

    public function destroy(Carrito $carrito)
    {
        // Eliminar el carrito de la base de datos
        $carrito->delete();

        return response()->json(['message' => 'Carrito eliminado exitosamente']);
    }
}
