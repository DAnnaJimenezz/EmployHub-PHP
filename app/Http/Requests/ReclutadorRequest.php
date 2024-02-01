<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReclutadorRequest extends FormRequest
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
            'numero_documento' => ['required', 'string', 'max:15'],
            'tipo_documento' => ['required', 'in:TI,CC,NIT,PASSPORT,CC_FOREIGNER'],
            'nombre' => ['required', 'string', 'max:25'],
            'telefono' => ['required', 'string', 'max:15'],
            'correo_electronico' => ['required', 'email', 'max:30'],
            'id_tipo_usuario' => ['required', 'exists:user_types,id'],
        ];
    }
}
