<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabilidadRequest extends FormRequest
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
            'nombre_habilidad' => ['required', 'string', 'max:100'],
            'descripcion_habilidad' => ['required', 'string', 'max:350'],
            'id_ocupaciones' => ['required', 'exists:occupations,id'],
            'nombre_ocupacion' => ['required', 'exists:occupations,id'],
        ];
    }
}
