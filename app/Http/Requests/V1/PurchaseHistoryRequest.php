<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseHistoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Aquí puedes definir la lógica de autorización, por ejemplo, verificar si el usuario actual tiene permiso para realizar la acción
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id', // Requerir que el ID de usuario exista en la tabla users
            'fecha' => 'required|date', // Requerir que la fecha sea un formato de fecha válido
            'carrito_id' => 'required|exists:carritos,id', // Requerir que el ID del carrito exista en la tabla carritos
            'precio' => 'required|numeric|min:0', // Requerir que el precio sea un número y no sea negativo
            'cantidad' => 'required|integer|min:1', // Requerir que la cantidad sea un número entero positivo
        ];
    }
}
