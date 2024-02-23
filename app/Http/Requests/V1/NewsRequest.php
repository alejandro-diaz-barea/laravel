<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Solo permite realizar la petición si el usuario está autenticado
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Reglas de validación para los campos de la noticia
        return [
            'title' => 'required|max:70',
            'image' => 'required|image|max:1024',
            'description' => 'required|max:2000',
        ];
    }
}
