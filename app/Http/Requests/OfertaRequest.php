<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfertaRequest extends FormRequest
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
            'nombre_vacante' => ['required', 'string', 'max:50'],
            'descripcion_vacante' => ['required', 'string', 'max:250'],
            'nombre_empresa' => ['required', 'string', 'max:100'],
            'direccion' => ['required', 'string', 'max:50'],
            'salario' => ['required', 'numeric', 'min:0'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_fin' => ['required', 'date', 'after_or_equal:start_date'],
            'meses_experiencia' => ['required', 'integer', 'min:0'],
            'requisitos' => ['required', 'string', 'max:500'],
            'id_tipos_contrato' => ['required', 'exists:contract_types,id'],
        ];
    }
}
