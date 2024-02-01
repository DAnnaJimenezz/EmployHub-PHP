<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacanteRequest extends FormRequest
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
            'numero_aplicantes_vacante' => ['required', 'integer', 'min:1'],
            'id_ofertas' => ['required', 'exists:offers,id'],
            'id_localidades' => ['required', 'exists:localities,id'],
            'id_tipos_contrato' => ['required', 'exists:contract_types,id'],
            'id_ponderacion' => ['required', 'exists:weighings,id'],
        ];
    }
}
