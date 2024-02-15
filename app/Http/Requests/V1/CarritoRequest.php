<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class CarritoRequest extends FormRequest
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
            'completed' => 'boolean', // Permitir que el campo completed sea un booleano
        ];
    }
}
