<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuscarFechaRequest extends FormRequest
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
            'busquedaPorFecha' => ['required']
        ];
    }

    public function messages() {
        return [
            'busquedaPorFecha.required' => 'Este campo debe estar completo.',
        ];
    }
}
