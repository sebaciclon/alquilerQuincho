<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlquilerRequest extends FormRequest
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
            'fechaAlquiler' => 'required|date',
            'nombre'=>'required|string|max:50',
            'telefono'=>'required|string|max:15',
            'email'=>'required|email|max:50',
            'evento'=> 'string|nullable|max:20', 
            'pileta'=>'required|string|max:15',
            'observaciones'=> 'string|nullable|max:100', 
            'valorAlquiler' => 'required|numeric',
            'seña' => 'required|numeric',
            //'resto' => 'numeric',
            'socio_id' => 'required',
            'dia_id' => 'required',
            'horario_id' => 'required',
            'hora_desde_id' => 'required',
            'hora_hasta_id' => 'required',
        ];
    }

    public function messages() {
        return [
            'fechaAlquiler.required' => 'El campo FECHA DE ALQUILER no puede estar vacio.',
            'nombre.required' => 'El campo NOMBRE no puede estar vacio.',
            'nombre.max' => 'El campo NOMBRE tiene un maximo de 50 caracteres.',
            'telefono.required' => 'El campo TELEFONO no puede estar vacio.',
            'telefono.max' => 'El campo TELEFONO tiene un maximo de 15 caracteres.',
            'email.required' => 'El campo EMAIL no puede estar vacio.',
            'email.max' => 'El campo EMAIL tiene un maximo de 50 caracteres.',
            'email.email' => 'El campo EMAIL tiene que tener un arroba.',
            'pileta.required' => 'El campo PILETA no puede estar vacio.',
            'pileta.max' => 'El campo PILETA tiene un maximo de 15 caracteres.',
            'observaciones.max' => 'El campo OBSERVACIONES tiene un maximo de 100 caracteres.',
            'valorAlquiler.required' => 'El campo VALOR DE ALQUILER no puede estar vacio.',
            'valorAlquiler.numeric' => 'El campo VALOR DE ALQUILER es de tipo mumérico.',
            'seña.required' => 'El campo SEÑA no puede estar vacio.',
            'seña.numeric' => 'El campo SEÑA es de tipo mumérico.',
            //'resto.numeric' => 'El campo RESTO es de tipo mumérico.',
            'socio_id.required' => 'Debe seleccionar si es socio o no.',
            'dia_id.required' => 'Debe seleccionar el dia del alquiler.',
            'horario_id.required' => 'Debe seleccionar el horario del alquiler.',
            'hora_desde_id.required' => 'Debe seleccionar desde que hora es el alquiler.',
            'hora_hasta_id.required' => 'Debe seleccionar hasta que hora es el alquiler.',
        ];
    }
}