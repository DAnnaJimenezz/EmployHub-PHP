<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OcupacionRequest extends FormRequest
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
            'nombre_ocupacion' => ['required', 'string', 'max:100'],
            'descripcion_ocupacion' => ['required', 'string', 'max:500'],
            'id_cargo' => ['required', 'exists:posts,id'],
        ];
    }
}
