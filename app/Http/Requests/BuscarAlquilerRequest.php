<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuscarAlquilerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
       //    'buscarpor' => 'required|min:8|max:8',
            'busquedaPorNombre' => ['required']
        ];
    }

    public function messages() {
        return [
            'busquedaPorNombre.required' => 'Este campo debe estar completo.',
        ];
    }
}
