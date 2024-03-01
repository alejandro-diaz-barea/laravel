<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\PurchaseHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseHistoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
            'comic_name' => 'required|string', // Nuevo campo para el nombre del cómic
            'carrito_id' => 'required|exists:carritos,id',
        ]);

        $purchaseHistory = new PurchaseHistory();
        $purchaseHistory->fecha = $request->input('fecha');
        $purchaseHistory->precio = $request->input('precio');
        $purchaseHistory->cantidad = $request->input('cantidad');
        $purchaseHistory->comic_name = $request->input('comic_name'); // Asignar el nombre del cómic
        $purchaseHistory->carrito_id = $request->input('carrito_id');
        $purchaseHistory->user_id = auth()->id(); // Asignar el ID del usuario autenticado
        $purchaseHistory->save();

        return response()->json(['message' => 'Historial de compra creado exitosamente', 'purchaseHistory' => $purchaseHistory]);
    }

    public function index()
    {
        $histories = PurchaseHistory::where('user_id', auth()->id())->get();

        return response()->json(['purchaseHistories' => $histories]);
    }
}