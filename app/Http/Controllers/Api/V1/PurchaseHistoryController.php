<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\PurchaseHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $purchaseHistories = PurchaseHistory::all();
        return response()->json(['purchaseHistories' => $purchaseHistories]);
    }

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Coloca aquí las reglas de validación para los datos del historial de compra
        ]);

        // Crear un nuevo historial de compra con los datos recibidos en la solicitud
        $purchaseHistory = new PurchaseHistory();
        // Llenar el historial de compra con los datos recibidos en la solicitud
        // $purchaseHistory->campo = $request->input('campo');
        // Guardar el historial de compra en la base de datos
        $purchaseHistory->save();

        return response()->json(['message' => 'Historial de compra creado exitosamente']);
    }

    public function show(PurchaseHistory $purchaseHistory)
    {
        return response()->json(['purchaseHistory' => $purchaseHistory]);
    }

    public function update(Request $request, PurchaseHistory $purchaseHistory)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Coloca aquí las reglas de validación para los datos del historial de compra
        ]);

        // Actualizar los datos del historial de compra con los recibidos en la solicitud
        // $purchaseHistory->campo = $request->input('campo');
        // Guardar los cambios en la base de datos
        $purchaseHistory->save();

        return response()->json(['message' => 'Historial de compra actualizado exitosamente']);
    }

    public function destroy(PurchaseHistory $purchaseHistory)
    {
        // Eliminar el historial de compra de la base de datos
        $purchaseHistory->delete();

        return response()->json(['message' => 'Historial de compra eliminado exitosamente']);
    }
}
