<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
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
            'rating' => 'required|integer|min:1|max:5', // Requerir que la calificación sea un número entero entre 1 y 5
            'comic_id' => 'required|exists:comics,id', // Requerir que el ID del cómic exista en la tabla comics
        ];
    }
}
