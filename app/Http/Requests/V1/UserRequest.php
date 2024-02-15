<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'nullable|string|max:255', // Permitir valores nulos
            'password' => 'required|string|min:8', // Por ejemplo, requerir una contraseña de al menos 8 caracteres
        ];
    }
}
